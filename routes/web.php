<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tabel1Controller;
use App\Http\Controllers\KerjasamaPendidikan;
use App\Http\Controllers\Tabel_1_2_Controller;
use App\Http\Controllers\Tabel_1_3_Controller;
use App\Http\Controllers\Tabel_2_A_Controller;
use App\Http\Controllers\Tabel_2_B_Controller;
use App\Http\Controllers\Tabel_3_A_1_Controller;
use App\Http\Controllers\Tabel_3_A_2_Controller;
use App\Http\Controllers\Tabel_3_A_3_Controller;
use App\Http\Controllers\Tabel_3_A_4_Controller;
use App\Http\Controllers\Tabel_3_A_5_Controller;
use App\Http\Controllers\Tabel_3_B_1_Controller;
use App\Http\Controllers\Tabel_3_B_2_Controller;
use App\Http\Controllers\Tabel_3_B_3_Controller;
use App\Http\Controllers\Tabel_3_B_4_1_Controller;
use App\Http\Controllers\Tabel_3_B_5_Controller;
use App\Http\Controllers\Tabel_3_B_6_Controller;
use App\Http\Controllers\Tabel_3_B_7_1_Controller;
use App\Http\Controllers\Tabel_3_B_7_2_Controller;
use App\Http\Controllers\Tabel_3_B_7_3_Controller;
use App\Http\Controllers\Tabel_3_B_7_4_Controller;
use App\Http\Controllers\Tabel_4_Controller;
use App\Http\Controllers\Tabel_5_A_Controller;
use App\Http\Controllers\Tabel_5_B_Controller;
use App\Http\Controllers\Tabel_5_C_Controller;
use App\Http\Controllers\Tabel_6_A_Controller;
use App\Http\Controllers\Tabel_6_B_Controller;
use App\Http\Controllers\Tabel_7_Controller;
use App\Http\Controllers\Tabel_8_A_Controller;
use App\Models\Tabel_3_A_3;

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

// Route::get('/logic-testing', [Tabel_4_Controller::class, 'index']);
// Route::get('/logic-testing/create', [Tabel_4_Controller::class, 'create']);
// Route::get('/logic-testing/edit/{id}', [Tabel_4_Controller::class, 'edit']);
// Route::post('/logic-testing', [Tabel_4_Controller::class, 'store']);
// Route::put('/logic-testing/{id}', [Tabel_4_Controller::class, 'update']);
// Route::get('/logic-testing/delete/{id}', [Tabel_4_Controller::class, 'destroy']);

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

    // Tabel 1.1
    Route::get('kerjasama-pendidikan', [KerjasamaPendidikan::class, 'index']);
    Route::get('tambah-kerjasama-pendidikan', [KerjasamaPendidikan::class, 'create']);
    Route::post('kerjasama-pendidikan', [KerjasamaPendidikan::class, 'store']);

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

    // Tabel 3.a.1
    Route::get('/tabel-3-a-1', [Tabel_3_A_1_Controller::class, 'index']);
    Route::get('/tabel-3-a-1/create', [Tabel_3_A_1_Controller::class, 'create']);
    Route::post('/tabel-3-a-1', [Tabel_3_A_1_Controller::class, 'store']);
    Route::get('/tabel-3-a-1/edit/{id}', [Tabel_3_A_1_Controller::class, 'edit']);
    Route::put('/tabel-3-a-1/{id}', [Tabel_3_A_1_Controller::class, 'update']);
    Route::get('/tabel-3-a-1/delete/{id}', [Tabel_3_A_1_Controller::class, 'destroy']);

    // Tabel 3.a.2
    Route::get('/tabel-3-a-2', [Tabel_3_A_2_Controller::class, 'index']);
    Route::get('/tabel-3-a-2/create', [Tabel_3_A_2_Controller::class, 'create']);
    Route::post('/tabel-3-a-2', [Tabel_3_A_2_Controller::class, 'store']);
    Route::get('/tabel-3-a-2/edit/{id}', [Tabel_3_A_2_Controller::class, 'edit']);
    Route::put('/tabel-3-a-2/{id}', [Tabel_3_A_2_Controller::class, 'update']);
    Route::get('/tabel-3-a-2/delete/{id}', [Tabel_3_A_2_Controller::class, 'destroy']);

    // Tabel 3.a.3
    Route::get('/tabel-3-a-3', [Tabel_3_A_3_Controller::class, 'index']);
    Route::get('/tabel-3-a-3/create', [Tabel_3_A_3_Controller::class, 'create']);
    Route::post('/tabel-3-a-3', [Tabel_3_A_3_Controller::class, 'store']);
    Route::get('/tabel-3-a-3/edit/{id}', [Tabel_3_A_3_Controller::class, 'edit']);
    Route::put('/tabel-3-a-3/{id}', [Tabel_3_A_3_Controller::class, 'update']);
    Route::get('/tabel-3-a-3/delete/{id}', [Tabel_3_A_3_Controller::class, 'destroy']);

    // Tabel 3.a.4
    Route::get('/tabel-3-a-4', [Tabel_3_A_4_Controller::class, 'index']);
    Route::get('/tabel-3-a-4/create', [Tabel_3_A_4_Controller::class, 'create']);
    Route::post('/tabel-3-a-4', [Tabel_3_A_4_Controller::class, 'store']);
    Route::get('/tabel-3-a-4/edit/{id}', [Tabel_3_A_4_Controller::class, 'edit']);
    Route::put('/tabel-3-a-4/{id}', [Tabel_3_A_4_Controller::class, 'update']);
    Route::get('/tabel-3-a-4/delete/{id}', [Tabel_3_A_4_Controller::class, 'destroy']);

    // Tabel 3.a.5
    Route::get('/tabel-3-a-5', [Tabel_3_A_5_Controller::class, 'index']);
    Route::get('/tabel-3-a-5/create', [Tabel_3_A_5_Controller::class, 'create']);
    Route::post('/tabel-3-a-5', [Tabel_3_A_5_Controller::class, 'store']);
    Route::get('/tabel-3-a-5/edit/{id}', [Tabel_3_A_5_Controller::class, 'edit']);
    Route::put('/tabel-3-a-5/{id}', [Tabel_3_A_5_Controller::class, 'update']);
    Route::get('/tabel-3-a-5/delete/{id}', [Tabel_3_A_5_Controller::class, 'destroy']);

    // Tabel 3.b.1
    Route::get('/tabel-3-b-1', [Tabel_3_B_1_Controller::class, 'index']);
    Route::get('/tabel-3-b-1/create', [Tabel_3_B_1_Controller::class, 'create']);
    Route::post('/tabel-3-b-1', [Tabel_3_B_1_Controller::class, 'store']);
    Route::get('/tabel-3-b-1/edit/{id}', [Tabel_3_B_1_Controller::class, 'edit']);
    Route::put('/tabel-3-b-1/{id}', [Tabel_3_B_1_Controller::class, 'update']);
    Route::get('/tabel-3-b-1/delete/{id}', [Tabel_3_B_1_Controller::class, 'destroy']);

    // Tabel 3.b.2
    Route::get('/tabel-3-b-2', [Tabel_3_B_2_Controller::class, 'index']);
    Route::get('/tabel-3-b-2/create', [Tabel_3_B_2_Controller::class, 'create']);
    Route::post('/tabel-3-b-2', [Tabel_3_B_2_Controller::class, 'store']);
    Route::get('/tabel-3-b-2/edit/{id}', [Tabel_3_B_2_Controller::class, 'edit']);
    Route::put('/tabel-3-b-2/{id}', [Tabel_3_B_2_Controller::class, 'update']);
    Route::get('/tabel-3-b-2/delete/{id}', [Tabel_3_B_2_Controller::class, 'destroy']);

    // Tabel 3.b.3
    Route::get('/tabel-3-b-3', [Tabel_3_B_3_Controller::class, 'index']);
    Route::get('/tabel-3-b-3/create', [Tabel_3_B_3_Controller::class, 'create']);
    Route::post('/tabel-3-b-3', [Tabel_3_B_3_Controller::class, 'store']);
    Route::get('/tabel-3-b-3/edit/{id}', [Tabel_3_B_3_Controller::class, 'edit']);
    Route::put('/tabel-3-b-3/{id}', [Tabel_3_B_3_Controller::class, 'update']);
    Route::get('/tabel-3-b-3/delete/{id}', [Tabel_3_B_3_Controller::class, 'destroy']);

    // Tabel 3.b.4.1
    Route::get('/tabel-3-b-4-1', [Tabel_3_B_4_1_Controller::class, 'index']);
    Route::get('/tabel-3-b-4-1/create', [Tabel_3_B_4_1_Controller::class, 'create']);
    Route::post('/tabel-3-b-4-1', [Tabel_3_B_4_1_Controller::class, 'store']);
    Route::get('/tabel-3-b-4-1/edit/{id}', [Tabel_3_B_4_1_Controller::class, 'edit']);
    Route::put('/tabel-3-b-4-1/{id}', [Tabel_3_B_4_1_Controller::class, 'update']);
    Route::get('/tabel-3-b-4-1/delete/{id}', [Tabel_3_B_4_1_Controller::class, 'destroy']);

    // Tabel 3.b.4.2
    Route::get('/tabel-3-b-4-2', [Tabel_3_B_4_2_Controller::class, 'index']);
    Route::get('/tabel-3-b-4-2/create', [Tabel_3_B_4_2_Controller::class, 'create']);
    Route::post('/tabel-3-b-4-2', [Tabel_3_B_4_2_Controller::class, 'store']);
    Route::get('/tabel-3-b-4-2/edit/{id}', [Tabel_3_B_4_2_Controller::class, 'edit']);
    Route::put('/tabel-3-b-4-2/{id}', [Tabel_3_B_4_2_Controller::class, 'update']);
    Route::get('/tabel-3-b-4-2/delete/{id}', [Tabel_3_B_4_2_Controller::class, 'destroy']);

    // Tabel 3.b.5
    Route::get('/tabel-3-b-5', [Tabel_3_B_5_Controller::class, 'index']);
    Route::get('/tabel-3-b-5/create', [Tabel_3_B_5_Controller::class, 'create']);
    Route::post('/tabel-3-b-5', [Tabel_3_B_5_Controller::class, 'store']);
    Route::get('/tabel-3-b-5/edit/{id}', [Tabel_3_B_5_Controller::class, 'edit']);
    Route::put('/tabel-3-b-5/{id}', [Tabel_3_B_5_Controller::class, 'update']);
    Route::get('/tabel-3-b-5/delete/{id}', [Tabel_3_B_5_Controller::class, 'destroy']);

    // Tabel 3.b.6
    Route::get('/tabel-3-b-6', [Tabel_3_B_6_Controller::class, 'index']);
    Route::get('/tabel-3-b-6/create', [Tabel_3_B_6_Controller::class, 'create']);
    Route::post('/tabel-3-b-6', [Tabel_3_B_6_Controller::class, 'store']);
    Route::get('/tabel-3-b-6/edit/{id}', [Tabel_3_B_6_Controller::class, 'edit']);
    Route::put('/tabel-3-b-6/{id}', [Tabel_3_B_6_Controller::class, 'update']);
    Route::get('/tabel-3-b-6/delete/{id}', [Tabel_3_B_6_Controller::class, 'destroy']);

    // Tabel 3.b.7.1
    Route::get('/tabel-3-b-7-1', [Tabel_3_B_7_1_Controller::class, 'index']);
    Route::get('/tabel-3-b-7-1/create', [Tabel_3_B_7_1_Controller::class, 'create']);
    Route::post('/tabel-3-b-7-1', [Tabel_3_B_7_1_Controller::class, 'store']);
    Route::get('/tabel-3-b-7-1/edit/{id}', [Tabel_3_B_7_1_Controller::class, 'edit']);
    Route::put('/tabel-3-b-7-1/{id}', [Tabel_3_B_7_1_Controller::class, 'update']);
    Route::get('/tabel-3-b-7-1/delete/{id}', [Tabel_3_B_7_1_Controller::class, 'destroy']);

    // Tabel 3.b.7.2
    Route::get('/tabel-3-b-7-2', [Tabel_3_B_7_2_Controller::class, 'index']);
    Route::get('/tabel-3-b-7-2/create', [Tabel_3_B_7_2_Controller::class, 'create']);
    Route::post('/tabel-3-b-7-2', [Tabel_3_B_7_2_Controller::class, 'store']);
    Route::get('/tabel-3-b-7-2/edit/{id}', [Tabel_3_B_7_2_Controller::class, 'edit']);
    Route::put('/tabel-3-b-7-2/{id}', [Tabel_3_B_7_2_Controller::class, 'update']);
    Route::get('/tabel-3-b-7-2/delete/{id}', [Tabel_3_B_7_2_Controller::class, 'destroy']);

    // Tabel 3.b.7.3
    Route::get('/tabel-3-b-7-3', [Tabel_3_B_7_3_Controller::class, 'index']);
    Route::get('/tabel-3-b-7-3/create', [Tabel_3_B_7_3_Controller::class, 'create']);
    Route::post('/tabel-3-b-7-3', [Tabel_3_B_7_3_Controller::class, 'store']);
    Route::get('/tabel-3-b-7-3/edit/{id}', [Tabel_3_B_7_3_Controller::class, 'edit']);
    Route::put('/tabel-3-b-7-3/{id}', [Tabel_3_B_7_3_Controller::class, 'update']);
    Route::get('/tabel-3-b-7-3/delete/{id}', [Tabel_3_B_7_3_Controller::class, 'destroy']);

    // Tabel 3.b.7.4
    Route::get('/tabel-3-b-7-4', [Tabel_3_B_7_4_Controller::class, 'index']);
    Route::get('/tabel-3-b-7-4/create', [Tabel_3_B_7_4_Controller::class, 'create']);
    Route::post('/tabel-3-b-7-4', [Tabel_3_B_7_4_Controller::class, 'store']);
    Route::get('/tabel-3-b-7-4/edit/{id}', [Tabel_3_B_7_4_Controller::class, 'edit']);
    Route::put('/tabel-3-b-7-4/{id}', [Tabel_3_B_7_4_Controller::class, 'update']);
    Route::get('/tabel-3-b-7-4/delete/{id}', [Tabel_3_B_7_4_Controller::class, 'destroy']);

    // Tabel 4
    Route::get('/tabel-4', [Tabel_4_Controller::class, 'index']);
    Route::get('/tabel-4/create', [Tabel_4_Controller::class, 'create']);
    Route::post('/tabel-4', [Tabel_4_Controller::class, 'store']);
    Route::get('/tabel-4/edit/{id}', [Tabel_4_Controller::class, 'edit']);
    Route::put('/tabel-4/{id}', [Tabel_4_Controller::class, 'update']);
    Route::get('/tabel-4/delete/{id}', [Tabel_4_Controller::class, 'destroy']);

    // Tabel 5.a
    Route::get('/tabel-5-a', [Tabel_5_A_Controller::class, 'index']);
    Route::get('/tabel-5-a/create', [Tabel_5_A_Controller::class, 'create']);
    Route::post('/tabel-5-a', [Tabel_5_A_Controller::class, 'store']);
    Route::get('/tabel-5-a/edit/{id}', [Tabel_5_A_Controller::class, 'edit']);
    Route::put('/tabel-5-a/{id}', [Tabel_5_A_Controller::class, 'update']);
    Route::get('/tabel-5-a/delete/{id}', [Tabel_5_A_Controller::class, 'destroy']);

    // Tabel 5.b
    Route::get('/tabel-5-b', [Tabel_5_B_Controller::class, 'index']);
    Route::get('/tabel-5-b/create', [Tabel_5_B_Controller::class, 'create']);
    Route::post('/tabel-5-b', [Tabel_5_B_Controller::class, 'store']);
    Route::get('/tabel-5-b/edit/{id}', [Tabel_5_B_Controller::class, 'edit']);
    Route::put('/tabel-5-b/{id}', [Tabel_5_B_Controller::class, 'update']);
    Route::get('/tabel-5-b/delete/{id}', [Tabel_5_B_Controller::class, 'destroy']);

    // Tabel 5.c
    Route::get('/tabel-5-c', [Tabel_5_C_Controller::class, 'index']);
    Route::get('/tabel-5-c/create', [Tabel_5_C_Controller::class, 'create']);
    Route::post('/tabel-5-c', [Tabel_5_C_Controller::class, 'store']);
    Route::get('/tabel-5-c/edit/{id}', [Tabel_5_C_Controller::class, 'edit']);
    Route::put('/tabel-5-c/{id}', [Tabel_5_C_Controller::class, 'update']);
    Route::get('/tabel-5-c/delete/{id}', [Tabel_5_C_Controller::class, 'destroy']);

    // Tabel 6.a
    Route::get('/tabel-6-a', [Tabel_6_A_Controller::class, 'index']);
    Route::get('/tabel-6-a/create', [Tabel_6_A_Controller::class, 'create']);
    Route::post('/tabel-6-a', [Tabel_6_A_Controller::class, 'store']);
    Route::get('/tabel-6-a/edit/{id}', [Tabel_6_A_Controller::class, 'edit']);
    Route::put('/tabel-6-a/{id}', [Tabel_6_A_Controller::class, 'update']);
    Route::get('/tabel-6-a/delete/{id}', [Tabel_6_A_Controller::class, 'destroy']);

    // Tabel 6.b
    Route::get('/tabel-6-b', [Tabel_6_B_Controller::class, 'index']);
    Route::get('/tabel-6-b/create', [Tabel_6_B_Controller::class, 'create']);
    Route::post('/tabel-6-b', [Tabel_6_B_Controller::class, 'store']);
    Route::get('/tabel-6-b/edit/{id}', [Tabel_6_B_Controller::class, 'edit']);
    Route::put('/tabel-6-b/{id}', [Tabel_6_B_Controller::class, 'update']);
    Route::get('/tabel-6-b/delete/{id}', [Tabel_6_B_Controller::class, 'destroy']);

    // Tabel 7
    Route::get('/tabel-7', [Tabel_7_Controller::class, 'index']);
    Route::get('/tabel-7/create', [Tabel_7_Controller::class, 'create']);
    Route::post('/tabel-7', [Tabel_7_Controller::class, 'store']);
    Route::get('/tabel-7/edit/{id}', [Tabel_7_Controller::class, 'edit']);
    Route::put('/tabel-7/{id}', [Tabel_7_Controller::class, 'update']);
    Route::get('/tabel-7/delete/{id}', [Tabel_7_Controller::class, 'destroy']);

    // Tabel 8.a
    Route::get('/tabel-8-a', [Tabel_8_A_Controller::class, 'index']);
    Route::get('/tabel-8-a/create', [Tabel_8_A_Controller::class, 'create']);
    Route::post('/tabel-8-a', [Tabel_8_A_Controller::class, 'store']);
    Route::get('/tabel-8-a/edit/{id}', [Tabel_8_A_Controller::class, 'edit']);
    Route::put('/tabel-8-a/{id}', [Tabel_8_A_Controller::class, 'update']);
    Route::get('/tabel-8-a/delete/{id}', [Tabel_8_A_Controller::class, 'destroy']);

    // Tabel 8.b.1
    Route::get('/tabel-8-b-1', [Tabel_8_B_1_Controller::class, 'index']);
    Route::get('/tabel-8-b-1/create', [Tabel_8_B_1_Controller::class, 'create']);
    Route::post('/tabel-8-b-1', [Tabel_8_B_1_Controller::class, 'store']);
    Route::get('/tabel-8-b-1/edit/{id}', [Tabel_8_B_1_Controller::class, 'edit']);
    Route::put('/tabel-8-b-1/{id}', [Tabel_8_B_1_Controller::class, 'update']);
    Route::get('/tabel-8-b-1/delete/{id}', [Tabel_8_B_1_Controller::class, 'destroy']);

    // Tabel 8.b.2
    Route::get('/tabel-8-b-2', [Tabel_8_B_2_Controller::class, 'index']);
    Route::get('/tabel-8-b-2/create', [Tabel_8_B_2_Controller::class, 'create']);
    Route::post('/tabel-8-b-2', [Tabel_8_B_2_Controller::class, 'store']);
    Route::get('/tabel-8-b-2/edit/{id}', [Tabel_8_B_2_Controller::class, 'edit']);
    Route::put('/tabel-8-b-2/{id}', [Tabel_8_B_2_Controller::class, 'update']);
    Route::get('/tabel-8-b-2/delete/{id}', [Tabel_8_B_2_Controller::class, 'destroy']);
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
// //Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
