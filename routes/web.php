<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home', [
      'title' => 'Home',
      'gambar' => 'Lokal'
    ]);;
});

Route::get('/home', function () {
    return view('home', [
      'title' => 'Home',
      'gambar' => 'Lokal'
    ]);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'gambar' => 'Lokal'
  ]);
});

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/category', function() {
  return view('categories', [
    'title' => 'Post Category',
    'categories' => Category::all(),
    'gambar' => 'Valdo'
  ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
  return view('category', [
    'title' => $category->name,
    'posts' => $category->posts,
    'category' => $category->name,
    'gambar' => 'Valdo'
  ]);
});
