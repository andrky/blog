<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
      return view('blog', [
        "title" => "All Post",
        "posts" => Post::with(['category', 'user'])->latest()->get(),
        "gambar" => "Lokal"
      ]);
    }

    public function show(Post $post) {
      return view('post', [
        "title" => "Single Post",
        "post" => $post,
        "gambar" => "Valdo"
      ]);
    }
}
