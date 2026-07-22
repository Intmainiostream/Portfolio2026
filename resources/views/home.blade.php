@extends('layouts.app')
@section('title', 'Joshua Dela Cruz')

@section('content')

{{-- ── Intro animation overlay ── --}}
<div class="intro-overlay" id="introOverlay">
    <canvas id="symbioteCanvas" style="position:absolute;inset:0;width:100%;height:100%;"></canvas>
</div>

{{-- ── NAV ── --}}
<nav style="position:fixed;top:0;left:0;right:0;z-index:100;padding:1.25rem 3rem;display:flex;justify-content:flex-end;align-items:center;backdrop-filter:blur(10px);background:var(--nav-bg);border-bottom:1px solid var(--border);">
    
    <div style="display:flex;gap:2rem;align-items:center;">
        <a href="/" id="navHome" data-section="hero" onclick="if(window.location.pathname==='/'){window.scrollTo({top:0,behavior:'instant'});return false;}" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;display:inline-block;transition:font-size 0.25s ease,font-weight 0.25s ease,color 0.25s ease;">Home</a>
        <a href="#about" id="navAbout" data-section="about"      style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;display:inline-block;transition:font-size 0.25s ease,font-weight 0.25s ease,color 0.25s ease;">About</a>
        <a href="/stack" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Stack</a>
        <a href="#contact" id="navContact" data-section="contact"      style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;display:inline-block;transition:font-size 0.25s ease,font-weight 0.25s ease,color 0.25s ease;">Contact</a>
        <button id="themeToggle" onclick="toggleTheme()" style="width:34px;height:34px;border-radius:50%;border:1px solid var(--border-light);background:transparent;display:flex;align-items:center;justify-content:center;cursor:pointer;padding:0;">
            <img id="themeIcon" src="{{ asset('images/dark-mode.png') }}" style="width:26px;height:26px;object-fit:contain;">
        </button>
    </div>
</nav>

{{-- ── HERO ── --}}
<section id="hero" style="min-height:100vh;display:flex;align-items:center;padding:0 3rem;padding-top:5rem;max-width:1400px;margin:0 auto;gap:4rem;">

    {{-- Left --}}
    <div style="flex:1;">

        <h1 style="font-family:'Courier New',monospace;font-size:clamp(2.5rem,5vw,4rem);font-weight:700;color:var(--text-primary);line-height:1.1;margin-bottom:0.25rem;">
            Hello I'm
        </h1>
        <h1 style="font-family:'Courier New',monospace;font-size:clamp(2.5rem,5vw,4rem);font-weight:700;color:var(--name-color);line-height:1.1;margin-bottom:1.5rem;">
            Joshua Dave<br>Dela Cruz
        </h1>
        <p style="font-family:'Instrument Sans',sans-serif;color:var(--text-body);font-size:1rem;line-height:1.7;max-width:520px;margin-bottom:0.5rem;">
            I'm a software engineer. I build web systems and games, and these days I'm focused on Laravel and Unity.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;color:var(--text-body);font-size:1rem;line-height:1.7;max-width:520px;margin-bottom:2rem;">
            Based in Pangasinan, PH. I love turning rough ideas into things people actually use.
        </p>
        <div style="display:flex;gap:1.25rem;align-items:center;flex-wrap:wrap;font-family:'Courier New',monospace;font-size:0.8rem;">
            <a href="{{ asset('cv/Resume_JoshuaDaveDelaCruz.pdf') }}" style="color:var(--name-color);text-decoration:none;" download>resume ↗</a>
            <a href="https://github.com/Intmainiostream" target="_blank" style="color:var(--text-secondary);text-decoration:none;">github ↗</a>
            <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" style="color:var(--text-secondary);text-decoration:none;">linkedin ↗</a>
            <a href="#" onclick="document.getElementById('emailModal').style.display='flex';return false;" style="color:var(--text-secondary);text-decoration:none;">email</a>
        </div>

        {{-- Email modal --}}
        <div id="emailModal" style="display:none;position:fixed;inset:0;z-index:2000;background:rgba(0,0,0,0.5);align-items:center;justify-content:center;padding:1.5rem;" onclick="if(event.target===this)this.style.display='none';">
            <div style="background:var(--card-bg);border:1px solid var(--card-border);border-radius:16px;padding:2rem;max-width:400px;width:100%;position:relative;">
                <button onclick="document.getElementById('emailModal').style.display='none';" style="position:absolute;top:1.25rem;right:1.25rem;background:none;border:none;color:var(--text-secondary);font-size:1.25rem;cursor:pointer;line-height:1;">×</button>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--text-secondary);letter-spacing:0.1em;margin-bottom:0.75rem;">GET IN TOUCH</p>
                <h3 style="font-family:'Courier New',monospace;font-size:1.5rem;font-weight:700;color:var(--text-primary);margin-bottom:0.75rem;">say hello</h3>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.6;margin-bottom:1.5rem;">For work, collabs, or just to say hi — drop me a line.</p>
                <div style="display:flex;align-items:center;justify-content:space-between;background:var(--bg);border:1px solid var(--border);border-radius:10px;padding:0.75rem 1rem;margin-bottom:0.75rem;">
                    <span style="font-family:'Courier New',monospace;font-size:0.85rem;color:var(--text-primary);">joshua.developerr@gmail.com</span>
                    <button onclick="navigator.clipboard.writeText('joshua.developerr@gmail.com');this.textContent='Copied!';setTimeout(()=>this.textContent='Copy',1500);" style="background:var(--name-color);color:#fff;border:none;border-radius:6px;padding:0.4rem 0.9rem;font-family:'Courier New',monospace;font-size:0.75rem;cursor:pointer;flex-shrink:0;margin-left:0.75rem;">Copy</button>
                </div>
                <a href="mailto:joshua.developerr@gmail.com" style="display:block;text-align:center;border:1px solid var(--border-light);border-radius:10px;padding:0.75rem;font-family:'Instrument Sans',sans-serif;font-size:0.85rem;color:var(--text-primary);text-decoration:none;">Open mail app</a>
            </div>
        </div>
    </div>

    {{-- Right — glowing circle avatar --}}
    <div style="flex:1;display:flex;justify-content:center;align-items:center;">
        <div style="position:relative;width:280px;height:280px;">
            {{-- Glow ring --}}
           <div style="position:absolute;inset:-8px;border-radius:50%;border:2px solid #a855f733;box-shadow:0 0 40px #a855f733,0 0 80px #a855f711;"></div>
            <div style="position:absolute;inset:-16px;border-radius:50%;border:1px solid #a855f711;"></div>
            {{-- Orbit dots --}}
            <div class="orbit-dot"></div>
            <div class="orbit-dot orbit-dot-2"></div>
            {{-- Avatar placeholder --}}
            <div style="width:280px;height:280px;border-radius:50%;background:linear-gradient(135deg,var(--grad-1),var(--grad-2));border:2px solid #a855f755;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                {{-- Replace with <img src="{{ asset('images/avatar.jpg') }}" ...> later --}}
                <img src="{{ asset('images/sableye.gif') }}" style="width:100%;height:100%;object-fit:cover;">
            </div>
        </div>
    </div>

</section>

{{-- ── STATS BAR ── --}}
<section class="reveal" style="border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:2.5rem 3rem;max-width:1400px;margin:0 auto;">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;text-align:center;">
        @foreach([['21','Age'],['7+','Projects built'],['2026','Graduate']] as $stat)
        <div>
            <div style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3rem);font-weight:700;color:var(--text-primary);">{{ $stat[0] }}</div>
            <div style="font-family:'Courier New',monospace;font-size:0.75rem;color:var(--text-secondary);margin-top:4px;">{{ $stat[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── SHORT PROFILE ── --}}
<section id="about" class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);text-align:center;margin-bottom:3rem;">Short Profile</h2>
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:1.5rem;margin-bottom:1.5rem;">
        {{-- Main card --}}
        <div class="bg-card" style="border-radius:16px;padding:2rem;position:relative;overflow:hidden;min-height:280px;display:flex;flex-direction:column;justify-content:flex-end;">
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,var(--card-overlay-1),var(--card-overlay-2));border-radius:16px;"></div>
            {{-- placeholder image area --}}
            <div style="position:absolute;inset:0;overflow:hidden;border-radius:16px;">
                <img src="{{ asset('images/Cog.webp') }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;opacity:var(--cog-opacity);">
            </div>
            <div style="position:relative;z-index:1;">
                <p class="cog-caption" style="font-family:'Courier New',monospace;font-size:1.1rem;font-weight:700;color:var(--text-primary);line-height:1.6;">
                    Where ideas become software,<br>and imagination becomes interactive gameplay.
                </p>
            </div>
        </div>
        {{-- Side cards --}}
        <div style="display:flex;flex-direction:column;gap:1.5rem;">
            {{-- Stack card --}}
            <div class="bg-card" style="border-radius:16px;padding:1.5rem;flex:1;">
                <div style="margin-bottom:0.5rem;">
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;font-weight:700;color:var(--text-primary);">Stack</h3>
                </div>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:1rem;">Languages & Tools</p>
                <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                    @foreach(['Java','C#','PHP','Python','Dart'] as $tech)
                    <span style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;padding:3px 9px;border-radius:9999px;background:var(--badge-bg);color:var(--badge-text);border:1px solid #a855f733;">{{ $tech }}</span>
                    @endforeach
                    <a href="/stack" style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;padding:3px 9px;border-radius:9999px;color:var(--text-secondary);text-decoration:none;border:1px dashed var(--border-light);">+ More</a>
                </div>
            </div>
            {{-- Beyond Code card --}}
            <div class="bg-card" style="border-radius:16px;padding:1.5rem;flex:1;">
                <div style="margin-bottom:0.5rem;">
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;font-weight:700;color:var(--text-primary);">Beyond Code</h3>
                </div>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:1rem;">Interests & Hobbies</p>
                <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                    @foreach(['Game Jams','Creative Writing','Unity Projects','Gaming'] as $interest)
                    <span style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;padding:3px 9px;border-radius:9999px;background:var(--badge-bg);color:var(--badge-text);border:1px solid #a855f733;">{{ $interest }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Award cards --}}
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;">
        <div class="bg-card bg-card-hover" style="border-radius:16px;padding:1.75rem;display:flex;gap:1.25rem;align-items:flex-start;transition:all 0.3s;">
            <div style="flex-shrink:0;margin-top:2px;width:48px;height:48px;">
                <img src="{{ asset('images/trophy.webp') }}" loading="lazy" decoding="async" width="48" height="48" style="width:100%;height:100%;object-fit:contain;">
            </div>
            <div>
                <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:4px;">IT Skills Olympics</h3>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:0.75rem;letter-spacing:0.05em;">Android Dev · Game Category · Champion 2025</p>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);line-height:1.7;">Competed and won 1st place at the University of Makati — Android game development category.</p>
            </div>
        </div>
        <div class="bg-card bg-card-hover" style="border-radius:16px;padding:1.75rem;display:flex;gap:1.25rem;align-items:flex-start;transition:all 0.3s;">
            <div style="flex-shrink:0;margin-top:2px;width:48px;height:48px;">
                <img src="{{ asset('images/research.webp') }}" loading="lazy" decoding="async" width="48" height="48" style="width:100%;height:100%;object-fit:contain;">
            </div>
            <div>
                <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:4px;">SikapTala National Competition</h3>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:0.75rem;letter-spacing:0.05em;">Research Presentation · Top 3 · 2026</p>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);line-height:1.7;">National Computer Science & IT competition — Top 3 research presentation.</p>
            </div>
        </div>
    </div>
    <p style="font-family:'Courier New',monospace;font-size:1rem;font-weight:500;font-style:italic;color:var(--text-secondary);text-align:center;margin-top:2.5rem;letter-spacing:0.05em;">"Ad astra abyssosque!"</p>
</section>

{{-- ── PROJECTS ── --}}
<section id="projects" class="reveal" style="padding:5rem 3rem;padding-top:8rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);text-align:center;margin-bottom:0.5rem;">
        A small selection of <span style="color:var(--name-color);">recent projects</span>
    </h2>
   

    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;">
        @php
        $projects = [
            ['RoboFrontier','A game-based robotics learning RPG — capstone project','Senior Programmer','Unity · C# · Android','🎮'],
            ['TechBite','Fast food e-commerce mobile app','Developer','Android Studio · Java',''],
            ['MiDas','Concept lending app where interest goes to charity','Developer','Flutter · Dart','💸'],
            ['PawPal','Frontend for a pet care services startup web app','Frontend Dev','HTML · CSS · JavaScript','🐾'],
        ];
        @endphp

        @foreach($projects as $project)
        <div class="project-card bg-card" style="border-radius:16px;overflow:hidden;cursor:default;transition:all 0.3s;border:1px solid var(--border);">
            {{-- Image placeholder --}}
            <div style="position:relative;height:320px;background:linear-gradient(135deg,#2E0047,#000847);display:flex;align-items:center;justify-content:center;overflow:hidden;">
                @if($project[0] === 'RoboFrontier')
                <div class="slideshow-wrapper" data-images="{{ asset('images/RF1.png') }},{{ asset('images/RF2.png') }},{{ asset('images/RF3.png') }}">
                    <img class="slide-img" src="{{ asset('images/RF1.png') }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'MiDas')
                <div class="slideshow-wrapper" data-images="{{ asset('images/M1.webp') }},{{ asset('images/M2.webp') }},{{ asset('images/M3.webp') }}">
                    <img class="slide-img" src="{{ asset('images/M1.webp') }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'PawPal')
                <div class="slideshow-wrapper" data-images="{{ asset('images/P1.webp') }},{{ asset('images/P2.webp') }},{{ asset('images/P3.webp') }}">
                    <img class="slide-img" src="{{ asset('images/P1.webp') }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'TechBite')
                <div class="slideshow-wrapper" data-images="{{ asset('images/TECH1.png') }},{{ asset('images/TECH2.png') }},{{ asset('images/TECH3.png') }}">
                    <img class="slide-img" src="{{ asset('images/TECH1.png') }}" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @else
                <div style="font-size:4rem;">{{ $project[4] }}</div>
                @endif
                {{-- Hover overlay --}}
                <div class="project-overlay" style="position:absolute;inset:0;background:#a855f722;backdrop-filter:blur(2px);display:flex;align-items:center;justify-content:center;">
                    <span style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;color:#fff;border:1px solid #fff;padding:6px 16px;border-radius:9999px;">{{ $project[2] }}</span>
                </div>
                {{-- Replace div above with actual <img> later --}}
            </div>
            {{-- Info --}}
            <div style="padding:1.5rem;">
                <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1.1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.5rem;">{{ $project[0] }}</h3>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);line-height:1.6;margin-bottom:1rem;">{{ $project[1] }}</p>
                <div style="display:flex;gap:0.5rem;flex-wrap:wrap;">
                    @foreach(explode(' · ',$project[3]) as $tech)
                    <span style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;padding:3px 10px;border-radius:9999px;background:var(--border);color:var(--text-secondary);border:1px solid var(--border-light);">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── EXPERIENCE ── --}}
<section class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
 <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);text-align:center;margin-bottom:3rem;">
        My <span style="color:var(--name-color);">Experience</span>
    </h2>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;">
        @php
        $experiences = [
            ['intermed.webp','Intermed LLC Corporation','Lead Developer · 2026 · Hybrid','Developed a full-scale HRIS across 6 modules using Laravel and MySQL. Contributed to system architecture, feature implementation, and team collaboration during internship development.'],
            ['game.webp','Private Client Project','Freelance · Game Developer','Side-scroll 2D educational game. Designed and developed core gameplay systems and educational content integration.'],
            ['trophy.webp','IT Skills Olympics','Android Dev · Game Category · Champion 2025','Competed and won 1st place at the University of Makati — Android game development category.'],
            ['research.webp','SikapTala National Competition','Research Presentation · Top 3 · 2026','National Computer Science & IT competition — Top 3 research presentation.'],
        ];
        @endphp
        @foreach($experiences as $exp)
        <div class="bg-card bg-card-hover" style="border-radius:16px;padding:1.75rem;display:flex;gap:1.25rem;align-items:flex-start;transition:all 0.3s;">
            <div style="flex-shrink:0;margin-top:2px;width:48px;height:48px;">
                <img src="{{ asset('images/' . $exp[0]) }}" loading="lazy" decoding="async" width="48" height="48" style="width:100%;height:100%;object-fit:contain;">
            </div>
            <div>
                <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:4px;">{{ $exp[1] }}</h3>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:0.75rem;letter-spacing:0.05em;">{{ $exp[2] }}</p>
                <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);line-height:1.7;">{{ $exp[3] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── EDUCATION ── --}}
<section class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);text-align:center;margin-bottom:3rem;">
        <span style="color:var(--name-color);">Education</span>
    </h2>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;max-width:800px;margin:0 auto;">
        <div class="bg-card" style="border-radius:16px;padding:2rem;">
            <h3 style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;font-weight:700;color:var(--text-primary);margin-bottom:0.5rem;">BS Information Technology</h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;color:var(--accent);margin-bottom:1rem;">Sep 2022 – Jun 2026</p>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Urdaneta City University<br>Urdaneta City, Pangasinan</p>
        </div>
        <div class="bg-card" style="border-radius:16px;padding:2rem;border-color:#a855f733 !important;">
            <h3 style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;font-weight:700;color:var(--text-primary);margin-bottom:0.5rem;">Skills</h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--accent);margin-bottom:1rem;">Languages & Tools</p>
            <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                @foreach(['Java','Dart','C#','C++','Python','SQL','JS','Flutter','HTML','CSS','Unity','Figma','Blender','Git'] as $s)
                <span style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;padding:3px 9px;border-radius:9999px;background:var(--badge-bg);color:var(--badge-text);border:1px solid #a855f733;">{{ $s }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ── CONTACT ── --}}
<section id="contact" class="reveal" style="padding:6rem 3rem;text-align:center;max-width:1400px;margin:0 auto;">
  <h2 style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1rem;">
        Let's <span style="color:var(--name-color);">Talk</span>
    </h2>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.85rem;color:var(--text-secondary);max-width:600px;margin:0 auto 2.5rem;">
        Looking for a developer? Want to collaborate? I'd love to hear from you.
    </p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <button onclick="navigator.clipboard.writeText('joshua.developerr@gmail.com').then(()=>{this.textContent='✓ Copied!';setTimeout(()=>this.textContent='Copy my email address',2000)})"
            class="pill-btn" style="display:flex;align-items:center;gap:8px;font-family:'Instrument Sans',sans-serif;font-size:0.8rem;padding:0.75rem 1.75rem;color:var(--name-color);border-color:var(--name-color);"
            onmouseover="this.style.background='#a855f7';this.style.borderColor='#a855f7';this.style.color='#fff';"
            onmouseout="this.style.background='transparent';this.style.borderColor='var(--name-color)';this.style.color='var(--name-color)';">
            Copy my email address
        </button>
        <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" class="pill-btn-filled" style="text-decoration:none;font-family:'Instrument Sans',sans-serif;font-size:0.8rem;padding:0.75rem 1.75rem;background:var(--name-color);border-color:var(--name-color);"
            onmouseover="this.style.background='#a855f7';this.style.borderColor='#a855f7';"
            onmouseout="this.style.background='var(--name-color)';this.style.borderColor='var(--name-color)';">
            LinkedIn ↗
        </a>
    </div>
</section>

{{-- ── FOOTER ── --}}
<footer style="border-top:1px solid var(--border);box-shadow:0 -1px 0 var(--footer-shadow);padding:1.75rem 3rem;max-width:1400px;margin:0 auto;display:flex;flex-direction:column;align-items:center;">
    <div style="display:flex;justify-content:space-between;align-items:baseline;flex-wrap:wrap;gap:0.75rem;width:100%;max-width:640px;margin-bottom:0.75rem;">
        <p style="font-family:'Courier New',monospace;font-size:0.9rem;color:var(--text-primary);font-weight:700;letter-spacing:0.02em;">Contributions in the past year</p>
        <a href="https://github.com/Intmainiostream" target="_blank" style="font-family:'Instrument Sans',sans-serif;font-size:0.65rem;color:var(--text-secondary);text-decoration:none;">@Intmainiostream ↗</a>
    </div>

    {{-- GitHub contributions --}}
    <div style="width:100%;max-width:640px;">
        <div id="contribChart"></div>
    </div>

    <div style="display:flex;gap:0.75rem;margin-top:1.25rem;">
        <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" style="width:32px;height:32px;border-radius:50%;border:1px solid var(--border-light);display:flex;align-items:center;justify-content:center;color:var(--text-secondary);text-decoration:none;font-size:0.7rem;transition:all 0.3s;" onmouseover="this.style.borderColor='#a855f7';this.style.color='#a855f7'" onmouseout="this.style.borderColor='var(--border-light)';this.style.color='var(--text-secondary)'">in</a>
        <a href="https://github.com/Intmainiostream" target="_blank" style="width:32px;height:32px;border-radius:50%;border:1px solid var(--border-light);display:flex;align-items:center;justify-content:center;color:var(--text-secondary);text-decoration:none;font-size:0.7rem;transition:all 0.3s;" onmouseover="this.style.borderColor='#a855f7';this.style.color='#a855f7'" onmouseout="this.style.borderColor='var(--border-light)';this.style.color='var(--text-secondary)'">gh</a>
    </div>
</footer>

{{-- ── SCRIPTS ── --}}
<script>
window.addEventListener('load', () => {
    const overlay = document.getElementById('introOverlay');
    const canvas  = document.getElementById('symbioteCanvas');
    const ctx     = canvas.getContext('2d');

    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;

    const W = canvas.width;
    const H = canvas.height;

    const mouse = { x: -999, y: -999 };
    overlay.addEventListener('mousemove', e => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    const particles = [];
    const count = 140;

    for (let i = 0; i < count; i++) {
        particles.push({
            x:     Math.random() * W,
            y:     Math.random() * H,
            r:     1.5 + Math.random() * 3,
            vx:    (Math.random() - 0.5) * 0.6,
            vy:    (Math.random() - 0.5) * 0.6,
            alpha: 0.4 + Math.random() * 0.6,
            color: Math.random() > 0.5 ? '#a855f7' : '#7c3aed',
            fadeOut: false,
        });
    }

    let frame = 0;
    let exitStarted = false;
    let dissolved = 0;

    function animate() {
        frame++;
        ctx.fillStyle = '#080818';
        ctx.fillRect(0, 0, W, H);

        particles.forEach(p => {
            if (p.alpha <= 0) { dissolved++; return; }

            // Move
            p.x += p.vx;
            p.y += p.vy;

            // Bounce off edges
            if (p.x < 0 || p.x > W) p.vx *= -1;
            if (p.y < 0 || p.y > H) p.vy *= -1;

            // Fade if cursor is close
            const dx = p.x - mouse.x;
            const dy = p.y - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 80) {
                p.alpha -= 0.04;
            } else if (!p.fadeOut) {
                // gentle twinkle
                p.alpha = Math.max(0.2, Math.min(1, p.alpha + (Math.random() - 0.5) * 0.02));
            }

            if (p.fadeOut) p.alpha -= 0.012;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = p.color;
            ctx.globalAlpha = Math.max(0, p.alpha);
            ctx.fill();
        });

        ctx.globalAlpha = 1;

        // After 2.5s start dissolving all particles
        if (frame > 130 && !exitStarted) {
            exitStarted = true;
            particles.forEach((p, i) => {
                setTimeout(() => { p.fadeOut = true; }, i * 12);
            });
        }

        // Once all dissolved, fade overlay out
        if (exitStarted && dissolved >= particles.filter(p => p.alpha <= 0).length && frame > 130 + count * 12 / 16) {
            overlay.classList.add('fade-out');
            setTimeout(() => overlay.remove(), 700);
            return;
        }

        requestAnimationFrame(animate);
    }

    animate();
});

// Active nav tracking
const navLinks = document.querySelectorAll('[data-section]');
const navSections = ['hero','about','contact'].map(id => document.getElementById(id)).filter(Boolean);
function setActiveNav(id) {
    navLinks.forEach(link => {
        const active = link.dataset.section === id;
        link.style.fontSize = active ? '0.95rem' : '0.8rem';
        link.style.fontWeight = active ? '700' : '400';
        link.style.color = active ? 'var(--accent)' : 'var(--text-body)';
    });
}
const navObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) setActiveNav(e.target.id);
    });
}, { threshold: 0.4, rootMargin: '-80px 0px -40% 0px' });
navSections.forEach(s => navObserver.observe(s));

// Scroll reveal
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.01, rootMargin: '0px 0px 150px 0px' });
reveals.forEach(r => observer.observe(r));

// Floating preview — no lag, natural PNG size, slideshow outside card
const previewEl  = document.createElement('div');
previewEl.id     = 'card-preview';
previewEl.style.cssText = 'display:none;';
const previewImg = document.createElement('img');
previewEl.appendChild(previewImg);
document.body.appendChild(previewEl);


// Click outside (on dark backdrop) closes
previewEl.style.pointerEvents = 'auto';
previewEl.addEventListener('click', () => {
    previewEl.style.display = 'none';
});

let activeImages = [];
let activeIndex  = 0;

previewImg.addEventListener('click', (e) => {
    e.stopPropagation();
    activeIndex++;
    if (activeIndex >= activeImages.length) {
        previewEl.style.display = 'none';
        return;
    }
    previewImg.src = activeImages[activeIndex];
});

document.querySelectorAll('.project-card').forEach(card => {
    const wrapper = card.querySelector('.slideshow-wrapper');
    if (!wrapper) return;

    card.style.cursor = 'pointer';

    card.addEventListener('click', () => {
        activeImages = wrapper.dataset.images.split(',');
        activeIndex  = 0;
        previewImg.src          = activeImages[0];
        previewEl.style.display = 'flex';
    });
});

// GitHub contributions — live data, monochrome, theme-aware
(async () => {
    const container = document.getElementById('contribChart');
    if (!container) return;
    try {
        const res  = await fetch('https://github-contributions-api.jogruber.de/v4/Intmainiostream?y=last');
        const data = await res.json();
        const days = data.contributions || [];

        const cell = 11, gap = 4;
        const weeks = [];
        let week = [];
        days.forEach((d, i) => {
            week.push(d);
            if (new Date(d.date).getDay() === 6 || i === days.length - 1) {
                weeks.push(week);
                week = [];
            }
        });

        const w = weeks.length * (cell + gap);
        const h = 7 * (cell + gap);

        const maxCount = Math.max(...days.map(d => d.count), 1);
        let dots = '';
        weeks.forEach((wk, wi) => {
            wk.forEach(d => {
                const dow = new Date(d.date).getDay();
                const minR = 1, maxR = cell / 2 - 0.5;
                const t = d.count === 0 ? 0 : Math.min(d.count / maxCount, 1);
                const r = minR + t * (maxR - minR);
                const opacity = d.count === 0 ? 0.25 : 1;
                dots += `<rect x="${wi * (cell + gap) + cell/2 - r}" y="${dow * (cell + gap) + cell/2 - r}" width="${r*2}" height="${r*2}" fill="var(--text-primary)" opacity="${opacity}" transform="rotate(45 ${wi * (cell + gap) + cell/2} ${dow * (cell + gap) + cell/2})"></rect>`;
            });
        });

        container.innerHTML = `<svg width="100%" viewBox="0 0 ${w} ${h}" style="overflow:visible;">${dots}</svg>`;
    } catch (e) {
        container.innerHTML = `<p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;color:var(--text-secondary);">Couldn't load contributions.</p>`;
    }
})();
</script>

@endsection