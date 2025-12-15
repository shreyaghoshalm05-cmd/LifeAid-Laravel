<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --light-color: #ecf0f1;
        --dark-color: #2c3e50;
        --success-color: #2ecc71;
        --warning-color: #f39c12;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }

    .app-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 15px 0;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .app-title {
        font-weight: 700;
        font-size: 1.8rem;
        margin: 0;
    }

    .hero-section {
        background: linear-gradient(rgba(44, 62, 80, 0.85), rgba(52, 152, 219, 0.85)),
        url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 80px 0;
        text-align: center;
        margin-bottom: 40px;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .search-container { max-width: 600px; margin: 0 auto 30px; }

    .search-box {
        border-radius: 50px;
        padding: 15px 25px;
        border: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        font-size: 1.1rem;
    }

    .search-btn {
        border-radius: 50px;
        padding: 15px 30px;
        background-color: var(--accent-color);
        border: none;
        color: white;
        font-weight: 600;
        margin-left: 10px;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
    }

    .feature-card {
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.15);
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: var(--secondary-color);
    }

    .emergency-btn {
        background: linear-gradient(135deg, var(--accent-color), #c0392b);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 15px 30px;
        font-size: 1.2rem;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(231, 76, 60, 0.4);
        transition: all 0.3s ease;
        width: 100%;
        margin: 10px 0;
    }

    .emergency-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(231, 76, 60, 0.6);
    }

    .user-section {
        background-color: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-top: 30px;
    }

    .user-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .section-title {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light-color);
    }

    .navbar-custom {
        background-color: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 10px 0;
    }

    .nav-link {
        color: var(--primary-color);
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        background-color: var(--secondary-color);
        color: white;
    }

    footer {
        background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
        color: white;
        padding: 50px 0 20px;
        margin-top: 70px;
    }

    .footer-logo {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .footer-links h5 {
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
    }

    .footer-links h5:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background-color: var(--secondary-color);
    }

    .chatbot-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .chatbot-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        color: white;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .chatbot-window {
        position: absolute;
        bottom: 70px;
        right: 0;
        width: 350px;
        height: 450px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.2);
        display: none;
        flex-direction: column;
        overflow: hidden;
    }



/* ================= CHATBOT ================= */

#chatbot-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}

/* Floating Button */
#chatbot-toggle {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg,#2563eb,#1e40af);
    color: white;
    font-size: 26px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0,0,0,0.45);
    transition: transform 0.3s;
}

#chatbot-toggle:hover {
    transform: scale(1.1);
}

/* Chat Box */
#chatbot-box {
    width: 360px;
    height: 480px;
    background: linear-gradient(180deg,#020617,#020617,#031525);
    border-radius: 18px;
    position: absolute;
    bottom: 80px;
    right: 0;
    display: none;
    flex-direction: column;
    box-shadow: 0 30px 60px rgba(0,0,0,0.6);
}

/* Header */
.chat-header {
    padding: 14px;
    background: linear-gradient(135deg,#1e40af,#2563eb);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Chat Body */
#chat-body {
    flex: 1;
    padding: 14px;
    overflow-y: auto;
    background: linear-gradient(180deg,#020617,#031525,#020617);
    font-size: 14px;
}

/* Messages */
.user {
    text-align: right;
    color: #93c5fd;
    margin-bottom: 8px;
}

.bot {
    text-align: left;
    text-shadow: 0 0 6px rgba(134,239,172,0.25);
    color: #86efac;
    margin-bottom: 8px;
}



.bot.welcome {
    color: #e5e7eb;
}

.typing {
    color: #94a3b8;
    font-style: italic;
}

/* Quick Actions */
.quick-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    padding: 8px;
    background: #020617;
}

.quick-actions button {
    flex: 1;
    background: #1e293b;
    color: #e5e7eb;
    border: none;
    border-radius: 10px;
    padding: 6px;
    cursor: pointer;
    font-size: 12px;
}

.quick-actions button:hover {
    background: #2563eb;
}

/* Input */
.chat-input {
    display: flex;
    border-top: 1px solid #334155;
}

.chat-input input {
    flex: 1;
    padding: 12px;
    background: #020617;
    border: none;
    color: white;
}

.chat-input button {
    width: 55px;
    background: #2563eb;
    border: none;
    color: white;
    cursor: pointer;
}
/* =========================
   CHATBOT AI LOGO (NEW)
========================= */

.ai-logo {
    position: relative;
    width: 36px;
    height: 36px;
    background: radial-gradient(circle,#38bdf8,#2563eb);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.ai-core {
    color: white;
    font-size: 22px;
    font-weight: bold;
    z-index: 2;
}

.pulse-ring {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(56,189,248,0.6);
    animation: pulse 1.8s infinite;
    z-index: 1;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 0.7;
    }
    100% {
        transform: scale(1.8);
        opacity: 0;
    }
}

/* =========================
   AI TYPING DOTS
========================= */

.typing-dots {
    display: flex;
    gap: 4px;
    margin-bottom: 8px;
}

.typing-dots span {
    width: 6px;
    height: 6px;
    background: #94a3b8;
    border-radius: 50%;
    animation: blink 1.4s infinite both;
}

.typing-dots span:nth-child(2) { animation-delay: .2s; }
.typing-dots span:nth-child(3) { animation-delay: .4s; }

@keyframes blink {
    0% { opacity: .2; }
    20% { opacity: 1; }
    100% { opacity: .2; }
}

/* ================= DOCTORS PAGE UI ================= */

.doctor-bg {
    background: radial-gradient(circle at top, #0f172a, #020617);
    min-height: 100vh;
}

.doctor-title {
    font-size: 2.8rem;
    background: linear-gradient(90deg,#60a5fa,#38bdf8,#22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Card */
.doctor-card {
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(20px);
    border-radius: 22px;
    padding: 20px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.doctor-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg,transparent,#3b82f6,transparent);
    opacity: 0;
    transition: 0.4s;
}

.doctor-card:hover::before {
    opacity: 0.25;
}

.doctor-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 40px 80px rgba(59,130,246,0.45);
}

/* Image */
.doctor-img-wrapper {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.doctor-img-wrapper img {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #3b82f6;
    box-shadow: 0 0 30px rgba(59,130,246,0.7);
}

/* Info */
.doctor-info {
    text-align: center;
    color: #e5e7eb;
}

.doctor-info h4 {
    font-weight: 700;
    margin-bottom: 6px;
}

.speciality {
    color: #93c5fd;
    font-size: 0.95rem;
    margin-bottom: 10px;
}

.fee {
    font-size: 1.2rem;
    font-weight: 600;
    color: #86efac;
    margin-bottom: 15px;
}

/* Buttons */
.book-btn {
    width: 100%;
    border-radius: 14px;
    background: linear-gradient(135deg,#2563eb,#1d4ed8);
    color: white;
    font-weight: 600;
    padding: 10px;
    border: none;
    box-shadow: 0 10px 30px rgba(37,99,235,0.6);
    transition: 0.3s;
}

.book-btn:hover {
    background: linear-gradient(135deg,#1d4ed8,#2563eb);
    transform: scale(1.05);
}

.back-btn {
    background: transparent;
    border: 2px solid #60a5fa;
    color: #60a5fa;
    padding: 10px 25px;
    border-radius: 14px;
    transition: 0.3s;
}

.back-btn:hover {
    background: #60a5fa;
    color: #020617;
}

/* ==================================================
   GLOBAL RESPONSIVE ADD-ON (DO NOT REMOVE ANYTHING)
================================================== */

/* Prevent horizontal scrolling */
html, body {
    overflow-x: hidden;
}

/* Fix mobile zoom issue (important for iOS) */
input, select, textarea {
    font-size: 16px;
}

/* Better tap experience */
button, a {
    -webkit-tap-highlight-color: transparent;
}

/* Small devices */
@media (max-width: 576px) {
    body {
        font-size: 14px;
    }
}

/* Tablets */
@media (min-width: 577px) and (max-width: 991px) {
    body {
        font-size: 15px;
    }
}
/* ==========================
   HERO SECTION RESPONSIVE
========================== */

@media (max-width: 768px) {

    .hero-section h1 {
        font-size: 1.8rem;
        line-height: 1.3;
    }

    .hero-section p {
        font-size: 1rem;
    }

    .hero-section form {
        flex-direction: column;
        gap: 10px;
    }

    .hero-section input,
    .hero-section button {
        width: 100%;
        border-radius: 30px !important;
    }
}

/* -------------------------
   EMERGENCY BUTTON
-------------------------- */
@media (max-width: 768px) {
    .emergency-btn {
        width: 100%;
        padding: 14px;
        font-size: 16px;
        border-radius: 14px;
    }
}



/* ==========================
   HOSPITAL CARDS RESPONSIVE
========================== */

@media (max-width: 768px) {

    .hospital-card {
        margin-bottom: 16px;
    }

    .hospital-img {
        height: 180px;
    }

    .category-badge {
        font-size: 12px;
    }
}

/* -------------------------
   DOCTORS PAGE
-------------------------- */
@media (max-width: 768px) {

    .doctor-card {
        margin-bottom: 16px;
    }

    .doctor-card img {
        height: 160px;
        object-fit: cover;
    }

    .doctor-card h5 {
        font-size: 1rem;
    }
}


/* -------------------------
   LABS PAGE
-------------------------- */
@media (max-width: 768px) {
    .lab-card {
        margin-bottom: 15px;
    }
}


/* -------------------------
   SEARCH AUTOCOMPLETE
-------------------------- */
#autocompleteBox {
    max-height: 260px;
    overflow-y: auto;
    z-index: 9999;
}

@media (max-width: 768px) {
    #autocompleteBox {
        font-size: 14px;
    }
}

/* ==================================================
   HERO SEARCH BAR – SHAPE & HEIGHT FIX
   (DO NOT REMOVE EXISTING STYLES)
================================================== */

/* Wrapper safety */
.hero-section form {
    align-items: stretch;
}

/* Input field */
.hero-section input[type="text"] {
    height: 56px;
    border-radius: 30px 0 0 30px;
    border-right: none;
}

/* Search button */
.hero-section button {
    height: 56px;
    border-radius: 0 30px 30px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Remove tiny gaps */
.hero-section input,
.hero-section button {
    margin: 0;
}

/* Mobile: stacked but still same shape */
@media (max-width: 768px) {
    .hero-section input[type="text"],
    .hero-section button {
        border-radius: 30px !important;
        height: 52px;
    }
}




</style>