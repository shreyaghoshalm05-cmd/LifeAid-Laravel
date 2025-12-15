@extends('layout.app')

@section('content')
<style>
    .profile-container {
        max-width: 750px;
        margin: auto;
    }
    .profile-card {
        border-radius: 18px;
        padding: 30px;
        background: white;
        box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    }
    .avatar {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
</style>

<div class="container profile-container mt-5">
    <h2 class="text-center mb-4 fw-bold">My Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="profile-card">

        <div class="text-center mb-4">
            @php
                $photoPath = $user->photo ?? null;
            @endphp

            @if($photoPath && file_exists(public_path($photoPath)))
                <img src="{{ asset($photoPath) }}" class="avatar">
            @else
                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&size=256&background=0d6efd&color=fff" class="avatar">
            @endif
        </div>

        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        @if($user->phone)
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
        @endif

        @if($user->address)
            <p><strong>Address:</strong> {{ $user->address }}</p>
        @endif

        <hr>

        <div class="d-flex gap-2">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary flex-fill">Edit Profile</a>
            <a href="{{ route('password.change') }}" class="btn btn-warning flex-fill">Change Password</a>

            <form action="{{ route('logout') }}" method="POST" class="flex-fill">
                @csrf
                <button class="btn btn-danger w-100">Logout</button>
            </form>
        </div>

    </div>
</div>
@endsection
