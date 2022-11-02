<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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

  public static function all() {
    return collect(self::$blog_posts);
  } 

  public static function find($slug) {
    $posts = static::all();
    
    return $posts->firstWhere('slug', $slug);
  }
}
