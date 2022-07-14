<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WishlistController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[UserController::class,'home']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/home2', function () {
//     return view('home2');
// })->middleware(['auth']);

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/detail-buku', function () {
//     return view('detail-buku');
// });

// Route::get('/wishlist', function () {
//     return view('wishlist');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/buku-pinjaman', function () {
//     return view('buku-pinjaman');
// });

// Route::get('/pembayaran', function () {
//     return view('pembayaran');
// });

Route::get('/halaman-donasi', function () {
    return view('halaman-donasi');
});



Route::get('/hasil-cari',[BooksController::class,'index'])->name('books1');
Route::get('/detail-buku/{id}', [BooksController::class,'detail']);

Route::get('/daftar-buku-perpustakaan',[BooksController::class,'index2'])->name('books2');

Route::get('/add-buku', function () {
    return view('add-buku');
});
Route::post('/add-buku',[BooksController::class,'insert']);

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/buku-terpinjam', function () {
    return view('buku-terpinjam');
});

Route::get('/pengembalian-buku', function () {
    return view('pengembalian-buku');
});

Route::get('/profile', [UserController::class, 'index_user'])->name('profile');
Route::post('/profile', [UserController::class, 'index_userupdated'])->name('user');

Route::get('/mendaftar-pustakawan', [UserController::class, 'index_daftarpustakawan']);
Route::post('/mendaftar-pustakawan',[UserController::class,'daftarperpus']);

Route::get('/edit-buku/{id}', [BooksController::class,'editbukudetail']);
Route::post('/edit-buku/{id}', [BooksController::class,'editbuku']);

Route::delete('daftar-buku-perpustakaan/{id}', [BooksController::class,'destroy']);


// Route::resource('wishlist', 'WishlistController')->only([
//     'store'
// ]);

Route::post('/detail-buku/{id}',[WishlistController::class,'store']);

Route::get('/wishlist',[WishlistController::class,'index'])->middleware(['auth']);;
Route::delete('/wishlist/{id}',[WishlistController::class,'destroy']);


Route::resource('cartdet', CartDetailController::class)->only([
    'destroy','store'
]);

Route::resource('cart', CartController::class)->only([
    'index'
]);

Route::resource('transaction', TransactionController::class)->only([
    'store',
]);

// Route::post('/detail-buku/{id}',[CartDetailController::class,'store']);
// Route::get('/cart',[CartController::class,'index']);

Route::get('/pembayaran/{id}', [CartController::class,'detail']);
Route::get('/pembayaran-peminjaman/{id}', [TransactionController::class,'payment']);

Route::get('/status-pembayaran', function () {
    return view('status-pembayaran');
});

Route::get('/buku-pinjaman', [TransactionController::class,'detail']);

Route::get('/perpanjangan-durasi-peminjaman/{id}',[TransactionController::class,'perpanjangan']);

Route::get('/list-validasi',[PerpustakaanController::class,'index']);
Route::get('/validasi-perpustakaan/{id}', [PerpustakaanController::class,'detail']);

Route::post('/validasi-perpustakaan/{id}', [PerpustakaanController::class,'validasi']);

Route::get('/buku-terpinjam', [TransactionController::class,'detailterpinjam']);
Route::get('/pengembalian-buku/{id}', [TransactionController::class,'rincianpengembalian']);
Route::post('/pengembalian-buku/{id}', [TransactionController::class,'pengembalian'])->name('pengembalian');

Route::get('/view-user/{id}', [UserController::class,'viewuser']);


Route::get('/profile-perpustakaan', [PerpustakaanController::class, 'profileperpus']);
Route::post('/profile-perpustakaan', [PerpustakaanController::class, 'updateprofileperpus']);

Route::get('/detail-perpustakaan/{id}', [PerpustakaanController::class, 'detailperpustakaan']);