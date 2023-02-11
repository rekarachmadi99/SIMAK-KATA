@extends('layouts.authLayouts');

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('login') }}"><b>SIMAK</b> KATA</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            {{-- Alert --}}
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong class="text-center">{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <strong class="text-center">{{ $message }}</strong>
            </div>
            @endif
            {{-- Akhir Alert --}}
            <p class="login-box-msg">Sign in untuk memulai sesi anda</p>

            <form action="{{ route('login.post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <input type="nip" class="form-control @error('nip') {{ 'is-invalid' }}@enderror" name="nip" placeholder="Nip">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('nip')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control @error('password') {{ 'is-invalid' }}@enderror" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <br>
                    </div>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-8">
                        <a href="{{ route('lupa.password.index') }}">Lupa Password?</a>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
