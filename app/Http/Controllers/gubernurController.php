<?php

namespace App\Http\Controllers;

use App\Models\gubernur;
use App\Models\provinsi;
use Illuminate\Http\Request;

class gubernurController extends Controller
{
    public function index()
    {
        $gubernurs = gubernur::all();
        return view('gubernur', compact('gubernurs'));
    }
    public function detail($id)
    {
        $paslon = gubernur::find($id);
        return view('detail', ['paslon' => $paslon]);
    }
    public function search(Request $request)
    {
        $provinsiId = $request->input('provinsi_id');
        return redirect()->route('gubernur.show', ['id' => $provinsiId]);
    }
    public function showpr(provinsi $provinsi)
    {
        return view('gubernur', ['gubernurs' => $provinsi->gubernurs]);
    }

    public function edit($id)
    {
        $gubernur = gubernur::findOrFail($id);
        return view('edit', compact('gubernur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'profil' => 'nullable|string',
            'program' => 'nullable|string',
            'facebook' => 'nullable|string|max:45',
            'instagram' => 'nullable|string|max:45',
            'twitter' => 'nullable|string|max:45',
        ]);

        $gubernur = gubernur::findOrFail($id);
        $gubernur->update($request->only('profil', 'program', 'facebook', 'instagram', 'twitter'));

        return redirect()->route('gubernur.edit', $gubernur->id)->with('success', 'Data gubernur berhasil diperbarui.');
    }
}
