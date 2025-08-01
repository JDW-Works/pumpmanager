<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\PumpdataController;

Route::get('/userdata', [UserDataController::class, 'index'])->name('userdata.index');
Route::get('/userdata/create', [UserDataController::class, 'create'])->name('userdata.create');
Route::post('/userdata', [UserDataController::class, 'store'])->name('userdata.store');
Route::get('/pumpdata', [PumpdataController::class, 'index'])->name('pumpdata.index');
