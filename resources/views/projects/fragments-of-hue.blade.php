@extends('layouts.app')
@section('title', 'Fragments of Hue — Joshua Dela Cruz')

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
            <img src="{{ asset('images/fragment-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A 2D PUZZLE-DRIVEN STORY OF GODS, HUES, AND OBSESSION.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">PERSONAL PROJECT · 2025</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed & designed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>.</p>
    </section>
</div>

{{-- Hero image (home screen) --}}
<div style="max-width:600px;margin:0 auto;padding:2rem 3rem 2rem;">
    <img src="{{ asset('images/proj/F1.webp') }}" style="width:100%;object-fit:contain;">
</div>

{{-- ── THE STORY ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:800px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">The Story</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.9;">
            In the Lower World, beings are known as Hues — humans who carry the color of their soul. When the deity Murasaki, ruler of purple, glimpses a Hue named Skyblues, it's love at first sight. The Lower World sees her as a princess of beauty, and Murasaki descends to claim her for himself. But his affection curdles into obsession — and when Skyblues refuses to leave her world for his, his grief turns to madness. He begins painting everything purple, corrupting the other Hues one by one, until the chaos costs Skyblues her life. Only then, in ruin and regret, does he finally leave.
        </p>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="frag-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);"></div>

{{-- ── MURASAKI SECTION (F2 + F3 side by side) ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap;justify-content:center;" class="frag-row">
        <img src="{{ asset('images/proj/F2.webp') }}" style="flex:1;min-width:220px;max-width:320px;object-fit:contain;">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                LEVEL PROGRESSION UNFOLDS AS HIS OBSESSION GROWS
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-bottom:1.25rem;">
                Each completed level pulls back the curtain on Murasaki a little further — from a deity smitten at first sight to a god consumed by jealousy. The level map itself shifts as his color begins bleeding into the Lower World, visually tracking how far his obsession has spread.
            </p>
            <img src="{{ asset('images/proj/F3.webp') }}" style="width:100%;max-width:380px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="frag-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── SKYBLUES SECTION (F4 + F5 side by side) ── --}}
<section style="background:var(--card-bg);padding:5rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:2rem;flex-wrap:wrap-reverse;justify-content:center;" class="frag-row">
        <div style="flex:1.3;min-width:280px;display:flex;flex-direction:column;align-items:flex-start;">
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;margin-bottom:1rem;">
                SOLVE HAND-CRAFTED PUZZLES TO PUSH THE STORY FORWARD
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-bottom:1.25rem;">
                Skyblues isn't just the reason Murasaki descends — she's woven into the puzzles themselves. Each hand-crafted challenge marks a beat in her story, from being seen as the Lower World's princess to standing her ground against a god who won't take no for an answer.
            </p>
            <img src="{{ asset('images/proj/F5.webp') }}" style="width:100%;max-width:380px;object-fit:contain;">
        </div>
        <img src="{{ asset('images/proj/F4.webp') }}" style="flex:1;min-width:180px;max-width:260px;object-fit:contain;">
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into dark features banner) ── --}}
<div class="frag-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── AR UNLOCK FEATURE BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:rgba(255,255,255,0.8);letter-spacing:0.08em;margin-bottom:0.75rem;">BEYOND THE SCREEN</p>
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;max-width:700px;margin:0 auto;">
        COMPLETED PUZZLES UNLOCK IN AUGMENTED REALITY
    </h2>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:rgba(255,255,255,0.85);line-height:1.7;max-width:600px;margin:1rem auto 0;">
        Every puzzle finished in the story becomes a piece of Hue lore you can place and view in AR — a keepsake of the world Murasaki nearly painted over.
    </p>
</section>

<div class="frag-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

<style>
    @media (max-width: 768px) {
        .frag-row { flex-direction: column !important; gap: 2rem !important; text-align: center; align-items: center !important; }
        .frag-row > div { align-items: center !important; }
        .frag-chevron { height: 40px !important; }
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
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Auth, database & puzzle progress</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">ARCore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">In-AR puzzle unlock viewer</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">ibisPaint</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Character & world illustration</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection