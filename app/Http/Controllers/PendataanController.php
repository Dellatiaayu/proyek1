<?php

namespace App\Http\Controllers;

use App\Models\DataOt;
use App\Models\Laporan;
use App\Models\Pendataan;
use Illuminate\Http\Request;

class PendataanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendataans = Pendataan::with('dataot')->paginate(10);
        $data = DataOt::all();

        return view('pendataan.index', compact('pendataans'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cari = $request->nik;
        $data = DataOt::where('nik', $cari)->first();
        // dd($data);
        return view('pendataan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'data_ots' => 'required',
            'jenis' => 'required',
            'tgl_dtg' => 'required',
            'kiriman' => 'required',
            'alasan' => 'required',
            'status' => 'required',
        ]);

        $pendataan_id = rand(1, 99999);
        $dataots = $request->data_ots;

        $pendataan = Pendataan::create([
            'dataots_id' => $dataots,
            'jenis' => $request->jenis,
            'tgl_dtg' => $request->tgl_dtg,
            'kiriman' => $request->kiriman,
            'alasan' => $request->alasan,
            'status' => $request->status,
            'pendataan_id' => $pendataan_id,
        ]);

        $laporan = Laporan::create([
            'dataots_id' => $dataots,
            'pendataan_id' => $pendataan_id,
            'tgl_dtg' => $request->tgl_dtg,
        ]);

        // dd($laporan);

        // Associate the laporan with the pendataan
        $pendataan->laporan()->save($laporan);

        return redirect()->route('pendataan.index')->with('success', 'Data berhasil Disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendataan $pendataan)
    {

        return view('pendataan.edit', compact('pendataan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendataan $pendataan, Laporan $laporan)
    {
        $request->validate([
            'dataots_id' => 'required',
            'jenis' => 'required',
            'tgl_dtg' => 'required',
            'kiriman' => 'required',
            'alasan' => 'required',
            'status' => 'required',
        ]);

        $pendataan->update([
            'dataots_id' => $request->dataots_id,
            'jenis' => $request->jenis,
            'tgl_dtg' => $request->tgl_dtg,
            'kiriman' => $request->kiriman,
            'alasan' => $request->alasan,
            'status' => $request->status,
        ]);

        // dd($pendataan);

        return redirect()->route('pendataan.index')->with('success', 'biodata berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pendataan = Pendataan::where('id', $id)->first();
        $pendataan->delete();
        return redirect()->route('pendataan.index')->with('success', 'Data Berhasil Dihapus');
    }
    public function carinik()
    {
        return view('pendataan.cariPendataan');
    }
}
