@extends('layouts.authLayouts');

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('lupa.password.index') }}"><b>Lupa </b>Password?</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Anda lupa password akun? Di sini Anda dapat dengan mudah mengganti password
                    baru.</p>

                <form action="recover-password.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Password Baru</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <p class="d-flex justify-content-center mt-2 mb-1">
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
