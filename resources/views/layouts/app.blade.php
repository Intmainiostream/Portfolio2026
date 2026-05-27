<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Joshua Dela Cruz' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
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

    @media (max-width: 768px) {
        /* Nav */
        nav { padding: 1rem 1.25rem !important; }
        nav > div { gap: 1rem !important; }

        /* Hero — stack vertically, hide avatar */
        section:first-of-type { flex-direction: column !important; padding: 0 1.25rem !important; padding-top: 5rem !important; gap: 2rem !important; text-align: center; }
        section:first-of-type > div:last-child { display: flex !important; justify-content: center; }
section:first-of-type > div:last-child > div { width: 180px !important; height: 180px !important; }
section:first-of-type > div:last-child > div > div:last-child { width: 180px !important; height: 180px !important; }
        section:first-of-type > div:first-child > div[style*="display:flex;gap:1rem"] { justify-content: center !important; }

        /* Stats bar — 2 columns */
        div[style*="repeat(4,1fr)"] { grid-template-columns: repeat(2,1fr) !important; }

        /* All 2-col grids → 1 col */
        div[style*="repeat(2,1fr)"], div[style*="2fr 1fr"] { grid-template-columns: 1fr !important; }

        /* Section padding */
        section { padding-left: 1.25rem !important; padding-right: 1.25rem !important; }

        /* Footer */
        footer { flex-direction: column !important; gap: 1rem !important; text-align: center !important; padding: 1.5rem 1.25rem !important; }
    }
</style>
</head>
<body>
    @yield('content')

    {{-- Floating Professional / Personal pill --}}
    <div id="floating-pill">
        <div style="background: #13132a; border: 1px solid #2a2a4a; border-radius: 9999px; padding: 6px; display: flex; gap: 4px;">
            <a href="/professional"
               class="{{ request()->is('professional') ? 'pill-btn-filled' : 'pill-btn' }}"
               style="text-decoration:none; display:inline-block;">
                Professional
            </a>
            <a href="/personal"
               class="{{ request()->is('personal') ? 'pill-btn-filled' : 'pill-btn' }}"
               style="text-decoration:none; display:inline-block;">
                Personal
            </a>
        </div>
    </div>

    <script>
        // Show floating pill after scrolling down
        const pill = document.getElementById('floating-pill');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                pill.classList.add('visible');
            } else {
                pill.classList.remove('visible');
            }
        });
    </script>
</body>
</html>