@extends('layouts.app')
@section('title', 'Personal — Joshua Dela Cruz')

@section('content')

{{-- ── Particle overlay ── --}}
<div id="personalOverlay" style="position:fixed;inset:0;z-index:200;background:var(--bg);">
    <canvas id="personalCanvas" style="position:absolute;inset:0;width:100%;height:100%;"></canvas>
    <div style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;pointer-events:none;">
        <p style="font-family:'Courier New',monospace;font-size:0.8rem;color:var(--name-color);letter-spacing:0.2em;margin-bottom:1rem;">JOSHUA DAVE DELA CRUZ</p>
        <h1 style="font-family:'Courier New',monospace;font-size:clamp(2rem,5vw,4rem);font-weight:700;color:var(--text-primary);letter-spacing:0.1em;margin-bottom:1rem;">UNDER CONSTRUCTION</h1>
        <p style="font-family:'Courier New',monospace;font-size:0.75rem;color:var(--text-secondary);letter-spacing:0.1em;">coming soon xD</p>
    </div>
</div>

<script>
window.addEventListener('load', () => {
    const overlay = document.getElementById('personalOverlay');
    const canvas  = document.getElementById('personalCanvas');
    const ctx     = canvas.getContext('2d');

    overlay.style.pointerEvents = 'none';

    function resizeCanvas() {
        canvas.width  = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    let W = canvas.width;
    let H = canvas.height;

    const isLight = document.documentElement.getAttribute('data-theme') === 'light';
    const bgColor = isLight ? '#c9c2d6' : '#080818';
    const particleColors = isLight ? ['#4c1d95', '#7c3aed'] : ['#a855f7', '#7c3aed'];

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
            color: Math.random() > 0.5 ? particleColors[0] : particleColors[1],
            fadeOut: false,
        });
    }

    let frame = 0;
    let exitStarted = false;

    function animate() {
        frame++;
        W = canvas.width;
        H = canvas.height;
        ctx.fillStyle = bgColor;
        ctx.fillRect(0, 0, W, H);

        let dissolvedCount = 0;

        particles.forEach(p => {
            if (p.alpha <= 0) { dissolvedCount++; return; }

            p.x += p.vx;
            p.y += p.vy;
            if (p.x < 0 || p.x > W) p.vx *= -1;
            if (p.y < 0 || p.y > H) p.vy *= -1;

            if (p.fadeOut) {
                p.alpha -= 0.012;
            } else {
                p.alpha = Math.max(0.2, Math.min(1, p.alpha + (Math.random() - 0.5) * 0.02));
            }

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = p.color;
            ctx.globalAlpha = Math.max(0, p.alpha);
            ctx.fill();
        });

        ctx.globalAlpha = 1;

        if (frame > 130 && !exitStarted) {
            exitStarted = true;
            particles.forEach((p, i) => {
                setTimeout(() => { p.fadeOut = true; }, i * 12);
            });
        }

        if (exitStarted && dissolvedCount >= particles.length && frame > 130 + count * 12 / 16) {
            overlay.classList.add('fade-out');
            setTimeout(() => overlay.remove(), 700);
            return;
        }

        requestAnimationFrame(animate);
    }

    animate();
});
</script>

@endsection