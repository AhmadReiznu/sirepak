<?php

use App\Http\Controllers\KerjasamaPendidikan;
use App\Http\Controllers\Tabel1Controller;
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

Route::get('/logic-testing', [Tabel1Controller::class, 'index']);
Route::get('/logic-testing/create', [Tabel1Controller::class, 'create']);
Route::post('/logic-testing', [Tabel1Controller::class, 'store']);

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('kerjasama-pendidikan', [KerjasamaPendidikan::class, 'index']);
    Route::get('tambah-kerjasama-pendidikan', [KerjasamaPendidikan::class, 'create']);
    Route::post('kerjasama-pendidikan', [KerjasamaPendidikan::class, 'store']);
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
// //Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
