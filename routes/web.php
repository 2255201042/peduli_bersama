<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KampanyeControler;
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
    return view('public.home');
})->name("public.home");

Route::get('/donasi', [KampanyeControler::class, 'donatur'])->name("donasi");





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::Get('/penggalang', function() {
        return view('admin.penggalangandana');
    })->name('admin.penggalangandana');

    Route::Get('/pengguna', function() {
        return view('admin.pengguna');
    })->name('admin.pengguna');
    
    Route::Get('/laporan', function() {
        return view('admin.laporan');
    })->name('admin.laporan');
    
    Route::Get('/dashadmin', function() {
        return view('admin.dashadmin');
    })->name('admin.dashadmin');

    Route::Get('/kelolakampanyeaktif', function() {
        return view('admin.kelolakampanyeaktif');
    })->name('admin.kelolakampanyeaktif'); 

    Route::Get('/riwayatdonasi', function() {
        return view('admin.riwayatdonasi');
    })->name('admin.riwayatdonasi'); 

    Route::Get('/kampanyeselesai', function() {
        return view('admin.kampanyeselesai');
    })->name('admin.kampanyeselesai');


});

require __DIR__.'/auth.php';
