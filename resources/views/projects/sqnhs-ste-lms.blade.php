@extends('layouts.app')
@section('title', 'SQNHS STE LMS — Joshua Dela Cruz')

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
            <img src="{{ asset('images/lms-logo.webp') }}" style="width:200px;height:200px;object-fit:contain;">
        </div>

        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.03em;max-width:640px;margin:0 auto 1.5rem;line-height:1.6;">
            A LEARNING MANAGEMENT SYSTEM BUILT FOR THE STE PROGRAM — FROM ENROLLMENT TO GRADE TRACKING, ALL IN ONE PLACE.
        </p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;font-weight:700;color:var(--accent);letter-spacing:0.1em;margin-bottom:1rem;">FREELANCE PROJECT 2026 · SAN QUINTIN NATIONAL HIGH SCHOOL · ENROLLMENT & GRADE MANAGEMENT SYSTEM</p>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:1rem;color:var(--text-secondary);">Developed by <span style="color:var(--text-primary);font-weight:700;">Joshua Dela Cruz</span>.</p>
    </section>
</div>

{{-- Hero image: enroll / login --}}
<div style="max-width:1000px;margin:0 auto;padding:2rem 3rem 2rem;display:flex;justify-content:center;">
    <img src="{{ asset('images/proj/S1.webp') }}" style="width:100%;max-width:600px;border-radius:20px;object-fit:contain;">
</div>

{{-- ── OVERVIEW ── --}}
<section style="position:relative;overflow:hidden;background:var(--card-bg);padding:6rem 3rem;">

    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,var(--border-light) 1.3px,transparent 1.3px);background-size:22px 22px;-webkit-mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);mask-image:radial-gradient(ellipse 60% 55% at 50% 50%,transparent 40%,black 100%);opacity:0.6;pointer-events:none;"></div>

    <div style="max-width:900px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:var(--text-primary);margin-bottom:1.5rem;">Overview</h2>
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.8;">
            Built in 2026 as a freelance project for San Quintin National High School's Science, Technology, and Engineering program. Parents can create an account on behalf of their child, or students can register themselves, but since STE admission isn't automatic — it involves entrance exams and interviews — every registration lands as pending until an admin reviews and approves it. Once enrolled, teachers encode grades per term and the system auto-computes each student's GWA, giving students a real-time dashboard of how they're performing and where they need to improve.
        </p>
    </div>
</section>

{{-- ── CHEVRON DIVIDER ── --}}
<div class="ste-chevron" style="height:70px;background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));clip-path:polygon(0 0,50% 100%,100% 0,100% 100%,0 100%);"></div>

{{-- ── KEY FEATURES BANNER ── --}}
<section style="background:linear-gradient(135deg,var(--feature-grad-1),var(--feature-grad-2));padding:5rem 3rem 6rem;text-align:center;">
    <h2 style="font-family:'Courier New',monospace;font-size:clamp(1.8rem,3vw,2.5rem);font-weight:700;color:#fff;letter-spacing:0.03em;">KEY FEATURES:</h2>
</section>

<div class="ste-chevron" style="height:70px;background:var(--bg);clip-path:polygon(0 0,50% 0,100% 0,100% 100%,50% 0%,0 100%);margin-top:-1px;"></div>

{{-- ── FEATURE: ADMIN DASHBOARD ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="ste-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S2.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">ADMIN DASHBOARD</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                A QUICK LOOK AT THE STE PROGRAM ITSELF
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                The admin dashboard opens with an overview of the STE program — what it is, where it's located, and the numbers behind it — so admins have context on the program before diving into enrollees, subjects, or grades.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: USER MANAGEMENT (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="ste-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">USER MANAGEMENT</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                MANAGE EVERY ACCOUNT IN THE SYSTEM FROM ONE PLACE
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Admins get a full list of registered users — every account created by a student or by a parent on their child's behalf — with the ability to review, edit, or remove accounts as needed, keeping the system clean and access properly controlled.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S3.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: ENROLLEE APPROVAL ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="ste-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S4.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">ENROLLEE APPROVAL</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                REGISTRATIONS STAY PENDING UNTIL AN ADMIN SAYS SO
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                STE isn't open enrollment — applicants go through exams and interviews first. So every new registration sits as pending, and only becomes an active account once an admin reviews and approves it.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: SUBJECT MANAGEMENT (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="ste-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">SUBJECT MANAGEMENT</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                SUBJECTS ORGANIZED PER GRADE LEVEL, GRADE 7 TO 10
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Admins set up and manage subjects for each grade level, so the curriculum stays consistent across the whole STE program and grade encoding always lines up with the right year.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S5.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
    </div>
</section>

{{-- ── FEATURE: STUDENT DASHBOARD ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap;" class="ste-row">
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S6.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">STUDENT DASHBOARD</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                PERFORMANCE AT A GLANCE, BACKED BY REAL GRAPHS
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Students see every subject they're enrolled in for the school year, their overall average, which subject they're strongest in, and which one needs work — all visualized through subject performance graphs and progress across STE's three terms.
            </p>
        </div>
    </div>
</section>

{{-- ── FEATURE: GRADE TRACKING (reversed) ── --}}
<section style="padding:4rem 3rem;">
    <div style="max-width:1300px;margin:0 auto;display:flex;align-items:center;gap:3rem;flex-wrap:wrap-reverse;" class="ste-row">
        <div style="flex:1;min-width:280px;">
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.75rem;font-weight:700;color:var(--accent);letter-spacing:0.08em;margin-bottom:0.75rem;">GRADE TRACKING</p>
            <h3 style="font-family:'Courier New',monospace;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:700;color:var(--text-primary);line-height:1.3;">
                GRADES PER TERM, WITH FINALS COMPUTED FOR YOU
            </h3>
            <p style="font-family:'Instrument Sans',sans-serif;font-size:0.9rem;color:var(--text-secondary);line-height:1.7;margin-top:1rem;">
                Every grade a student sees is broken down per term, with the final grade auto-computed the moment teachers finish encoding — no manual averaging, no room for error.
            </p>
        </div>
        <div style="flex:1.3;min-width:340px;display:flex;justify-content:center;">
            <img src="{{ asset('images/proj/S7.webp') }}" style="width:100%;max-width:1100px;height:auto;border-radius:8px;object-fit:contain;">
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .ste-row { flex-direction: column !important; gap: 2rem !important; text-align: center; }
        .ste-chevron { height: 40px !important; }
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
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Laravel</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Backend framework</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Tailwind CSS</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Styling</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Alpine.js</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Interactivity</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">MySQL</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Database</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Chart.js</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Performance graphs</p>
                </div>
                <div>
                    <h3 style="font-family:'Instrument Sans',sans-serif;font-size:1rem;font-weight:700;color:var(--text-primary);margin-bottom:0.4rem;">Hostinger</h3>
                    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;color:var(--text-secondary);">Hosting</p>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection