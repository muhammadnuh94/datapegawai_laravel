<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

// untuk tampilin atau manggil pegawai
Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');

// untuk manggil atau tampilin tambah pegawai (tambah data ditandai dengan post)
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insert', [EmployeeController::class, 'insert'])->name('insert');

// untuk menampilin dan mengupdate dataya (mengupdate data selalu ditandai dengan post)
Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

// untuk menghapus datanya
Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');