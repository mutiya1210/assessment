<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MataKuliahController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Auth::routes();

// Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');


Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');


Route::get('/dsn', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/{dosen}', [DosenController::class, 'show'])->name('dosen.show');
Route::get('/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('/dosen/{dosen}', [DosenController::class, 'update'])->name('dosen.update');
Route::delete('/dosen/{dosen}', [DosenController::class, 'destroy'])->name('dosen.destroy');

Route::get('/prd', [ProdiController::class, 'index'])->name('prodi');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('/prodi', [ProdiController::class, 'store'])->name('prodi.store');
Route::get('/prodi/{prodi}', [ProdiController::class, 'show'])->name('prodi.show');
Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/prodi/{prodi}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy');


Route::get('/mtk', [MataKuliahController::class, 'index'])->name('matakuliah');
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('mata_kuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('mata_kuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('mata_kuliah.store');
Route::get('/matakuliah/{mata_kuliah}', [MataKuliahController::class, 'show'])->name('mata_kuliah.show');
Route::get('/matakuliah/{mata_kuliah}/edit', [MataKuliahController::class, 'edit'])->name('mata_kuliah.edit');
Route::put('/matakuliah/{mata_kuliah}', [MataKuliahController::class, 'update'])->name('mata_kuliah.update');
Route::delete('/mata_kuliah/{mata_kuliah}', [MataKuliahController::class, 'destroy'])->name('mata_kuliah.destroy');



