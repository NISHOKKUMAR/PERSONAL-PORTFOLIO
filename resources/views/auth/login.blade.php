
@extends('layouts.auth')

@section('title','Login')
@section('content')
<div class="form-container">
    <div class="form-box">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')<p class="error">{{ $message }}</p>@enderror
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')<p class="error">{{ $message }}</p>@enderror
            </div>

            <div class="form-footer">
                <button type="submit" class="submit-btn">Login</button>
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                <p>Forgot Password ? <a href="{{ route('password.request') }}">Reset Password</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
