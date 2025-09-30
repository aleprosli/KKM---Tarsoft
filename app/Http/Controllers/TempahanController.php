<?php

namespace App\Http\Controllers;

use App\Models\Tempahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TempahanController extends Controller
{
    public function create()
    {
        return view('tempahan.create');
    }

    public function store(Request $request)
    {
        //simpan image dalam file
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('public/images', $namaGambar);
        }

        Tempahan::create([
            'nama_penuh' => $request->nama_penuh,
            'bilik_makmal' => $request->bilik_makmal,
            'tarikh' => $request->tarikh,
            'image' => 'public/images/' . $namaGambar
        ]);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $tempahan = Tempahan::find($id);
        return view('tempahan.edit', compact('tempahan'));
    }

    public function update(Request $request, $id)
    {
        $tempahan = Tempahan::find($id);

        //simpan image dalam file
        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('public/images', $namaGambar);
        }

        $tempahan->update([
            'nama_penuh' => $request->nama_penuh,
            'bilik_makmal' => $request->bilik_makmal,
            'tarikh' => $request->tarikh,
            'image' => $request->hasFile('image') ? 'public/images/' . $namaGambar : $tempahan->image
        ]);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $tempahan = Tempahan::find($id);
        $tempahan->delete();
        return redirect()->route('home');
    }
}
