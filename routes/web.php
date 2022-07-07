<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KuisionerAlumniController;
use App\Http\Controllers\KuisionerPenggunaAlumniController;

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
    return view('user.index');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/data-alumni', function () {
    return view('admin.data-pengguna.alumni.alumni');
});

Route::get('/tambah-data-alumni', function () {
    return view('admin.data-pengguna.alumni.tambah-alumni');
});

//Route Dashboard

//Route Berita-Admin
Route::get('berita', [BeritaController::class, 'index'])->name('berita_admin');
Route::get('berita/edit/{id}', [BeritaController::class, 'edit']);
Route::put('berita/update/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::get('buat-berita', [BeritaController::class, 'create'])->name('buat-berita');
Route::post('/berita/post', [BeritaController::class, 'store'])->name('post_berita');
Route::get('/berita/delete{id}', [BeritaController::class, 'destroy'])->name('destroy_berita');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Kuisioner Alumni-Admin
Route::get('admin-kuisioner-alumni', [KuisionerAlumniController::class, 'index'])->name('admin-kuisioner-alumni');
Route::get('buat-kuisioner-alumni', [KuisionerAlumniController::class, 'create'])->name('buat-kuisioner-alumni');
Route::post('/kuisioner-alumni/post', [KuisionerAlumniController::class, 'store'])->name('post-kuisioner-alumni');
Route::get('/kuisioner-alumni/delete{id}', [KuisionerAlumniController::class, 'destroy'])->name('destroy_kuisioner-alumni');
Route::put('kuisioner-alumni/update/{id}', [KuisionerAlumniController::class, 'update'])->name('update-kuisioner-alumni');
Route::get('kuisioner-alumni/edit/{id}', [KuisionerAlumniController::class, 'edit']);

//Route Kuisioner Alumni-User
Route::get('kuisioner-alumni', [KuisionerAlumniController::class, 'kuisioner_alumni'])->name('kuisioner-alumni');

//Route Kuisioner Pengguna Alumni-Admin
Route::get('admin-kuisioner-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'index'])->name('admin-kuisioner-pengguna-alumni');
Route::get('buat-kuisioner-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'create'])->name('buat-kuisioner-pengguna-alumni');
Route::post('/kuisioner-pengguna-alumni/post', [KuisionerPenggunaAlumniController::class, 'store'])->name('post-kuisioner-pengguna-alumni');
Route::get('/kuisioner-pengguna-alumni/delete{id}', [KuisionerPenggunaAlumniController::class, 'destroy'])->name('destroy_kuisioner-pengguna-alumni');

//Route Kuisioner Pengguna Alumni-User
Route::get('kuisioner-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'kuisioner_pengguna_alumni'])->name('kuisioner-pengguna-alumni');

//Berita-User
Route::get('berita-user', [BeritaController::class, 'berita_user'])->name('berita_user');
Route::get('/baca-berita/{slug}', [BeritaController::class, 'show'])->name('baca-berita');

//Route Login
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->name('post_register');

//
