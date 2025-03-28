<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('login'));

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function () {
    // kategori
    Route::get('/kategori/data', [KategoriController::class, 'data'])
        ->name('kategori.data');
    Route::resource('/kategori', KategoriController::class);

    // produk
    Route::get('/produk/data', [ProdukController::class, 'data'])
        ->name('produk.data');
    Route::post('/produk/delete-selected', [ProdukController::class, 'deleteSelected'])
        ->name('produk.delete_selected');
    Route::post('/produk/cetak-barcode', [ProdukController::class, 'cetakBarcode'])
        ->name('produk.cetak_barcode');
    Route::resource('/produk', ProdukController::class);

    // kategori
    Route::get('/member/data', [MemberController::class, 'data'])
        ->name('member.data');
    Route::post('/member/cetak-member', [MemberController::class, 'cetakMember'])
        ->name('member.cetak_member');
    Route::resource('/member', MemberController::class);
});
