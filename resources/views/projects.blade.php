@extends('layouts.app')
@section('title', 'Projects — Joshua Dela Cruz')

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

{{-- ── HEADER ── --}}
<section style="padding:9rem 3rem 3rem;max-width:1200px;margin:0 auto;">
    <h1 style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3rem);font-weight:700;color:var(--text-primary);margin-bottom:1rem;">Projects</h1>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.7;max-width:600px;">
        A running log of what I've built — web systems, games, and everything in between.
    </p>
</section>

{{-- ── PROJECTS GRID ── --}}
<section style="padding:0 3rem 6rem;max-width:1200px;margin:0 auto;">

    @php
    $allProjects = [
        ['RoboFrontier', 'rf-logo.webp', 'robofrontier'],
        ['PawPal', 'pawpal-logo.webp', 'pawpal'],
        ['HRIS', 'hris-logo.webp', 'hris'],
        ['Tanikala at Laya', 'tanikala-logo.webp', 'tanikala-at-laya'],
        ['ReVeil', 'reveil-logo.webp', 'reveil'],
        ['Terastalia', 'tera-logo.webp', 'terastalia'],
        ['SQNHS STE Enrollment System', 'lms-logo.webp', 'sqnhs-ste-lms'],
        ['SQNHS Information System', 'repo-logo.webp', 'sqnhs-cms'],
        ['Fragments of Hue', 'fragment-logo.webp', 'fragments-of-hue'],
        ['TechBite', 'techbite-logo.webp', 'techbite'],
        ['MiDas', 'midas-logo.webp', 'midas'],
    ];
    @endphp

    <div class="projects-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;">
        @foreach($allProjects as $proj)
        <a href="/projects/{{ $proj[2] }}" class="project-card-item" style="text-decoration:none;display:block;" onmouseover="this.querySelector('img').style.transform='scale(1.08)';this.querySelector('.project-tile-box').style.borderColor='var(--name-color)';this.querySelector('.project-tile-box').style.boxShadow='0 12px 30px rgba(0,0,0,0.18)';" onmouseout="this.querySelector('img').style.transform='scale(1)';this.querySelector('.project-tile-box').style.borderColor='var(--card-border)';this.querySelector('.project-tile-box').style.boxShadow='none';">
            <div class="project-tile-box" style="position:relative;width:100%;aspect-ratio:1/1;border-radius:18px;background:linear-gradient(135deg,var(--grad-1),var(--grad-2));border:1px solid var(--card-border);overflow:hidden;transition:border-color 0.3s ease,box-shadow 0.3s ease;cursor:pointer;">
                <img src="{{ asset('images/' . $proj[1]) }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:contain;padding:{{ $proj[0] === 'ReVeil' ? '0.75rem' : '2.5rem' }};transition:transform 0.35s ease;">

                {{-- Arrow icon (no longer a separate link, just decorative) --}}
                <span style="position:absolute;top:0.9rem;right:0.9rem;width:38px;height:38px;display:flex;align-items:center;justify-content:center;transition:transform 0.25s ease;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--text-primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="transition:stroke 0.25s ease;">
                        <path d="M7 17 17 7"></path>
                        <path d="M7 7h10v10"></path>
                    </svg>
                </span>
            </div>

            <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1.1rem;font-weight:800;letter-spacing:0.02em;text-transform:uppercase;color:var(--text-primary);margin-top:1rem;line-height:1.3;text-align:center;">{{ $proj[0] }}</h3>
        </a>
        @endforeach
    </div>

</section>

<style>
    @media (max-width: 1024px) and (min-width: 769px) {
        .projects-grid { grid-template-columns: repeat(2,1fr) !important; }
    }
    @media (max-width: 768px) {
        .projects-grid { grid-template-columns: 1fr !important; gap: 1.5rem !important; }
    }
</style>

@endsection