<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 — Page Not Found | Zetanova</title>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-config" content="/browserconfig.xml">
<meta name="theme-color" content="#231F20">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --brand-black: #231F20;
    --brand-pink: #F2A7C3;
    --brand-pink-light: #fde8f1;
    --brand-gray: #6b6768;
    --brand-light: #f7f4f5;
  }

  html, body {
    height: 100%;
    width: 100%;
    font-family: 'DM Sans', sans-serif;
    background-color: var(--brand-light);
    color: var(--brand-black);
    overflow: hidden;
  }

  /* Custom cursor */
  body { cursor: none; }

  #cursor-ring {
    position: fixed;
    width: 36px;
    height: 36px;
    border: 1.5px solid var(--brand-black);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9999;
    transform: translate(-50%, -50%);
    transition: transform 0.08s ease, width 0.2s ease, height 0.2s ease, border-color 0.2s ease;
    mix-blend-mode: multiply;
  }

  #cursor-dot {
    position: fixed;
    width: 6px;
    height: 6px;
    background: var(--brand-pink);
    border-radius: 50%;
    pointer-events: none;
    z-index: 9999;
    transform: translate(-50%, -50%);
    transition: transform 0.04s ease;
  }

  body.hovering #cursor-ring {
    width: 54px;
    height: 54px;
    border-color: var(--brand-pink);
  }

  /* Floating balloons background */
  .balloons-bg {
    position: fixed;
    inset: 0;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
  }

  .balloon {
    position: absolute;
    bottom: -120px;
    opacity: 0.12;
    animation: floatUp linear infinite;
  }

  @keyframes floatUp {
    0%   { transform: translateY(0) translateX(0) rotate(0deg); opacity: 0; }
    10%  { opacity: 0.12; }
    90%  { opacity: 0.08; }
    100% { transform: translateY(-110vh) translateX(var(--sway)) rotate(var(--rot)); opacity: 0; }
  }

  /* Main layout */
  .page {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 2rem;
    text-align: center;
  }

  /* Z Logo */
  .logo-wrap {
    margin-bottom: 3rem;
    display: flex;
    align-items: center;
    gap: 10px;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.1s forwards;
  }

  .logo-wrap svg { display: block; }

  .logo-name {
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--brand-black);
  }

  /* 404 number */
  .four-o-four {
    font-size: clamp(100px, 20vw, 180px);
    font-weight: 600;
    line-height: 1;
    letter-spacing: -0.04em;
    color: var(--brand-black);
    position: relative;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.25s forwards;
  }

  .four-o-four .zero {
    display: inline-block;
    position: relative;
  }

  .four-o-four .zero::after {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    background: var(--brand-pink);
    border-radius: 50%;
    top: 14%;
    right: -6px;
    animation: floatDot 3s ease-in-out infinite;
  }

  @keyframes floatDot {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-8px); }
  }

  .tagline {
    font-size: clamp(14px, 2.5vw, 18px);
    font-weight: 300;
    color: var(--brand-gray);
    margin-top: 1.2rem;
    margin-bottom: 0.5rem;
    letter-spacing: 0.01em;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.4s forwards;
  }

  .tagline strong {
    color: var(--brand-black);
    font-weight: 500;
  }

  .subline {
    font-size: 14px;
    color: var(--brand-gray);
    font-weight: 300;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.5s forwards;
    margin-bottom: 2.5rem;
  }

  /* CTA */
  .cta-wrap {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    justify-content: center;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.65s forwards;
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 32px;
    background: var(--brand-black);
    color: #fff;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.04em;
    text-decoration: none;
    border-radius: 60px;
    transition: background 0.2s ease, transform 0.15s ease;
    cursor: none;
  }

  .btn-primary:hover {
    background: #3d3637;
    transform: translateY(-2px);
  }

  .btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 32px;
    background: transparent;
    color: var(--brand-black);
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.04em;
    text-decoration: none;
    border-radius: 60px;
    border: 1.5px solid var(--brand-black);
    transition: background 0.2s ease, transform 0.15s ease;
    cursor: none;
  }

  .btn-secondary:hover {
    background: var(--brand-pink-light);
    transform: translateY(-2px);
  }

  /* Divider line */
  .divider {
    width: 40px;
    height: 1.5px;
    background: var(--brand-pink);
    margin: 2.5rem auto;
    opacity: 0;
    animation: fadeUp 0.7s ease 0.55s forwards;
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* Footer credit */
  .footer-credit {
    position: fixed;
    bottom: 24px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 11px;
    color: var(--brand-gray);
    letter-spacing: 0.05em;
    opacity: 0.6;
    white-space: nowrap;
  }
</style>
</head>
<body>

<div id="cursor-ring"></div>
<div id="cursor-dot"></div>

<!-- Floating balloon shapes -->
<div class="balloons-bg" id="balloonsBg"></div>

<main class="page">

  <!-- Logo -->
  <div class="logo-wrap">
    <svg width="48" height="48" viewBox="268 391.31 59.27 59.27" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <defs><style>.cls-3{fill:#221f20;}.cls-4{fill:#221f20;fill-rule:evenodd;}</style></defs>
      <!-- Dot — recoloured pink -->
      <path style="fill:#F2A7C3;" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
      <!-- Z shape -->
      <path class="cls-4" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
    </svg>
    <span class="logo-name">Zetanova</span>
  </div>

  <!-- 404 -->
  <div class="four-o-four" aria-label="Error 404">
    4<span class="zero">0</span>4
  </div>

  <p class="tagline">This page must have floated away.</p>
  <p class="subline">The link might be broken, or the page may have moved.</p>

  <div class="divider"></div>

  <div class="cta-wrap">
    <a href="/" class="btn-primary">Back to Home</a>
    <a href="/contact" class="btn-secondary">Contact Us</a>
  </div>

</main>

<p class="footer-credit">© <span id="copy-year"></span> Zetanova Private Limited</p>

<script>
  document.getElementById('copy-year').textContent = new Date().getFullYear();

  // Cursor
  const ring = document.getElementById('cursor-ring');
  const dot  = document.getElementById('cursor-dot');
  let mx = -100, my = -100;

  document.addEventListener('mousemove', e => {
    mx = e.clientX; my = e.clientY;
    dot.style.left  = mx + 'px';
    dot.style.top   = my + 'px';
    ring.style.left = mx + 'px';
    ring.style.top  = my + 'px';
  });

  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
    el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
  });

  // Generate floating balloon SVGs
  const container = document.getElementById('balloonsBg');
  const colors = ['#231F20','#F2A7C3','#d4849f','#888'];
  const count = 14;

  for (let i = 0; i < count; i++) {
    const el = document.createElement('div');
    el.className = 'balloon';
    const left  = Math.random() * 100;
    const delay = Math.random() * 18;
    const dur   = 14 + Math.random() * 14;
    const size  = 28 + Math.random() * 42;
    const sway  = (Math.random() - 0.5) * 120 + 'px';
    const rot   = (Math.random() - 0.5) * 40 + 'deg';
    const color = colors[Math.floor(Math.random() * colors.length)];

    el.style.cssText = `
      left: ${left}%;
      --sway: ${sway};
      --rot: ${rot};
      animation-duration: ${dur}s;
      animation-delay: ${delay}s;
    `;

    el.innerHTML = `<svg width="${size}" height="${size * 1.3}" viewBox="0 0 40 52" fill="none" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="20" cy="20" rx="16" ry="19" fill="${color}"/>
      <line x1="20" y1="39" x2="20" y2="52" stroke="${color}" stroke-width="1.2"/>
    </svg>`;

    container.appendChild(el);
  }
</script>
</body>
</html>
