<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objektif;
use App\Models\Biodata;
use Illuminate\View\View;

class ObjektifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('form_tambah_objektif', ['id' => $request->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Objektif::create([
            'biodata_id' => $request->inputbiodata,
            'kesadaran' => $request->inputkesadaran,
            'tekanan_darah' => $request->inputtekanan_darah,
            'suhu' => $request->inputsuhu,
            'nadi' => $request->inputnadi,
            'respirasi' => $request->inputrespirasi,
            'bb' => $request->inputbb,
            'tb' => $request->inputtb,
            'kepala' => $request->inputkepala,
            'rambut' => $request->inputrambut,
            'muka' => $request->inputmuka,
            'mata' => $request->inputmata,
            'hidung' => $request->inputhidung,
            'telinga' => $request->inputtelinga,
            'mulut' => $request->inputmulut,
            'leher' => $request->inputleher,
            'dada' => $request->inputdada,
            'abdomen' => $request->inputabdomen,
            'leopold1' => $request->inputleopold1,
            'leopold2' => $request->inputleopold2,
            'leopold3' => $request->inputleopold3,
            'leopold4' => $request->inputleopold4,
            'genetalia' => $request->inputgenetalia,
            'eks_atas' => $request->inputeks_atas,
            'eks_bawah' => $request->inputeks_bawah,
        ]);

        return redirect()->route('biodata.index');
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
}
