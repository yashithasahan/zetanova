<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Balloons | Zetanova</title>
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
      <a class="nav-cat-item" href="/bouncy"><span class="nav-cat-icon">🏰</span> Bouncy Castles</a>
      <a class="nav-cat-item active" href="/balloons"><span class="nav-cat-icon">🎈</span> Balloons</a>
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
    <div class="pb-eyebrow"><span class="eyebrow eyebrow-rose">Balloon Styling</span></div>
    <h1 class="pb-title">Balloons that<br><em style="color:var(--rose);font-style:italic;">stop the room.</em></h1>
    <p class="pb-desc">Organic arches, ceiling clusters, column pairs, garlands, and number displays — all designed and installed to perfectly match your colour palette.</p>
  </div>
</div>

<!-- PRODUCTS GRID -->
<section style="padding:80px 5vw;background:var(--cream);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">What We Make</span>
    <h2 class="display d3" style="margin-bottom:52px;">Six ways to<br><em style="color:var(--rose);font-style:italic;">fill a room with joy.</em></h2>
    <div class="prod-grid">

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fce4ec,#f8bbd0);display:flex;align-items:center;justify-content:center;font-size:64px;">🌸</div>
        <div class="prod-body">
          <div class="prod-tag">Bestseller</div>
          <div class="prod-name">Organic Balloon Arch</div>
          <div class="prod-desc">A natural, flowing arch in your chosen colour palette — perfect as an entrance frame or backdrop centrepiece. Starts at medium (2 m).</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 4,500</span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#e3f2fd,#bbdefb);display:flex;align-items:center;justify-content:center;font-size:64px;">🎈</div>
        <div class="prod-body">
          <div class="prod-tag">Classic</div>
          <div class="prod-name">Balloon Columns</div>
          <div class="prod-desc">Tall, structured columns ideal for flanking entrances, cake tables, or stage areas. Sold in pairs — 1.2 m or 1.8 m height.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 2,800 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ pair</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#f3e5f5,#e1bee7);display:flex;align-items:center;justify-content:center;font-size:64px;">☁️</div>
        <div class="prod-body">
          <div class="prod-tag">Ceiling Style</div>
          <div class="prod-name">Ceiling Cluster</div>
          <div class="prod-desc">A floating mass of latex balloons anchored to the ceiling — creates a magical, cloud-like effect for indoor venues.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 3,200</span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fff9c4,#fff59d);display:flex;align-items:center;justify-content:center;font-size:64px;">💐</div>
        <div class="prod-body">
          <div class="prod-tag">Table Décor</div>
          <div class="prod-name">Balloon Bouquets</div>
          <div class="prod-desc">Small clusters of 5–7 latex balloons on a weight — perfect for table centrepieces or scatter decoration around the venue.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 1,200 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ bouquet</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#e8f5e9,#c8e6c9);display:flex;align-items:center;justify-content:center;font-size:64px;">🔢</div>
        <div class="prod-body">
          <div class="prod-tag">Birthday Must-Have</div>
          <div class="prod-name">Number Balloons</div>
          <div class="prod-desc">Large foil number balloons (gold, silver, rose gold, or custom colour) — standalone or paired with a balloon base. Any age.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 800 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ digit</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:linear-gradient(135deg,#fbe9e7,#ffccbc);display:flex;align-items:center;justify-content:center;font-size:64px;">🎀</div>
        <div class="prod-body">
          <div class="prod-tag">Wall Styling</div>
          <div class="prod-name">Balloon Garland</div>
          <div class="prod-desc">A continuous strand of mixed-size balloons draped along walls, staircases, or tables — modern, photogenic, and fully custom.</div>
          <div class="prod-foot">
            <span class="prod-price">From LKR 3,800 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ 3 m</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Order →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- COLOUR NOTE -->
<section style="padding:60px 5vw;background:var(--ink);">
  <div class="wrap" style="display:flex;gap:60px;align-items:center;flex-wrap:wrap;">
    <div style="flex:1;min-width:280px;">
      <span class="eyebrow" style="color:rgba(255,255,255,0.5);display:block;margin-bottom:14px;">Colour Matching</span>
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:36px;color:var(--white);margin-bottom:16px;">Any colour, any theme — exactly as you imagined.</h2>
      <p style="font-size:14px;color:rgba(255,255,255,0.6);line-height:1.8;">We stock a wide range of latex and foil balloons. Send us your colour reference — a hex code, a fabric swatch photo, or just a description — and we'll match it as closely as possible. All balloon work is designed and installed on-site by our team.</p>
    </div>
    <div style="display:flex;gap:12px;flex-wrap:wrap;">
      <div style="width:52px;height:52px;border-radius:50%;background:#C9536A;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#F6C94E;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#7ECAC3;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#A8D5E2;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#f8bbd0;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#c8e6c9;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:#fff9c4;"></div>
      <div style="width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,0.2);border:1px dashed rgba(255,255,255,0.4);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.5);font-size:18px;">+</div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Happy Customers</span>
    <h2 class="display d3" style="max-width:500px;margin-bottom:52px;">Balloons that<br><em style="color:var(--rose);font-style:italic;">made the shot.</em></h2>
    <div class="test-grid">
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The organic arch was even more beautiful than the reference photo I sent. Guests were taking photos in front of it all evening."</p><div class="test-by">Nimasha K.</div><div class="test-evt">Organic Arch · Birthday · Colombo 05</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"Ceiling cluster totally transformed our hall. Went from plain to magical in under an hour. Worth every rupee."</p><div class="test-by">Dulani &amp; Saman</div><div class="test-evt">Ceiling Cluster · Nugegoda</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The colour matching was spot on — exact shades from our invitation card. Such attention to detail. Will use again."</p><div class="test-by">Thilini S.</div><div class="test-evt">Full Balloon Package · Rajagiriya</div></div>
    </div>
  </div>
</section>

<div class="big-cta">
  <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Let's Create</span>
  <h2 class="bc-title">Tell us your colours<br><em>and your vision.</em></h2>
  <p class="bc-sub">We'll design the perfect balloon arrangement for your event — matched to your theme, installed on the day.</p>
  <div class="bc-btns"><a class="btn btn-ink" href="/">Get a Quote →</a></div>
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
