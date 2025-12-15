<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $doctor->name }} – Premium Appointment Booking</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            background: #f1f5f9;
            font-family: "Poppins", sans-serif;
        }

        .profile-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 5px 18px rgba(0,0,0,0.15);
        }

        .day-selector {
            display: flex;
            gap: 12px;
            overflow-x: auto;
        }

        .day-pill {
            min-width: 110px;
            padding: 12px;
            background: #e0e7ff;
            border-radius: 12px;
            cursor: pointer;
            text-align: center;
            transition: 0.25s;
        }

        .day-pill.active {
            background: #4f46e5;
            color: white;
        }

        .slot-btn {
            padding: 12px 16px;
            margin: 7px;
            border: none;
            background: white;
            border-radius: 14px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            transition: 0.25s;
        }

        .slot-selected {
            background: #4f46e5 !important;
            color: white !important;
        }
    </style>
</head>

<body>

<div class="container py-4">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="profile-card text-center mb-5">
        <img src="https://static.vecteezy.com/system/resources/previews/006/732/119/large_2x/account-icon-sign-symbol-logo-design-free-vector.jpg"
             class="profile-img mb-3">

        <h2 class="fw-bold">{{ $doctor->name }}</h2>
        <p class="text-muted">{{ $doctor->specialization }}</p>

        <p><strong>Hospital:</strong> {{ $doctor->hospital->hospital_name }}</p>

        <p class="mt-2">
            <strong class="text-primary fs-4">₹{{ number_format($doctor->fee ?? 0, 2) }}</strong>
            <span class="text-muted">/ consultation</span>
        </p>
    </div>

    <h4 class="fw-bold mb-3">Choose Date</h4>

    <div class="day-selector mb-4">
        <div class="day-pill active">Today</div>
        <div class="day-pill">Tomorrow</div>
        <div class="day-pill">Wednesday</div>
        <div class="day-pill">Thursday</div>
        <div class="day-pill">Friday</div>
    </div>

    <h5>🌅 Morning</h5>
    <div>
        <button class="slot-btn">09:00 AM</button>
        <button class="slot-btn">09:30 AM</button>
        <button class="slot-btn">10:00 AM</button>
        <button class="slot-btn">10:30 AM</button>
    </div>

    <h5>🌤 Afternoon</h5>
    <div>
        <button class="slot-btn">12:00 PM</button>
        <button class="slot-btn">12:30 PM</button>
        <button class="slot-btn">01:00 PM</button>
    </div>

    <h5>🌙 Evening</h5>
    <div>
        <button class="slot-btn">03:00 PM</button>
        <button class="slot-btn">03:30 PM</button>
        <button class="slot-btn">04:00 PM</button>
        <button class="slot-btn">04:30 PM</button>
    </div>

    <div class="text-center mt-4">
        <button id="bookBtn" class="btn btn-primary btn-lg px-5" disabled data-bs-toggle="modal" data-bs-target="#confirmModal">
            Book Appointment
        </button>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="confirmModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Confirm Appointment</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p class="fw-bold fs-5">You're booking:</p>
                <p id="details" class="fs-4 text-primary"></p>
            </div>

            <div class="modal-footer">

                <form action="{{ route('doctor.book') }}" method="POST">
                    @csrf

                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <input type="hidden" name="hospital_id" value="{{ $doctor->hospital->id }}">
                    <input type="hidden" name="slot" id="slotInput">
                    <input type="hidden" name="day" id="dayInput">

                    <button type="submit" class="btn btn-success">Confirm Booking</button>
                </form>

            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>

    let selectedDay = "Today";
    let selectedSlot = null;

    $(".day-pill").click(function () {
        $(".day-pill").removeClass("active");
        $(this).addClass("active");
        selectedDay = $(this).text();
    });

    $(".slot-btn").click(function () {
        $(".slot-btn").removeClass("slot-selected");
        $(this).addClass("slot-selected");
        selectedSlot = $(this).text();
        $("#bookBtn").prop("disabled", false);
    });

    $("#bookBtn").click(function () {
        $("#details").text(`${selectedDay} at ${selectedSlot}`);

        $("#slotInput").val(selectedSlot);
        $("#dayInput").val(selectedDay);
    });

</script>

</body>
</html>
