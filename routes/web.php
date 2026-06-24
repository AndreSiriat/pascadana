<?php

use Illuminate\Support\Facades\Route;
use App\Models\Management;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\MaritimPolicyController;
use App\Http\Controllers\Admin\KritikSaranController as AdminKritikSaranController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\CertificateStatController;
use App\Http\Controllers\Admin\CompanyDocumentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| SEO
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', [SitemapController::class, 'index'])
    ->name('sitemap');

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [BerandaController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BerandaController::class, 'berita'])
    ->name('berita');

Route::get('/berita/{slug}', [BerandaController::class, 'detail'])
    ->name('berita.detail');

/*
|--------------------------------------------------------------------------
| MARITIM POLICY / PERATURAN
|--------------------------------------------------------------------------
*/

Route::get('/maritim-policy', [BerandaController::class, 'maritimPolicy'])
    ->name('maritim-policy');

/*
|--------------------------------------------------------------------------
| TENTANG KAMI LAMA
|--------------------------------------------------------------------------
*/

Route::get('/tentang-kami', function () {

    $dewan = Management::where('group', 'dewan')
        ->where('status', 'active')
        ->orderBy('urutan')
        ->get();

    $manajemen = Management::where('group', 'manajemen')
        ->where('status', 'active')
        ->orderBy('urutan')
        ->get();

    $nahkoda = Management::where('group', 'nahkoda')
        ->where('status', 'active')
        ->orderBy('urutan')
        ->get();

    return view(
        'pages.tentang-kami',
        compact(
            'dewan',
            'manajemen',
            'nahkoda'
        )
    );

})->name('tentang-kami');

Route::view('/visi-misi', 'pages.visi-misi')
    ->name('visi-misi');

Route::view('/transformasi', 'pages.transformasi')
    ->name('transformasi');

/*
|--------------------------------------------------------------------------
| TENTANG KAMI BARU
|--------------------------------------------------------------------------
*/

Route::prefix('tentang')->name('tentang.')->group(function () {

    Route::get('/profil-perusahaan', function () {

        $certificateStats = \App\Models\CertificateStat::orderBy('urutan')
            ->get();

        $companyDocuments = \App\Models\CompanyDocument::where('status', 'active')
            ->orderBy('urutan')
            ->get();

        return view(
            'pages.tentang.profil',
            compact(
                'certificateStats',
                'companyDocuments'
            )
        );

    })->name('profil');

    Route::view('/visi-misi', 'pages.tentang.visi-misi')
        ->name('visi-misi');

    Route::get('/dewan-komisaris-direksi', function () {

        $dewan = \App\Models\Management::where('group', 'dewan')
            ->where('status', 'active')
            ->orderBy('id', 'asc')
            ->get();

        $manajemen = \App\Models\Management::where('group', 'manajemen')
            ->where('status', 'active')
            ->orderBy('id', 'asc')
            ->get();

        $nahkoda = \App\Models\Management::where('group', 'nahkoda')
            ->where('status', 'active')
            ->orderBy('id', 'asc')
            ->get();

        return view(
            'pages.tentang.dewan-direksi',
            compact(
                'dewan',
                'manajemen',
                'nahkoda'
            )
        );

    })->name('dewan-direksi');

    Route::view('/struktur-organisasi', 'pages.tentang.struktur-organisasi')
        ->name('struktur-organisasi');

    Route::view('/sejarah-kami', 'pages.tentang.sejarah')
        ->name('sejarah');

    Route::view('/transformasi', 'pages.tentang.transformasi')
        ->name('transformasi');

    Route::view('/falsafah-logo', 'pages.tentang.logo')
        ->name('logo');
});

/*
|--------------------------------------------------------------------------
| MENDUKUNG BISNIS
|--------------------------------------------------------------------------
*/

Route::view('/alma', 'pages.alma')
    ->name('alma');

Route::view('/keselamatan', 'pages.keselamatan')
    ->name('keselamatan');

Route::view('/kelaikan', 'pages.kelaikan')
    ->name('kelaikan');

Route::view('/manajemen', 'pages.manajemen')
    ->name('manajemen');

/*
|--------------------------------------------------------------------------
| FLEET / ARMADA
|--------------------------------------------------------------------------
*/

Route::view('/kapal', 'pages.kapal')
    ->name('kapal');

Route::view('/kmp-tunu', 'pages.kmp-tunu')
    ->name('kmp-tunu');

Route::view('/kmp-tawes', 'pages.kmp-tawes')
    ->name('kmp-tawes');

Route::view('/fasilitas', 'pages.fasilitas')
    ->name('fasilitas');

Route::view('/standar-keselamatan', 'pages.standar-keselamatan')
    ->name('standar-keselamatan');

Route::view('/standar-keamanan', 'pages.standar-keselamatan')
    ->name('standar-keamanan');

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
        | PROFILE / PASSWORD
        |--------------------------------------------------------------------------
        */

        Route::get('/password', [ProfileController::class, 'password'])
            ->name('password');

        Route::post('/password', [ProfileController::class, 'updatePassword'])
            ->name('password.update');

        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        Route::resource('users', UserController::class)
            ->except(['show']);

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
        | MANAGEMENT
        |--------------------------------------------------------------------------
        */

        Route::resource('management', ManagementController::class);

        /*
        |--------------------------------------------------------------------------
        | KRITIK & SARAN CMS
        |--------------------------------------------------------------------------
        */

        Route::get('/kritik-saran', [AdminKritikSaranController::class, 'index'])
            ->name('kritik-saran.index');

        /*
        |--------------------------------------------------------------------------
        | CERTIFICATE STATS
        |--------------------------------------------------------------------------
        */

        Route::resource('certificate-stats', CertificateStatController::class);

        /*
        |--------------------------------------------------------------------------
        | COMPANY DOCUMENTS
        |--------------------------------------------------------------------------
        */

        Route::resource('company-documents', CompanyDocumentController::class);
    });