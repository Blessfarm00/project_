<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaDashboardController;
use App\Http\Controllers\JurusanDashboardController;
use App\Http\Controllers\BeritaDashboardController;
use App\Http\Controllers\KategoriDashboardController;
use App\Http\Controllers\AccountDashboardController;
use App\Http\Controllers\TraccDashboardController;
use App\Http\Controllers\TopupDashboardController;
use App\Http\Controllers\TropDashboardController;
use App\Http\Controllers\PaymentDashboardController;

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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/inwepo', function () {
    return view('index');
});
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('berita', BeritaController::class);
Route::resource('Account', AccountController::class);
Route::resource('mahasiswa-dashboard', MahasiswaDashboardController::class)->middleware('auth');
Route::resource('jurusan-dashboard', JurusanDashboardController::class)->middleware('auth');
Route::resource('berita-dashboard', BeritaDashboardController::class)->middleware('auth');
Route::resource('kategori-dashboard', KategoriDashboardController::class)->middleware('auth');
Route::resource('account-dashboard', AccountDashboardController::class)->middleware('auth');
Route::resource('tracc-dashboard', TraccDashboardController::class)->middleware('auth');
Route::resource('topup-dashboard', TopupDashboardController::class)->middleware('auth');
Route::resource('trop-dashboard', TropDashboardController::class)->middleware('auth');
Route::resource('payment-dashboard', PaymentDashboardController::class)->middleware('auth');