<?php

use App\Models\Pesan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PengunjungController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });
Route::resource('home', PengunjungController::class);

Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('pengunjung', PelayananController::class);
Route::resource('divisi', DivisiController::class);
Route::resource('pesan', PesanController::class);
// Route::get('pengunjung/pelayanan', [PengunjungController::class, 'Pelayanan']);

require __DIR__ . '/auth.php';