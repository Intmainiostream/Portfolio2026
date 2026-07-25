@extends('layouts.app')
@section('title', 'Stack — Joshua Dela Cruz')

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
        <a href="/stack" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:700;color:var(--accent);text-decoration:none;letter-spacing:0.05em;">Stack</a>
        <a href="/projects" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Projects</a>
        <a href="/#contact" style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;font-weight:400;color:var(--text-body);text-decoration:none;letter-spacing:0.05em;">Contact</a>
        <button id="themeToggle" onclick="toggleTheme()" style="width:34px;height:34px;border-radius:50%;border:1px solid var(--border-light);background:transparent;display:flex;align-items:center;justify-content:center;cursor:pointer;padding:0;">
            <img id="themeIcon" src="{{ asset('images/dark-mode.png') }}" style="width:26px;height:26px;object-fit:contain;">
        </button>
    </div>
</nav>

{{-- ── STACK PAGE ── --}}
<section style="padding:8rem 3rem 6rem;max-width:1000px;margin:0 auto;">

    <a href="/#about" style="display:inline-block;font-family:'Instrument Sans',sans-serif;font-size:0.75rem;color:var(--text-secondary);text-decoration:none;margin-bottom:2rem;letter-spacing:0.05em;">← Back to home</a>

    <h1 style="font-family:'Courier New',monospace;font-size:clamp(2rem,4vw,3rem);font-weight:700;color:var(--text-primary);margin-bottom:1rem;">Stack</h1>
    <p style="font-family:'Instrument Sans',sans-serif;font-size:0.95rem;color:var(--text-secondary);line-height:1.7;max-width:600px;margin-bottom:3.5rem;">
        The languages, frameworks, and tools I reach for — across web systems, mobile apps, and games.
    </p>

    @php
    $stack = [
        'Languages' => ['JavaScript','C#','Java','PHP','Dart','Python'],
        'Frameworks & Tools' => ['Laravel','Flutter','Node.js','Tailwind CSS','MySQL','REST','Unity','Firebase','Figma'],
        'AI Tools' => ['Claude Code','Anthropic','OpenAI','Codex'],
        'Workflow' => ['Git','GitHub','GitLab','JIRA','PyCharm','VS Code','Android Studio','Microsoft Teams'],
    ];
    @endphp

    @foreach($stack as $category => $items)
    <div style="margin-bottom:2.5rem;">
        <p style="font-family:'Instrument Sans',sans-serif;font-size:0.7rem;font-weight:600;color:var(--text-secondary);letter-spacing:0.12em;text-transform:uppercase;margin-bottom:1rem;">{{ $category }}</p>
        <div style="display:flex;flex-wrap:wrap;gap:0.6rem;">
            @foreach($items as $item)
            <span style="font-family:'Instrument Sans',sans-serif;font-size:0.8rem;padding:6px 14px;border-radius:9999px;background:var(--badge-bg);color:var(--badge-text);border:1px solid #a855f733;">{{ $item }}</span>
            @endforeach
        </div>
    </div>
    @endforeach

</section>

{{-- ── SCRIPTS ── --}}
<script>
    window.addEventListener('load', () => {
        const icon = document.getElementById('themeIcon');
        if (icon) icon.src = document.documentElement.getAttribute('data-theme') === 'light' ? '{{ asset("images/dark-mode.png") }}' : '{{ asset("images/light-mode_white.png") }}';
    });
</script>

@endsection