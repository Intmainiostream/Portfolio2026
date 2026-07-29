@extends('layouts.app')
@section('title', 'Terastalia — Joshua Dela Cruz')

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
            <img src="{{ asset('images/tera-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A 2D GARDEN-NURTURING GAME ABOUT REBUILDING LIFE ON A NEW WORLD.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">FREELANCE PROJECT · 2025</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>. Graphics by <span style="color:var(--text-primary);font-weight:700;">Allana Aganan</span>.</p>
    </section>
</div>

{{-- Hero image goes here (placeholder removed) --}}
<div style="max-width:1000px;margin:0 auto;padding:2rem 3rem 2rem;">
    {{-- TODO: hero image --}}
</div>

{{-- ── OVERVIEW ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 50% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 50% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:4rem;flex-wrap:wrap;position:relative;z-index:1;" class="tera-row">
        <div style="flex:1;min-width:280px;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">The Overview</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
                Earth has been destroyed, and what remains of humanity now drifts through space aboard a single ship — carrying inside it the Everdome Garden, humanity's last patch of green. You play as the ship's caretaker, the one tending to what's left. When the crew discovers Krystalis, a new planet overflowing with water and strange wonders, watering its plants makes them grow miraculously. It just might be the way to bring Earth back to life.
            </p>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;align-items:center;">
            <img src="{{ asset('images/proj/T1.png') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="tera-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);"></div>

{{-- ── STORY / CUTSCENE ── --}}
<section style="padding:6rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;margin-bottom:3rem;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);">The Story So Far</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;max-width:700px;margin:1rem auto 0;">
            An opening cutscene sets the stage — why you're aboard the ship, what happened to Earth, and what the Everdome Garden means for humanity's future.
        </p>
    </div>
    <div style="max-width:1100px;margin:0 auto;display:flex;gap:2rem;flex-wrap:wrap;justify-content:center;">
        <img src="{{ asset('images/proj/T2.png') }}" style="flex:1;min-width:280px;max-width:500px;border-radius:20px;object-fit:contain;">
        <img src="{{ asset('images/proj/T3.png') }}" style="flex:1;min-width:280px;max-width:500px;border-radius:20px;object-fit:contain;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into dark features banner) ── --}}
<div class="tera-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="tera-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: GAMEPLAY OBJECTIVES ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="tera-row">
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/T4.png') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">GAMEPLAY OBJECTIVES</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                EACH LEVEL TASKS YOU WITH PLANTING AND WATERING CRYSTALLIZED PLANTS
            </h3>
        </div>
    </div>
</section>

{{-- ── FEATURE: WATERING / CARE (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="tera-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">LITTLE-BY-LITTLE CARE</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                TEND TO EACH PLANT GRADUALLY AS IT GROWS
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Krystalis's <strong style="color:var(--text-primary);">bountiful water supply</strong> means every drop counts — objectives guide you through watering and caretaking routines that bring each crystallized plant to life.
            </p>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/T5.png') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: PLANT INFO ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="tera-row">
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/T6.png') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">PLANT CODEX</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                LEARN ABOUT EACH PLANT ONCE IT FULLY GROWS
            </h3>
        </div>
    </div>
</section>

{{-- ── FEATURE: LEVEL UP (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="tera-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">PROGRESSION</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                LEVEL UP TO UNLOCK NEW, MORE MYSTERIOUS PLANTS
            </h3>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/T7.png') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .tera-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .tera-chevron { height: 40px !important; }
    }
</style>

{{-- ── TECH STACK FOOTER ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 22%,100% 0,100% 100%,0 100%);padding-top:8rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <footer style="padding:2rem 3rem 5rem;position:relative;z-index:1;">
        <div style="max-width:1000px;margin:0 auto;text-align:center;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--text-primary);letter-spacing:0.05em;margin-bottom:3rem;">TECH STACK</h2>

            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2.5rem 2rem;">
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Flutter</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Cross-platform app framework</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Flame</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">2D game engine & rendering</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Dart</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Gameplay logic & state</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Firebase Firestore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Auth, database & progress sync</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">ARCore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Augmented reality plant growth view</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection