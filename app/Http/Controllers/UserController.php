<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // semak jika user bukan admin
        if (Auth::user()->is_admin == false) {
            return redirect()->route('home')->with('error', 'Anda tidak mempunyai akses ke halaman ini');
        }

        return view('user.index');
    }
}
