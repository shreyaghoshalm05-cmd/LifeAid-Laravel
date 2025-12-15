@extends('layout.app')

@section('content')

<div class="container py-4">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h2 class="fw-bold mb-4">Active Blood Donors Near You</h2>

    <div class="row g-4">

        @foreach($donors as $d)
        <div class="col-md-4">

            <div class="card shadow-sm p-3" style="border-radius: 18px;">

                <h4 class="fw-bold">{{ $d->name }}</h4>
                <p class="mb-1"><strong>Blood Group:</strong> {{ $d->blood_group }}</p>
                <p class="mb-1"><strong>Location:</strong> {{ $d->location }}</p>

                <p class="mb-2">
                    <strong>Status:</strong>
                    @if($d->status == 'available')
                        <span class="badge bg-success">Available</span>
                    @elseif($d->status == 'busy')
                        <span class="badge bg-warning text-dark">Busy</span>
                    @else
                        <span class="badge bg-danger">Not Available</span>
                    @endif
                </p>

                <a href="tel:{{ $d->phone }}" class="btn btn-outline-primary w-100 mb-2">
                    Call Donor
                </a>

                @if($d->status == 'available')
                <a href="{{ route('blood.request', $d->id) }}" class="btn btn-danger w-100">
                    Request Blood
                </a>
                @else
                <button class="btn btn-secondary w-100" disabled>Not Available</button>
                @endif

            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection
