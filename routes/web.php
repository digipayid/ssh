<?php

use App\Http\Controllers\{
    AdminDashboardController,
    DashboardController,
    DashboardDetailPengajuanController,
    DashboardPengajuanController,
    ListUserController,
    LoginController,
    RegisterController
};
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/pengajuan', DashboardPengajuanController::class)->middleware('auth');
Route::resource('/dashboard/mengajukan', DashboardDetailPengajuanController::class)->middleware('auth');

Route::resource('/dashboard/admin', AdminDashboardController::class)->middleware('admin');
Route::resource('/dashboard/users', ListUserController::class)->middleware('admin');