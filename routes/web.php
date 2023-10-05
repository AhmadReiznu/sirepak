<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tabel1Controller;
use App\Http\Controllers\KerjasamaPendidikan;
use App\Http\Controllers\Tabel_1_2_Controller;
use App\Http\Controllers\Tabel_1_3_Controller;
use App\Http\Controllers\Tabel_2_A_Controller;
use App\Http\Controllers\Tabel_2_B_Controller;

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
Route::get('/logic-testing/edit/{id}', [KerjasamaPendidikan::class, 'edit']);
Route::post('/logic-testing', [KerjasamaPendidikan::class, 'store']);
Route::put('/logic-testing/{id}', [KerjasamaPendidikan::class, 'update']);
Route::get('/logic-testing/delete/{id}', [KerjasamaPendidikan::class, 'destroy']);

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

    // Tabel 1.1
    Route::resource('kerjasama-pendidikan', KerjasamaPendidikan::class);

    // Tabel 1.2
    Route::get('/tabel-1-2', [Tabel_1_2_Controller::class, 'index']);
    Route::get('/tabel-1-2/create', [Tabel_1_2_Controller::class, 'create']);
    Route::post('/tabel-1-2', [Tabel_1_2_Controller::class, 'store']);
    Route::get('/tabel-1-2/edit/{id}', [Tabel_1_2_Controller::class, 'edit']);
    Route::put('/tabel-1-2/{id}', [Tabel_1_2_Controller::class, 'update']);
    Route::get('/tabel-1-2/delete/{id}', [Tabel_1_2_Controller::class, 'destroy']);

    // Tabel 1.3
    Route::get('/tabel-1-3', [Tabel_1_3_Controller::class, 'index']);
    Route::get('/tabel-1-3/create', [Tabel_1_3_Controller::class, 'create']);
    Route::post('/tabel-1-3', [Tabel_1_3_Controller::class, 'store']);
    Route::get('/tabel-1-3/edit/{id}', [Tabel_1_3_Controller::class, 'edit']);
    Route::put('/tabel-1-3/{id}', [Tabel_1_3_Controller::class, 'update']);
    Route::get('/tabel-1-3/delete/{id}', [Tabel_1_3_Controller::class, 'destroy']);

    // Tabel 2.a
    Route::get('/tabel-2-a', [Tabel_2_A_Controller::class, 'index']);
    Route::get('/tabel-2-a/create', [Tabel_2_A_Controller::class, 'create']);
    Route::post('/tabel-2-a', [Tabel_2_A_Controller::class, 'store']);
    Route::get('/tabel-2-a/edit/{id}', [Tabel_2_A_Controller::class, 'edit']);
    Route::put('/tabel-2-a/{id}', [Tabel_2_A_Controller::class, 'update']);
    Route::get('/tabel-2-a/delete/{id}', [Tabel_2_A_Controller::class, 'destroy']);

    // Tabel 2.b
    Route::get('/tabel-2-b', [Tabel_2_B_Controller::class, 'index']);
    Route::get('/tabel-2-b/create', [Tabel_2_B_Controller::class, 'create']);
    Route::post('/tabel-2-b', [Tabel_2_B_Controller::class, 'store']);
    Route::get('/tabel-2-b/edit/{id}', [Tabel_2_B_Controller::class, 'edit']);
    Route::put('/tabel-2-b/{id}', [Tabel_2_B_Controller::class, 'update']);
    Route::get('/tabel-2-b/delete/{id}', [Tabel_2_B_Controller::class, 'destroy']);
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
// //Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
