<div class="hero-section d-flex align-items-center justify-content-center">
    <div class="container text-center">

        <h1 class="fw-bold mb-3">
            Your Health, Our Priority
        </h1>

        <p class="lead mb-4">
            Access emergency medical assistance, find healthcare providers,
            and get the help you need when it matters most.
        </p>

        <!-- SEARCH FORM -->
        <form action="{{ url('/search') }}" method="GET"
              class="d-flex justify-content-center">

            <input
                type="text"
                name="q"
                class="form-control form-control-lg"
                style="max-width: 520px; border-radius: 30px 0 0 30px;"
                placeholder="Search for hospitals, doctors, medicines..."
                required
            >

            <button
                type="submit"
                class="btn btn-danger px-4"
                style="border-radius: 0 30px 30px 0;"
            >
                <i class="fa fa-search"></i>
            </button>

        </form>

        <!-- STATS -->
        <div class="row mt-5 text-white">
            <div class="col-md-3">
                <h3>24/7</h3>
                <p>Emergency Support</p>
            </div>
            <div class="col-md-3">
                <h3>500+</h3>
                <p>Verified Hospitals</p>
            </div>
            <div class="col-md-3">
                <h3>1000+</h3>
                <p>Medical Professionals</p>
            </div>
            <div class="col-md-3">
                <h3>50+</h3>
                <p>Cities Covered</p>
            </div>
        </div>

    </div>
</div>
