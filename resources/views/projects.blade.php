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

{{-- ── PROJECTS PAGE ── --}}
<section style="padding:8rem 3rem 6rem;max-width:1100px;margin:0 auto;">

    <a href="/#projects" style="display:inline-block;font-family:'Instrument Sans',sans-serif;font-size:0.75rem;color:var(--text-secondary);text-decoration:none;margin-bottom:2rem;letter-spacing:0.05em;">← Back to home</a>

    <h1 style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3rem);font-weight:700;color:var(--text-primary);margin-bottom:1rem;">Projects</h1>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.7;max-width:600px;margin-bottom:3.5rem;">
        A running log of what I've built — web systems, games, and everything in between.
    </p>

    @php
    $allProjects = [
        [
            'title' => 'RoboFrontier',
            'icon'  => 'rf-logo.webp',
        ],
        [
            'title' => 'PawPal',
            'icon'  => 'pawpal-logo.webp',
        ],
        [
            'title' => 'HRIS',
            'icon'  => 'hris-logo.webp',
        ],
        [
            'title' => 'Tanikala at Laya',
            'icon'  => 'tanikala-logo.webp',
        ],
        [
            'title' => 'ReVeil',
            'icon'  => 'reveil-logo.webp',
        ],
        [
            'title' => 'Terastalia',
            'icon'  => 'tera-logo.webp',
        ],
        [
            'title' => 'SQNHS STE Enrollment System',
            'icon'  => 'lms-logo.webp',
        ],
        [
            'title' => 'SQNHS Information System',
            'icon'  => 'repo-logo.webp',
        ],
        [
            'title' => 'Fragments of Hue',
            'icon'  => 'fragment-logo.webp',
        ],
        [
            'title' => 'TechBite',
            'icon'  => 'fragment-logo.webp',
            'icon'  => 'techbite-logo.webp',
        ],
        [
            'title' => 'MiDas',
            'icon'  => 'fragment-logo.webp',
            'icon'  => 'midas-logo.webp',
        ],
    ];
    @endphp

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;">
        @foreach($allProjects as $p)
        <div class="project-tile" onmouseover="this.querySelector('img').style.transform='scale(1.08)';this.querySelector('.project-tile-box').style.borderColor='var(--name-color)';this.querySelector('.project-tile-box').style.boxShadow='0 12px 30px rgba(0,0,0,0.18)';" onmouseout="this.querySelector('img').style.transform='scale(1)';this.querySelector('.project-tile-box').style.borderColor='var(--card-border)';this.querySelector('.project-tile-box').style.boxShadow='none';">
            <div class="project-tile-box" style="position:relative;width:100%;aspect-ratio:1/1;border-radius:18px;background:linear-gradient(135deg,var(--grad-1),var(--grad-2));border:1px solid var(--card-border);overflow:hidden;transition:border-color 0.3s ease,box-shadow 0.3s ease;cursor:pointer;">
                <img src="{{ asset('images/' . $p['icon']) }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:contain;padding:{{ $p['title'] === 'ReVeil' ? '0.75rem' : '2.5rem' }};transition:transform 0.35s ease;">

                {{-- Arrow button — wire up link later --}}
                <a href="#" style="position:absolute;top:0.9rem;right:0.9rem;width:38px;height:38px;display:flex;align-items:center;justify-content:center;text-decoration:none;transition:transform 0.25s ease;"
                    onmouseover="event.stopPropagation();this.style.transform='scale(1.15) rotate(45deg)';this.querySelector('svg').style.stroke='var(--name-color)';"
                    onmouseout="event.stopPropagation();this.style.transform='scale(1) rotate(0deg)';this.querySelector('svg').style.stroke='var(--text-primary)';">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--text-primary)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="transition:stroke 0.25s ease;">
                        <path d="M7 17 17 7"></path>
                        <path d="M7 7h10v10"></path>
                    </svg>
                </a>
            </div>

            <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1.1rem;font-weight:800;letter-spacing:0.02em;text-transform:uppercase;color:var(--text-primary);margin-top:1rem;line-height:1.3;text-align:center;">{{ $p['title'] }}</h3>
        </div>
        @endforeach
    </div>

</section>

{{-- ── SCRIPTS ── --}}
<script>
    window.addEventListener('load', () => {
        const icon = document.getElementById('themeIcon');
        if (icon) icon.src = document.documentElement.getAttribute('data-theme') === 'light' ? '{{ asset("images/dark-mode.png") }}' : '{{ asset("images/light-mode_white.png") }}';
    });
</script>

@endsection