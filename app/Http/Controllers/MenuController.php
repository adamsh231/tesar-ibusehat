<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\View\View;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function pasien()
    {
        //
        // $biodata = Biodata::get();
        return view('pasien');
    }
}
