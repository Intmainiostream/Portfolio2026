@extends('layouts.app')
@section('title', 'Joshua Dela Cruz')

@section('content')

{{-- ── Intro animation overlay ── --}}
<div class="intro-overlay" id="introOverlay">
    <canvas id="symbioteCanvas" style="position:absolute;inset:0;width:100%;height:100%;"></canvas>
</div>

{{-- ── NAV ── --}}
<nav style="position:fixed;top:0;left:0;right:0;z-index:100;padding:1.25rem 3rem;display:flex;justify-content:space-between;align-items:center;backdrop-filter:blur(10px);background:rgba(8,8,24,0.8);border-bottom:1px solid #1e1e3f;">
    <a href="/" style="font-family:'Courier New',monospace;font-size:1.1rem;font-weight:700;color:#fff;text-decoration:none;">
        Joshua<span style="color:#a855f7;">.</span>
    </a>
    <div style="display:flex;gap:2rem;align-items:center;">
        <a href="/professional" style="font-family:'Courier New',monospace;font-size:0.8rem;color:#a855f7;text-decoration:none;letter-spacing:0.05em;">Professional</a>
        <a href="/personal"     style="font-family:'Courier New',monospace;font-size:0.8rem;color:#e2e8f0;text-decoration:none;letter-spacing:0.05em;">Personal</a>
        <a href="#contact"      style="font-family:'Courier New',monospace;font-size:0.8rem;color:#e2e8f0;text-decoration:none;letter-spacing:0.05em;">Contact</a>
    </div>
</nav>

{{-- ── HERO ── --}}
<section style="min-height:100vh;display:flex;align-items:center;padding:0 3rem;padding-top:5rem;max-width:1400px;margin:0 auto;gap:4rem;">

    {{-- Left --}}
    <div style="flex:1;">
        <p style="font-family:'Courier New',monospace;color:#94a3b8;font-size:0.85rem;margin-bottom:1rem;letter-spacing:0.05em;">Developer</p>
        <h1 style="font-family:'Courier New',monospace;font-size:clamp(2.5rem,5vw,4rem);font-weight:700;color:#fff;line-height:1.1;margin-bottom:0.5rem;">
            Hello I'm
        </h1>
        <h1 style="font-family:'Courier New',monospace;font-size:clamp(2.5rem,5vw,4rem);font-weight:700;color:#a855f7;line-height:1.1;margin-bottom:1.5rem;">
            Joshua Dave<br>Dela Cruz
        </h1>
        <p style="font-family:'Courier New',monospace;color:#94a3b8;font-size:0.85rem;line-height:1.8;max-width:480px;margin-bottom:0.75rem;">
            Software Engineer | Laravel & MySQL |<br>
            Game & Mobile Development | 📍 Pangasinan, PH
        </p>
        <div style="margin-bottom:2rem;">
            <span style="font-family:'Courier New',monospace;font-size:0.75rem;background:#2E0047;color:#d8b4fe;border:1px solid #a855f733;border-radius:9999px;padding:4px 14px;">
                🏆 IT Skills Olympics Champion 2025
            </span>
        </div>
        <div style="display:flex;gap:1rem;align-items:center;flex-wrap:wrap;">
            <a href="#projects" class="pill-btn-filled" style="text-decoration:none;">VIEW PROJECTS &gt;</a>
            <a href="{{ asset('cv/Resume_JoshuaDaveDelaCruz.pdf') }}" class="pill-btn" style="text-decoration:none;" download>DOWNLOAD CV</a>
            {{-- Social icons --}}
            <div style="display:flex;gap:0.75rem;margin-left:0.5rem;">
                <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" style="width:36px;height:36px;border-radius:50%;border:1px solid #2a2a4a;display:flex;align-items:center;justify-content:center;color:#94a3b8;text-decoration:none;font-size:0.75rem;transition:all 0.3s;" onmouseover="this.style.borderColor='#a855f7';this.style.color='#a855f7'" onmouseout="this.style.borderColor='#2a2a4a';this.style.color='#94a3b8'">in</a>
                <a href="https://github.com/Intmainiostream" target="_blank" style="width:36px;height:36px;border-radius:50%;border:1px solid #2a2a4a;display:flex;align-items:center;justify-content:center;color:#94a3b8;text-decoration:none;font-size:0.75rem;transition:all 0.3s;" onmouseover="this.style.borderColor='#a855f7';this.style.color='#a855f7'" onmouseout="this.style.borderColor='#2a2a4a';this.style.color='#94a3b8'">gh</a>
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
            <div style="width:280px;height:280px;border-radius:50%;background:linear-gradient(135deg,#2E0047,#000847);border:2px solid #a855f755;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                {{-- Replace with <img src="{{ asset('images/avatar.jpg') }}" ...> later --}}
                <img src="{{ asset('images/sableye.gif') }}" style="width:100%;height:100%;object-fit:cover;">
            </div>
        </div>
    </div>

</section>

{{-- ── STATS BAR ── --}}
<section class="reveal" style="border-top:1px solid #1e1e3f;border-bottom:1px solid #1e1e3f;padding:2.5rem 3rem;max-width:1400px;margin:0 auto;">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:left;">
        @foreach([['21','Age'],['4+','Projects built'],['2','Awards won'],['2026','Graduate']] as $stat)
        <div>
            <div style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3rem);font-weight:700;color:#fff;">{{ $stat[0] }}</div>
            <div style="font-family:'Courier New',monospace;font-size:0.75rem;color:#94a3b8;margin-top:4px;">{{ $stat[1] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── SHORT PROFILE ── --}}
<section class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;text-align:center;margin-bottom:3rem;">Short Profile</h2>
    <div style="display:grid;grid-template-columns:2fr 1fr;gap:1.5rem;">
        {{-- Main card --}}
        <div class="bg-card" style="border-radius:16px;padding:2rem;position:relative;overflow:hidden;min-height:280px;display:flex;flex-direction:column;justify-content:flex-end;">
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,#2E004733,#00084733);border-radius:16px;"></div>
            {{-- placeholder image area --}}
            <div style="position:absolute;inset:0;overflow:hidden;border-radius:16px;">
                <img src="{{ asset('images/Cog.png') }}" style="width:100%;height:100%;object-fit:cover;opacity:0.4;">
            </div>
            <div style="position:relative;z-index:1;">
                <p style="font-family:'Courier New',monospace;font-size:1.1rem;font-weight:700;color:#fff;line-height:1.6;">
                    Building games, apps,<br>and everything in between
                </p>
            </div>
        </div>
        {{-- Side cards --}}
        <div style="display:flex;flex-direction:column;gap:1.5rem;">
            <div class="bg-card" style="border-radius:16px;padding:1.5rem;flex:1;">
                <p style="font-family:'Courier New',monospace;font-size:0.9rem;color:#e2e8f0;line-height:1.7;">
                    Developer with a strong interest in game development and interactive systems.
                </p>
            </div>
            <div class="bg-card" style="border-radius:16px;padding:1.5rem;">
                <p style="font-family:'Courier New',monospace;font-size:0.7rem;color:#94a3b8;margin-bottom:0.75rem;">My primary tech stack</p>
                <p style="font-family:'Courier New',monospace;font-size:1.1rem;font-weight:700;color:#fff;margin-bottom:0.75rem;">Laravel, Flutter</p>
                <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                    @foreach(['Java','C#','Unity','MySQL','Dart'] as $tech)
                    <span style="font-family:'Courier New',monospace;font-size:0.7rem;padding:4px 10px;border-radius:6px;background:#1e1e3f;color:#94a3b8;">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── PROJECTS ── --}}
<section id="projects" class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;text-align:center;margin-bottom:0.5rem;">
        A small selection of <span style="color:#a855f7;">recent projects</span>
    </h2>
    <p style="font-family:'Courier New',monospace;font-size:0.8rem;color:#94a3b8;text-align:center;margin-bottom:3rem;">click to preview · click image to cycle · click image to close</p>

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
        <div class="project-card bg-card" style="border-radius:16px;overflow:hidden;cursor:default;transition:all 0.3s;border:1px solid #1e1e3f;">
            {{-- Image placeholder --}}
            <div style="position:relative;height:320px;background:linear-gradient(135deg,#2E0047,#000847);display:flex;align-items:center;justify-content:center;overflow:hidden;">
                @if($project[0] === 'RoboFrontier')
                <div class="slideshow-wrapper" data-images="{{ asset('images/RF1.png') }},{{ asset('images/RF2.png') }},{{ asset('images/RF3.png') }}">
                    <img class="slide-img" src="{{ asset('images/RF1.png') }}" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'MiDas')
                <div class="slideshow-wrapper" data-images="{{ asset('images/M1.png') }},{{ asset('images/M2.png') }},{{ asset('images/M3.png') }}">
                    <img class="slide-img" src="{{ asset('images/M1.png') }}" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'PawPal')
                <div class="slideshow-wrapper" data-images="{{ asset('images/P1.png') }},{{ asset('images/P2.png') }},{{ asset('images/P3.png') }}">
                    <img class="slide-img" src="{{ asset('images/P1.png') }}" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @elseif($project[0] === 'TechBite')
                <div class="slideshow-wrapper" data-images="{{ asset('images/TECH1.png') }},{{ asset('images/TECH2.png') }},{{ asset('images/TECH3.png') }}">
                    <img class="slide-img" src="{{ asset('images/TECH1.png') }}" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
                </div>
                @else
                <div style="font-size:4rem;">{{ $project[4] }}</div>
                @endif
                {{-- Hover overlay --}}
                <div class="project-overlay" style="position:absolute;inset:0;background:#a855f722;backdrop-filter:blur(2px);display:flex;align-items:center;justify-content:center;">
                    <span style="font-family:'Courier New',monospace;font-size:0.75rem;color:#fff;border:1px solid #fff;padding:6px 16px;border-radius:9999px;">{{ $project[2] }}</span>
                </div>
                {{-- Replace div above with actual <img> later --}}
            </div>
            {{-- Info --}}
            <div style="padding:1.5rem;">
                <h3 style="font-family:'Courier New',monospace;font-size:1.1rem;font-weight:700;color:#fff;margin-bottom:0.5rem;">{{ $project[0] }}</h3>
                <p style="font-family:'Courier New',monospace;font-size:0.8rem;color:#94a3b8;line-height:1.6;margin-bottom:1rem;">{{ $project[1] }}</p>
                <div style="display:flex;gap:0.5rem;flex-wrap:wrap;">
                    @foreach(explode(' · ',$project[3]) as $tech)
                    <span style="font-family:'Courier New',monospace;font-size:0.65rem;padding:3px 10px;border-radius:9999px;background:#1e1e3f;color:#94a3b8;border:1px solid #2a2a4a;">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── EXPERIENCE ── --}}
<section class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;text-align:center;margin-bottom:3rem;">
        My <span style="color:#a855f7;">Experience</span>
    </h2>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;">
        @php
        $experiences = [
            ['intermed.png','Intermed LLC Corporation','Lead Developer · 2026 · Hybrid','Developed a full-scale HRIS across 6 modules using Laravel and MySQL. Contributed to system architecture, feature implementation, and team collaboration during internship development.'],
            ['game.png','Private Client Project','Freelance · Game Developer','Side-scroll 2D educational game. Designed and developed core gameplay systems and educational content integration.'],
            ['trophy.png','IT Skills Olympics','Android Dev · Game Category · Champion 2025','Competed and won 1st place at the University of Makati — Android game development category.'],
            ['research.png','SikapTala National Competition','Research Presentation · Top 3 · 2026','National Computer Science & IT competition — Top 3 research presentation.'],
        ];
        @endphp
        @foreach($experiences as $exp)
        <div class="bg-card bg-card-hover" style="border-radius:16px;padding:1.75rem;display:flex;gap:1.25rem;align-items:flex-start;transition:all 0.3s;">
            <div style="flex-shrink:0;margin-top:2px;width:48px;height:48px;">
                <img src="{{ asset('images/' . $exp[0]) }}" style="width:100%;height:100%;object-fit:contain;">
            </div>
            <div>
                <h3 style="font-family:'Courier New',monospace;font-size:1rem;font-weight:700;color:#fff;margin-bottom:4px;">{{ $exp[1] }}</h3>
                <p style="font-family:'Courier New',monospace;font-size:0.7rem;color:#a855f7;margin-bottom:0.75rem;letter-spacing:0.05em;">{{ $exp[2] }}</p>
                <p style="font-family:'Courier New',monospace;font-size:0.8rem;color:#94a3b8;line-height:1.7;">{{ $exp[3] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ── EDUCATION ── --}}
<section class="reveal" style="padding:5rem 3rem;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;text-align:center;margin-bottom:3rem;">
        🎓 <span style="color:#a855f7;">Education</span>
    </h2>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;max-width:800px;margin:0 auto;">
        <div class="bg-card" style="border-radius:16px;padding:2rem;">
            <h3 style="font-family:'Courier New',monospace;font-size:0.95rem;font-weight:700;color:#fff;margin-bottom:0.5rem;">BS Information Technology</h3>
            <p style="font-family:'Courier New',monospace;font-size:0.75rem;color:#a855f7;margin-bottom:1rem;">Sep 2022 – Jun 2026</p>
            <p style="font-family:'Courier New',monospace;font-size:0.8rem;color:#94a3b8;">Urdaneta City University<br>Urdaneta City, Pangasinan</p>
        </div>
        <div class="bg-card" style="border-radius:16px;padding:2rem;border-color:#a855f733 !important;">
            <h3 style="font-family:'Courier New',monospace;font-size:0.95rem;font-weight:700;color:#fff;margin-bottom:0.5rem;">Skills</h3>
            <p style="font-family:'Courier New',monospace;font-size:0.7rem;color:#a855f7;margin-bottom:1rem;">Languages & Tools</p>
            <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                @foreach(['Java','Dart','C#','C++','Python','SQL','JS','Flutter','HTML','CSS','Unity','Figma','Blender','Git'] as $s)
                <span style="font-family:'Courier New',monospace;font-size:0.65rem;padding:3px 9px;border-radius:9999px;background:#2E0047;color:#d8b4fe;border:1px solid #a855f733;">{{ $s }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ── CONTACT ── --}}
<section id="contact" class="reveal" style="padding:6rem 3rem;text-align:center;max-width:1400px;margin:0 auto;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1rem;">
        Let's <span style="color:#a855f7;">Talk</span>
    </h2>
    <p style="font-family:'Courier New',monospace;font-size:0.85rem;color:#94a3b8;max-width:600px;margin:0 auto 2.5rem;">
        Looking for a developer? Want to collaborate? I'd love to hear from you.
    </p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <button onclick="navigator.clipboard.writeText('joshua.developerr@gmail.com').then(()=>{this.textContent='✓ Copied!';setTimeout(()=>this.textContent='Copy my email address',2000)})"
            class="pill-btn" style="display:flex;align-items:center;gap:8px;font-size:0.8rem;padding:0.75rem 1.75rem;">
            📋 Copy my email address
        </button>
        <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" class="pill-btn-filled" style="text-decoration:none;font-size:0.8rem;padding:0.75rem 1.75rem;">
            LinkedIn ↗
        </a>
    </div>
</section>

{{-- ── FOOTER ── --}}
<footer style="border-top:1px solid #1e1e3f;padding:2rem 3rem;display:flex;justify-content:space-between;align-items:center;max-width:1400px;margin:0 auto;">
    <span style="font-family:'Courier New',monospace;font-size:0.8rem;color:#94a3b8;">Joshua Dave G. Dela Cruz</span>
    <div style="display:flex;gap:1.5rem;">
        <a href="https://linkedin.com/in/joshua-dev-cruzz" target="_blank" style="font-family:'Courier New',monospace;font-size:0.75rem;color:#94a3b8;text-decoration:none;">LinkedIn</a>
        <a href="https://github.com/Intmainiostream" target="_blank" style="font-family:'Courier New',monospace;font-size:0.75rem;color:#94a3b8;text-decoration:none;">GitHub</a>
        <a href="mailto:joshua.developerr@gmail.com" style="font-family:'Courier New',monospace;font-size:0.75rem;color:#94a3b8;text-decoration:none;">Email</a>
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

// Scroll reveal
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
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
</script>

@endsection