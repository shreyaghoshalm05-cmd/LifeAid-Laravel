<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Doctors — {{ $hospital->hospital_name ?? 'Hospital' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f8f9fa; }
        .card-img-top { height: 200px; object-fit: cover; }
        .doc-card { border-radius: 12px; overflow: hidden; }
    </style>
</head>

<body>

<div class="container py-5">

    <h2 class="mb-4">Doctors at {{ $hospital->hospital_name }}</h2>

    <div class="row g-4">
        @forelse($doctors as $d)
            <div class="col-md-4">
                <div class="card shadow-sm doc-card">

                    <img src="{{ $d->photo ?? 'https://via.placeholder.com/800x600?text=Doctor' }}"
                         class="card-img-top" />

                    <div class="card-body">
                        <h5 class="card-title">{{ $d->name }}</h5>

                        <p class="mb-1 text-muted">{{ $d->specialization ?? 'General' }}</p>

                        <p class="mb-2">
                            <strong>Fee:</strong>
                            {{ $d->fee ? '₹'.number_format($d->fee, 2) : '—' }}
                        </p>

                        <a href="{{ url('/doctor/'.$d->id) }}" class="btn btn-primary w-100">
                            View Slots & Book
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    No doctors found for this hospital.
                </div>
            </div>
        @endforelse
    </div>


    <div class="mt-4">
        <a href="{{ url('/hospital') }}" class="btn btn-outline-secondary">← Back to Hospitals</a>
    </div>

</div>

</body>
</html>
