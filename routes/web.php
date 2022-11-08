<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;

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
    return view('home', [
      'title' => 'Home',
      'gambar' => 'Lokal'
    ]);;
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}',[PostController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/authors/{user:username}', function(User $user) {
  return view('blog', [
    'title' => 'User Posts',
    'posts' => $user->posts,
    'gambar' => 'Valdo'
  ]);
});
