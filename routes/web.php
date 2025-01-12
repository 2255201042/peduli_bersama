<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KampanyeControler;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DonaturController;

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

Route::get('/',[PublicController::class, 'index'])->name("public.home");
Route::get('/donasi', [PublicController::class, 'donasi'])->name("donasi");
Route::get('/search', [PublicController::class, 'search'])->name('search');

Route::get('/dtl_donatur', function () {
    return view('public.dtladmin');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::Get('/penggalangandana', function() {
        return view('admin.penggalangandana');
    })->name('admin.penggalangandana');

    Route::Get('/pengguna', [DashboardAdminController::class, 'dataPengguna'])->name('admin.pengguna');
    
    Route::Get('/laporan', function() {
        return view('admin.laporan');
    })->name('admin.laporan');
    
    Route::Get('/dashadmin', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashadmin');

    Route::Get('/kelolakampanyeaktif', function() {
        return view('admin.kelolakampanyeaktif');
    })->name('admin.kelolakampanyeaktif'); 

    Route::Get('/riwayatdonasi', function() {
        return view('admin.riwayatdonasi');
    })->name('admin.riwayatdonasi'); 

    Route::Get('/kampanyeselesai', function() {
        return view('admin.kampanyeselesai');
    })->name('admin.kampanyeselesai');

    Route::Get('/kampanye', function() {
        return view('admin.form_kampanye');
    })->name('admin.form_kampanye');

    Route::Get('/riwayat_donasi', function() {
        return view('admin.donatur.riwayatdonasi');
    })->name('admin.riwayat_donasi');

    Route::Get('/pencairan_dana', function() {
        return view('admin.pencairan_dana');
    })->name('admin.pencairan_dana');

    Route::Get('/laporankeuangan', function() {
        return view('admin.laporankeuangan');
    })->name('admin.laporankeuangan');

    Route::Get('/laporanpengguna', function() {
        return view('admin.laporanpengguna');
    })->name('admin.laporanpengguna');

    Route::Get('/laporanaktivitas', function() {
        return view('admin.laporanaktivitas');
    })->name('admin.laporanaktivitas');


    // Kampanye
    Route::Get('/dashboard/kampanye', [KampanyeControler::class, 'index'])->name('admin.kampanye');
    Route::Get('/kampanye', [KampanyeControler::class, 'list'])->name('kampanye.list');
    Route::Get('/kampanye/create', [KampanyeControler::class, 'create'])->name('kampanye.create');
    Route::Get('/kampanye/{id}', [KampanyeControler::class, 'show'])->name('kampanye.show');
    Route::Post('/kampanye/store', [KampanyeControler::class, 'store'])->name('kampanye.store');
    Route::get('/pencairan/create', [KampanyeControler::class, 'createPencairanDana'])->name('pencairan.create');
    Route::post('/pencairan/store', [KampanyeControler::class, 'storePencairanDana'])->name('pencairan.store');


    // Donatur
    Route::Get('/donatur', [DonaturController::class, 'index'])->name('admin.donatur');
    

    // Admin
    Route::Get('dashboard/admin', [DashboardAdminController::class, 'dashboardAdmin'])->name('admin.dashboard');
    Route::Get('detailkampanye/{id}', [DashboardAdminController::class, 'detailkampanye'])->name('admin.detailkampanye');
    Route::Get('admin/pengalang', [DashboardAdminController::class, 'pengalang'])->name('admin.pengalang');
    Route::Get('admin/pengguna', [DashboardAdminController::class, 'penguna'])->name('admin.pengguna');
    Route::Get('admin/kelola', [DashboardAdminController::class, 'kelolaFull'])->name('admin.kelola');
    Route::put('admin/valid/{id}', [DashboardAdminController::class, 'approveCampaign'])->name('admin.valid');
    // Route::Get('kampanye/edit/{id}', [KampanyeControler::class, 'edit'])->name('kampanye.edit');
    // Route::Patch('kampanye/update/{id}', [KampanyeControler::class, 'update'])->name('kampanye.update');
    // Route::Delete('kampanye/delete/{id}', [KampanyeControler::class, 'destroy'])->name('kampanye.delete');

    

});

require __DIR__.'/auth.php';
