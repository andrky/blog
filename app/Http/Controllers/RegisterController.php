<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
			return view('register.index', [
				'title' => "Register",
				'active' => 'register',
				'gambar' => "Valdo"
			]);
		}

		public function store(Request $request) {
			$validateData = $request->validate([
				'name' => 'required|max:255',
				'username' => 'required|min:3|max:255|unique:users',
				'email' => 'required|email:dns|unique:users',
				'password' => 'required|min:8|max:155'
			]);

			$validateData['password'] = Hash::make($validateData['password']);

			User::create($validateData);

			// $request->session()->flash('success', 'Registraion success! Please login!');

			return redirect('/login')->with('success', 'Registration success! Please login!');
		}
}
