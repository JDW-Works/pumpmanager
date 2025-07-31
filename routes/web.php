<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UserDataController;

Route::get('/userdata', [UserDataController::class, 'index'])->name('userdata.index');
