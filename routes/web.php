<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/test', [TestController::class, 'test']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


/**
 * 測試權限路由
 */
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('post/create', [PostController::class, 'create'])->name('post.create')->middleware('role:writer|admin');
Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');
Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->middleware('permission:edit post');
