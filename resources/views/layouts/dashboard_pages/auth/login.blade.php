@extends('layouts.dashboard_pages.layout')

@section('page_title')
    <b>Login</b> with your current Account
@endsection

@section('page_type', 'login')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="input-group mb-3">
            <input id="email" required autocomplete="email" autofocus value="{{ old('email') }}" type="email" name="email"
                class="form-control @error('email') is-invalid @enderror">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div class="input-group mb-3">
            <input id="password" required autocomplete="current-password" name="password" type="password" class="form-control @error('password') is-invalid @enderror">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        Remember Me
                    </label>
                </div>
            </div>
            
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            
        </div>
    </form>
    
    @if (Route::has('password.request'))
    <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
    </p>
    @endif
@endsection
