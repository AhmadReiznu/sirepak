<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tabel1Controller;
use App\Http\Controllers\KerjasamaPendidikan;
use App\Http\Controllers\Tabel_1_1_Controller;
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
use App\Http\Controllers\Tabel_3_B_4_2_Controller;
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
use App\Http\Controllers\Tabel_8_B_1_Controller;
use App\Http\Controllers\Tabel_8_B_2_Controller;
use App\Http\Controllers\Tabel_8_C_1_Controller;
use App\Http\Controllers\Tabel_8_C_2_Controller;
use App\Http\Controllers\Tabel_8_C_3_Controller;
use App\Http\Controllers\Tabel_8_C_4_Controller;
use App\Http\Controllers\Tabel_8_D_1_A_Controller;
use App\Http\Controllers\Tabel_8_D_1_B_Controller;
use App\Http\Controllers\Tabel_8_D_1_C_Controller;
use App\Http\Controllers\Tabel_8_D_2_Controller;
use App\Http\Controllers\Tabel_8_E_1_Controller;
use App\Http\Controllers\Tabel_8_E_2_Controller;
use App\Http\Controllers\Tabel_8_F_1_1_Controller;
use App\Http\Controllers\Tabel_8_F_1_2_Controller;
use App\Http\Controllers\Tabel_8_F_2_Controller;
use App\Http\Controllers\Tabel_8_F_3_Controller;
use App\Http\Controllers\Tabel_8_F_4_1_Controller;
use App\Http\Controllers\Tabel_8_F_4_2_Controller;
use App\Http\Controllers\Tabel_8_F_4_3_Controller;
use App\Http\Controllers\Tabel_8_F_4_4_Controller;
use App\Http\Controllers\Tabel_Ref_8_E_2_Controller;
use App\Http\Controllers\UserController;
use App\Models\Tabel_3_A_1;
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

// Route::get('/logic-testing', [UserController::class, 'index']);
// Route::get('/logic-testing/create', [UserController::class, 'create']);
// Route::get('/logic-testing/edit/{id}', [UserController::class, 'edit']);
// Route::post('/logic-testing', [UserController::class, 'store']);
// Route::put('/logic-testing/{id}', [UserController::class, 'update']);
// Route::get('/logic-testing/delete/{id}', [UserController::class, 'destroy']);

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
// //Language Translation

Route::get('index/{locale}', [App\Http\Controllers\DashboardController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\DashboardController::class, 'FormSubmit'])->name('FormSubmit');

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // Create user

    Route::resource('users', UserController::class);
    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/create', [UserController::class, 'create']);
    // Route::post('/users', [UserController::class, 'store']);
    // Route::get('/users/delete/{id}', [UserController::class, 'destroy']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/change-password', [HomeController::class, 'changePassword']);
    Route::post('/change-password/{id}', [HomeController::class, 'updatePassword']);

    // Tabel 1.1
    Route::resource('tabel-1-1', Tabel_1_1_Controller::class);

    // Tabel 1.2
    Route::resource('tabel-1-2', Tabel_1_2_Controller::class);

    // Tabel 1.3
    Route::resource('tabel-1-3', Tabel_1_3_Controller::class);

    // Tabel 2.a
    Route::resource('tabel-2-a', Tabel_2_A_Controller::class);

    // Tabel 2.b
    Route::resource('tabel-2-b', Tabel_2_B_Controller::class);

    // Tabel 3.a.1
    Route::resource('tabel-3-a-1', Tabel_3_A_1_Controller::class);

    // Tabel 3.a.2
    Route::resource('tabel-3-a-2', Tabel_3_A_2_Controller::class);

    // Tabel 3.a.3
    Route::resource('tabel-3-a-3', Tabel_3_A_3_Controller::class);

    // Tabel 3.a.4
    Route::resource('tabel-3-a-4', Tabel_3_A_4_Controller::class);

    // Tabel 3.a.5
    Route::resource('tabel-3-a-5', Tabel_3_A_5_Controller::class);

    // Tabel 3.b.1
    Route::resource('tabel-3-b-1', Tabel_3_B_1_Controller::class);

    // Tabel 3.b.2
    Route::resource('tabel-3-b-2', Tabel_3_B_2_Controller::class);

    // Tabel 3.b.3
    Route::resource('tabel-3-b-3', Tabel_3_B_3_Controller::class);

    // Tabel 3.b.4.1
    Route::resource('tabel-3-b-4-1', Tabel_3_B_4_1_Controller::class);

    // Tabel 3.b.4.2
    Route::resource('tabel-3-b-4-2', Tabel_3_B_4_2_Controller::class);

    // Tabel 3.b.5
    Route::resource('tabel-3-b-5', Tabel_3_B_5_Controller::class);

    // Tabel 3.b.6
    Route::resource('tabel-3-b-6', Tabel_3_B_6_Controller::class);

    // Tabel 3.b.7.1
    Route::resource('tabel-3-b-7-1', Tabel_3_B_7_1_Controller::class);

    // Tabel 3.b.7.2
    Route::resource('tabel-3-b-7-2', Tabel_3_B_7_2_Controller::class);

    // Tabel 3.b.7.3
    Route::resource('tabel-3-b-7-3', Tabel_3_B_7_3_Controller::class);

    // Tabel 3.b.7.4
    Route::resource('tabel-3-b-7-4', Tabel_3_B_7_4_Controller::class);

    // Tabel 4
    Route::resource('tabel-4', Tabel_4_Controller::class);

    // Tabel 5.a
    Route::resource('tabel-5-a', Tabel_5_A_Controller::class);

    // Tabel 5.b
    Route::resource('tabel-5-b', Tabel_5_B_Controller::class);

    // Tabel 5.c
    Route::resource('tabel-5-c', Tabel_5_C_Controller::class);

    // Tabel 6.a
    Route::resource('tabel-6-a', Tabel_6_A_Controller::class);

    // Tabel 6.b
    Route::resource('tabel-6-b', Tabel_6_B_Controller::class);

    // Tabel 7
    Route::resource('tabel-7', Tabel_7_Controller::class);

    // Tabel 8.a
    Route::resource('tabel-8-a', Tabel_8_A_Controller::class);
    // Route::get('/tabel-8-a', [Tabel_8_A_Controller::class, 'index']);
    // Route::get('/tabel-8-a/create', [Tabel_8_A_Controller::class, 'create']);
    // Route::post('/tabel-8-a', [Tabel_8_A_Controller::class, 'store']);
    // Route::get('/tabel-8-a/edit/{id}', [Tabel_8_A_Controller::class, 'edit']);
    // Route::put('/tabel-8-a/{id}', [Tabel_8_A_Controller::class, 'update']);
    // Route::get('/tabel-8-a/delete/{id}', [Tabel_8_A_Controller::class, 'destroy']);

    // Tabel 8.b.1
    Route::resource('tabel-8-b-1', Tabel_8_B_1_Controller::class);
    // Route::get('/tabel-8-b-1', [Tabel_8_B_1_Controller::class, 'index']);
    // Route::get('/tabel-8-b-1/create', [Tabel_8_B_1_Controller::class, 'create']);
    // Route::post('/tabel-8-b-1', [Tabel_8_B_1_Controller::class, 'store']);
    // Route::get('/tabel-8-b-1/edit/{id}', [Tabel_8_B_1_Controller::class, 'edit']);
    // Route::put('/tabel-8-b-1/{id}', [Tabel_8_B_1_Controller::class, 'update']);
    // Route::get('/tabel-8-b-1/delete/{id}', [Tabel_8_B_1_Controller::class, 'destroy']);

    // Tabel 8.b.2
    Route::resource('tabel-8-b-2', Tabel_8_B_2_Controller::class);
    // Route::get('/tabel-8-b-2', [Tabel_8_B_2_Controller::class, 'index']);
    // Route::get('/tabel-8-b-2/create', [Tabel_8_B_2_Controller::class, 'create']);
    // Route::post('/tabel-8-b-2', [Tabel_8_B_2_Controller::class, 'store']);
    // Route::get('/tabel-8-b-2/edit/{id}', [Tabel_8_B_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-b-2/{id}', [Tabel_8_B_2_Controller::class, 'update']);
    // Route::get('/tabel-8-b-2/delete/{id}', [Tabel_8_B_2_Controller::class, 'destroy']);

    // Tabel 8.c.1
    Route::resource('tabel-8-c-1', Tabel_8_C_1_Controller::class);
    // Route::get('/tabel-8-c-1', [Tabel_8_C_1_Controller::class, 'index']);
    // Route::get('/tabel-8-c-1/create', [Tabel_8_C_1_Controller::class, 'create']);
    // Route::post('/tabel-8-c-1', [Tabel_8_C_1_Controller::class, 'store']);
    // Route::get('/tabel-8-c-1/edit/{id}', [Tabel_8_C_1_Controller::class, 'edit']);
    // Route::put('/tabel-8-c-1/{id}', [Tabel_8_C_1_Controller::class, 'update']);
    // Route::get('/tabel-8-c-1/delete/{id}', [Tabel_8_C_1_Controller::class, 'destroy']);

    // Tabel 8.c.2
    Route::resource('tabel-8-c-2', Tabel_8_C_2_Controller::class);
    // Route::get('/tabel-8-c-2', [Tabel_8_C_2_Controller::class, 'index']);
    // Route::get('/tabel-8-c-2/create', [Tabel_8_C_2_Controller::class, 'create']);
    // Route::post('/tabel-8-c-2', [Tabel_8_C_2_Controller::class, 'store']);
    // Route::get('/tabel-8-c-2/edit/{id}', [Tabel_8_C_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-c-2/{id}', [Tabel_8_C_2_Controller::class, 'update']);
    // Route::get('/tabel-8-c-2/delete/{id}', [Tabel_8_C_2_Controller::class, 'destroy']);

    // Tabel 8.c.3
    Route::resource('tabel-8-c-3', Tabel_8_C_3_Controller::class);
    // Route::get('/tabel-8-c-3', [Tabel_8_C_3_Controller::class, 'index']);
    // Route::get('/tabel-8-c-3/create', [Tabel_8_C_3_Controller::class, 'create']);
    // Route::post('/tabel-8-c-3', [Tabel_8_C_3_Controller::class, 'store']);
    // Route::get('/tabel-8-c-3/edit/{id}', [Tabel_8_C_3_Controller::class, 'edit']);
    // Route::put('/tabel-8-c-3/{id}', [Tabel_8_C_3_Controller::class, 'update']);
    // Route::get('/tabel-8-c-3/delete/{id}', [Tabel_8_C_3_Controller::class, 'destroy']);

    // Tabel 8.c.4
    Route::resource('tabel-8-c-4', Tabel_8_C_4_Controller::class);
    // Route::get('/tabel-8-c-4', [Tabel_8_C_4_Controller::class, 'index']);
    // Route::get('/tabel-8-c-4/create', [Tabel_8_C_4_Controller::class, 'create']);
    // Route::post('/tabel-8-c-4', [Tabel_8_C_4_Controller::class, 'store']);
    // Route::get('/tabel-8-c-4/edit/{id}', [Tabel_8_C_4_Controller::class, 'edit']);
    // Route::put('/tabel-8-c-4/{id}', [Tabel_8_C_4_Controller::class, 'update']);
    // Route::get('/tabel-8-c-4/delete/{id}', [Tabel_8_C_4_Controller::class, 'destroy']);

    // Tabel 8.d.1.a
    Route::resource('tabel-8-d-1-a', Tabel_8_D_1_A_Controller::class);
    // Route::get('/tabel-8-d-1-a', [Tabel_8_D_1_A_Controller::class, 'index']);
    // Route::get('/tabel-8-d-1-a/create', [Tabel_8_D_1_A_Controller::class, 'create']);
    // Route::post('/tabel-8-d-1-a', [Tabel_8_D_1_A_Controller::class, 'store']);
    // Route::get('/tabel-8-d-1-a/edit/{id}', [Tabel_8_D_1_A_Controller::class, 'edit']);
    // Route::put('/tabel-8-d-1-a/{id}', [Tabel_8_D_1_A_Controller::class, 'update']);
    // Route::get('/tabel-8-d-1-a/delete/{id}', [Tabel_8_D_1_A_Controller::class, 'destroy']);

    // Tabel 8.d.1.b
    Route::resource('tabel-8-d-1-b', Tabel_8_D_1_B_Controller::class);
    // Route::get('/tabel-8-d-1-b', [Tabel_8_D_1_B_Controller::class, 'index']);
    // Route::get('/tabel-8-d-1-b/create', [Tabel_8_D_1_B_Controller::class, 'create']);
    // Route::post('/tabel-8-d-1-b', [Tabel_8_D_1_B_Controller::class, 'store']);
    // Route::get('/tabel-8-d-1-b/edit/{id}', [Tabel_8_D_1_B_Controller::class, 'edit']);
    // Route::put('/tabel-8-d-1-b/{id}', [Tabel_8_D_1_B_Controller::class, 'update']);
    // Route::get('/tabel-8-d-1-b/delete/{id}', [Tabel_8_D_1_B_Controller::class, 'destroy']);

    // Tabel 8.d.1.c
    Route::resource('tabel-8-d-1-c', Tabel_8_D_1_C_Controller::class);
    // Route::get('/tabel-8-d-1-c', [Tabel_8_D_1_C_Controller::class, 'index']);
    // Route::get('/tabel-8-d-1-c/create', [Tabel_8_D_1_C_Controller::class, 'create']);
    // Route::post('/tabel-8-d-1-c', [Tabel_8_D_1_C_Controller::class, 'store']);
    // Route::get('/tabel-8-d-1-c/edit/{id}', [Tabel_8_D_1_C_Controller::class, 'edit']);
    // Route::put('/tabel-8-d-1-c/{id}', [Tabel_8_D_1_C_Controller::class, 'update']);
    // Route::get('/tabel-8-d-1-c/delete/{id}', [Tabel_8_D_1_C_Controller::class, 'destroy']);

    // Tabel 8.d.2
    Route::resource('tabel-8-d-2', Tabel_8_D_2_Controller::class);
    // Route::get('/tabel-8-d-2', [Tabel_8_D_2_Controller::class, 'index']);
    // Route::get('/tabel-8-d-2/create', [Tabel_8_D_2_Controller::class, 'create']);
    // Route::post('/tabel-8-d-2', [Tabel_8_D_2_Controller::class, 'store']);
    // Route::get('/tabel-8-d-2/edit/{id}', [Tabel_8_D_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-d-2/{id}', [Tabel_8_D_2_Controller::class, 'update']);
    // Route::get('/tabel-8-d-2/delete/{id}', [Tabel_8_D_2_Controller::class, 'destroy']);

    // Tabel 8.e.1
    Route::resource('tabel-8-e-1', Tabel_8_E_1_Controller::class);
    // Route::get('/tabel-8-e-1', [Tabel_8_E_1_Controller::class, 'index']);
    // Route::get('/tabel-8-e-1/create', [Tabel_8_E_1_Controller::class, 'create']);
    // Route::post('/tabel-8-e-1', [Tabel_8_E_1_Controller::class, 'store']);
    // Route::get('/tabel-8-e-1/edit/{id}', [Tabel_8_E_1_Controller::class, 'edit']);
    // Route::put('/tabel-8-e-1/{id}', [Tabel_8_E_1_Controller::class, 'update']);
    // Route::get('/tabel-8-e-1/delete/{id}', [Tabel_8_E_1_Controller::class, 'destroy']);

    // Tabel 8.e.2
    Route::resource('tabel-8-e-2', Tabel_8_E_2_Controller::class);
    // Route::get('/tabel-8-e-2', [Tabel_8_E_2_Controller::class, 'index']);
    // Route::get('/tabel-8-e-2/create', [Tabel_8_E_2_Controller::class, 'create']);
    // Route::post('/tabel-8-e-2', [Tabel_8_E_2_Controller::class, 'store']);
    // Route::get('/tabel-8-e-2/edit/{id}', [Tabel_8_E_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-e-2/{id}', [Tabel_8_E_2_Controller::class, 'update']);
    // Route::get('/tabel-8-e-2/delete/{id}', [Tabel_8_E_2_Controller::class, 'destroy']);

    // Tabel 8.f.1.1
    Route::resource('tabel-8-f-1-1', Tabel_8_F_1_1_Controller::class);
    // Route::get('/tabel-8-f-1-1', [Tabel_8_F_1_1_Controller::class, 'index']);
    // Route::get('/tabel-8-f-1-1/create', [Tabel_8_F_1_1_Controller::class, 'create']);
    // Route::post('/tabel-8-f-1-1', [Tabel_8_F_1_1_Controller::class, 'store']);
    // Route::get('/tabel-8-f-1-1/edit/{id}', [Tabel_8_F_1_1_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-1-1/{id}', [Tabel_8_F_1_1_Controller::class, 'update']);
    // Route::get('/tabel-8-f-1-1/delete/{id}', [Tabel_8_F_1_1_Controller::class, 'destroy']);

    // Tabel 8.f.1.2
    Route::resource('tabel-8-f-1-2', Tabel_8_F_1_2_Controller::class);
    // Route::get('/tabel-8-f-1-2', [Tabel_8_F_1_2_Controller::class, 'index']);
    // Route::get('/tabel-8-f-1-2/create', [Tabel_8_F_1_2_Controller::class, 'create']);
    // Route::post('/tabel-8-f-1-2', [Tabel_8_F_1_2_Controller::class, 'store']);
    // Route::get('/tabel-8-f-1-2/edit/{id}', [Tabel_8_F_1_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-1-2/{id}', [Tabel_8_F_1_2_Controller::class, 'update']);
    // Route::get('/tabel-8-f-1-2/delete/{id}', [Tabel_8_F_1_2_Controller::class, 'destroy']);

    // Tabel 8.f.2
    Route::resource('tabel-8-f-2', Tabel_8_F_2_Controller::class);
    // Route::get('/tabel-8-f-2', [Tabel_8_F_2_Controller::class, 'index']);
    // Route::get('/tabel-8-f-2/create', [Tabel_8_F_2_Controller::class, 'create']);
    // Route::post('/tabel-8-f-2', [Tabel_8_F_2_Controller::class, 'store']);
    // Route::get('/tabel-8-f-2/edit/{id}', [Tabel_8_F_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-2/{id}', [Tabel_8_F_2_Controller::class, 'update']);
    // Route::get('/tabel-8-f-2/delete/{id}', [Tabel_8_F_2_Controller::class, 'destroy']);

    // Tabel 8.f.3
    Route::resource('tabel-8-f-3', Tabel_8_F_3_Controller::class);
    // Route::get('/tabel-8-f-3', [Tabel_8_F_3_Controller::class, 'index']);
    // Route::get('/tabel-8-f-3/create', [Tabel_8_F_3_Controller::class, 'create']);
    // Route::post('/tabel-8-f-3', [Tabel_8_F_3_Controller::class, 'store']);
    // Route::get('/tabel-8-f-3/edit/{id}', [Tabel_8_F_3_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-3/{id}', [Tabel_8_F_3_Controller::class, 'update']);
    // Route::get('/tabel-8-f-3/delete/{id}', [Tabel_8_F_3_Controller::class, 'destroy']);

    // Tabel 8.f.4.1
    Route::resource('tabel-8-f-4-1', Tabel_8_F_4_1_Controller::class);
    // Route::get('/tabel-8-f-4-1', [Tabel_8_F_4_1_Controller::class, 'index']);
    // Route::get('/tabel-8-f-4-1/create', [Tabel_8_F_4_1_Controller::class, 'create']);
    // Route::post('/tabel-8-f-4-1', [Tabel_8_F_4_1_Controller::class, 'store']);
    // Route::get('/tabel-8-f-4-1/edit/{id}', [Tabel_8_F_4_1_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-4-1/{id}', [Tabel_8_F_4_1_Controller::class, 'update']);
    // Route::get('/tabel-8-f-4-1/delete/{id}', [Tabel_8_F_4_1_Controller::class, 'destroy']);

    // Tabel 8.f.4.2
    Route::resource('tabel-8-f-4-2', Tabel_8_F_4_2_Controller::class);
    // Route::get('/tabel-8-f-4-2', [Tabel_8_F_4_2_Controller::class, 'index']);
    // Route::get('/tabel-8-f-4-2/create', [Tabel_8_F_4_2_Controller::class, 'create']);
    // Route::post('/tabel-8-f-4-2', [Tabel_8_F_4_2_Controller::class, 'store']);
    // Route::get('/tabel-8-f-4-2/edit/{id}', [Tabel_8_F_4_2_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-4-2/{id}', [Tabel_8_F_4_2_Controller::class, 'update']);
    // Route::get('/tabel-8-f-4-2/delete/{id}', [Tabel_8_F_4_2_Controller::class, 'destroy']);

    // Tabel 8.f.4.3
    Route::resource('tabel-8-f-4-3', Tabel_8_F_4_3_Controller::class);
    // Route::get('/tabel-8-f-4-3', [Tabel_8_F_4_3_Controller::class, 'index']);
    // Route::get('/tabel-8-f-4-3/create', [Tabel_8_F_4_3_Controller::class, 'create']);
    // Route::post('/tabel-8-f-4-3', [Tabel_8_F_4_3_Controller::class, 'store']);
    // Route::get('/tabel-8-f-4-3/edit/{id}', [Tabel_8_F_4_3_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-4-3/{id}', [Tabel_8_F_4_3_Controller::class, 'update']);
    // Route::get('/tabel-8-f-4-3/delete/{id}', [Tabel_8_F_4_3_Controller::class, 'destroy']);

    // Tabel 8.f.4.4
    Route::resource('tabel-8-f-4-4', Tabel_8_F_4_4_Controller::class);
    // Route::get('/tabel-8-f-4-4', [Tabel_8_F_4_4_Controller::class, 'index']);
    // Route::get('/tabel-8-f-4-4/create', [Tabel_8_F_4_4_Controller::class, 'create']);
    // Route::post('/tabel-8-f-4-4', [Tabel_8_F_4_4_Controller::class, 'store']);
    // Route::get('/tabel-8-f-4-4/edit/{id}', [Tabel_8_F_4_4_Controller::class, 'edit']);
    // Route::put('/tabel-8-f-4-4/{id}', [Tabel_8_F_4_4_Controller::class, 'update']);
    // Route::get('/tabel-8-f-4-4/delete/{id}', [Tabel_8_F_4_4_Controller::class, 'destroy']);

    // Tabel Ref 8.e.2
    Route::resource('tabel-ref-8-e-2', Tabel_Ref_8_E_2_Controller::class);
    // Route::get('/tabel-ref-8-e-2', [Tabel_Ref_8_E_2_Controller::class, 'index']);
    // Route::get('/tabel-ref-8-e-2/create', [Tabel_Ref_8_E_2_Controller::class, 'create']);
    // Route::post('/tabel-ref-8-e-2', [Tabel_Ref_8_E_2_Controller::class, 'store']);
    // Route::get('/tabel-ref-8-e-2/edit/{id}', [Tabel_Ref_8_E_2_Controller::class, 'edit']);
    // Route::put('/tabel-ref-8-e-2/{id}', [Tabel_Ref_8_E_2_Controller::class, 'update']);
    // Route::get('/tabel-ref-8-e-2/delete/{id}', [Tabel_Ref_8_E_2_Controller::class, 'destroy']);
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
