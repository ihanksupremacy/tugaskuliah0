<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tampil/{id?}', function ($id=1) {
    echo "Nilai Parameter Adalah ".$id;
    });

Route::get('/edit/{nama}', function ($nama) {
        echo "Nilai Parameter Adalah ".$nama;
        })->where('nama','[A-Za-z]+');

        
Route::resource('/produk', pelangganController::class);
Route::get('/pelanggan', [produkController::class,'index']);


