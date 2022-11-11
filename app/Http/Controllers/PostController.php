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
        'active' => 'blog',
        "posts" => Post::latest()->get(),
        "gambar" => "Lokal"
      ]);
    }

    public function show(Post $post) {
      return view('post', [
        "title" => "Single Post",
        'active' => 'post',
        "post" => $post,
        "gambar" => "Valdo"
      ]);
    }
}
