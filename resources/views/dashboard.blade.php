@include('layout.header')

<style>
    .dashboard-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: 0.3s;
        text-align: center;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .dashboard-icon {
        font-size: 40px;
        margin-bottom: 10px;
    }
    .emergency-btn {
        background: red;
        color: white;
        padding: 15px;
        font-size: 22px;
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 5px 12px rgba(255,0,0,0.4);
        transition: 0.2s;
    }
    .emergency-btn:hover {
        background: #cc0000;
    }
</style>

<div class="container mt-4">
    
    <h2 class="text-center mb-4">Welcome to Medical + Emergency Aid Dashboard</h2>

    <!-- Emergency Button -->
    <div class="row mb-4">
        <div class="col-md-12">
            <button class="emergency-btn">
                🚨 Emergency (Call Ambulance / Police)
            </button>
        </div>
    </div>

    <!-- Quick Access Grid -->
    <div class="row g-4">

        <div class="col-md-4">
            <a href="/hospitals" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">🏥</div>
                    <h5>Hospitals Near Me</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/doctors" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">👨‍⚕️</div>
                    <h5>Doctors Directory</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/blood-donors" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">🩸</div>
                    <h5>Blood Donors / Request Blood</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/labs" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">🧪</div>
                    <h5>Labs & Clinics</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/medicine" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">💊</div>
                    <h5>Medicine & Pharmacy</h5>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/profile" class="text-decoration-none text-dark">
                <div class="dashboard-card">
                    <div class="dashboard-icon">👤</div>
                    <h5>User Profile</h5>
                </div>
            </a>
        </div>

    </div>
</div>

@include('layout.footer')
