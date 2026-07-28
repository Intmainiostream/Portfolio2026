@extends('layouts.app')
@section('title', 'Tanikala at Laya — Joshua Dela Cruz')

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
            <img src="{{ asset('images/tanikala-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A 2D SIDE-SCROLLER VISUAL NARRATIVE GAME SET DURING THE PHILIPPINE MARTIAL LAW ERA.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">FREELANCE PROJECT · 2026</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>. Graphics by <span style="color:var(--text-primary);font-weight:700;">Allana Aganan</span>.</p>
    </section>
</div>

{{-- ── OVERVIEW ── --}}
<section style="position:relative;overflow:hidden;background:var(--bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:900px;margin:0 auto;position:relative;z-index:1;text-align:center;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">About Tanikala at Laya</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
            Tanikala at Laya is a 2D side-scroller visual narrative game built in Unity, telling a fictionalized coming-of-age story set against the backdrop of Martial Law under the Marcos regime — from the early years of curfews and censorship through the unrest that led to the EDSA People Power Revolution. I came on as a freelance developer to help the client's team bring their capstone project to life — from development and cloud infrastructure to the research paper and thesis documentation itself — while the client's team led the narrative and historical research.
        </p>
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into dark features banner) ── --}}
<div class="rf-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="rf-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: NARRATIVE-DRIVEN SIDE-SCROLLER ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:800px;margin:0 15% 0 auto;text-align:left;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">NARRATIVE-DRIVEN GAMEPLAY</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
            A 2D SIDE-SCROLLER TOLD THROUGH A FAMILY'S EYES
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;margin-top:1rem;">
            Players move through hand-crafted 2D environments as the story unfolds in chapters, each representing a different period of Martial Law — from its declaration to the growing resistance movements and the eventual uprising at EDSA.
        </p>
    </div>
</section>

{{-- ── FEATURE: HISTORICAL STORYTELLING ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:800px;margin:0 auto 0 15%;text-align:left;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">HISTORICAL CONTEXT</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
            DIALOGUE AND EVENTS GROUNDED IN REAL HISTORY
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;margin-top:1rem;">
            Story beats, dialogue, and in-game events were researched and written by the client's team to reflect real accounts from the Martial Law period, giving the game an educational layer alongside its narrative.
        </p>
    </div>
</section>

{{-- ── FEATURE: CLOUD-SYNCED PROGRESS ── --}}
<section style="padding:5rem 3rem;">
    <div style="max-width:800px;margin:0 15% 0 auto;text-align:left;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">CLOUD SAVE SYSTEM</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
            PROGRESS AND ASSETS SYNCED THROUGH FIREBASE
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;margin-top:1rem;">
            Player save data is stored in Firestore, while game assets and media are served from Firebase Storage — keeping the build lightweight and progress persistent across sessions.
        </p>
    </div>
</section>

{{-- ── FEATURE: DOCUMENTATION SUPPORT ── --}}
<section style="padding:5rem 3rem 6rem;">
    <div style="max-width:800px;margin:0 auto 0 15%;text-align:left;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">THESIS & RESEARCH SUPPORT</p>
        <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
            HELPED WRITE THE RESEARCH PAPER AND REVISE THE MANUSCRIPT
        </h3>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.8;margin-top:1rem;">
            Beyond development, I contributed to the capstone's research paper and helped revise the technical manuscript — including flowcharts, an ERD, use case diagrams, IPO diagrams, and the architectural framework — to match the actual system that was built.
        </p>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .rf-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .rf-chevron { height: 40px !important; }
    }
    @media (max-width: 640px) {
        section > div[style*="text-align:left"],
        section > div[style*="text-align:right"] {
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }
</style>

{{-- ── PRIVACY NOTE + TECH STACK FOOTER ── --}}
<div style="position:relative;overflow:hidden;background:var(--card-bg);clip-path:polygon(0 22%,100% 0,100% 100%,0 100%);padding-top:8rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 60%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <footer style="padding:2rem 3rem 5rem;position:relative;z-index:1;">
        <div style="max-width:1000px;margin:0 auto;text-align:center;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:var(--text-primary);letter-spacing:0.05em;margin-bottom:1rem;">TECH STACK</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.85rem;color:var(--text-secondary);max-width:600px;margin:0 auto 3rem;line-height:1.7;">
                No in-game screenshots are shown here out of respect for the client's privacy.
            </p>

            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:2.5rem 2rem;">
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Unity</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Game engine & core gameplay</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">C#</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Gameplay scripting</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Firestore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Player save data & progress sync</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Firebase Storage</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Game asset & media hosting</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection