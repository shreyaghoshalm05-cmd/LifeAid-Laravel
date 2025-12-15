@extends('layout.app')

@section('content')

@include('sections.hero')

<div class="row mb-4">
    <div class="col-12 text-center">
        <button class="emergency-btn" onclick="triggerEmergency()">
            <i class="fas fa-ambulance me-2"></i>Emergency Button (Call Ambulance/Police)
        </button>
    </div>
</div>


@include('sections.features')

@endsection
