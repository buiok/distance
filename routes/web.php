<?php

use App\Http\Controllers\CalculateDistance;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dist');
})->name('main');

Route::post('/', [CalculateDistance::class, 'Calculate'])->name('calc');