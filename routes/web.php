<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tempahan/create', [App\Http\Controllers\TempahanController::class, 'create'])->name('tempahan.create');
Route::post('/tempahan/store', [App\Http\Controllers\TempahanController::class, 'store'])->name('tempahan.store');
Route::get('/tempahan/edit/{id}', [App\Http\Controllers\TempahanController::class, 'edit'])->name('tempahan.edit');
Route::post('/tempahan/update/{id}', [App\Http\Controllers\TempahanController::class, 'update'])->name('tempahan.update');

Route::get('/tempahan/delete/{id}', [App\Http\Controllers\TempahanController::class, 'delete'])->name('tempahan.delete');
