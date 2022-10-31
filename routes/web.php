<?php

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
      "tittle" => "Home",
      "gambar" => "Lokal"
    ]);;
});

Route::get('/home', function () {
    return view('home', [
      "tittle" => "Home",
      "gambar" => "Lokal"
    ]);
});

Route::get('/about', function () {
  return view('about', [
    "tittle" => "About",
    "gambar" => "Lokal"
  ]);
});

Route::get('/post', function () {
  $blog_posts = [
    [
      "tittle" => "Surga Duniawi",
      "slug" => "surga-duniawi",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ],
    [
      "tittle" => "Indahnya Negeriku",
      "slug" => "indahnya-negeriku",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ],
    [
      "tittle" => "Malam Pertama",
      "slug" => "malam-pertama",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ]
  ];

  return view('blog', [
    "tittle" => "Post",
    "posts" => $blog_posts,
    "gambar" => "Lokal"
  ]);
});

Route::get('/post/{slug}', function($slug) {
  $blog_posts = [
    [
      "tittle" => "Surga Duniawi",
      "slug" => "surga-duniawi",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ],
    [
      "tittle" => "Indahnya Negeriku",
      "slug" => "indahnya-negeriku",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ],
    [
      "tittle" => "Malam Pertama",
      "slug" => "malam-pertama",
      "author" => "M. Ananda Rizky Audriansyah",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quo dicta sint ab laudantium repudiandae dolor doloribus recusandae eius, esse quia voluptatibus numquam aspernatur, modi quaerat corrupti praesentium! Atque facilis modi commodi soluta architecto veniam dolorem laboriosam accusantium nisi laudantium eveniet, eligendi quam itaque doloribus adipisci corrupti sed, sapiente et dignissimos sit esse hic? Mollitia perspiciatis voluptates nemo numquam sint cum maiores sunt voluptatibus excepturi recusandae inventore ipsa qui, ex ad voluptas adipisci velit suscipit? Facere nulla eum incidunt rerum."
    ]
  ];

  $new_post = [];
  foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
      $new_post = $post;
    }
  }
  
  return view('post', [
    "tittle" => "Postingan Pertama",
    "post" => $new_post,
    "gambar" => "Valdo"
  ]);
});
