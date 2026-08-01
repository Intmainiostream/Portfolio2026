@extends('layouts.app')
@section('title', 'Midas — Joshua Dela Cruz')

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
            <img src="{{ asset('images/midas-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A MONEY LENDING APP WHERE EVERY INTEREST EARNED GOES TO CHARITY.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">SCHOOL PROJECT / PROTOTYPE · 2024</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed & designed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>.</p>
    </section>
</div>

{{-- Hero image (title screen — portrait) --}}
<div style="max-width:300px;margin:0 auto;padding:2rem 3rem 2rem;">
    <img src="{{ asset('images/proj/M1.webp') }}" style="width:100%;object-fit:contain;border-radius:14px;">
</div>

{{-- ── ABOUT MIDAS ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap;justify-content:center;position:relative;z-index:1;" class="mid-row">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">About Midas</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.9;">
                Midas is a concept lending app built around a simple idea: borrowing money shouldn't just move value between two people — it can move value forward. Every peso earned in interest is routed to charity, turning an ordinary loan into a small act of giving. Built as a school activity to explore how fintech UX can carry a social cause without losing clarity or trust.
            </p>
        </div>
        <img src="{{ asset('images/proj/M2.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="mid-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);"></div>

{{-- ── HOME SCREEN SECTION (M3) ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap;justify-content:center;" class="mid-row">
        <img src="{{ asset('images/proj/M3.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                A HOME SCREEN THAT SHOWS EXACTLY WHAT YOU CAN BORROW
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;">
                The home screen surfaces the highest loan amount available, the interest rate, and the number of terms right up front — no digging through menus. Below that, a classic home feed rounds things out with ongoing promos and updates, keeping the borrowing decision simple and upfront.
            </p>
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="mid-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── BORROW PAGE SECTION (M4) ── --}}
<section style="background:var(--card-bg);padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap-reverse;justify-content:center;" class="mid-row">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                SLIDE TO CHOOSE HOW MUCH YOU WANT TO BORROW
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;">
                The borrow page ditches manual number entry for a sidescroll slider — drag to land on the exact amount you need, with the loan terms updating live as you move. A small interaction that makes the whole borrowing flow feel less like paperwork.
            </p>
        </div>
        <img src="{{ asset('images/proj/M4.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into charity feature banner) ── --}}
<div class="mid-chevron" style="height:70px;background:linear-gradient(135deg,color-mix(in srgb,var(--feature-grad-1) 100%,black 40%),color-mix(in srgb,var(--feature-grad-2) 100%,black 40%));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── CHARITY CONTRIBUTION FEATURE BANNER (M5) ── --}}
<section style="background:linear-gradient(135deg,color-mix(in srgb,var(--feature-grad-1) 100%,black 40%),color-mix(in srgb,var(--feature-grad-2) 100%,black 40%));padding:5rem 3rem 6rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2.5rem;flex-wrap:wrap;justify-content:center;text-align:left;" class="mid-row-banner">
        <div style="flex:1.3;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:rgba(255,255,255,0.8);letter-spacing:0.08em;margin-bottom:0.75rem;">BEYOND THE LOAN</p>
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">
                TRACK EVERY PESO YOUR INTEREST HAS GIVEN
            </h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:rgba(255,255,255,0.85);line-height:1.7;margin-top:1rem;">
                The charity contribution page keeps a running total of how much interest you've generated and donated over time, turning an otherwise invisible fee into something borrowers can actually see and feel good about.
            </p>
        </div>
        <img src="{{ asset('images/proj/M5.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
    </div>
</section>

<div class="mid-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

<style>
    @media (max-width: 768px) {
        .mid-row { flex-direction: column !important; gap: 2rem !important; text-align: center; align-items: center !important; }
        .mid-row > div { align-items: center !important; }
        .mid-row-banner { flex-direction: column !important; gap: 2rem !important; text-align: center !important; }
        .mid-row-banner > div { text-align: center !important; }
        .mid-chevron { height: 40px !important; }
    }
</style>

{{-- ── TECH STACK FOOTER ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 22%,100% 0,100% 100%,0 100%);padding-top:8rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <footer style="padding:2rem 3rem 5rem;position:relative;z-index:1;">
        <div style="max-width:1000px;margin:0 auto;text-align:center;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--text-primary);letter-spacing:0.05em;margin-bottom:3rem;">TECH STACK</h2>

            <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:2.5rem 2rem;max-width:500px;margin:0 auto;">
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Flutter</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Cross-platform app framework</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Dart</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">App logic & state</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Figma</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">UI/UX design & prototyping</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Firebase Firestore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Auth, database & loan records</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection