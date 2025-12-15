<header class="app-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            <!-- LOGO -->
            <h1 class="app-title mb-0">
                <i class="fas fa-heartbeat me-2"></i>LifeAid
            </h1>

            <!-- AUTH ACTIONS (RIGHT SIDE ONLY) -->
            <div class="user-actions">

                @if(session()->has('user_id'))
                    <div class="d-flex align-items-center gap-2">
                        <span class="text-white fw-semibold">
                            Hi, {{ session('user_name') }}
                        </span>
                        <a href="/logout" class="btn btn-outline-light btn-sm">
                            Logout
                        </a>
                    </div>
                @else
                    <a href="/login" class="btn btn-outline-light me-2">
                        Login
                    </a>
                    <a href="/register" class="btn btn-light">
                        Register
                    </a>
                @endif

            </div>

        </div>
    </div>
</header>
