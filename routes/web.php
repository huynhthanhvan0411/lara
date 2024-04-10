<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
//client
Route::get('/', [HomeController::class, 'show'])->name('home');
//admin
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'show'])->name('admin');
});
// Route::get('/admin', [AdminController::class, 'show'])->name('admin');