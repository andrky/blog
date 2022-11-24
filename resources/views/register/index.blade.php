@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration w-100 m-auto">
                <h4 class="h4 mb-3 fw-normal">Form Register</h4>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Nama">
                        <label for="floatingInput" style="font-size: 14px">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="floatingInput" style="font-size: 14px">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" style="font-size: 14px">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword" style="font-size: 14px">Password</label>
                    </div>
                    <button class="mt-3 for-hover w-100 text-light btn btn-md" type="submit">Register</button>
                </form>
                <small class="d-block mt-3">Already registered? <a href="/login" class="text-decoration-none">Login
                        now!</a></small>
            </main>
        </div>
    </div>
@endsection
