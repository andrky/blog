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
      'active' => 'category' ,
      'categories' => Category::all(),
      'gambar' => 'Valdo'
    ]);
  }

  public function show(Category $category) {
    return view('blog', [
      'title' => "Post by Category : $category->name",
      'active' => 'category',
      'posts' => $category->posts->load(['user', 'category']),
      'gambar' => 'Valdo'
    ]);
  }  
  
}
