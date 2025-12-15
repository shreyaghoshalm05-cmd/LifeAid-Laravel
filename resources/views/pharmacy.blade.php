@extends('layout.app')

@section('content')

<div class="container mt-4">

    <div class="user-section text-center mb-4">
        <h2 class="section-title">Pharmacies</h2>
        <p class="text-muted">
            Find nearby pharmacies and check medicine availability.
        </p>
    </div>

    <div class="row justify-content-center">

        <!-- Pharmacy 1 -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <h4 class="text-primary">💊 Apollo Pharmacy</h4>
                <p><strong>Location:</strong> MG Road, Pune</p>
                <p><strong>Contact:</strong> 020-44556677</p>

                <a href="{{ route('medicine.check') }}" class="btn btn-success w-100">
                    Check Medicine Availability
                </a>

            </div>
        </div>

        <!-- Pharmacy 2 -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <h4 class="text-primary">💊 Wellness Forever</h4>
                <p><strong>Location:</strong> Baner, Pune</p>
                <p><strong>Contact:</strong> 020-77889900</p>

                <a href="{{ route('medicine.check') }}" class="btn btn-success w-100">
                    Check Medicine Availability
                </a>

            </div>
        </div>

        <!-- Pharmacy 3 -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <h4 class="text-primary">💊 MedPlus Pharmacy</h4>
                <p><strong>Location:</strong> Kothrud, Pune</p>
                <p><strong>Contact:</strong> 020-99887766</p>

                <a href="{{ route('medicine.check') }}" class="btn btn-success w-100">
                    Check Medicine Availability
                </a>

            </div>
        </div>

    </div>

</div>

@endsection
