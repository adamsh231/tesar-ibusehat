<?php

namespace App\Http\Controllers;

use App\Models\Subjektif;
use Illuminate\View\View;

use Illuminate\Http\Request;

class SubjektifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subjektif = Subjektif::get();
        return view('subjektif', compact('subjektif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form_tambah_subjektif');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Subjektif::create([
            'keluhan' => $request->inputkeluhan,
            'riwayat_penyakit' => $request->inputriwayat_penyakit,
            'riwayat_keluarga' => $request->inputriwayat_penyakit_keluarga,
            'menikah_ke' => $request->inputmenikah_ke,
            'usia_menikah' => $request->inputusia_menikah,
            'lama_menikah' => $request->inputlama_menikah,
            'HPHT' => $request->inputHPHT,
            'menarche' => $request->inputmenarche,
            'lama_haid' => $request->inputlama_haid,
            'siklus_haid' => $request->inputsiklus_haid,
            'warna' => $request->inputwarna,
            'flour_albus' => $request->inputflour_albus,
            'riwayat_kehamilan' => $request->inputriwayat_kehamilan,
            'riwayat_kb' => $request->inputriwayat_kb,
        ]);

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $subjektif = Subjektif::where('id', $id)->first();
        return view('data_subjektif', compact('subjektif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $subjektif = Subjektif::where('id', $id)->first();
        return view('form_ubah_subjektif', compact('subjektif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}