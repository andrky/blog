<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
      return view('about', [
        'title' => 'About',
        'active' => 'about',
        'gambar' => 'Lokal'
      ]);
    }
}
