<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\checkup;


class CheckupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $checkup = Biodata::findOrFail($request)->checkup;

        dd($checkup);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('form_tambah_checkup', ['id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Checkup::create([
            'biodata_id' => $request->inputbiodata,
            'tgl' => $request->inputtgl,
            'keluhan' => $request->inputkeluhan,
            'tekanan' => $request->inputtekanan,
            'berat' => $request->inputberat,
            'tinggi' => $request->inputtinggi,
            'letak' => $request->inputletak,
            'djj' => $request->inputdjj,
            'kaki' => $request->inputkaki,
            'hasillab' => $request->inputlab,
            'tindakan' => $request->inputtindakan,
            'nasihat' => $request->inputnasihat,
            'keterangan' => $request->inputketerangan,
            'jadwal_kembali' => $request->inputjadwal,
        ]);

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $checkup = Biodata::findOrFail($id)->checkup;
        // dd($checkup);
        return view('data_checkup', compact('checkup'));
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
}
