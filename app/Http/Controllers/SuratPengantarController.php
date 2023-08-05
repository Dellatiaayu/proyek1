<?php

namespace App\Http\Controllers;

use App\Models\Pendataan;
use App\Models\SuratPengantar;
use Illuminate\Http\Request;

class SuratPengantarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendataan = Pendataan::all();
        return view('suratpengantar.index', compact('pendataan'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

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

    public function filtersurat(Request $request)
    {
        $cari = $request->tgl_dtg;
        $data = Pendataan::where('tgl_dtg', $cari)->paginate(20);
        return view('suratpengantar.filter', compact('data', 'cari'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function print(Request $request)
    {
        // dd($request);
        $cetak = $request->tgl_dtg;

        $data = Pendataan::where('tgl_dtg', $cetak)->get();
        return view('suratpengantar.print',compact('data', 'cetak'))->with('i');
    }
}
