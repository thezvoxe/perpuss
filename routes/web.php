<?php

use App\Http\Middleware;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserBukuController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\UserPeminjamanController;
use App\Http\Controllers\admin_peminjamanContoller;
use App\Http\Controllers\AdminPeminjamanController;
use App\Http\Controllers\BerandaPeminjamController;

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
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/table', function () {
    return view('dashboard.table');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::resource('products', ProductController::class);



//Route::resource('products', [ProductController::class])name->();

//Route::resource('/dashboard',\App\Http\BukuController::class);


 //Route::middleware([AuthController::class])->group( function () {
  // Route::get('register', 'register')->name('register');
   // Route::post('register','registerSave')->name('register.save');
//});

    //Route::get('login', 'login')->name('login');
    //Route::post('login','loginAction')->name('login.action');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'auth.admin')->group(function () {
    Route::get('/', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('user', UserController::class);
    Route::resource('buku-admin', BukuController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('peminjaman', AdminPeminjamanController::class);
});

Route::prefix('petugas')->middleware('auth', 'auth.petugas')->group(function () {
    Route::get('/', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
    Route::get('data-peminjaman', [UserPeminjamanController::class, 'dataPinjam'])->name('data-peminjaman.index');
    Route::post('peminjaman/{id}/kembalikan', [UserPeminjamanController::class, 'kembali'])->name('peminjaman.kembali');


});

Route::prefix('peminjam')->middleware('auth', 'auth.peminjam')->group(function () {
    Route::get('/', [BerandaPeminjamController::class, 'index'])->name('peminjam.beranda');
    Route::resource('buku', UserBukuController::class);
    Route::get('peminjaman-form/{id}/', [UserPeminjamanController::class, 'create'])->name('user.pinjam.create');
    Route::post('peminjaman-form/', [UserPeminjamanController::class, 'store'])->name('user.pinjam.store');
    Route::get('peminjaman', [UserPeminjamanController::class, 'index'])->name('user.pinjam.index');
});

Route::prefix('/')->group(function () {
    Route::resource('/', GuestController::class);
});

Route::get('logout', function() {
    Auth::logout();
    return redirect()->route('login');
});
