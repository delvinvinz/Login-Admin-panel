<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuatUserController;
use App\Http\Controllers\KategoriKueController;
use App\Http\Controllers\LaporanRekapController;
use App\Http\Controllers\LaporanProfitController;
use App\Http\Controllers\PengambilanKueController;
use App\Http\Controllers\RiwayatCicilanController;
use App\Http\Controllers\LaporanPembayaranController;
use App\Http\Controllers\RiwayatPembayaranController;
use App\Http\Controllers\Auth\PasswordResetLinkController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

});

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::get('/products', [ProductController::class, 'index' ])->name('products.index');
Route::get('/createproduct', [ProductController::class, 'create'])->name('products.createproduct');
Route::get('/editproduct', [ProductController::class, 'edit'])->name('products.editproduct');
Route::get('/riwayatpembayaran', [RiwayatPembayaranController::class, 'index' ])->name('riwayatpembayaran.index');
Route::get('/riwayatcicilan', [RiwayatCicilanController::class, 'index' ])->name('riwayatcicilan.index');
Route::get('/kategori', [KategoriKueController::class, 'index' ])->name('kategori.index');
Route::get('/editkategori', [KategoriKueController::class, 'edit' ])->name('kategori.editkategori');
Route::get('/pengambilankue', [PengambilanKueController::class, 'index' ])->name('pengambilankue.index');
Route::get('/createpengambilankue', [PengambilanKueController::class, 'create' ])->name('pengambilankue.createpengambilankue');
Route::get('/editpengambilankue', [PengambilanKueController::class, 'edit' ])->name('pengambilankue.editpengambilankue');
Route::get('/laporanpembayarankue', [LaporanPembayaranController::class, 'index' ])->name('laporanpembayarankue.index');
Route::get('/editpembayarankue', [LaporanPembayaranController::class, 'edit' ])->name('laporanpembayarankue.editpembayarankue');
Route::get('/laporanrekaptransaksi', [LaporanRekapController::class, 'index' ])->name('laporanrekaptransaksi.index');
Route::get('/showrekapkue', [LaporanRekapController::class, 'show' ])->name('laporanrekaptransaksi.showrekapkue');
Route::get('/laporanprofitkue', [LaporanProfitController::class, 'index' ])->name('laporanprofitkue.index');
Route::get('/editprofit', [LaporanProfitController::class, 'edit' ])->name('laporanprofitkue.editprofit');
Route::get('/buatuser', [BuatUserController::class, 'index' ])->name('buatuser.index');
Route::get('/edituser', [BuatUserController::class, 'edit' ])->name('buatuser.edituser');
Route::get('/createuser', [BuatUserController::class, 'create' ])->name('buatuser.createuser');



require __DIR__.'/auth.php';
