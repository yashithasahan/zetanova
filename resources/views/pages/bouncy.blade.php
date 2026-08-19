<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bouncy Castles | Zetanova</title>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-config" content="/browserconfig.xml">
<meta name="theme-color" content="#231F20">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="page-loader" aria-hidden="true">
  <svg class="loader-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
    <path id="loader-dot-path" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
    <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
  </svg>
</div>

<div id="cur-dot"></div>

<div class="topbar" id="topbar">
  <p class="topbar-text">Free delivery &amp; setup in Colombo &amp; Dehiwala — <span>Call us: 077 886 5633</span></p>
  <button class="topbar-close" onclick="document.getElementById('topbar').style.display='none'">×</button>
</div>

<header class="nav-outer">
  <div class="nav-main">
    <a class="nav-logo" href="/">
      <svg class="nav-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
        <path style="fill:#231F20" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
        <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
      </svg>
      <div class="nav-logo-text-block">
        <span class="nav-brand-name">Zetanova</span>
        <span class="nav-slogan">Moments to Memories</span>
      </div>
    </a>
    <ul class="nav-links">
      <li><a href="/">Home</a></li>
      <li><a href="/">Services</a></li>
      <li><a href="/">About</a></li>
      <li><a href="/">Contact</a></li>
    </ul>
    <div class="nav-actions">
      <a class="nav-console-btn" href="/party-console" target="_blank">
        <span class="nav-console-dot"></span> Party Console
      </a>
      <button class="hamburger" onclick="toggleMenu()"><span></span><span></span><span></span></button>
    </div>
  </div>
  <nav class="nav-cats">
    <div class="nav-cats-inner">
      <a class="nav-cat-item" href="/kids"><span class="nav-cat-icon">🎉</span> Kids' Parties</a>
      <a class="nav-cat-item" href="/birthdays"><span class="nav-cat-icon">🎂</span> Birthdays</a>
      <a class="nav-cat-item active" href="/bouncy"><span class="nav-cat-icon">🏰</span> Bouncy Castles</a>
      <a class="nav-cat-item" href="/balloons"><span class="nav-cat-icon">🎈</span> Balloons</a>
      <a class="nav-cat-item" href="/sound"><span class="nav-cat-icon">🔊</span> Sound</a>
      <a class="nav-cat-item" href="/lighting"><span class="nav-cat-icon">✨</span> Lighting</a>
    </div>
  </nav>
</header>

<div class="mob-menu" id="mobMenu">
  <button class="mob-close" onclick="toggleMenu()">×</button>
  <a href="/">Home</a>
  <a href="/kids">Kids' Parties</a>
  <a href="/birthdays">Birthdays</a>
  <a href="/bouncy">Bouncy Castles</a>
  <a href="/balloons">Balloons</a>
  <a href="/sound">Sound</a>
  <a href="/lighting">Lighting</a>
</div>

<!-- PAGE CONTENT -->
<div class="page-banner">
  <div class="pb-bg"></div>
  <div class="pb-inner">
    <div class="pb-eyebrow"><span class="eyebrow eyebrow-rose">Castle Rentals</span></div>
    <h1 class="pb-title">Bouncy Castles<br><em style="color:var(--rose);font-style:italic;">delivered &amp; inflated.</em></h1>
    <p class="pb-desc">From classic combos to princess towers and water slides — we deliver, inflate, supervise, and collect. You just watch the kids bounce.</p>
  </div>
</div>

<!-- CASTLES GRID -->
<section style="padding:80px 5vw;background:var(--cream);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Our Castles</span>
    <h2 class="display d3" style="margin-bottom:52px;">Four castles,<br><em style="color:var(--rose);font-style:italic;">endless fun.</em></h2>
    <div class="prod-grid">

      @forelse($products as $product)
      <a href="/products/{{ $product->id }}" style="text-decoration:none;color:inherit;display:block;" class="prod-card">
        <div class="prod-img" style="background:var(--cream2);display:flex;align-items:center;justify-content:center;height:180px;overflow:hidden;">
            @if($product->images->count() > 0)
                <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="{{ $product->name }}" style="width:100%;height:100%;object-fit:cover;">
            @else
                <div style="font-size:64px;">🏰</div>
            @endif
        </div>
        <div class="prod-body">
          <div class="prod-tag">{{ $product->category }}</div>
          <div class="prod-name">{{ $product->name }}</div>
          <div class="prod-desc">{{ $product->description }}</div>
          <div class="prod-foot">
            <span class="prod-price">LKR {{ number_format($product->price) }} <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <span class="btn btn-outline" style="font-size:11px;padding:8px 16px;">View →</span>
          </div>
        </div>
      </a>
      @empty
        <p style="text-align: center; width: 100%; color: var(--ink3);">More products coming soon...</p>
      @endforelse

    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section style="padding:80px 5vw;background:var(--white);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;text-align:center;">How It Works</span>
    <h2 class="display d3" style="margin-bottom:52px;text-align:center;">You bounce,<br><em style="color:var(--rose);font-style:italic;">we handle everything else.</em></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:40px;">
      <div style="text-align:center;">
        <div style="width:64px;height:64px;border-radius:50%;background:var(--rose);display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 20px;">🚚</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;margin-bottom:10px;">Delivery</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">We arrive 1–2 hours before your party start time to deliver and position the castle at your venue.</div>
      </div>
      <div style="text-align:center;">
        <div style="width:64px;height:64px;border-radius:50%;background:var(--gold);display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 20px;">🔧</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;margin-bottom:10px;">Setup</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">Our crew inflates, anchors, and safety-checks the unit so it's fully ready before the first child steps in.</div>
      </div>
      <div style="text-align:center;">
        <div style="width:64px;height:64px;border-radius:50%;background:var(--mint);display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 20px;">🛡️</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;margin-bottom:10px;">Safety</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">All castles are cleaned, inspected, and comply with standard weight limits. Safety mats included.</div>
      </div>
      <div style="text-align:center;">
        <div style="width:64px;height:64px;border-radius:50%;background:var(--sky);display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 20px;">📦</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;margin-bottom:10px;">Collection</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">We return at the agreed end time to deflate, pack up, and remove everything — zero cleanup for you.</div>
      </div>
    </div>
  </div>
</section>

<!-- DELIVERY BAND -->
<div style="background:var(--ink);padding:28px 5vw;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;">
  <div>
    <div style="font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--white);margin-bottom:6px;">Free delivery in Colombo &amp; Dehiwala</div>
    <div style="font-size:13px;color:rgba(255,255,255,0.5);">Outside these areas? We deliver islandwide for a small fuel surcharge — just ask.</div>
  </div>
  <a href="/" class="btn" style="background:var(--rose);color:var(--white);white-space:nowrap;">Check Availability →</a>
</div>

<section class="testimonials">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Happy Kids</span>
    <h2 class="display d3" style="max-width:500px;margin-bottom:52px;">Three hours of<br><em style="color:var(--rose);font-style:italic;">non-stop bouncing.</em></h2>
    <div class="test-grid">
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The bouncy castle arrived on time, was spotlessly clean, and the kids absolutely refused to come off it. Best party decision we made."</p><div class="test-by">Ruwan &amp; Chamari</div><div class="test-evt">Classic Castle · Dehiwala</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"We got the Adventure Combo for a mixed-age group and it was perfect — older kids loved the climbing wall, younger ones had the bounce section."</p><div class="test-by">Shantha F.</div><div class="test-evt">Adventure Combo · Nawala</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The water slide was the highlight of the whole summer. Even the adults had a go. Prompt delivery, professional team — 10/10."</p><div class="test-by">Dilshan &amp; Ayesha</div><div class="test-evt">Water Slide · Moratuwa</div></div>
    </div>
  </div>
</section>

<div class="big-cta">
  <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Let's Bounce</span>
  <h2 class="bc-title">Book your castle<br><em>for the big day.</em></h2>
  <p class="bc-sub">Tell us your date, location, and castle of choice — we'll confirm availability within the hour.</p>
  <div class="bc-btns"><a class="btn btn-ink" href="/">Book a Castle →</a></div>
</div>

<footer>
  <div class="footer-grid">
    <div class="footer-logo-block">
      <div class="footer-logo-row">
        <svg class="footer-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
          <path style="fill:#C9536A" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
          <path style="fill:rgba(255,255,255,0.8);fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
        </svg>
        <div><div class="footer-brand">Zetanova</div><div class="footer-slogan">Moments to Memories</div></div>
      </div>
      <p class="footer-desc">Sri Lanka's premier party company. Delivering unforgettable celebrations from Dehiwala to the whole island.</p>
    </div>
    <div class="footer-col">
      <h4>Navigate</h4>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Contact</a></li>
        <li><a href="/party-console" target="_blank">Party Console</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="/kids">Kids' Parties</a></li>
        <li><a href="/birthdays">Birthdays</a></li>
        <li><a href="/bouncy">Bouncy Castles</a></li>
        <li><a href="/balloons">Balloons</a></li>
        <li><a href="/sound">Sound Systems</a></li>
        <li><a href="/lighting">Lighting</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <ul>
        <li>info@zetanova.lk</li>
        <li>077 886 5633</li>
        <li>No 43, By the Sea</li>
        <li>Dehiwala, Sri Lanka</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">© <span id="footer-year"></span> Zetanova Private Limited. All rights reserved.</p>
    <div class="footer-socials">
      <a href="#">Instagram</a>
      <a href="#">Facebook</a>
      <a href="#">LinkedIn</a>
    </div>
  </div>
</footer>

<a class="console-fab" href="/party-console" target="_blank">
  <span class="fab-dot"></span> Party Console — Build Your Quote
</a>

<script>
window.addEventListener('load', () => setTimeout(() => document.getElementById('page-loader').classList.add('out'), 350));
const cdot = document.getElementById('cur-dot');
document.addEventListener('mousemove', e => { cdot.style.left = e.clientX + 'px'; cdot.style.top = e.clientY + 'px'; });
function toggleMenu() { document.getElementById('mobMenu').classList.toggle('open'); }
window.addEventListener('scroll', () => {
  document.querySelector('.nav-outer').style.boxShadow = window.scrollY > 10 ? '0 4px 24px rgba(35,31,32,0.08)' : 'none';
});
document.getElementById('footer-year').textContent = new Date().getFullYear();
</script>
</body>
</html>
