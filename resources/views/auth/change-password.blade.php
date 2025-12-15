@extends('layout.app')

@section('content')
<div class="container mt-5" style="max-width:600px;">
    <h2 class="text-center mb-4">Change Password</h2>

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('profile.change_password') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Current Password</label>
            <input type="password" name="current_password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>New Password</label>
            <input type="password" name="new_password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm New Password</label>
            <input type="password" name="new_password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-primary">Change Password</button>
        <a href="{{ route('profile') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
