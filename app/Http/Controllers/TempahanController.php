<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempahanController extends Controller
{
    public function create()
    {
        return view('tempahan.create');
    }
}
