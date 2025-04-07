<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembelianDetailController;

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

    // member
    Route::get('/member/data', [MemberController::class, 'data'])
        ->name('member.data');
    Route::post('/member/cetak-member', [MemberController::class, 'cetakMember'])
        ->name('member.cetak_member');
    Route::resource('/member', MemberController::class);

    // supplier
    Route::get('/supplier/data', [SupplierController::class, 'data'])
        ->name('supplier.data');
    Route::resource('/supplier', SupplierController::class);

    // pengeluaran
    Route::get('/pengeluaran/data', [PengeluaranController::class, 'data'])
        ->name('pengeluaran.data');
    Route::resource('/pengeluaran', PengeluaranController::class);

    // pembelian
    Route::get('/pembelian/data', [PembelianController::class, 'data'])
        ->name('pembelian.data');
        Route::post('/pembelian/{id}/cancel', [PembelianController::class, 'cancel'])
            ->name('pembelian.cancel');
    Route::get('/pembelian/{id}/create', [PembelianController::class, 'create'])
        ->name('pembelian.create');
    Route::resource('/pembelian', PembelianController::class)
        ->except('create');

    // pembelian detail 
    Route::get('/pembelian_detail/{id}/data', [PembelianDetailController::class, 'data'])
        ->name('pembelian_detail.data');
    Route::get('/pembelian_detail/loadform/{diskon}/{total}', [PembelianDetailController::class, 'loadForm'])
        ->name('pembelian_detail.load_form');
    Route::resource('/pembelian_detail', PembelianDetailController::class)
        ->except('create', 'edit');
});
