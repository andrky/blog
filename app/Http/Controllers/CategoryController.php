<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
    return view('categories', [
      'title' => 'Post Category',
      'categories' => Category::all(),
      'gambar' => 'Valdo'
    ]);
  }

  public function show(Category $category) {
    return view('category', [
      'title' => $category->name,
      'posts' => $category->posts,
      'category' => $category->name,
      'gambar' => 'Valdo'
    ]);
  }  
  
}
