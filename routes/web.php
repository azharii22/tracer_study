<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KuisionerAlumniController;
use App\Http\Controllers\EvaluasiAlumniController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\KuisionerPenggunaAlumniController;
use App\Http\Controllers\PenggunaAlumniController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ClusterController;


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

Route::get('/tentang', function () {
    return view('user.tentang');
});

//Route Dashboard - Admin
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

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
Route::get('/admin/data-alumni/hapus/{id}', [AlumniController::class, 'destroy']);
Route::get('/admin/export-alumni', [AlumniController::class, 'exportAlumni'])->name('export-alumni');
Route::post('/admin/import-alumni', [AlumniController::class, 'importAlumni'])->name('import-alumni');

// Route Status
Route::get('/admin/status', [StatusController::class, 'index'])->name('status');
Route::get('/admin/tambah-status', [StatusController::class, 'create'])->name('buat-status');
Route::post('/admin/status/post', [StatusController::class, 'store'])->name('post-status');
Route::get('/admin/edit/status/{id}', [StatusController::class, 'edit']);
Route::put('/admin/update/status/{id}', [StatusController::class, 'update'])->name('update-status');
Route::get('/admin/status/delete/{id}', [StatusController::class, 'destroy']);


//Route Berita-Admin
Route::get('berita', [BeritaController::class, 'index'])->name('berita_admin');
Route::get('berita/edit/{id}', [BeritaController::class, 'edit']);
Route::put('berita/update/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::get('buat-berita', [BeritaController::class, 'create'])->name('buat-berita');
Route::post('/berita/post', [BeritaController::class, 'store'])->name('post_berita');
Route::get('/berita/delete{id}', [BeritaController::class, 'destroy'])->name('destroy_berita');

//Route Evaluasi Alumni-Admin
Route::get('/admin/evaluasi-alumni', [EvaluasiAlumniController::class, 'index'])->name('admin-evaluasi-alumni');
Route::get('/admin/buat/evaluasi-alumni', [EvaluasiAlumniController::class, 'create'])->name('buat-evaluasi-alumni');
Route::post('/admin/buat/evaluasi-alumni/post', [EvaluasiAlumniController::class, 'store'])->name('post-evaluasi-alumni');
Route::get('/admin/evaluasi-alumni/delete/{id}', [EvaluasiAlumniController::class, 'destroy']);
Route::get('/admin/evaluasi-alumni/edit/{id}', [EvaluasiAlumniController::class, 'edit']);
Route::put('/admin/evaluasi-alumni/update/{id}', [EvaluasiAlumniController::class, 'update'])->name('update-evaluasi-alumni');

// Route Pembelajaran-Admin
Route::get('/admin/pembelajaran-alumni', [PembelajaranController::class, 'index'])->name('admin-pembelajaran-alumni');
Route::get('/admin/buat/pembelajaran-alumni', [PembelajaranController::class, 'create'])->name('buat-pembelajaran-alumni');
Route::post('/admin/buat/pembelajaran-alumni/post', [PembelajaranController::class, 'store'])->name('post-pembelajaran-alumni');
Route::get('/admin/pembelajaran-alumni/delete/{id}', [PembelajaranController::class, 'destroy']);
Route::get('/admin/pembelajaran-alumni/edit/{id}', [PembelajaranController::class, 'edit']);
Route::put('/admin/pembelajaran-alumni/update/{id}', [PembelajaranController::class, 'update'])->name('update-pembelajaran-alumni');

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
Route::get('kuisioner-pengguna-alumni', [PenggunaAlumniController::class, 'create'])->name('kuisioner-pengguna-alumni');
Route::get('data-pengguna-alumni/delete{id}', [PenggunaAlumniController::class, 'destroy']);

//Route Jawaban Pengguna Alumni-Admin
Route::get('jawaban-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'jawabanPenggunaAlumni'])->name('jawaban-pengguna-alumni');
Route::get('detail-jawaban-pengguna-alumni/{id}', [KuisionerPenggunaAlumniController::class, 'show'])->name('detail-jawaban-pengguna-alumni');
Route::get('/admin/export-jawaban-pengguna-alumni', [KuisionerPenggunaAlumniController::class, 'exportJawaban'])->name('export-jawaban');
Route::get('/admin/jawaban/pengguna-alumni/delete/{id}', [KuisionerPenggunaAlumniController::class, 'hapusJwbPenggunaAlumni']);

// Route Jawaban Alumni - Admin
Route::get('/admin/jawaban/alumni', [KuisionerAlumniController::class, 'jawabanAlumni'])->name('jawaban-alumni');
Route::get('/admin/detail-jawaban-alumni/{id}', [KuisionerAlumniController::class, 'show'])->name('/admin/detail-jawaban-alumni');
Route::get('/admin/export-jawaban-alumni', [KuisionerAlumniController::class, 'exportJawaban'])->name('export-jawaban-alumni');
Route::get('/admin/jawaban/alumni/delete/{id}', [KuisionerAlumniController::class, 'destroyJwbAlumni']);

// Route Cluster - Admin
Route::get('/admin/cluster', [ClusterController::class, 'index'])->name('/admin/cluster');
Route::get('/admin/generate-cluster', [ClusterController::class, 'generateCluster'])->name('generate-cluster');

// Route Tentang - Admin
Route::get('/admin/tentang', [TentangController::class, 'index'])->name('/admin/tentang');
Route::get('/admin/buat-tentang', [TentangController::class, 'create'])->name('buat-tentang');
Route::post('/admin/tentang/post', [TentangController::class, 'store'])->name('post-tentang');
Route::get('/hapus/konten{id}', [TentangController::class, 'destroy'])->name('hapus-tentang');
Route::get('/admin/tentang/edit/{id}', [TentangController::class, 'edit']);
Route::put('/admin/tentang/update/{id}', [TentangController::class, 'update'])->name('update-tentang');

// Route Dashboard - User
Route::get('/', [UserController::class, 'index']);

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
Route::post('/jawaban-alumni/post', [UserController::class, 'simpanJawabanAlumni'])->name('post-jawaban-alumni');

//
