@extends('layouts.app')
@section('title', 'PawPal — Joshua Dela Cruz')

@section('content')

{{-- ── NAV ── --}}
<nav style="position:fixed;top:0;left:0;right:0;z-index:100;padding:1.25rem 3rem;display:flex;justify-content:flex-end;align-items:center;backdrop-filter:blur(10px);background:var(--nav-bg);border-bottom:1px solid var(--border);">
    <button class="nav-hamburger" onclick="toggleMobileNav()" style="background:none;border:none;cursor:pointer;padding:0;width:26px;height:20px;flex-direction:column;justify-content:space-between;">
        <span style="display:block;width:100%;height:2px;background:var(--text-primary);"></span>
        <span style="display:block;width:100%;height:2px;background:var(--text-primary);"></span>
        <span style="display:block;width:100%;height:2px;background:var(--text-primary);"></span>
    </button>
    <div id="navLinks" class="nav-links" style="display:flex;gap:2rem;align-items:center;">
        <a href="/" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Home</a>
        <a href="/#about" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">About</a>
        <a href="/stack" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Stack</a>
        <a href="/projects" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:700;color:var(--accent);text-decoration:none;letter-spacing:0.05em;">Projects</a>
        <a href="/#contact" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Contact</a>
        <button id="themeToggle" onclick="toggleTheme()" style="width:34px;height:34px;border-radius:50%;border:1px solid var(--border-light);background:transparent;display:flex;align-items:center;justify-content:center;cursor:pointer;padding:0;">
            <img id="themeIcon" src="{{ asset('images/dark-mode.png') }}" style="width:26px;height:26px;object-fit:contain;">
        </button>
    </div>
</nav>

{{-- ── HERO (full-width band with fading dot grid + diagonal slant) ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 0,100% 0,100% 78%,0 100%);padding-bottom:8rem;">

    {{-- Fading dot grid texture --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 40%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 40%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <section style="padding:9rem 3rem 2rem;max-width:1000px;margin:0 auto;text-align:center;position:relative;z-index:1;">

        {{-- Logo above title --}}
        <div style="display:flex;justify-content:center;margin-bottom:1.5rem;">
            <img src="{{ asset('images/pawpal-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A PET CARE MARKETPLACE CONNECTING OWNERS TO VERIFIED SITTERS, GROOMERS, AND VETS — ON DEMAND.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">STARTUP CONCEPT · PROTOTYPE · 2025</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Designed & prototyped by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>. Designed by <span style="color:var(--text-primary);font-weight:700;">Allana Aganan</span>.</p>
    </section>
</div>

{{-- ── OVERVIEW ── --}}
<section style="position:relative;overflow:hidden;background:var(--bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:1100px;margin:0 auto;position:relative;z-index:1;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;text-align:center;">About PawPal</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;max-width:760px;margin:0 auto 3rem;text-align:center;">
            PawPal is a startup concept for a pet care marketplace — like an Angkas for pet care. It matches owners with the nearest verified sitters, groomers, and clinics, all in one platform. Every sitter is background-checked, every service is bookable in a few taps, and every pet has a digital health profile that follows it across sitters, vets, and grooming visits.
        </p>
        <div style="display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P1.webp') }}" style="width:100%;max-width:900px;border-radius:8px;object-fit:contain;box-shadow:0 20px 50px rgba(0,0,0,0.25);">
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into dark features banner) ── --}}
<div class="rf-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="rf-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: VERIFIED SPECIALIZED SITTERS ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P3.webp') }}" style="width:100%;max-width:800px;height:400px;border-radius:8px;object-fit:cover;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">VERIFIED PET CARE SERVICES</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                BROWSE SITTING, GROOMING, AND VET SERVICES IN ONE PLACE
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Every sitter is background-checked and can log medical administration like insulin shots or allergy management. Owners attach special instructions — diet plans, emergency contacts — right on the booking.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: BOOK A SERVICE (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">CHOOSE PET, LOCATION & SERVICE</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                PICK A PET, DROP A PIN, AND SET THE SERVICE TYPE
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                A quick guided flow — select which pet, confirm the address, and choose between sitting, grooming, or a vet visit. PawPal automatically matches the nearest available provider.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P4.webp') }}" style="width:100%;max-width:800px;height:400px;border-radius:8px;object-fit:cover;">
        </div>
    </div>
</section>

{{-- ── FEATURE: REAL-TIME UPDATES & DIGITAL HEALTH RECORDS ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">TRACKING & DIGITAL RECORDS</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;max-width:760px;margin:0 auto 1rem;">
            LIVE CHECK-INS, GPS TRACKING, AND A DIGITAL HEALTH PROFILE PER PET
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;max-width:700px;margin:0 auto;">
            Owners can view live video during a sitting session, track a sitter's location on walks, and get time-stamped feeding, medication, and playtime logs with photos. Each pet's vaccination history, prescriptions, and allergies live in one encrypted profile shareable with any sitter or vet — with automated reminders before the next visit.
        </p>
    </div>
</section>

{{-- ── FEATURE: ADMIN ANALYTICS DASHBOARD ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P5.webp') }}" style="width:100%;max-width:650px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">ADMIN DASHBOARD</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                SALES, INCOME, SESSIONS, AND REVENUE AT A GLANCE
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                A business-side view for tracking platform performance — total sales, income breakdowns, active sessions, and revenue trends, all on one screen.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: BOOKINGS OVERVIEW (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">BOOKINGS MANAGEMENT</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                ADMINS TRACK EVERY BOOKING FROM ONGOING TO COMPLETED
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                A clear overview of current and completed service bookings, so the platform team can monitor sitter availability, service status, and customer flow in real time.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P6.webp') }}" style="width:100%;max-width:650px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: PET MARKETPLACE ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/P7.webp') }}" style="width:100%;max-width:800px;height:450px;border-radius:8px;object-fit:cover;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">PET MARKETPLACE</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                VET-APPROVED FOOD, MEDS, AND ACCESSORIES — DELIVERED
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                A built-in storefront recommends products based on a pet's health record and dietary needs, supports auto-renewing orders, and tracks delivery — all through a secure checkout.
            </p>
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .rf-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .rf-chevron { height: 40px !important; }
    }
</style>

{{-- ── TECH STACK FOOTER ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 22%,100% 0,100% 100%,0 100%);padding-top:8rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <footer style="padding:2rem 3rem 5rem;position:relative;z-index:1;">
        <div style="max-width:1000px;margin:0 auto;text-align:center;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--text-primary);letter-spacing:0.05em;margin-bottom:1rem;">TECH STACK</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.85rem;color:var(--text-secondary);max-width:600px;margin:0 auto 3rem;line-height:1.7;">
                This is a research-based startup concept and UI prototype only — not a fully built system.
            </p>

            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2.5rem 2rem;">
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">HTML</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Prototype structure</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">CSS</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Interface styling</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">JavaScript</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Prototype interactivity</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection