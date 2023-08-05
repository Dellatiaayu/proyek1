<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DataOt;

class DataOtController extends Controller
{
    public function index(Request $request)
    {
        if ($request){
            $biodatas = DataOt::where('nik', 'like', '%'. $request->cari . '%')->orWhere('nama', 'like', '%' . $request->cari . '%')->get();
        }else{
            $biodatas = DataOt::latest()->paginate(20);
        }

        return view('biodata.index', compact('biodatas', 'request'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
        ]);

        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        DataOt::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'gambar' => $nama_file,

        ]);

        return redirect()->route('dataot.index')->with('success', 'data berhasil Disimpan');
    }

    public function edit(DataOt $dataot)
    {

        return view('biodata.edit', compact('dataot'));
    }

    public function update(Request $request, DataOt $dataot)
    {
        //validate form
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'no_telp' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $nama_file);

            //update post with new image
            $dataot->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'no_telp' => $request->no_telp,
                'gambar' => $nama_file,
            ]);
        } else {
            //update post without image
            $dataot->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'no_telp' => $request->no_telp,
            ]);
        }
        return redirect()->route('dataot.index')->with('success', 'biodata berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $DataOt = DataOt::where('id', $id)->first();
        $DataOt->delete();
        return redirect()->route('dataot.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function showLaporan($id)
    {
        $dataot = DataOt::with('laporan')->find($id);
        return view('laporan.index', compact('dataot'));
    }
}
