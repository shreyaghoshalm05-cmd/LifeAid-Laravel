@extends('layout.app')

@section('content')
<div class="user-section">
    <h2 class="section-title">Labs & Clinics</h2>
    <p>Find diagnostic labs and clinics with available tests and booking options.</p>

    <div class="row mt-4">
        @foreach($labs as $lab)
            <div class="col-md-4 mb-3">
                <div class="card p-3 shadow-sm">
                    <h5>{{ $lab['name'] }}</h5>
                    <p>{{ $lab['location'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
