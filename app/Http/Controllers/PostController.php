<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller 
{

	public function index() {
	
		$tittle = '';

		if(request('category')) {
			$category = Category::firstWhere('slug', request('category'));
			$tittle = ' in ' . $category->name;
		}

		if(request('author')) {
			$author = User::firstWhere('username', request('author'));
			$tittle = ' by ' . $author->name;
		}

		return view('blog', [
			"title" => "All Post $tittle",
			'active' => 'blog',
			"posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
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