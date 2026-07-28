@extends('layouts.app')
@section('title', 'Reveil — Joshua Dela Cruz')

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

{{-- ── HERO ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 0,100% 0,100% 78%,0 100%);padding-bottom:8rem;">

    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 40%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 40%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <section style="padding:9rem 3rem 2rem;max-width:1000px;margin:0 auto;text-align:center;position:relative;z-index:1;">

        <div style="display:flex;justify-content:center;margin-bottom:1.5rem;">
            <img src="{{ asset('images/reveil-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A 2D PLATFORMER ABOUT A WORLD BUILT TO LIE TO YOU — AND THE ORB THAT LETS YOU SEE THROUGH IT.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">GAME JAM 2026 · SIKAPTALA · THEME: "WE DON'T SEE THINGS AS THEY ARE" · TOP 8 FINALIST</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span> under team <span style="color:var(--text-primary);font-weight:700;">PopcornCat</span>.</p>
    </section>
</div>

{{-- Hero image: main menu --}}
<div style="max-width:1000px;margin:0 auto;padding:2rem 3rem 2rem;display:flex;justify-content:center;">
    <img src="{{ asset('images/proj/RV1.webp') }}" style="width:100%;max-width:900px;border-radius:20px;object-fit:contain;">
</div>

{{-- ── OVERVIEW ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:900px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">Overview</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
            You are a scholar of the Veiled Institute, raised on a world of soft grass and open skies. One day you meet another version of yourself — rendered entirely in monochrome. He hands you the Visionary, a black eye-shaped orb, and vanishes. From that moment, holding it lets you toggle your sight between the world you were taught and the world that was hidden underneath it. Every obstacle you erase from the "real" world exists only because the sages of the Veiled Institute built it there to keep you looking away. Follow the golden floating gate, chase down the truth, and find out exactly what your teachers didn't want you to see.
        </p>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="rf-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="rf-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: THE VISIONARY ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/RV2.webp') }}" style="width:100%;max-width:800px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">THE VISIONARY</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                A BLACK EYE ORB THAT LETS YOU SEE PAST THE LIE
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Hold Shift to look through the Visionary and toggle your sight between worlds. It's the only tool that lets you erase an obstacle from the world you were shown, into the world that was always underneath it.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: THE FAKE WORLD (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">THE DEFAULT WORLD</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                A GRASSY, SUNLIT WORLD — BUILT BY THE SAGES TO BE BELIEVED
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                This is the world the Veiled Institute taught you to trust: open fields, solid ground, nothing out of place. It's also the one the sages designed specifically so you'd never think to question it.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/RV4.webp') }}" style="width:100%;max-width:800px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: THE MONOCHROME WORLD ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/RV3.webp') }}" style="width:100%;max-width:800px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">THE PLOT TWIST</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                THE MONOCHROME WORLD ISN'T THE ILLUSION — IT'S THE TRUTH
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Toggle the Visionary and the color drains out — but so does the lie. What looks like the "fake" grayscale layer is actually reality; the grassy world above it was the one built to fool you.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: RISK & TIMING (centered, no image) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">PRECISION PLATFORMING</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;max-width:760px;margin:0 auto 1rem;">
            TOGGLE WISELY — THE VISIONARY HAS A COOLDOWN, AND THE WORLD DOESN'T WAIT
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;max-width:700px;margin:0 auto;">
            Switching sight isn't free. The orb needs time to recharge before it can be used again, and stepping back into the default world can cause platforms you relied on to crumble or vanish entirely. Every jump means reading both worlds at once and committing to where you'll actually land.
        </p>
    </div>
</section>

{{-- ── ACHIEVEMENT BANNER ── --}}
<section style="padding:2rem 3rem 5rem;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">SIKAPTALA GAME JAM 2026</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.4rem,2.2vw,1.8rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:2rem;">
            TOP 8 FINALIST — TEAM POPCORNCAT
        </h3>
        <div style="display:flex;justify-content:center;flex-direction:column;align-items:center;gap:1.5rem;">
            <img src="{{ asset('images/proj/RV5.webp') }}" style="width:100%;max-width:700px;height:auto;border-radius:12px;object-fit:contain;box-shadow:0 20px 50px rgba(0,0,0,0.25);">
            <button onclick="document.getElementById('certModal').style.display='flex'" style="font-family:'Instrument Sans',sans-serif;font-size:0.85rem;font-weight:700;color:#fff;background:var(--accent);border:none;padding:0.85rem 2rem;border-radius:30px;cursor:pointer;letter-spacing:0.03em;">
                View Certificate
            </button>
        </div>
    </div>
</section>

{{-- ── CERTIFICATE MODAL ── --}}
<div id="certModal" onclick="if(event.target===this)this.style.display='none'" style="display:none;position:fixed;inset:0;z-index:1000;background:rgba(0,0,0,0.85);align-items:center;justify-content:center;padding:2rem;">
    <div style="position:relative;max-width:900px;width:100%;">
        <button onclick="document.getElementById('certModal').style.display='none'" style="position:absolute;top:-3rem;right:0;background:none;border:none;color:#fff;font-size:2rem;cursor:pointer;line-height:1;">&times;</button>
        <img src="{{ asset('images/gamejam.webp') }}" style="width:100%;height:auto;border-radius:12px;box-shadow:0 20px 60px rgba(0,0,0,0.4);">
    </div>
</div>reveilll

<style>
    @media (max-width: 768px) {
        .rf-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .rf-chevron { height: 40px !important; }
    }
</style>

{{-- ── TECH STACK FOOTER ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 22%,100% 0,100% 100%,0 100%);padding-top:8rem;">

    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <footer style="padding:2rem 3rem 5rem;position:relative;z-index:1;">
        <div style="max-width:1000px;margin:0 auto;text-align:center;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--text-primary);letter-spacing:0.05em;margin-bottom:3rem;">TECH STACK</h2>

            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2.5rem 2rem;">
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Unity</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Game engine</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">C#</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Gameplay & mechanics</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Aseprite</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Pixel art & animation</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Anchorpoint</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Asset & project sync</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Git & GitHub</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Version control</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">FMOD / Audio</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Sound & music</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection