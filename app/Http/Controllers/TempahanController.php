<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempahan;

class TempahanController extends Controller
{
    public function create()
    {
        return view('tempahan.create');
    }

    public function store(Request $request)
    {
        Tempahan::create([
            'nama_penuh' => $request->nama_penuh,
            'bilik_makmal' => $request->bilik_makmal,
            'tarikh' => $request->tarikh
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
        $tempahan->update([
            'nama_penuh' => $request->nama_penuh,
            'bilik_makmal' => $request->bilik_makmal,
            'tarikh' => $request->tarikh
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
