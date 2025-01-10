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
});

Route::get('/donasi', [KampanyeControler::class, 'donatur'])->name("donasi");





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::Get('/penggalang', function() {
        return view('admin.formgaldan');
    });

    Route::Get('/penguna', function() {
        return view('admin.pengguna');
    });
    Route::Get('/dtldonatur', function() {
        return view('admin.dtladmin');
    });
    Route::Get('/dashadmin', function() {
        return view('admin.dashadmin');
    });
    Route::Get('/dashpenggalang', function() {
        return view('admin.dashpenggalang');
    });
    Route::Get('/index', function() {
        return view('admin.index');
    });


});

require __DIR__.'/auth.php';
