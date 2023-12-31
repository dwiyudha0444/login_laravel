<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardClientController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('client.dashboard');
// });

// Route::get('/dashboard-admin', function () {
//     return view('admin.dashboard');
// });

//halaman admin
Route::resource('/dashboard-admin', DashboardAdminController::class)->middleware('auth');
//halaman client
Route::resource('/dashboard', DashboardClientController::class)->middleware('auth');
