<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lighting | Zetanova</title>
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
    <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.88,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
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
      <a class="nav-cat-item" href="/bouncy"><span class="nav-cat-icon">🏰</span> Bouncy Castles</a>
      <a class="nav-cat-item" href="/balloons"><span class="nav-cat-icon">🎈</span> Balloons</a>
      <a class="nav-cat-item" href="/sound"><span class="nav-cat-icon">🔊</span> Sound</a>
      <a class="nav-cat-item active" href="/lighting"><span class="nav-cat-icon">✨</span> Lighting</a>
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
    <div class="pb-eyebrow"><span class="eyebrow eyebrow-rose">Lighting Rentals</span></div>
    <h1 class="pb-title">Lighting that<br><em style="color:var(--rose);font-style:italic;">sets the mood.</em></h1>
    <p class="pb-desc">Fairy light canopies, LED colour wash, moving heads, disco balls, cold sparks, and neon signs — all installed and ready before your guests walk in.</p>
  </div>
</div>

<!-- PRODUCTS GRID -->
<section style="padding:80px 5vw;background:var(--cream);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Our Lighting</span>
    <h2 class="display d3" style="margin-bottom:52px;">Six ways to<br><em style="color:var(--rose);font-style:italic;">light up a room.</em></h2>
    <div class="prod-grid">

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fff9c4,#fffde7);display:flex;align-items:center;justify-content:center;font-size:64px;">✨</div>
        <div class="prod-body">
          <div class="prod-tag">Bestseller</div>
          <div class="prod-name">Fairy Light Canopy</div>
          <div class="prod-desc">Hundreds of warm-white fairy lights suspended ceiling-to-floor or draped overhead — instantly transforms any venue into a magical space.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 6,000</span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#e3f2fd,#e8eaf6);display:flex;align-items:center;justify-content:center;font-size:64px;">💡</div>
        <div class="prod-body">
          <div class="prod-tag">Colour Wash</div>
          <div class="prod-name">LED Par Cans</div>
          <div class="prod-desc">RGB LED par cans for full-colour wash of walls, backdrops, or dance floors. Choose a static colour or slow colour-cycle mode. Priced per unit.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 800 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ unit / day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fce4ec,#f3e5f5);display:flex;align-items:center;justify-content:center;font-size:64px;">🌀</div>
        <div class="prod-body">
          <div class="prod-tag">Show Lighting</div>
          <div class="prod-name">Moving Head Lights</div>
          <div class="prod-desc">Programmable moving heads with beam and spot modes — creates a dynamic, club-like atmosphere perfect for dance floors and party moments.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 5,500 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ pair</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#e8f5e9,#f1f8e9);display:flex;align-items:center;justify-content:center;font-size:64px;">🎇</div>
        <div class="prod-body">
          <div class="prod-tag">Wow Factor</div>
          <div class="prod-name">Cold Spark Machines</div>
          <div class="prod-desc">Cold spark (sparkler) machines for cake-cutting moments, grand entrances, or first-dance reveals. Totally safe — no heat, no fire risk indoors.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 9,000 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ pair</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fff8e1,#fff3e0);display:flex;align-items:center;justify-content:center;font-size:64px;">🪩</div>
        <div class="prod-body">
          <div class="prod-tag">Party Classic</div>
          <div class="prod-name">Disco Ball</div>
          <div class="prod-desc">Motor-driven mirror ball with twin pin spots — fills the room with dancing light reflections. Kids absolutely love it. Ceiling mount included.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 2,500 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fce4ec,#fce4ec);display:flex;align-items:center;justify-content:center;font-size:64px;">🌈</div>
        <div class="prod-body">
          <div class="prod-tag">Photo Backdrop</div>
          <div class="prod-name">LED Neon Sign</div>
          <div class="prod-desc">Custom LED neon sign for the birthday child's name, a phrase, or number. Warm white or colour. Perfect as a cake table or photo wall accent.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 4,000</span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- DELIVERY BAND -->
<div style="background:var(--ink);padding:28px 5vw;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;">
  <div>
    <div style="font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--white);margin-bottom:6px;">Installed and tested before your guests arrive</div>
    <div style="font-size:13px;color:rgba(255,255,255,0.5);">All lighting is rigged, cabled, and programmed by our team. We collect everything at the end of your event.</div>
  </div>
  <a href="/" class="btn" style="background:var(--rose);color:var(--white);white-space:nowrap;">Check Availability →</a>
</div>

<!-- MIX & MATCH -->
<section style="padding:80px 5vw;background:var(--white);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;text-align:center;">Mix &amp; Match</span>
    <h2 class="display d3" style="margin-bottom:16px;text-align:center;">Build your<br><em style="color:var(--rose);font-style:italic;">dream lighting setup.</em></h2>
    <p style="text-align:center;font-size:15px;color:var(--ink3);max-width:600px;margin:0 auto 52px;line-height:1.8;">Most events combine two or three lighting elements. A fairy light canopy with LED pars and a disco ball, for example, turns a plain hall into something extraordinary. Use our Party Console to build and price your combination instantly.</p>
    <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;">
      <div style="padding:24px 32px;background:var(--cream2);border:1px solid var(--border2);text-align:center;min-width:180px;">
        <div style="font-size:24px;margin-bottom:8px;">✨ + 💡</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:18px;margin-bottom:6px;">Canopy + Pars</div>
        <div style="font-size:12px;color:var(--ink3);">Warm &amp; colourful — great for birthdays</div>
      </div>
      <div style="padding:24px 32px;background:var(--cream2);border:1px solid var(--border2);text-align:center;min-width:180px;">
        <div style="font-size:24px;margin-bottom:8px;">🪩 + 🌀</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:18px;margin-bottom:6px;">Disco + Movers</div>
        <div style="font-size:12px;color:var(--ink3);">High-energy dance floor look</div>
      </div>
      <div style="padding:24px 32px;background:var(--cream2);border:1px solid var(--border2);text-align:center;min-width:180px;">
        <div style="font-size:24px;margin-bottom:8px;">🎇 + 🌈</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:18px;margin-bottom:6px;">Sparks + Neon</div>
        <div style="font-size:12px;color:var(--ink3);">Wow-moment + photo backdrop</div>
      </div>
      <a href="/party-console" target="_blank" style="padding:24px 32px;background:var(--rose);border:1px solid var(--rose);text-align:center;min-width:180px;display:block;text-decoration:none;">
        <div style="font-size:24px;margin-bottom:8px;">🎛️</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:18px;margin-bottom:6px;color:var(--white);">Build Your Own</div>
        <div style="font-size:12px;color:rgba(255,255,255,0.7);">Open Party Console →</div>
      </a>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Happy Customers</span>
    <h2 class="display d3" style="max-width:500px;margin-bottom:52px;">Lighting that made<br><em style="color:var(--rose);font-style:italic;">every photo perfect.</em></h2>
    <div class="test-grid">
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The fairy light canopy completely transformed our hall. So many guests asked us who did the lighting — we sent them straight to Zetanova."</p><div class="test-by">Chamara &amp; Dilini</div><div class="test-evt">Fairy Canopy · Birthday · Colombo 05</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"Cold sparks at the cake cutting moment — the kids went absolutely wild. Everyone was filming. Totally safe indoors too."</p><div class="test-by">Udaya &amp; Renuka</div><div class="test-evt">Cold Sparks · Kids' Party · Kotte</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"Neon sign with my daughter's name looked incredible against the balloon wall. Every single photo came out beautifully."</p><div class="test-by">Priyanka N.</div><div class="test-evt">Neon Sign + Balloon Wall · Battaramulla</div></div>
    </div>
  </div>
</section>

<div class="big-cta">
  <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Let's Light It Up</span>
  <h2 class="bc-title">Tell us your venue<br><em>and the vibe.</em></h2>
  <p class="bc-sub">We'll recommend the perfect lighting combination for your space, theme, and budget.</p>
  <div class="bc-btns"><a class="btn btn-ink" href="/">Book Lighting →</a></div>
</div>

<footer>
  <div class="footer-grid">
    <div class="footer-logo-block">
      <div class="footer-logo-row">
        <svg class="footer-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
          <path style="fill:#C9536A" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
          <path style="fill:rgba(255,255,255,0.8);fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.88,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
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
