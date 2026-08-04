<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LinkedIn Cover — Joshua Dela Cruz</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    * { margin:0; padding:0; box-sizing:border-box; }
    html, body {
        width:1584px;
        height:396px;
        overflow:hidden;
        background:#eae5ee;
    }
    .cover {
        position:relative;
        width:1584px;
        height:396px;
        background:#eae5ee;
        background-image: radial-gradient(circle, #d8b4fe 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        overflow:hidden;
    }

    /* diagonal accent bands — now anchored on the LEFT, clear of the profile-photo zone on the right */
    .band {
        position:absolute;
        top:-40%;
        height:180%;
        transform: skewX(-14deg);
    }
    .band-1 {
        left:-6%;
        width:340px;
        background: linear-gradient(160deg, #f3e8ff 0%, #ede9fe 100%);
        opacity:0.95;
    }
    .band-2 {
        left:8%;
        width:180px;
        background: linear-gradient(160deg, #d8b4fe 0%, #c4b5fd 100%);
        opacity:0.7;
    }
    .band-3 {
        left:20%;
        width:90px;
        background: #4c1d95;
        opacity:0.16;
    }

    .fade-edge {
        position:absolute;
        top:0;
        right:0;
        width:1040px;
        height:100%;
        background:#eae5eeb0;
    }

    .content {
        position:relative;
        z-index:2;
        height:100%;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:flex-end;
        text-align:right;
        margin-left:auto;
        padding-right:120px;
        max-width:900px;
    }

    .name {
        font-family:'Courier New', monospace;
        font-weight:700;
        font-size:52px;
        line-height:1.15;
        color:#1a0b2e;
        letter-spacing:0.01em;
    }
    .name span { color:#4c1d95; }

    .role {
        font-family:'Instrument Sans', sans-serif;
        font-weight:600;
        font-size:21px;
        color:#6d28d9;
        letter-spacing:0.03em;
        margin-top:14px;
    }

    .divider {
        width:56px;
        height:2px;
        background:#4c1d95;
        margin:22px 0;
        opacity:0.8;
    }

    .contact-row {
        display:flex;
        align-items:center;
        justify-content:flex-end;
        gap:22px;
        font-family:'Courier New', monospace;
        font-size:16px;
        font-weight:600;
        color:#4c1d95;
        opacity:1;
        flex-wrap:wrap;
    }
    .contact-row .item { display:flex; align-items:center; gap:9px; }
    .contact-row .sep { color:#c4b5fd; }
    .icon {
        width:18px;
        height:18px;
        display:inline-block;
        background-color:#4c1d95;
        -webkit-mask-size:contain;
        mask-size:contain;
        -webkit-mask-repeat:no-repeat;
        mask-repeat:no-repeat;
        -webkit-mask-position:center;
        mask-position:center;
    }
    .icon-email    { -webkit-mask-image:url('{{ asset('images/email.png') }}');    mask-image:url('{{ asset('images/email.png') }}'); }
    .icon-github   { -webkit-mask-image:url('{{ asset('images/github.png') }}');   mask-image:url('{{ asset('images/github.png') }}'); }
    .icon-location { -webkit-mask-image:url('{{ asset('images/location.png') }}'); mask-image:url('{{ asset('images/location.png') }}'); }
</style>
</head>
<body>
    <div class="cover">
        <div class="band band-1"></div>
        <div class="band band-2"></div>
        <div class="band band-3"></div>
        <div class="fade-edge"></div>

        <div class="content">
            <div class="name">Joshua Dave<br><span>Dela Cruz</span></div>
            <div class="role">Full-Stack Software Engineer</div>
            <div class="divider"></div>
            <div class="contact-row">
                <span class="item"><span class="icon icon-email"></span>joshua.developerr@gmail.com</span>
                <span class="sep">·</span>
                <span class="item"><span class="icon icon-github"></span>github.com/Intmainiostream</span>
                <span class="sep">·</span>
                <span class="item"><span class="icon icon-location"></span>Pangasinan, Philippines</span>
            </div>
        </div>
    </div>
</body>
</html>