<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>Doctors — {{ $hospital->hospital_name ?? 'Hospital' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #e0e7ff, #f8fafc);
            font-family: 'Poppins', sans-serif;
        }

        /* PAGE TITLE */
        .page-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
            background: linear-gradient(90deg, #2563eb, #9333ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* DOCTOR CARD */
        .doctor-card {
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(14px);
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 25px 45px rgba(37,99,235,0.2);
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .doctor-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent, rgba(99,102,241,0.25), transparent);
            opacity: 0;
            transition: 0.4s;
        }

        .doctor-card:hover::before {
            opacity: 1;
        }

        .doctor-card:hover {
            transform: translateY(-14px) scale(1.03);
            box-shadow: 0 40px 80px rgba(37,99,235,0.35);
        }

        /* IMAGE */
        .doctor-img-wrapper {
            width: 140px;
            height: 140px;
            margin: 0 auto 18px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(135deg, #2563eb, #9333ea);
        }

        .doctor-img-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            background: #fff;
        }

        /* INFO */
        .doctor-info {
            text-align: center;
        }

        .doctor-info h4 {
            font-weight: 700;
            margin-bottom: 6px;
        }

        .speciality {
            color: #475569;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .fee {
            font-size: 1.35rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 18px;
        }

        /* BUTTONS */
        .book-btn {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            border: none;
            color: white;
            padding: 12px 26px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(37,99,235,0.45);
            transition: 0.3s;
        }

        .book-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 18px 35px rgba(37,99,235,0.65);
        }

        .back-btn {
            background: transparent;
            border: 2px solid #2563eb;
            color: #2563eb;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #2563eb;
            color: white;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <h2 class="page-title">
        Doctors at {{ $hospital->hospital_name }}
    </h2>

    <div class="row g-4 justify-content-center">

        @forelse($doctors as $d)
            <div class="col-md-6 col-lg-4">

                <div class="doctor-card">

                    <!-- Image -->
                    <div class="doctor-img-wrapper">
                        <img
                            src="{{ $d->photo ?? 'https://ui-avatars.com/api/?name='.urlencode($d->name).'&background=2563eb&color=fff&size=256' }}"
                            alt="{{ $d->name }}"
                        >
                    </div>

                    <!-- Info -->
                    <div class="doctor-info">
                        <h4>{{ $d->name }}</h4>

                        <p class="speciality">
                            {{ $d->specialization ?? 'General Physician' }}
                        </p>

                        <p class="fee">
                            {{ $d->fee ? '₹'.number_format($d->fee, 2) : 'Fee Not Available' }}
                        </p>

                        <a href="{{ url('/doctor/'.$d->id) }}" class="btn book-btn">
                            View Slots & Book
                        </a>
                    </div>

                </div>

            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info">
                    No doctors found for this hospital.
                </div>
            </div>
        @endforelse

    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/hospitals') }}" class="btn back-btn">
            ← Back to Hospitals
        </a>
    </div>

</div>

</body>
</html>
