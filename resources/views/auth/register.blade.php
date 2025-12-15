@extends('layout.app')

@section('content')
<div class="user-section">
    <h2 class="section-title text-center">Create an Account</h2>

    <form class="user-form" method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email </label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phone" required>
        </div>
        <div class="mb-3">
        <label class="form-label">Address</label>
        <textarea class="form-control" name="address" rows="3" required></textarea>
        </div>


        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button class="btn btn-primary w-100">Register</button>

        <div class="text-center mt-3">
            <p>Already have an account?
                <a href="/login">Login here</a>
            </p>
        </div>
    </form>
</div>
@endsection
