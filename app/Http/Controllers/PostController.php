<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
      return view('blog', [
        "title" => "Post",
        "posts" => Post::all(),
        "gambar" => "Lokal"
      ]);
    }

    public function show($slug) {
      return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug),
        "gambar" => "Valdo"
      ]);
    }
}
