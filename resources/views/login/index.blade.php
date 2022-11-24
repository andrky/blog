@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-signin w-100 m-auto">
                <h4 class="h4 mb-3 fw-normal">Form Login</h4>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" style="font-size: 14px">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" style="font-size: 14px">Password</label>
                    </div>
                    <button class="mt-3 for-hover w-100 text-light btn btn-md" type="submit">Login</button>
                </form>
                <small class="d-block mt-3">Not Registered? <a href="/register" class="text-decoration-none">Register now!</a></small>
            </main>
        </div>
    </div>
@endsection
