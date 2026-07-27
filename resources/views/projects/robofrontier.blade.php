@extends('layouts.app')
@section('title', 'RoboFrontier — Joshua Dela Cruz')

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
            <img src="{{ asset('images/rf-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A GAME-BASED ROBOTICS LEARNING RPG BUILT FOR JUNIOR HIGH STUDENTS.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">CAPSTONE PROJECT · 2025</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>. Graphics by <span style="color:var(--text-primary);font-weight:700;">Allana Aganan</span>.</p>
    </section>
</div>

{{-- Hero image goes here (placeholder removed) --}}
<div style="max-width:1000px;margin:0 auto;padding:2rem 3rem 2rem;">
    {{-- TODO: hero image --}}
</div>

{{-- ── THE PROBLEM ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    {{-- Fading dot grid texture (same as hero) --}}
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:4rem;flex-wrap:wrap;position:relative;z-index:1;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">The Problem</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
                San Quintin National High School's STE program lacks the robotics kits and hardware needed to teach the subject hands-on. Without physical equipment, teachers are left explaining robotics concepts through lectures and diagrams alone — making it difficult for students to actually grasp how the systems they're learning about really work.
            </p>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;align-items:center;">
            <img src="{{ asset('images/proj/kit.webp') }}" style="width:100%;max-width:340px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER (up, out of problem section) ── --}}
<div class="rf-chevron" style="height:70px;background:var(--card-bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);"></div>

{{-- ── THE SOLUTION ── --}}
<section style="padding:6rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:4rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;align-items:center;">
            <img src="{{ asset('images/proj/R1.webp') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">The Solution</h2>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
                RoboFrontier turns robotics education into an RPG students actually want to play. Built in Unity with Firebase, it gamifies quests, grade-locked progression, and role-based access — letting teachers track real learning while students explore an interactive world built around robotics concepts.
            </p>
        </div>
    </div>
</section>

{{-- ── CHEVRON DIVIDER (into dark features banner) ── --}}
<div class="rf-chevron" style="height:70px;background:linear-gradient(135deg,var(--grad-2),var(--accent-dark));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--grad-2),var(--accent-dark));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="rf-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: PROGRESS JOURNAL ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/R2.2.webp') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">STORY JOURNAL</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                AN IN-GAME BOOK TRACKS EVERY STEP OF THE STORY
            </h3>
        </div>
    </div>
</section>

{{-- ── FEATURE: CHARACTER CUSTOMIZATION (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">CHARACTER CUSTOMIZATION</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                STUDENTS BUILD THEIR OWN IDENTITY BEFORE THE ADVENTURE STARTS
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Choosing an outfit, hairstyle, and shoes gives students a sense of <strong style="color:var(--text-primary);">ownership</strong> over their character — a small design choice that drives real curiosity and excitement to keep playing.
            </p>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/R2.webp') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: STORY DIALOGUE ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/R3.webp') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">STORY DIALOGUES</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                LESSONS ARE WOVEN DIRECTLY INTO THE NARRATIVE
            </h3>
        </div>
    </div>
</section>

{{-- ── FEATURE: MCQ QUESTS (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">KNOWLEDGE QUESTS</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                MULTIPLE-CHOICE QUESTS REINFORCE WHAT STUDENTS JUST LEARNED
            </h3>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/R4.webp') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: AR ROBOTIC KIT + BLOCKLY ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1;min-width:280px;display:flex;flex-direction:column;gap:1rem;align-items:center;">
            <img src="{{ asset('images/proj/R5.webp') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
            <img src="{{ asset('images/proj/R6.webp') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">AR ROBOTICS KIT</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                ASSEMBLE A 3D ROBOT IN AR AND PROGRAM IT WITH BLOCKLY
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Students build a virtual robotics kit in augmented reality and bring it to life using block-based coding — the hands-on hardware experience the school couldn't provide, made possible in-game.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: PROGRAMMING QUEST (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="rf-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">PROGRAMMING QUEST</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                A SIMPLE C++ QUEST BUILDS REAL STE FOUNDATIONS
            </h3>
        </div>
        <div style="flex:1;min-width:280px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/R9.webp') }}" style="width:100%;max-width:560px;border-radius:20px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: TEACHER/ADMIN DASHBOARD ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="rf-row">
        <div style="flex:1;min-width:280px;display:flex;flex-direction:column;gap:1rem;align-items:center;">
            <img src="{{ asset('images/proj/R7.webp') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
            <img src="{{ asset('images/proj/R8.webp') }}" style="width:100%;max-width:460px;border-radius:20px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">TEACHER & ADMIN TOOLS</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                TEACHERS MANAGE USERS, LESSONS, AND STUDENT RECORDS
            </h3>
        </div>
    </div>
</section>

{{-- ── USER MANUAL BUTTON ── --}}
<section style="padding:2rem 3rem 4rem;text-align:center;">
    <button onclick="openManual()" style="font-family:'Courier New',monospace;font-size:0.85rem;font-weight:700;color:#fff;background:var(--accent);border:none;border-radius:9999px;padding:0.9rem 2rem;cursor:pointer;letter-spacing:0.03em;text-transform:uppercase;transition:background 0.3s;" onmouseover="this.style.background='var(--accent-dark)'" onmouseout="this.style.background='var(--accent)'">
        VIEW USER MANUAL
    </button>
</section>


{{-- ── USER MANUAL MODAL (animated book viewer) ── --}}
<div id="manualModal" style="display:none;position:fixed;inset:0;z-index:3000;background:rgba(0,0,0,0.8);align-items:center;justify-content:center;padding:1.5rem;overflow-y:auto;" onclick="if(event.target===this)closeManual();">
    <div style="position:relative;max-width:920px;width:100%;max-height:90vh;">

        <button onclick="closeManual()" style="position:absolute;top:-3rem;right:0;background:none;border:none;color:#fff;font-size:1.75rem;cursor:pointer;line-height:1;">×</button>

        <div style="perspective:2400px;display:flex;justify-content:center;">
            <div id="manualBook" style="position:relative;background:#1a1310;border-radius:6px;padding:14px;box-shadow:0 30px 70px rgba(0,0,0,0.6);transition:width 0.6s cubic-bezier(0.45,0,0.55,1);">

                {{-- Base spread (current pages, always visible underneath) --}}
                <div id="manualBase" style="position:relative;background:#fdf6e3;border-radius:3px;overflow:hidden;height:min(70vh,600px);display:flex;box-shadow:inset 0 0 30px rgba(0,0,0,0.08);transition:width 0.6s cubic-bezier(0.45,0,0.55,1),aspect-ratio 0.6s cubic-bezier(0.45,0,0.55,1);"></div>

                {{-- Spine shadow --}}
                <div id="manualSpine" style="position:absolute;top:14px;bottom:14px;left:50%;width:24px;transform:translateX(-50%);background:linear-gradient(90deg,transparent,rgba(0,0,0,0.18) 50%,transparent);pointer-events:none;display:none;"></div>

                {{-- Flipping page overlay --}}
                <div id="manualFlip" style="position:absolute;top:14px;bottom:14px;width:calc(50% - 14px);transform-style:preserve-3d;transition:transform 0.6s cubic-bezier(0.45,0,0.55,1);display:none;pointer-events:none;">
                    <div id="manualFlipFront" style="position:absolute;inset:0;backface-visibility:hidden;background:#fdf6e3;overflow:hidden;display:flex;box-shadow:2px 0 10px rgba(0,0,0,0.15);"></div>
                    <div id="manualFlipBack" style="position:absolute;inset:0;backface-visibility:hidden;background:#fdf6e3;overflow:hidden;display:flex;transform:rotateY(180deg);box-shadow:-2px 0 10px rgba(0,0,0,0.15);"></div>
                </div>

                {{-- Cover for the static (non-turning) half, holds the OLD image until the flip finishes --}}
                <div id="manualStaticCover" style="position:absolute;top:14px;bottom:14px;background:#fdf6e3;overflow:hidden;display:none;align-items:center;justify-content:center;z-index:2;pointer-events:none;"></div>
            </div>
        </div>

        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:1.25rem;">
            <button onclick="manualPrev()" style="width:44px;height:44px;border-radius:50%;border:none;background:var(--name-color);color:#fff;font-size:1.1rem;cursor:pointer;">‹</button>
            <span id="manualPageLabel" style="font-family:'Courier New',monospace;font-size:0.8rem;color:#fff;letter-spacing:0.05em;">Page 1 / 8</span>
            <button onclick="manualNext()" style="width:44px;height:44px;border-radius:50%;border:none;background:var(--name-color);color:#fff;font-size:1.1rem;cursor:pointer;">›</button>
        </div>
    </div>
</div>

<script>
    // Each entry = one spread. Cover and back are single images (centered); the rest are pairs [left, right].
    const manualViews = [
        ["USER1"],
        ["USER2", "USER3"],
        ["USER4", "USER5"],
        ["USER6", "USER7"],
        ["USER8", "USER9"],
        ["USER10", "USER11"],
        ["USER12", "USER13"],
        ["USER14"],
    ];

    let manualCurrentView = 0;
    let manualFlipping = false;

    function manualImgSrc(name) {
        return "{{ asset('images/proj/') }}/" + name + ".webp";
    }

    // Preload AND fully decode all manual images so flips never stall on first paint
    manualViews.flat().forEach(name => {
        const img = new Image();
        img.src = manualImgSrc(name);
        if (img.decode) {
            img.decode().catch(() => {});
        }
    });

    function manualImgTag(name, half) {
        if (!name) return '';
        return `<img src="${manualImgSrc(name)}" style="width:100%;height:100%;object-fit:contain;">`;
    }

    function renderBase(viewIndex) {
        const view = manualViews[viewIndex];
        const base = document.getElementById('manualBase');
        const spine = document.getElementById('manualSpine');

        if (view.length === 1) {
            base.innerHTML = `<div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">${manualImgTag(view[0])}</div>`;
            spine.style.display = 'none';
        } else {
            base.innerHTML = `
                <div style="width:50%;display:flex;align-items:center;justify-content:center;">${manualImgTag(view[0])}</div>
                <div style="width:50%;display:flex;align-items:center;justify-content:center;">${manualImgTag(view[1])}</div>
            `;
            spine.style.display = 'block';
        }
        document.getElementById('manualPageLabel').textContent = `Page ${viewIndex + 1} / ${manualViews.length}`;
    }

    function openManual() {
        manualCurrentView = 0;
        document.getElementById('manualBook').style.width = 'fit-content';
        renderBase(0);
        document.getElementById('manualModal').style.display = 'flex';
    }

    function closeManual() {
        document.getElementById('manualModal').style.display = 'none';
    }

    function doFlip(direction) {
        // direction: 'next' or 'prev'
        if (manualFlipping) return;
        const nextIndex = direction === 'next'
            ? (manualCurrentView < manualViews.length - 1 ? manualCurrentView + 1 : 0)
            : (manualCurrentView > 0 ? manualCurrentView - 1 : manualViews.length - 1);

        const currentView = manualViews[manualCurrentView];
        const nextView = manualViews[nextIndex];

        const flip = document.getElementById('manualFlip');
        const front = document.getElementById('manualFlipFront');
        const back = document.getElementById('manualFlipBack');
        const book = document.getElementById('manualBook');
        const base = document.getElementById('manualBase');
        const spine = document.getElementById('manualSpine');
        const cover = document.getElementById('manualStaticCover');

        manualFlipping = true;

        if (nextView.length === 1) {
            book.style.width = 'fit-content';
            base.style.width = 'auto';
            base.style.aspectRatio = '0.72';
        } else {
            book.style.width = '100%';
            base.style.width = '100%';
            base.style.aspectRatio = 'auto';
        }

        // Hide the static (non-turning) half behind the OLD image until the flip completes
        if (currentView.length === 2) {
            cover.style.display = 'flex';
            if (direction === 'next') {
                cover.style.left = '14px';
                cover.style.right = 'auto';
                cover.style.width = 'calc(50% - 14px)';
                cover.innerHTML = manualImgTag(currentView[0]);
            } else {
                cover.style.right = '14px';
                cover.style.left = 'auto';
                cover.style.width = 'calc(50% - 14px)';
                cover.innerHTML = manualImgTag(currentView[1]);
            }
        } else {
            cover.style.display = 'none';
        }

        // Render the destination spread immediately underneath the cover/flip
        manualCurrentView = nextIndex;
        if (nextView.length === 1) {
            base.innerHTML = `<div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;">${manualImgTag(nextView[0])}</div>`;
            spine.style.display = 'none';
        } else {
            base.innerHTML = `
                <div style="width:50%;display:flex;align-items:center;justify-content:center;">${manualImgTag(nextView[0])}</div>
                <div style="width:50%;display:flex;align-items:center;justify-content:center;">${manualImgTag(nextView[1])}</div>
            `;
            spine.style.display = 'block';
        }
        document.getElementById('manualPageLabel').textContent = `Page ${nextIndex + 1} / ${manualViews.length}`;

        flip.style.display = 'block';
        flip.style.transition = 'none';

        if (direction === 'next') {
            const rightImg = currentView.length === 2 ? currentView[1] : currentView[0];
            const nextLeftImg = nextView.length === 2 ? nextView[0] : nextView[0];
            flip.style.right = '14px';
            flip.style.left = 'auto';
            flip.style.transformOrigin = 'left center';
            front.innerHTML = manualImgTag(rightImg);
            back.innerHTML = manualImgTag(nextLeftImg);
            flip.style.transform = 'rotateY(0deg)';
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    flip.style.transition = 'transform 0.6s cubic-bezier(0.45,0,0.55,1)';
                    flip.style.transform = 'rotateY(-180deg)';
                });
            });
        } else {
            const leftImg = currentView.length === 2 ? currentView[0] : currentView[0];
            const prevRightImg = nextView.length === 2 ? nextView[1] : nextView[0];
            flip.style.left = '14px';
            flip.style.right = 'auto';
            flip.style.transformOrigin = 'right center';
            front.innerHTML = manualImgTag(leftImg);
            back.innerHTML = manualImgTag(prevRightImg);
            flip.style.transform = 'rotateY(0deg)';
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    flip.style.transition = 'transform 0.6s cubic-bezier(0.45,0,0.55,1)';
                    flip.style.transform = 'rotateY(180deg)';
                });
            });
        }

        setTimeout(() => {
            flip.style.display = 'none';
            flip.style.transition = 'none';
            cover.style.display = 'none';
            manualFlipping = false;
        }, 600);
    }

    function manualPrev() { doFlip('prev'); }
    function manualNext() { doFlip('next'); }
</script>
<style>
    @media (max-width: 768px) {
        .rf-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .rf-chevron { height: 40px !important; }
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
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Unity</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Game engine & core gameplay</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">C#</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Gameplay scripting</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Firebase Firestore</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Auth, database & progress sync</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Vuforia</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Augmented reality robot assembly</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Blockly</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Block-based robot programming</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">SuperTiled2Unity</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Tiled map import for Unity</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection