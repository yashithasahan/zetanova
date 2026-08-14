<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sound Systems | Zetanova</title>
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
      <a class="nav-cat-item" href="/balloons"><span class="nav-cat-icon">🎈</span> Balloons</a>
      <a class="nav-cat-item active" href="/sound"><span class="nav-cat-icon">🔊</span> Sound</a>
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
    <div class="pb-eyebrow"><span class="eyebrow eyebrow-rose">Sound Rentals</span></div>
    <h1 class="pb-title">Sound Systems<br><em style="color:var(--rose);font-style:italic;">for every party.</em></h1>
    <p class="pb-desc">Party speakers, PA systems, wireless microphones, and DJ setups — delivered, configured, and collected so the music never misses a beat.</p>
  </div>
</div>

<!-- RENTALS GRID -->
<section style="padding:80px 5vw;background:var(--cream);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Equipment</span>
    <h2 class="display d3" style="margin-bottom:52px;">The right sound<br><em style="color:var(--rose);font-style:italic;">for every size.</em></h2>
    <div class="prod-grid">

      <div class="prod-card">
        <div class="prod-img" style="background:var(--cream2);display:flex;align-items:center;justify-content:center;font-size:64px;">🔊</div>
        <div class="prod-body">
          <div class="prod-tag">Small Parties</div>
          <div class="prod-name">JBL PartyBox 310</div>
          <div class="prod-desc">240W portable speaker with built-in light show, Bluetooth, and USB. Battery powered — perfect for garden or indoor parties up to ~50 guests.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 3,500 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:var(--mint);display:flex;align-items:center;justify-content:center;font-size:64px;">📢</div>
        <div class="prod-body">
          <div class="prod-tag">Mid-Size</div>
          <div class="prod-name">JBL EON615</div>
          <div class="prod-desc">1000W 15" powered PA speaker, ideal for 50–150 guests. Crystal-clear vocal and music reproduction with easy mixer integration.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 4,500 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:var(--sky);display:flex;align-items:center;justify-content:center;font-size:64px;">🎛️</div>
        <div class="prod-body">
          <div class="prod-tag">Large Events</div>
          <div class="prod-name">JBL PRX915</div>
          <div class="prod-desc">2000W 15" professional PA — fills large halls, gardens, and outdoor venues. Pairs perfectly with the PRX subwoofer add-on.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 6,000 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:var(--rose-lt);display:flex;align-items:center;justify-content:center;font-size:64px;">🎤</div>
        <div class="prod-body">
          <div class="prod-tag">Presentations &amp; Speeches</div>
          <div class="prod-name">Wireless Microphone</div>
          <div class="prod-desc">Handheld UHF wireless mic with receiver — no cables, no trips. Great for birthday speeches, karaoke, or games host. Up to 50 m range.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 2,000 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:var(--cream2);display:flex;align-items:center;justify-content:center;font-size:64px;">🎧</div>
        <div class="prod-body">
          <div class="prod-tag">DJ Package</div>
          <div class="prod-name">DJ Starter Setup</div>
          <div class="prod-desc">2× EON615 speakers + DJ controller + wireless mic. Everything a DJ needs to run a smooth kids' or birthday party set.</div>
          <div class="prod-foot">
            <span class="prod-price">LKR 10,000 <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
            <a href="/" class="btn btn-outline" style="font-size:11px;padding:8px 16px;">Rent →</a>
          </div>
        </div>
      </div>

      <div class="prod-card">
        <div class="prod-img" style="background:var(--ink);display:flex;align-items:center;justify-content:center;font-size:64px;">🏟️</div>
        <div class="prod-body">
          <div class="prod-tag">Full Scale</div>
          <div class="prod-name">Full PA System</div>
          <div class="prod-desc">Custom configured for your venue — PRX mains, subwoofers, monitors, mixing desk, and cabling. Quote based on event size and requirements.</div>
          <div class="prod-foot">
            <span class="prod-price" style="color:var(--white);">Custom Quote</span>
            <a href="/" class="btn" style="font-size:11px;padding:8px 16px;background:var(--rose);color:var(--white);">Get a Quote →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- DELIVERY BAND -->
<div style="background:var(--ink);padding:28px 5vw;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;">
  <div>
    <div style="font-family:'Cormorant Garamond',serif;font-size:22px;color:var(--white);margin-bottom:6px;">Delivered, set up, and tested before your guests arrive</div>
    <div style="font-size:13px;color:rgba(255,255,255,0.5);">We configure all equipment on-site and stay available by phone throughout your event.</div>
  </div>
  <a href="/" class="btn" style="background:var(--rose);color:var(--white);white-space:nowrap;">Check Availability →</a>
</div>

<!-- WHAT'S INCLUDED -->
<section style="padding:80px 5vw;background:var(--white);">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;text-align:center;">What's Included</span>
    <h2 class="display d3" style="margin-bottom:52px;text-align:center;">Plug in,<br><em style="color:var(--rose);font-style:italic;">press play.</em></h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:40px;">
      <div style="text-align:center;">
        <div style="font-size:36px;margin-bottom:14px;">📦</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;margin-bottom:8px;">Delivery &amp; Collection</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">We deliver to your venue, set up, and collect at the end — zero logistics for you.</div>
      </div>
      <div style="text-align:center;">
        <div style="font-size:36px;margin-bottom:14px;">🔧</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;margin-bottom:8px;">Full Setup</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">Cables, stands, and configuration included. We test everything before guests arrive.</div>
      </div>
      <div style="text-align:center;">
        <div style="font-size:36px;margin-bottom:14px;">📱</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;margin-bottom:8px;">Playlist Support</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">Connect via Bluetooth or aux. We can also recommend children's party playlists on request.</div>
      </div>
      <div style="text-align:center;">
        <div style="font-size:36px;margin-bottom:14px;">📞</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;margin-bottom:8px;">On-Call Support</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">Our team stays reachable by phone throughout your event in case anything needs adjusting.</div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">Happy Customers</span>
    <h2 class="display d3" style="max-width:500px;margin-bottom:52px;">Music that kept<br><em style="color:var(--rose);font-style:italic;">the party going.</em></h2>
    <div class="test-grid">
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"The PartyBox was exactly what we needed for our garden party — great sound, easy setup, and the light show was a bonus hit."</p><div class="test-by">Kasun &amp; Nadeesha</div><div class="test-evt">PartyBox Rental · Mount Lavinia</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"DJ Starter setup was brilliant — the mic worked perfectly for speeches and the kids loved the music set. Will rent again."</p><div class="test-by">Ranjith &amp; Mala</div><div class="test-evt">DJ Package · Maharagama</div></div>
      <div class="test-card"><span class="test-mark">"</span><div class="test-stars">★★★★★</div><p class="test-q">"Their team configured the PA for our hall perfectly. Sound was even, no feedback, and they were there early. Fantastic service."</p><div class="test-by">Tharanga F.</div><div class="test-evt">Full PA System · Piliyandala</div></div>
    </div>
  </div>
</section>

<div class="big-cta">
  <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Let's Make Noise</span>
  <h2 class="bc-title">Get the sound<br><em>your party deserves.</em></h2>
  <p class="bc-sub">Tell us the venue size, guest count, and date — we'll recommend the right system and confirm availability.</p>
  <div class="bc-btns"><a class="btn btn-ink" href="/">Book Sound →</a></div>
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
