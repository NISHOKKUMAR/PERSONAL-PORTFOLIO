
@extends('layouts.auth')

@section('title','Reset-Password')
@section('content')
<div class="form-container">
    <div class="form-box">
        <h2>Reset Password</h2>
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

        <!-- Reset Password Form -->
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ request()->token }}">

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="submit-btn">Reset Password</button>
        </form>

        <div class="form-footer">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
</div>
@endsection
