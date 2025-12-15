@extends('layout.app')

@section('content')
<div class="container mt-5" style="max-width:700px;">
    <h2 class="text-center mb-4">Edit Profile</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone (optional)</label>
            <input name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Address (optional)</label>
            <textarea name="address" class="form-control">{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Profile Photo (optional)</label>
            <input type="file" name="photo" class="form-control">
            @if(!empty($user->photo) && file_exists(public_path($user->photo)))
                <small class="text-muted">Current: <a href="{{ asset($user->photo) }}" target="_blank">view</a></small>
            @endif
        </div>

        <button class="btn btn-success">Save Changes</button>
        <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
