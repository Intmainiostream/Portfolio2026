<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        // Prevent flash of wrong theme before CSS loads
        (function() {
            const saved = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', saved);
        })();
    </script>
    <title>{{ $title ?? 'Joshua Dela Cruz' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    :root {
        --card-shadow: none;
        --home-link-color: var(--accent);
        --bg: #080818;
        --text-primary: #ffffff;
        --text-secondary: #94a3b8;
        --text-body: #e2e8f0;
        --accent: #a855f7;
        --accent-dark: #7c3aed;
        --name-color: #a855f7;
        --border: #1e1e3f;
        --border-light: #2a2a4a;
        --badge-bg: #2E0047;
        --badge-text: #d8b4fe;
        --grad-1: #2E0047;
        --grad-2: #000847;
        --nav-bg: rgba(8,8,24,0.8);
        --card-bg: #0f0f23;
        --card-border: #1e1e3f;
        --card-hover-bg: #14142b;
        --card-hover-border: #a855f744;
        --card-overlay-1: #2E004733;
        --card-overlay-2: #00084733;
        --cog-opacity: 0.4;
        --footer-shadow: transparent;
    }

    [data-theme="light"] {
        --card-shadow: 0 4px 16px rgba(76,29,149,0.08), 0 1px 4px rgba(76,29,149,0.06);
        --home-link-color: var(--name-color);
        --bg: #eae5ee;
        --text-primary: #1a0b2e;
        --text-secondary: #6b7280;
        --text-body: #3f2d5c;
        --accent: #4c1d95;
        --accent-dark: #9333ea;
        --name-color: #4c1d95;
        --border: #e9d8fd;
        --border-light: #d8b4fe;
        --badge-bg: #f3e8ff;
        --badge-text: #7c3aed;
        --grad-1: #f3e8ff;
        --grad-2: #ede9fe;
        --nav-bg: rgba(255,255,255,0.85);
        --card-bg: #faf5ff;
        --card-border: #e9d8fd;
        --card-hover-bg: #f3e8ff;
        --card-hover-border: #d8b4fe66;
        --card-overlay-1: #f3e8ff99;
        --card-overlay-2: #ede9fe99;
        --cog-opacity: 0.75;
        --footer-shadow: rgba(76,29,149,0.15);
    }

    body { background: var(--bg); transition: background 0.3s ease; }

    [data-theme="light"] body {
        background-image: radial-gradient(circle, #d8b4fe55 1.2px, transparent 1px);
        background-size: 22px 22px;
    }

    [data-theme="dark"] body {
        background-image: radial-gradient(circle, #ffffff0d 1px, transparent 1px);
        background-size: 24px 24px;
    }

    .slide-img { transition: opacity 0.2s ease; }
    .slideshow-wrapper { position:absolute; inset:0; width:100%; height:100%; }
    #card-preview { background: rgba(0,0,0,0.7); inset:0; position:fixed; display:none; z-index:9998; align-items:center; justify-content:center; }
    #card-preview img { position:relative; z-index:9999; border-radius:12px; max-width:90vw; max-height:80vh; box-shadow:0 0 40px #a855f766; border:1px solid #a855f755; cursor:pointer; }

    #floating-pill {
        position: fixed;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }
    #floating-pill.visible { opacity: 1; pointer-events: auto; }

    .nav-hamburger { display: none; }

    @media (max-width: 1024px) and (min-width: 769px) {
        /* Tablet — 3-col project grid → 2 cols */
        .projects-grid { grid-template-columns: repeat(2,1fr) !important; }
        section { padding-left: 2rem !important; padding-right: 2rem !important; }
    }

    @media (max-width: 768px) {
        /* Nav */
        nav { padding: 1rem 1.25rem !important; }

        .nav-hamburger { display: flex !important; }
        .nav-links {
            position: fixed;
            top: 60px; left: 0; right: 0;
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 1.25rem !important;
            background: var(--nav-bg);
            border-bottom: 1px solid var(--border);
            padding: 1.5rem 1.25rem;
            transform: translateY(-130%);
            opacity: 0;
            pointer-events: none;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .nav-links.open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: auto;
        }

        /* Hero — stack vertically, hide avatar */
        section:first-of-type { flex-direction: column !important; padding: 0 1.25rem !important; padding-top: 5rem !important; gap: 2rem !important; text-align: center; }
        section:first-of-type > div:last-child { display: flex !important; justify-content: center; }
section:first-of-type > div:last-child > div { width: 180px !important; height: 180px !important; }
section:first-of-type > div:last-child > div > div:last-child { width: 180px !important; height: 180px !important; }
        .hero-links { justify-content: center !important; }

        /* Stats bar — 2 columns */
        div[style*="repeat(4,1fr)"] { grid-template-columns: repeat(2,1fr) !important; }

        /* All 2-col grids → 1 col */
        div[style*="repeat(2,1fr)"], div[style*="2fr 1fr"] { grid-template-columns: 1fr !important; }

        /* Projects grid (3-col) → 2 cols on mobile */
        .projects-grid { grid-template-columns: repeat(2,1fr) !important; gap: 1rem !important; }

        /* Section padding */
        section { padding-left: 1.25rem !important; padding-right: 1.25rem !important; }

        /* Footer */
        footer { flex-direction: column !important; gap: 1rem !important; text-align: center !important; padding: 1.5rem 1.25rem !important; }
    }
</style>
</head>
<body>
    @yield('content')

    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const next = current === 'light' ? 'dark' : 'light';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
            const icon = document.getElementById('themeIcon');
            if (icon) icon.src = next === 'light' ? '{{ asset("images/dark-mode.png") }}' : '{{ asset("images/light-mode_white.png") }}';
        }
        function toggleMobileNav() {
            document.getElementById('navLinks').classList.toggle('open');
        }
        window.addEventListener('load', () => {
            const icon = document.getElementById('themeIcon');
            if (icon) icon.src = document.documentElement.getAttribute('data-theme') === 'light' ? '{{ asset("images/dark-mode.png") }}' : '{{ asset("images/light-mode_white.png") }}';
        });
    </script>
</body>
</html>