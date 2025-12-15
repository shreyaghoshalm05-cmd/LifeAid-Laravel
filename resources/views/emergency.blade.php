@extends('layout.app')

@section('content')

<div class="container mt-4">

    <div class="user-section text-center mb-4">
        <h2 class="section-title">Emergency Numbers</h2>
        <p class="text-muted">
            Important emergency contact numbers for ambulance, police, fire station, and other services.
        </p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>🚑 Ambulance</h4>
                <h2 class="text-primary">102</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>👮 Police</h4>
                <h2 class="text-danger">100</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>🔥 Fire Station</h4>
                <h2 class="text-warning">101</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>👩 Women Helpline</h4>
                <h2 class="text-pink">1091</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>🌪 Disaster Management</h4>
                <h2 class="text-success">1096</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h4>🧒 Child Helpline</h4>
                <h2 class="text-info">1098</h2>
            </div>
        </div>

    </div>

</div>

@endsection
