<?php

namespace App\Http\Controllers;

use App\Models\walikota;
use App\Models\provinsi;
use App\Models\kabupaten;
use Illuminate\Http\Request;


class walikotaController extends Controller
{
    public function detail($id)
    {
        $paslon = walikota::find($id);
        return view('detail', ['paslon' => $paslon]);
    }
    public function showpr(provinsi $provinsi)
    {
        $kabupatens = $provinsi->kabupatens;
        return view('walikota', ['kabupatens' => $kabupatens]);
    }
}
