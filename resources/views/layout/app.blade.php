<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LifeAid</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@include('partials.styles')

<style>
/* ========== THEME VARIABLES (DARK / LIGHT) ========== */
:root {
    --bg: #0b0b0b;
    --gold: #d4af37;
}
@media (prefers-color-scheme: light) {
    :root {
        --bg: #f8f9fa;
        --gold: #b8962e;
    }
}

/* ========== SPLASH CONTAINER ========== */
#splash-screen {
    position: fixed;
    inset: 0;
    background: var(--bg);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

/* ========== CONTENT ========== */
.splash-content {
    text-align: center;
    color: var(--gold);
}

/* LOGO */
.splash-logo {
    width: 320px;
    max-width: 80vw;
    margin-bottom: 25px;
    animation: heartbeat 1.6s infinite ease-in-out;
}

/* TITLE */
.splash-title {
    font-size: 2.8rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: var(--gold);
}

/* HEARTBEAT (SOUNDLESS) */
@keyframes heartbeat {
    0%   { transform: scale(1); }
    20%  { transform: scale(1.06); }
    40%  { transform: scale(1); }
    60%  { transform: scale(1.08); }
    100% { transform: scale(1); }
}

/* ========== ECG REAL ZIG-ZAG ========== */
.ecg {
    width: 260px;
    margin: 25px auto 0;
}
.ecg path {
    fill: none;
    stroke: var(--gold);
    stroke-width: 2.5;
    stroke-dasharray: 400;
    stroke-dashoffset: 400;
    animation: ecgDraw 1.6s linear infinite;
}

@keyframes ecgDraw {
    to {
        stroke-dashoffset: 0;
    }
}

/* ========== CINEMATIC ANIMATION (KEPT) ========== */
.flash {
    animation: lifeAidCinematic 4s ease-in-out forwards;
}

@keyframes lifeAidCinematic {
    0% { opacity: 0; transform: scale(0.8); }
    15% { opacity: 1; transform: scale(1.08); }
    22% { transform: scale(0.96); }
    32% { transform: scale(1.12); }

    /* GLITCH */
    40% { transform: translateX(-2px) skewX(2deg); }
    42% { transform: translateX(2px) skewX(-2deg); }
    44% { transform: scale(1.1); }

    /* GOLD SHINE */
    55% { filter: drop-shadow(0 0 55px var(--gold)); }

    70% { transform: scale(1.18); }
    85% { transform: scale(1); }
    100% { opacity: 1; }
}
</style>
</head>

<body>

<!-- SPLASH SCREEN -->
<div id="splash-screen">
    <div class="splash-content flash">
        <img src="{{ asset('images/logo.png') }}" class="splash-logo" alt="LifeAid">
        <h1 class="splash-title">LifeAid</h1>

        <!-- ECG -->
        <svg class="ecg" viewBox="0 0 300 60">
            <path d="M0 30 L40 30 L50 10 L70 50 L90 30 L130 30 L140 10 L160 50 L180 30 L300 30"/>
        </svg>
    </div>
</div>

@include('partials.header')
@include('partials.navbar')

<main class="container my-4">
    @yield('content')
</main>

@include('partials.footer')
@include('partials.chatbot')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@include('partials.scripts')

<!-- ========== MOBILE-OPTIMIZED + ONCE PER VISIT + CINEMATIC EXIT ========== -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    if (sessionStorage.getItem("lifeAidSplashDone")) {
        document.getElementById("splash-screen").style.display = "none";
        return;
    }
    sessionStorage.setItem("lifeAidSplashDone", "true");

    let duration = window.innerWidth < 768 ? 2800 : 4200;

    setTimeout(() => {
        const splash = document.getElementById("splash-screen");
        splash.style.transition = "opacity 1.2s ease";
        splash.style.opacity = "0";

        setTimeout(() => splash.style.display = "none", 1200);
    }, duration);
});
</script>

</body>
</html>
