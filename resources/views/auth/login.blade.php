@extends('layout.app')

@section('content')
<div class="user-section">
    <h2 class="section-title text-center">Login to Your Account</h2>

    <form class="user-form" method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email </label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button class="btn btn-primary w-100">Login</button>

        <div class="text-center mt-3">
            <p>Don't have an account?
                <a href="/register">Register here</a>
            </p>
        </div>
    </form>
</div>
@endsection
