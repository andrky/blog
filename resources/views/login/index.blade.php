@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
						@if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
						@endif
						@if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
						@endif
            <main class="form-signin w-100 m-auto">
                <h4 class="h4 mb-3 fw-normal">Form Login</h4>
                <form action="/login" method="post">
									@csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-mail" required autofocus value="{{ old('email') }}">
                        <label for="floatingInput" style="font-size: 14px">Email address</label>
												@error('email')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="floatingPassword" style="font-size: 14px">Password</label>
                    </div>
                    <button class="mt-3 for-hover w-100 text-light btn btn-md" type="submit">Login</button>
                </form>
                <small class="d-block mt-3">Not Registered? <a href="/register" class="text-decoration-none">Register
                        now!</a></small>
            </main>
        </div>
    </div>
@endsection
