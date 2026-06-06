<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\MaritimPolicyController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\Admin\KritikSaranController as AdminKritikSaranController;
use App\Http\Controllers\Admin\AuthController;


// 1. Ubah Route Detail KMP Tunu (Untuk Card 1 & 2)
Route::get('/kapal/kmp-tunu', function () {
    // Diarahkan langsung ke file kmp-tunu.blade.php yang ada di folder pages
    return view('pages.kmp-tunu'); 
})->name('detail-kmp-tunu');

// 2. Ubah Route Standar Keamanan (Untuk Card 4)
Route::get('/standar-keamanan', function () {
    // Diarahkan ke file standar-keselamatan.blade.php yang ada di folder pages Anda
    return view('pages.standar-keselamatan'); 
})->name('standar-keamanan');

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [BerandaController::class, 'index'])->name('home');

// routes/web.php
Route::get('/kapal', function () {
    return view('pages.kapal'); // Mengarah ke pages/kapal.blade.php
})->name('kapal');

/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BerandaController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [BerandaController::class, 'detail'])->name('berita.detail');

/*
|--------------------------------------------------------------------------
| MARITIM POLICY / PERATURAN
|--------------------------------------------------------------------------
*/

Route::get('/maritim-policy', [BerandaController::class, 'maritimPolicy'])
    ->name('maritim-policy');

/*
|--------------------------------------------------------------------------
| TENTANG KAMI
|--------------------------------------------------------------------------
*/

Route::view('/tentang-kami', 'pages.tentang-kami')->name('tentang-kami');
Route::view('/visi-misi', 'pages.visi-misi')->name('visi-misi');

/*
|--------------------------------------------------------------------------
| MENDUKUNG BISNIS
|--------------------------------------------------------------------------
*/

Route::view('/alma', 'pages.alma')->name('alma');
Route::view('/keselamatan', 'pages.keselamatan')->name('keselamatan');
Route::view('/kelaikan', 'pages.kelaikan')->name('kelaikan');
Route::view('/manajemen', 'pages.manajemen')->name('manajemen');

/*
|--------------------------------------------------------------------------
| FLEET
|--------------------------------------------------------------------------
*/

Route::view('/kapal', 'pages.kapal')->name('kapal');
Route::view('/kmp-tunu', 'pages.kmp-tunu')->name('kmp-tunu');
Route::view('/kmp-tawes', 'pages.kmp-tawes')->name('kmp-tawes');
Route::view('/fasilitas', 'pages.fasilitas')->name('fasilitas');
Route::view('/standar-keselamatan', 'pages.standar-keselamatan')->name('standar-keselamatan');

 /*
    |--------------------------------------------------------------------------
    | KRITIK & SARAN
    |--------------------------------------------------------------------------
    */

    Route::get('/kritik-saran', [KritikSaranController::class, 'index'])
        ->name('kritik-saran');

    Route::post('/kritik-saran/store', [KritikSaranController::class, 'store'])
        ->name('kritik-saran.store');

/*
|--------------------------------------------------------------------------
| ADMIN CMS
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');

Route::get('/admin', function () {
    return redirect('/admin/berita');
})->name('admin.dashboard');

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | BERITA
        |--------------------------------------------------------------------------
        */
        Route::resource('berita', BeritaController::class)
            ->parameters([
                'berita' => 'berita',
            ]);

        /*
        |--------------------------------------------------------------------------
        | MARITIM POLICY / PERATURAN
        |--------------------------------------------------------------------------
        */
        Route::resource('maritim-policy', MaritimPolicyController::class);

        /*
        |--------------------------------------------------------------------------
        | KRITIK & SARAN CMS
        |--------------------------------------------------------------------------
        */
        Route::get('/kritik-saran', [AdminKritikSaranController::class, 'index'])
            ->name('kritik-saran.index');

    });

