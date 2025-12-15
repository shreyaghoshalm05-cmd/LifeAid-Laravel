<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolkata Hospitals — Enterprise Edition</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(130deg, #e1e8ff, #f4eafe);
            transition: 0.4s;
        }

        body.dark {
            background: linear-gradient(130deg, #0f172a, #1e1b4b);
            color: #e5e7eb;
        }

        .navbar-premium {
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(14px);
            background: rgba(255,255,255,0.5);
            transition: 0.4s;
        }

        body.dark .navbar-premium {
            background: rgba(30,41,59,0.5);
        }

        #darkModeToggle {
            cursor: pointer;
            font-size: 24px;
            transition: 0.3s;
        }

        #darkModeToggle:hover {
            transform: scale(1.2);
        }

        .page-title {
            text-align: center;
            font-size: 2.8rem;
            margin: 30px 0;
            font-weight: 700;
            background: linear-gradient(90deg, #1e40af, #9333ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .search-box input {
            border-radius: 18px;
            padding-left: 18px;
        }

        .filter-btn {
            padding: 6px 18px;
            border-radius: 25px;
            border: none;
            background: #e0e7ff;
            color: #3730a3;
            transition: 0.3s;
        }

        .filter-btn:hover {
            transform: scale(1.05);
        }

        body.dark .filter-btn {
            background: #312e81;
            color: #c7d2fe;
        }

        .hospital-card {
            border-radius: 25px;
            background: rgba(255,255,255,0.55);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.3);
            overflow: hidden;
            transition: 0.35s ease;
        }

        body.dark .hospital-card {
            background: rgba(30,41,59,0.55);
            border: 1px solid rgba(255,255,255,0.08);
        }

        .hospital-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 35px rgba(0,0,0,0.25);
        }

        .hospital-img {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }

        .category-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            color: #fff;
        }

        .contact-btn,
        .book-btn,
        .map-btn {
            border-radius: 12px;
            width: 100%;
            margin-top: 5px;
            padding: 8px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
        }

        .contact-btn:hover,
        .book-btn:hover,
        .map-btn:hover {
            transform: scale(1.05);
        }

        .map-btn {
            background: linear-gradient(90deg, #2563eb, #9333ea);
            color: #fff;
            border: none;
        }

        .book-btn {
            background: linear-gradient(90deg, #0ea5e9, #6366f1);
            color: white;
            border: none;
        }

        body.dark .contact-btn {
            background: #1e293b;
            color: white;
        }
    </style>
</head>

<body>

<nav class="navbar-premium p-3 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold">Kolkata Hospitals (Enterprise Edition)</h4>
    <i class="fa-solid fa-moon" id="darkModeToggle"></i>
</nav>

<div class="container py-4">

    <h2 class="page-title">Find & Book Consultations Instantly</h2>

    <div class="search-box mb-3">
        <input id="searchInput" class="form-control" placeholder="Search hospitals...">
    </div>

    <div class="mb-4 d-flex gap-2 flex-wrap">
        <button class="filter-btn" data-filter="all">All</button>
        <button class="filter-btn" data-filter="Multi-speciality">Multi-speciality</button>
        <button class="filter-btn" data-filter="Cardiac">Cardiac</button>
        <button class="filter-btn" data-filter="Eye & Neuro">Eye & Neuro</button>
        <button class="filter-btn" data-filter="Cancer">Cancer</button>
    </div>

    <div class="row g-4" id="hospitalList">

        @php
        $hospitals = [
            [
                'name' => 'Apollo Gleneagles Hospital',
                'category' => 'Multi-speciality',
                'beds' => 150,
                'address' => 'Salt Lake, Kolkata',
                'phone' => '+913323203040',
                'email' => 'info@apollogleneagleskolkata.com',
                'image' => 'https://vivavel.com/public/storage/hospital_image/ApolloGleneaglesHospital,Kolkata679e1c2ddfa5f.png'
            ],
            [
                'name' => 'Fortis Hospital Anandapur',
                'category' => 'Cancer',
                'beds' => 200,
                'address' => 'Anandapur, Kolkata',
                'phone' => '+913366284444',
                'email' => 'info@fortiskolkata.com',
                'image' => 'https://mbbscouncilcdn.s3.amazonaws.com/wp-content/uploads/2017/04/Fortis-Hospital-Kolkata.jpg'
            ],
            [
                'name' => 'AMRI Hospital Mukundapur',
                'category' => 'Eye & Neuro',
                'beds' => 120,
                'address' => 'Mukundapur, Kolkata',
                'phone' => '+913366800000',
                'email' => 'contact@amrikolkata.com',
                'image' => 'https://www.nirujahealthtech.com/wp-content/uploads/2019/09/AMRI-mukundapur.jpg'
            ],
            [
                'name' => 'RN Tagore International Institute',
                'category' => 'Cardiac',
                'beds' => 180,
                'address' => 'EM Bypass, Kolkata',
                'phone' => '+913371390000',
                'email' => 'info@rnttagore.com',
                'image' => 'https://assets.telegraphindia.com/telegraph/2022/Jun/1654975747_new-project-1.jpg'
            ],
            [
                'name' => 'CMRI Hospital',
                'category' => 'Multi-speciality',
                'beds' => 250,
                'address' => 'Alipore, Kolkata',
                'phone' => '+913340904090',
                'email' => 'info@cmri.in',
                'image' => 'https://miro.medium.com/v2/resize:fit:2400/1*P5ylu4GyVmd-nMzglOOvcg.jpeg'
            ],
        ];
        @endphp

        @foreach ($hospitals as $h)
        <div class="col-md-4 hospital-item" data-category="{{ $h['category'] }}"
             data-name="{{ strtolower($h['name']) }}">

            <div class="hospital-card shadow-lg">

                <img
                    src="{{ $h['image'] }}"
                    class="hospital-img"
                    alt="{{ $h['name'] }}"
                    loading="lazy"
                    onerror="this.src='https://via.placeholder.com/600x400?text=Hospital+Image';"
                >

                <div class="p-3">

                    <span class="category-badge"
                        style="background:
                          @if($h['category']=='Cancer')#db2777
                          @elseif($h['category']=='Cardiac')#1e3a8a
                          @elseif($h['category']=='Eye & Neuro')#0f766e
                          @else #7c3aed @endif;">
                        {{ $h['category'] }}
                    </span>

                    <h4 class="fw-bold mt-2">{{ $h['name'] }}</h4>

                    <p><strong>Beds:</strong> {{ $h['beds'] }}</p>
                    <p><strong>Address:</strong> {{ $h['address'] }}</p>

                    <a href="tel:{{ $h['phone'] }}" class="contact-btn">
                        <i class="fa-solid fa-phone"></i> Call Hospital
                    </a>

                    <a href="mailto:{{ $h['email'] }}" class="contact-btn">
                        <i class="fa-solid fa-envelope"></i> Email Hospital
                    </a>

                    <button type="button" class="map-btn"
                        onclick="window.open('https://www.google.com/maps?q={{ urlencode($h['name']) }}')">
                        <i class="fa-solid fa-map-location-dot"></i> View Map
                    </button>

                    <a href="/hospital/{{ rawurlencode($h['name']) }}/doctors"
                       class="book-btn d-inline-block text-center">
                        <i class="fa-solid fa-calendar-check"></i> Book Consultation
                    </a>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<script>
    let toggleBtn = document.getElementById("darkModeToggle");
    toggleBtn.onclick = function () {
        document.body.classList.toggle("dark");
        toggleBtn.classList.toggle("fa-sun");
    };

    document.getElementById("searchInput").addEventListener("keyup", function(){
        let word = this.value.toLowerCase();
        document.querySelectorAll(".hospital-item").forEach(item => {
            item.style.display = item.dataset.name.includes(word) ? "block" : "none";
        });
    });

    document.querySelectorAll(".filter-btn").forEach(btn => {
        btn.onclick = () => {
            let c = btn.dataset.filter;
            document.querySelectorAll(".hospital-item").forEach(item => {
                item.style.display = (c === "all" || item.dataset.category === c) ? "block" : "none";
            });
        };
    });
</script>

</body>
</html>
