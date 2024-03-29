<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ProjekController;

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
    return view('beranda.index');
});

Route::get('/welcome_admin', function () {
    return view('admin.welcome_admin');
});

Route::get('projek_admin', [App\Http\Controllers\ProjekController::class, 'index'])->name('projek_admin');
Route::get('projek_beranda', [App\Http\Controllers\BerandaController::class, 'badmin'])->name('projek_beranda');

Route::resource('tentang', App\Http\Controllers\TentangController::class);
Route::resource('analisa', App\Http\Controllers\AnalisaController::class);
Route::resource('beranda', App\Http\Controllers\BerandaController::class);
Route::resource('layanan', App\Http\Controllers\LayananController::class);
Route::resource('testimoni', App\Http\Controllers\TestimoniController::class);
Route::resource('projek', App\Http\Controllers\ProjekController::class);

// //projek
// Route::get('create_projek', [App\Http\Controllers\ProjekController::class, 'create'])->name('create_projek');
