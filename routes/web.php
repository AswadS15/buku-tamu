<?php

use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\Ulasan;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('pengunjung', PengunjungController::class);
Route::resource('pengunjung/ulasan', UlasanController::class);
