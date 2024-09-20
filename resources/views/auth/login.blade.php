@extends('layouts.master-without-nav')
@section('title')
@lang('translation.Login')
@endsection
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <div class="mb-5 d-block auth-logo">
                    <img src="{{ URL::asset('/assets/images/logo-tutwurihandayani.png') }}" alt="" height="100px" class="logo">
                    <img src="{{ URL::asset('/assets/images/logo-unesa.png') }}" alt="" height="100px" class="logo">
                    <img src="{{ URL::asset('/assets/images/logo-merdekabelajar.png') }}" alt="" height="100px" class="logo">
                    <img src="{{ URL::asset('/assets/images/logo-kampusmerdeka.png') }}" alt="" height="100px" class="logo">
                </div>
                <h3>Login</h3>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <img src="{{ URL::asset('/assets/images/logo-laminfokom.png') }}" alt="" height="100px" class="logo">
                        <h5 class="text-primary mt-3">Selamat Datang di Sistem Repositori Akreditasi</h5>
                        <p class="text-muted">Login Untuk Melanjutkan</p>
                    </div>
                    <div class="p-2 mt-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="Enter Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="float-end">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted">Forgot
                                        password?</a>
                                    @endif
                                </div>
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="auth-remember-check" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                            </div>

                            <div class="mt-3 text-end">
                                <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- end row -->
</div>
<!-- end container -->
@endsection