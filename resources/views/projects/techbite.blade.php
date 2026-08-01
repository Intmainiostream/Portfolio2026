@extends('layouts.app')
@section('title', 'TechBite — Joshua Dela Cruz')

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
            <img src="{{ asset('images/techbite-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            AN E-COMMERCE FOOD ORDERING APP, MY FIRST EVER PROJECT.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">PERSONAL PROJECT · 2022</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed & designed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>.</p>
    </section>
</div>

{{-- Hero image (login/register — portrait) --}}
<div style="max-width:300px;margin:0 auto;padding:2rem 3rem 2rem;">
    <img src="{{ asset('images/proj/TB1.webp') }}" style="width:100%;object-fit:contain;border-radius:14px;">
</div>

{{-- ── THE STORY ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:800px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">The Story</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.9;">
            TechBite was my very first real project, built back in 2022 with Android Studio and Java. It's a food-ordering e-commerce app in the same spirit as FoodPanda — browse cuisines, order drinks and meals, and check out. It's where I first learned how to structure an Android app end to end, from login all the way to a working order flow.
        </p>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="tb-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);"></div>

{{-- ── HOME PAGE SECTION (TB2) ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap;justify-content:center;" class="tb-row">
        <img src="{{ asset('images/proj/TB2.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                A CLASSIC HOME PAGE BUILT AROUND WHAT'S POPULAR
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;">
                The home page lays out cuisines and drinks for ordering, running promos, and a "what's popular" section right up top — a familiar layout borrowed from food delivery apps to keep the ordering flow intuitive from the first tap.
            </p>
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="tb-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── ORDER TRACKING SECTION (TB3) ── --}}
<section style="background:var(--card-bg);padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap-reverse;justify-content:center;" class="tb-row">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                REAL-TIME TRACKING FROM KITCHEN TO DOORSTEP
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;">
                Once an order's placed, a live tracking screen follows it through each stage — preparing, out for delivery, arriving — so users always know exactly where their food is without needing to ask.
            </p>
        </div>
        <img src="{{ asset('images/proj/TB3.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into scheduling feature banner) ── --}}
<div class="tb-chevron" style="height:70px;background:linear-gradient(135deg,color-mix(in srgb,var(--feature-grad-1) 100%,black 40%),color-mix(in srgb,var(--feature-grad-2) 100%,black 40%));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── SCHEDULE ORDER FEATURE BANNER (TB4) ── --}}
<section style="background:linear-gradient(135deg,color-mix(in srgb,var(--feature-grad-1) 100%,black 40%),color-mix(in srgb,var(--feature-grad-2) 100%,black 40%));padding:5rem 3rem 6rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2.5rem;flex-wrap:wrap;justify-content:center;text-align:left;" class="tb-row-banner">
        <div style="flex:1.3;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:rgba(255,255,255,0.8);letter-spacing:0.08em;margin-bottom:0.75rem;">PLAN AHEAD</p>
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">
                SCHEDULE YOUR ORDER FOR LATER
            </h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:rgba(255,255,255,0.85);line-height:1.7;margin-top:1rem;">
                Not hungry right now? TechBite lets users schedule an order ahead of time, so meals show up exactly when they're wanted instead of only on-demand.
            </p>
        </div>
        <img src="{{ asset('images/proj/TB4.webp') }}" style="flex:1;min-width:200px;max-width:260px;object-fit:contain;border-radius:14px;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into unique feature banner) ── --}}
<div class="tb-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── SCHEDULED DELIVERY FEATURE BANNER (unique differentiator) ── --}}
<section style="background:var(--card-bg);padding:5rem 3rem 6rem;text-align:center;">
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">WHAT MAKES IT DIFFERENT</p>
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);letter-spacing:0.03em;max-width:700px;margin:0 auto;">
        SCHEDULE YOUR ORDER DAYS AHEAD, NOT JUST MINUTES
    </h2>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;max-width:600px;margin:1rem auto 0;">
        Unlike typical on-demand food apps, TechBite lets users pick a future delivery date straight from a calendar — with the vendor's distance and delivery fee shown before confirming. Pair that with a built-in referral system that rewards users with vouchers for inviting friends, and ordering becomes less about right-now convenience and more about planning ahead and earning along the way.
    </p>
</section>

<div class="tb-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

<style>
    @media (max-width: 768px) {
        .tb-row { flex-direction: column !important; gap: 2rem !important; text-align: center; align-items: center !important; }
        .tb-row > div { align-items: center !important; }
        .tb-row-banner { flex-direction: column !important; gap: 2rem !important; text-align: center !important; }
        .tb-row-banner > div { text-align: center !important; }
        .tb-chevron { height: 40px !important; }
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
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Android Studio</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Native Android IDE</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Java</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">App logic & backend</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">XML</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Android UI layouts</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Figma</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">UI/UX design & prototyping</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection