@extends('layouts.auth')

@section('title','Forgot-Password')
@section('content')
<div class="form-container">
    <div class="form-box">
        <h2>Forgot Password</h2>
        <!-- Display Errors -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Forgot Password Form -->
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="submit-btn">Send Reset Link</button>
        </form>

        <div class="form-footer">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
</div>
@endsection
