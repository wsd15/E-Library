<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home2', function () {
    return view('home2');
})->middleware(['auth']);

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/detail-buku', function () {
    return view('detail-buku');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/buku-pinjaman', function () {
    return view('buku-pinjaman');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/halaman-donasi', function () {
    return view('halaman-donasi');
});
// Route::get('/hasil-cari', function () {
//     return view('hasil-cari');
// });
Route::get('/hasil-cari',[BooksController::class,'index'])->name('books');
Route::get('/detail-buku/{id}', [BooksController::class,'detail']);

Route::get('/daftar-buku-perpustakaan', function () {
    return view('daftar-buku-perpustakaan');
});
Route::get('/edit-buku', function () {
    return view('edit-buku');
});