@extends('layout.app')

@section('content')
<div class="container py-5 text-center">

    <h2>Search Results</h2>

    <p class="mt-3">
        You searched for:
        <strong>{{ $q }}</strong>
    </p>

</div>
@endsection
