<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KuisionerAlumniController;
use App\Http\Controllers\KuisionerPenggunaAlumniController;
use App\Http\Controllers\PenggunaAlumniController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\TentangController;


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

//Route Dashboard

//Route Login Admin
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->name('post_register');

//Route Login Alumni
Route::get('/login-alumni', [LoginController::class, 'alumni'])->name('login-alumni')->middleware('guest');
Route::post('/login-alumni', [LoginController::class, 'authenticate_alumni'])->name('post-login-alumni');
Route::get('/logout-alumni', [LoginController::class, 'logoutAlumni'])->name('logout-alumni');
Route::get('/profil/edit/{id}', [UserController::class, 'edit']);
Route::patch('/profil/update{id}', [UserController::class, 'update'])->name('edit-profil');


// Route Data Alumni - Admin
Route::get('/tambah-alumni', [AlumniController::class, 'alumni'])->name('tambah-alumni');
Route::post('/tambah-alumni', [AlumniController::class, 'createAlumni'])->name('post-tambah-alumni');
Route::get('/data-alumni', [AlumniController::class, 'index'])->name('index-alumni');
Route::post('/jawaban-alumni/post', [AlumniController::class, 'store'])->name('post-jawaban-alumni');


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

//Route Kuisioner Pengguna Alumni-Admin
Route::get('admin-kuisioner-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'index'])->name('admin-kuisioner-pengguna-alumni');
Route::get('buat-kuisioner-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'create'])->name('buat-kuisioner-pengguna-alumni');
Route::post('/kuisioner-pengguna-alumni/post', [KuisionerPenggunaAlumniController::class, 'store'])->name('post-kuisioner-pengguna-alumni');
Route::get('/kuisioner-pengguna-alumni/delete{id}', [KuisionerPenggunaAlumniController::class, 'destroy'])->name('destroy_kuisioner-pengguna-alumni');
Route::put('kuisioner-pengguna-alumni/update/{id}', [KuisionerPenggunaAlumniController::class, 'update'])->name('update-kuisioner-pengguna-alumni');
Route::get('kuisioner-pengguna-alumni/edit/{id}', [KuisionerPenggunaAlumniController::class, 'edit']);

// Route Data Pengguna Alumni-Admin
Route::get('admin-data-pengguna-alumni', [PenggunaAlumniController::class, 'index'])->name('admin-data-pengguna-alumni');
Route::post('/data-pengguna-alumni/post', [PenggunaAlumniController::class, 'store'])->name('post-data-pengguna-alumni');
Route::get('kuisioner-pengguna-alumni', [PenggunaAlumniController::class, 'create'])->name('kuisioner-pengguna-alumni');
Route::get('data-pengguna-alumni/delete{id}', [PenggunaAlumniController::class, 'destroy'])->name('destroy-data-pengguna-alumni');

//Route Jawaban Pengguna Alumni-Admin
Route::get('jawaban-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'jawabanPenggunaAlumni'])->name('jawaban-pengguna-alumni');
Route::get('detail-jawaban-pengguna-alumni/{id}', [KuisionerPenggunaAlumniController::class, 'show'])->name('detail-jawaban-pengguna-alumni');

// Route Jawaban Alumni - Admin
Route::get('/admin/jawaban/alumni', [KuisionerAlumniController::class, 'jawabanAlumni'])->name('jawaban-alumni');
Route::get('/admin/detail-jawaban-alumni/{id}', [KuisionerAlumniController::class, 'show'])->name('/admin/detail-jawaban-alumni');

// Route Tentang - Admin
Route::get('/admin/tentang', [TentangController::class, 'index'])->name('/admin/tentang');
Route::get('/admin/buat-tentang', [TentangController::class, 'create'])->name('buat-tentang');
Route::post('/admin/tentang/post', [TentangController::class, 'store'])->name('post-tentang');
Route::get('/hapus/konten{id}', [TentangController::class, 'destroy'])->name('hapus-tentang');
Route::get('/admin/tentang/edit/{id}', [TentangController::class, 'edit']);
Route::put('/admin/tentang/update/{id}', [TentangController::class, 'update'])->name('update-tentang');

// Route Tentang - User
Route::get('tentang', [UserController::class, 'tentang'])->name('tentang');


//Route Kuisioner Pengguna Alumni-User
Route::get('kuisioner-pengguna-alumni', [UserController::class, 'kuisioner_pengguna_alumni'])->name('kuisioner-pengguna-alumni');
Route::post('kuisioner-pengguna-alumni', [UserController::class, 'simpanJawabanPenggunaAlumni'])->name('post-jawaban-pengguna-alumni');
Route::get('data-pengguna-alumni', [UserController::class, 'data_pengguna_alumni'])->name('data-pengguna-alumni');

//Berita-User
Route::get('berita-user', [UserController::class, 'berita_user'])->name('berita_user');
Route::get('/baca-berita/{slug}', [UserController::class, 'showBerita'])->name('baca-berita');

//Route Kuisioner Alumni-User
Route::get('kuisioner-alumni', [UserController::class, 'kuisioner_alumni'])->name('kuisioner-alumni');

//
