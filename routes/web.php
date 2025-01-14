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

Route::get('/dtl_donatur/{id}', [PublicController::class, 'detail'])->name('dtl_donatur');

Route::get('/pembayaran', function () {
    return view('public.pembayaran');
});

Route::get('/success-transaction/{id}', [PublicController::class, 'successTransaction'])->name('success.transaction');
// Route::get('/mawdono/{id}', [PublicController::class, 'generateQRCode'])->name('bayar_donasi');

// Route::post('/bayardonasi', [PublicController::class, 'donasiStore'])->name('bayar_donasi.post');

Route::get('/dtladmin', function () {
    return view('public.dtladmin');
});


// Route to display the donation form
Route::get('/donasi/{id}', [PublicController::class, 'showDonationForm'])->name('donasi.form');

// Route to handle donation form submission
Route::post('/donasi', [PublicController::class, 'donasiStore'])->name('bayar_donasi.post');

// Route to generate and display the QR code for validation
Route::get('/donasi/qrcode/{id}', [PublicController::class, 'generateQRCode'])->name('generate.qr');



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
    Route::get('admin/kelola', [DashboardAdminController::class, 'kelolaFull'])->name('admin.kelola');
    Route::post('admin/valid/{id}', [DashboardAdminController::class, 'approveCampaign'])->name('admin.valid');
});

require __DIR__.'/auth.php';
