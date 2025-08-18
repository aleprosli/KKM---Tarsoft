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
}
