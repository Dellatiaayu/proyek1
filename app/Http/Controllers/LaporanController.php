<?php

namespace App\Http\Controllers;

use App\Models\DataOt;
use App\Models\Laporan;
use App\Models\Pendataan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request);
        $bulan = $request->bulan;
        $status = $request->status;

        $laporans = Pendataan::query();

        // Filter berdasarkan bulan
        if ($bulan) {
            $tanggalAwal = Carbon::createFromFormat('Y-m', date('Y') . '-' . $bulan)->startOfMonth();
            $laporans->whereDate('tgl_dtg', '>=', $tanggalAwal)->whereDate('tgl_dtg', '<=', $tanggalAwal->endOfMonth());
        }

        // Filter berdasarkan status
        if ($status) {
            $laporans->where('status', $status);
        }

        $laporans->orderBy('tgl_dtg', 'asc');

        $laporans = $laporans->get();

        // Kirim data laporans ke halaman view
        return view('laporan.index', compact('laporans','status', 'bulan'))->with('i', (request()->input('page', 1) - 1) * 20);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function printlaporan(){
    //     $laporans = Laporan::latest()->paginate(20);
    //     return view('laporan.printlaporan',compact('laporans'))->with('i');
    // }


public function printlaporan(Request $request, Pendataan $pendataan)
{
    $bulan = $request->bulan;
    $status = $request->status;
    $req = $request;

    $laporans = $pendataan->query();

    // Filter berdasarkan bulan
    if ($bulan) {
        $tanggalAwal = Carbon::createFromFormat('Y-m', date('Y') . '-' . $bulan)->startOfMonth();
        $laporans->whereDate('tgl_dtg', '>=', $tanggalAwal)->whereDate('tgl_dtg', '<=', $tanggalAwal->endOfMonth());
    }

    // Filter berdasarkan status
    if ($status) {
        $laporans->where('status', $status);
    }

    // Mengurutkan data berdasarkan tanggal terkecil (tgl_dtg)
    $laporans->orderBy('tgl_dtg', 'asc');

    $laporans = $laporans->get();

    return view('laporan.printLaporan', compact('laporans', 'req'))->with('i', (request()->input('page', 1) - 1) * 20);
}

}
