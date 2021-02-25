<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/werqwe', function () {
    return view('welcome');
});
Route::get('/add',[\App\Http\Controllers\AddPostController::class, 'postView'])->name('addPost-postView');
Route::post('/add',[\App\Http\Controllers\AddPostController::class, 'create'])->name('addPost-create');
Route::get('/post/{id}',[\App\Http\Controllers\AddPostController::class, 'postInfo'])->name('addPost-postInfo');
Route::post('/post/{id}',[\App\Http\Controllers\AddPostController::class, 'postComment'])->name('addPost-postComment');
Route::get('/post/{id}/delete',[\App\Http\Controllers\AddPostController::class, 'postDelete'])->name('addPost-postComment');
Route::get('/post/{id}/edit',[\App\Http\Controllers\AddPostController::class, 'postEditForm'])->name('addPost-postEditForm');
Route::post('/post/{id}/edit',[\App\Http\Controllers\AddPostController::class, 'postEdit'])->name('addPost-postEdit');

Route::get('/',[\App\Http\Controllers\PostController::class, 'allPosts'])->name('post-allPosts');
Route::post('/login',[\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/auth',[\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
