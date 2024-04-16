<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/post', [PostController::class, 'show'])->name('post');
Route::get('/add-post', [PostController::class, 'create'])->name('post.create');
Route::post('/add-post', [PostController::class, 'store'])->name('post.store');

Route::get('/edit-post/{id}', [PostController::class, 'edit'])->name('postEdit');
Route::post('/update-post/{id}', [PostController::class, 'update'])->name('postUpdate');

Route::get('/delete-post/{id}', [PostController::class, 'delete'])->name('postDelete');

require __DIR__.'/auth.php';