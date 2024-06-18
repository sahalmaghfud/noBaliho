<?php

namespace App\Http\Controllers;

use App\Models\gubernur;
use App\models\provinsi;

use Illuminate\Http\Request;

class provinsiController extends Controller
{
    public function index()
    {
        $provinsis = provinsi::all();
        return view('index', compact('provinsis'));
    }
}
