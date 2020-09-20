<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FluentController;
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

// Route::get('/',[ProductController::class,'index']) -> name('product','index');

// Route::get('/user', function () {
//     return view('home');
// });

// Route::get('/pavi/{name}',[UserController::class, 'index']) ->name('pavi.index');

Route::get('/home',[UserController::class,'index']) ->name('home.index');

Route::get('/post',[ProductController::class,'getAllPost'])->name('post.getAllPost');

Route::get('/post/{id}',[ProductController::class,'getPostById'])->name('post.getPostById');

Route::get('/add-post',[ProductController::class,'addPost'])->name('post.addPost');

Route::get('/update-post',[ProductController::class,'updatePost']);

Route::get('/delete-post/{id}',[ProductController::class,'deletepost']);

Route::get('/fluent-string',[FluentController::class,'index'])->name('fluent.index');