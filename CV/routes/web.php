<?php

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

Route::middleware(['set_locale'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});
    Route::get('/locale/{locale}', [App\Http\Controllers\HomeController::class, 'changeLocal'])->name('local');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'get_post']);

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
});
