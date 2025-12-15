@extends('layout.app')

@section('content')

<!-- FIRST AID - Stylish + Minimal (toggle) -->
<section class="firstaid-root">

    <div class="container py-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div>
                <h2 class="section-title mb-0">First Aid & Emergency Guide</h2>
                <small class="text-muted">Quick life-saving steps for common emergencies</small>
            </div>

            <div class="d-flex gap-2 align-items-center">
                <div class="me-2">
                    <input id="faSearch" class="form-control form-control-sm" placeholder="Search topics (e.g. CPR, burns)">
                </div>
                <button id="modeToggle" class="btn btn-outline-primary btn-sm" title="Toggle compact/detailed">
                    <i class="fas fa-compress-alt me-1"></i> Compact
                </button>
            </div>
        </div>

        <!-- Intro / CTA -->
        <div class="intro-card mb-4 p-3 d-flex gap-3 align-items-center">
            <div>
                <h3 class="mb-1">Act Fast. Save Lives.</h3>
                <p class="mb-0 text-muted">Follow concise steps below. Tap the speaker icon to hear instructions aloud.</p>
            </div>

            <div class="ms-auto text-end">
                <a href="tel:102" class="btn btn-danger me-2">📞 Call Ambulance</a>
                <a href="tel:100" class="btn btn-outline-dark">📞 Call Police</a>
            </div>
        </div>

        <!-- Compact list (hidden in detailed mode) -->
        <div id="compactList" class="row g-2 mb-3" style="display:none;">
            <!-- items injected by JS -->
        </div>

        <!-- Detailed accordion -->
        <div id="detailedArea">
            <div class="accordion" id="faAccordion">

                <!-- Template for each topic (we'll write markup for each below) -->

                <!-- 1. CPR -->
                <div class="accordion-item fa-item" data-keywords="cpr heart cardiac unconscious breathing">
                    <h2 class="accordion-header" id="h-cpr">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cpr" aria-expanded="false">
                            <i class="fas fa-heartbeat fa-lg me-3 text-danger"></i>
                            <div>
                                <div class="fw-bold">CPR (Cardiopulmonary Resuscitation)</div>
                                <small class="text-muted">Chest compressions for cardiac arrest</small>
                            </div>
                        </button>
                    </h2>
                    <div id="cpr" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <div class="mb-2">
                                <strong>Steps (simple):</strong>
                                <ol>
                                    <li>Check responsiveness and breathing. Call emergency services immediately.</li>
                                    <li>Place heel of hand mid-chest and give hard, fast compressions (100–120/min).</li>
                                    <li>Allow chest to recoil between compressions. Continue until help arrives.</li>
                                </ol>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="Check responsiveness and breathing. Call emergency services. Begin chest compressions at a rate of 100 to 120 per minute.">🔊 Read Aloud</button>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Choking -->
                <div class="accordion-item fa-item" data-keywords="choke choking heimlich airway back blows">
                    <h2 class="accordion-header" id="h-choke">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#choke" aria-expanded="false">
                            <i class="fas fa-hand-holding-medical fa-lg me-3 text-warning"></i>
                            <div>
                                <div class="fw-bold">Choking (Heimlich Maneuver)</div>
                                <small class="text-muted">Back blows and abdominal thrusts</small>
                            </div>
                        </button>
                    </h2>
                    <div id="choke" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <ol>
                                <li>Ask "Are you choking?" If they can't speak/cough, call emergency services.</li>
                                <li>Give 5 firm back blows between the shoulder blades.</li>
                                <li>If still obstructed, give 5 abdominal thrusts (Heimlich).</li>
                                <li>Repeat until object clears or help arrives.</li>
                            </ol>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="If the person cannot breathe, shout for help, give five back blows and five abdominal thrusts, repeat until the object is expelled.">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">Demonstration</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Severe bleeding -->
                <div class="accordion-item fa-item" data-keywords="bleed bleeding hemorrhage wound apply pressure tourniquet">
                    <h2 class="accordion-header" id="h-bleed">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bleed" aria-expanded="false">
                            <i class="fas fa-tint fa-lg me-3 text-danger"></i>
                            <div>
                                <div class="fw-bold">Severe Bleeding</div>
                                <small class="text-muted">Apply pressure, raise limb, call emergency services</small>
                            </div>
                        </button>
                    </h2>
                    <div id="bleed" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <ol>
                                <li>Apply firm direct pressure with a clean cloth.</li>
                                <li>Do not remove soaked dressing — add layers and continue pressure.</li>
                                <li>Elevate injured limb if possible. Use tourniquet only for extreme bleeding.</li>
                                <li>Arrange urgent transport to hospital.</li>
                            </ol>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="Apply firm pressure with a clean cloth, elevate the limb, and seek immediate medical care.">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">Guidelines</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Burns -->
                <div class="accordion-item fa-item" data-keywords="burn burns scald heat cool water blister">
                    <h2 class="accordion-header" id="h-burn">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#burn" aria-expanded="false">
                            <i class="fas fa-fire fa-lg me-3 text-warning"></i>
                            <div>
                                <div class="fw-bold">Burns</div>
                                <small class="text-muted">Cool with running water, cover cleanly</small>
                            </div>
                        </button>
                    </h2>
                    <div id="burn" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <ol>
                                <li>Cool burn under running water for 10–20 minutes.</li>
                                <li>Do not apply butter, oil, or toothpaste.</li>
                                <li>Cover with a clean non-stick dressing. Seek care for large/deep burns.</li>
                            </ol>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="Cool the burn with running water for at least ten minutes. Cover with a clean dressing and seek medical help for severe burns.">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">When to seek help</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Stroke -->
                <div class="accordion-item fa-item" data-keywords="stroke fa stoke face arms speech time">
                    <h2 class="accordion-header" id="h-stroke">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#stroke" aria-expanded="false">
                            <i class="fas fa-brain fa-lg me-3 text-info"></i>
                            <div>
                                <div class="fw-bold">Stroke — FAST</div>
                                <small class="text-muted">Face, Arms, Speech, Time — call emergency</small>
                            </div>
                        </button>
                    </h2>
                    <div id="stroke" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li><strong>F</strong>ace drooping — ask to smile.</li>
                                <li><strong>A</strong>rm weakness — ask to lift both arms.</li>
                                <li><strong>S</strong>peech difficulty — ask to repeat a sentence.</li>
                                <li><strong>T</strong>ime — call emergency services immediately.</li>
                            </ul>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="If you suspect a stroke, check face, arms, speech and call emergency services immediately">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">More on stroke</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Fracture -->
                <div class="accordion-item fa-item" data-keywords="fracture bone broken splint immobilize">
                    <h2 class="accordion-header" id="h-fracture">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fracture" aria-expanded="false">
                            <i class="fas fa-bone fa-lg me-3 text-secondary"></i>
                            <div>
                                <div class="fw-bold">Fractures & Suspected Broken Bones</div>
                                <small class="text-muted">Immobilize, support, and seek care</small>
                            </div>
                        </button>
                    </h2>
                    <div id="fracture" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <ol>
                                <li>Keep the injured part still — avoid moving it unnecessarily.</li>
                                <li>Immobilize with a splint or padding. Apply ice to reduce swelling.</li>
                                <li>Seek urgent medical assessment and imaging.</li>
                            </ol>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="Keep the injured limb still, immobilize and get urgent medical attention">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">When to go to ER</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. Heart attack -->
                <div class="accordion-item fa-item" data-keywords="heart attack chest pain angina cardiac">
                    <h2 class="accordion-header" id="h-heart">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#heart" aria-expanded="false">
                            <i class="fas fa-heart fa-lg me-3 text-danger"></i>
                            <div>
                                <div class="fw-bold">Heart Attack</div>
                                <small class="text-muted">Chest pain, sweating, nausea — call emergency</small>
                            </div>
                        </button>
                    </h2>
                    <div id="heart" class="accordion-collapse collapse" data-bs-parent="#faAccordion">
                        <div class="accordion-body">
                            <p>Signs: chest pain, pain radiating to jaw/arm/back, shortness of breath, sweating.</p>
                            <ol>
                                <li>Call emergency services immediately.</li>
                                <li>Keep the person calm and comfortable; give aspirin if not allergic.</li>
                                <li>Start CPR if they become unresponsive and are not breathing normally.</li>
                            </ol>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary play-voice" data-text="If you suspect a heart attack, call emergency services immediately, give aspirin if appropriate, and be prepared to give CPR">🔊 Read Aloud</button>
                                <a class="btn btn-sm btn-outline-secondary" href="#">Cardiac care</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- accordion -->
        </div> <!-- detailedArea -->

    </div> <!-- container -->
</section>

<!-- styles specific to this view -->
@push('styles')
<style>
/* Minimal + stylish overrides for this page */
.firstaid-root .intro-card {
    background: linear-gradient(90deg,#ffffff, #fbfcff);
    border-radius: 12px;
    box-shadow: 0 6px 22px rgba(22, 40, 80, 0.06);
}
.fa-item .accordion-button { gap: 12px; align-items:center; }
.fa-item .accordion-button i { min-width:44px; text-align:center; }
/* compact list item */
.compact-card {
    background: #fff; border-radius:10px; padding:12px; box-shadow: 0 6px 18px rgba(15,30,60,0.04);
    display:flex; align-items:center; gap:12px; cursor:pointer;
    transition: transform .18s ease, box-shadow .18s ease;
}
.compact-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(15,30,60,0.08); }
.compact-card .compact-title { font-weight:600; }
.compact-card .compact-sub { font-size:0.85rem; color:#6b7280; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function(){

    // Elements
    const modeToggle = document.getElementById('modeToggle');
    const compactList = document.getElementById('compactList');
    const detailedArea = document.getElementById('detailedArea');
    const searchInput = document.getElementById('faSearch');

    // Collect topics from accordion items
    const items = Array.from(document.querySelectorAll('.fa-item')).map(el => {
        const title = el.querySelector('.accordion-button .fw-bold').innerText.trim();
        const subtitle = el.querySelector('.accordion-button small') ? el.querySelector('.accordion-button small').innerText.trim() : '';
        const key = el.dataset.keywords || (title + ' ' + subtitle);
        const id = el.querySelector('.accordion-collapse').id;
        return { el, title, subtitle, key, id };
    });

    // Build compact list
    function renderCompact() {
        compactList.innerHTML = '';
        items.forEach(it => {
            const col = document.createElement('div');
            col.className = 'col-12 col-md-6';
            col.innerHTML = `
                <div class="compact-card" data-target="${it.id}">
                    <div><i class="fas fa-circle-notch fa-lg text-primary"></i></div>
                    <div>
                        <div class="compact-title">${it.title}</div>
                        <div class="compact-sub">${it.subtitle}</div>
                    </div>
                </div>
            `;
            compactList.appendChild(col);
        });

        // click on compact item -> open accordion and scroll
        compactList.querySelectorAll('.compact-card').forEach(card => {
            card.addEventListener('click', () => {
                const target = document.getElementById(card.dataset.target);
                const bs = new bootstrap.Collapse(target, { toggle: true });
                // ensure detailed view visible
                if (compactList.style.display !== 'none') {
                    // open detailed area visually
                    document.getElementById('detailedArea').scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }

    renderCompact();

    // Toggle mode
    let compact = false;
    modeToggle.addEventListener('click', () => {
        compact = !compact;
        if (compact) {
            // show compact
            compactList.style.display = 'flex';
            compactList.style.flexWrap = 'wrap';
            detailedArea.style.display = 'none';
            modeToggle.innerHTML = '<i class="fas fa-expand-alt me-1"></i> Detailed';
        } else {
            compactList.style.display = 'none';
            detailedArea.style.display = 'block';
            modeToggle.innerHTML = '<i class="fas fa-compress-alt me-1"></i> Compact';
        }
    });

    // Basic search/filter (client-side) by title & keywords
    searchInput.addEventListener('input', (e) => {
        const q = e.target.value.trim().toLowerCase();
        items.forEach(it => {
            const match = (it.title + ' ' + it.subtitle + ' ' + it.key).toLowerCase().includes(q);
            it.el.style.display = match ? '' : 'none';
            // also hide compact counterpart
            const compactCards = Array.from(compactList.querySelectorAll('.compact-card'));
            compactCards.forEach(c => {
                if (c.querySelector('.compact-title').innerText === it.title) {
                    c.closest('.col-12').style.display = match ? '' : 'none';
                }
            });
        });
    });

    // Voice Read Aloud (SpeechSynthesis)
    function speak(text){
        if (!('speechSynthesis' in window)) {
            alert('Text-to-speech not supported in this browser.');
            return;
        }
        const u = new SpeechSynthesisUtterance(text);
        u.lang = 'en-US';
        window.speechSynthesis.cancel();
        window.speechSynthesis.speak(u);
    }

    // play-voice buttons
    document.querySelectorAll('.play-voice').forEach(btn => {
        btn.addEventListener('click', () => {
            const text = btn.dataset.text || btn.closest('.accordion-body').innerText;
            speak(text);
        });
    });

    // Accessibility: keyboard Enter on compact cards
    compactList.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && e.target.closest('.compact-card')) {
            e.target.closest('.compact-card').click();
        }
    });

}); // DOMContentLoaded
</script>
@endpush

@endsection
