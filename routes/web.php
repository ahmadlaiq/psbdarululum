<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/symlink', function () {
    Artisan::call('storage:link');
});
Route::get('', '\App\Http\Controllers\PengaturanController@index');
Route::get('admin', function () {
    return view('admin-panel.login');
});

Route::get('daftar', [FormulirController::class, 'provinsi'])->name('pendaftaran');
Route::post('daftar', [FormulirController::class, 'store'])->name('pendaftaran_santri');
Route::get('join-wa', [FormulirController::class, 'joinWa'])->name('join.wa');

Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function () {
    Route::get('dashboard', [FormulirController::class, 'dashboard'])->name('user.dashboard');
    Route::get('lihat-formulir', [FormulirController::class, 'index'])->name('lihat_formulir');
    Route::get('edit-formulir', [FormulirController::class, 'edit'])->name('halaman_edit_formulir');
    Route::put('edit-formulir/edit/{id}', [FormulirController::class, 'update'])->name('edit_formulir');


    Route::put('users/{id}', function ($id) {
    });
    Route::get('lihat-berkas', '\App\Http\Controllers\BerkasController@index')->name('lihat-berkas');
    Route::get('edit-berkas', '\App\Http\Controllers\BerkasController@create')->name('halaman-edit-berkas');
    Route::put('edit-berkas/{id}', '\App\Http\Controllers\BerkasController@store')->name('edit-berkas');
    Route::get('pengaturan', [HomeController::class, 'indexPengaturanUser'])->name('halaman-pengaturan-user');
    Route::put('pengaturan/{id}', [HomeController::class, 'update'])->name('edit-pengaturan-user');
    Route::get('cetak-bukti', [FormulirController::class, 'cetak'])->name('cetak');
    // Route::get('lengkapi', function () {
    //     return view('client-panel.lengkapi-formulir');
    // });
    // Route::get('upload-pembayaran', function () {
    //     return view('client-panel.upload-pembayaran');
    // });
    // Route::get('status-pembayaran', function () {
    //     return view('client-panel.status-pembayaran');
    // });
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::get('dashboard', '\App\Http\Controllers\PengaturanController@dashboard')->name('admin.dashboard');
    Route::get('menunggu-verifikasi', '\App\Http\Controllers\PengaturanController@verifikasi');
    Route::get('pendaftaran-valid', '\App\Http\Controllers\PengaturanController@valid')->name('pendaftaran.valid');
    Route::get('pendaftaran-tidak-valid', '\App\Http\Controllers\PengaturanController@tidakvalid');
    Route::put('/admin/update-terima/{Formulir}', 'App\Http\Controllers\PengaturanController@updateTerima')->name('admin.update-terima');
    Route::put('/admin/update-tolak/{Formulir}', 'App\Http\Controllers\PengaturanController@updateTolak')->name('admin.update-tolak');
    Route::delete('/delete-produk{id}', 'App\Http\Controllers\PengaturanController@delete')->name('delete-produk');
    Route::get('pengaturan', '\App\Http\Controllers\PengaturanController@indexPengaturan');
    Route::put('update/{Home}', 'App\Http\Controllers\PengaturanController@update')->name('pengaturan-admin');
    Route::get('export-data', '\App\Http\Controllers\PengaturanController@exportdata');
    Route::get('export-excel', '\App\Http\Controllers\PengaturanController@formulirexport')->name('formulirexport');
    Route::get('index-delete-all', '\App\Http\Controllers\PengaturanController@indexDeleteAll')->name('index.delete.all');
    Route::delete('delete-all', '\App\Http\Controllers\PengaturanController@deleteAll')->name('delete.all');
});
