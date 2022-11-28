@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration w-100 m-auto">
                <h4 class="h4 mb-3 fw-normal">Form Register</h4>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Nama" required value="{{ old('name') }}">
                        <label for="floatingInput" style="font-size: 14px">Nama</label>
												@error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
												@enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="floatingInput" style="font-size: 14px">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
												@enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="floatingInput" style="font-size: 14px">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
												@enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" required
                            placeholder="Password">
                        <label for="floatingPassword" style="font-size: 14px">Password</label>
												@error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
												@enderror
                    </div>
                    <button class="mt-3 for-hover w-100 text-light btn btn-md" type="submit">Register</button>
                </form>
                <small class="d-block mt-3">Already registered? <a href="/login" class="text-decoration-none">Login
                        now!</a></small>
            </main>
        </div>
    </div>
@endsection
