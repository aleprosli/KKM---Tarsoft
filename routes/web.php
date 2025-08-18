<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tempahan/create', [App\Http\Controllers\TempahanController::class, 'create'])->name('tempahan.create');
Route::post('/tempahan/store', [App\Http\Controllers\TempahanController::class, 'store'])->name('tempahan.store');
