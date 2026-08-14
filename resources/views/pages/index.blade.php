<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zetanova — Moments to Memories</title>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-config" content="/browserconfig.xml">
<meta name="theme-color" content="#231F20">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
/* ═══════════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════════ */
:root {
  --cream:    #FAF7F2;
  --cream2:   #F3EEE6;
  --cream3:   #EDE5D8;
  --ink:      #231F20;
  --ink2:     #3D3535;
  --ink3:     #6B5F5F;
  --rose:     #C9536A;
  --rose-lt:  #E8A0AE;
  --sage:     #7A9E87;
  --blush:    #F5DDD5;
  --sand:     #D4C5A9;
  --sand-lt:  #EDE3D2;
  --white:    #FFFFFF;
  --border:   rgba(35,31,32,0.1);
  --border2:  rgba(35,31,32,0.06);
}

/* ═══════════════════════════════════════════
   RESET & BASE
═══════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; }
body {
  font-family: 'DM Sans', sans-serif;
  background: var(--cream);
  color: var(--ink);
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}
img { display: block; max-width: 100%; }
a { text-decoration: none; color: inherit; }
button { font-family: inherit; }

/* ═══════════════════════════════════════════
   CUSTOM CURSOR — tiny dot at cursor tip
═══════════════════════════════════════════ */
#cur-dot {
  width: 5px; height: 5px;
  background: var(--rose);
  border-radius: 50%;
  position: fixed; z-index: 9999; top: 0; left: 0;
  pointer-events: none;
  transform: translate(0, 0);
  will-change: left, top;
}

/* ═══════════════════════════════════════════
   PAGE LOADER
═══════════════════════════════════════════ */
#page-loader {
  position: fixed; inset: 0; z-index: 99999;
  background: var(--cream);
  display: flex; align-items: center; justify-content: center;
  transition: opacity 0.7s ease, visibility 0.7s ease;
}
#page-loader.out { opacity: 0; visibility: hidden; pointer-events: none; }
.loader-logo-svg {
  width: 72px; height: 72px;
  animation: loaderBreathe 1.2s ease-in-out infinite;
}
#loader-dot-path { animation: loaderColor 1.2s linear infinite; }
@keyframes loaderColor {
  0%   { fill: #FF2D78; }
  16%  { fill: #FFBA00; }
  33%  { fill: #00C4FF; }
  50%  { fill: #00E676; }
  66%  { fill: #FF6200; }
  83%  { fill: #C400FF; }
  100% { fill: #FF2D78; }
}
@keyframes loaderBreathe {
  0%, 100% { transform: scale(1); }
  50%       { transform: scale(1.12); }
}

/* ═══════════════════════════════════════════
   PAGES
═══════════════════════════════════════════ */
.page { display: none; }
.page.active { display: block; }

/* ═══════════════════════════════════════════
   UTILITY CLASSES
═══════════════════════════════════════════ */
.serif {
  font-family: 'Cormorant Garamond', serif;
}
.eyebrow {
  font-size: 10px; font-weight: 500;
  letter-spacing: 3px; text-transform: uppercase;
  color: var(--ink3);
}
.eyebrow-rose { color: var(--rose); }
.display {
  font-family: 'Cormorant Garamond', serif;
  font-weight: 400; line-height: 1.05;
  letter-spacing: -0.02em;
}
.d1 { font-size: clamp(52px, 8vw, 110px); }
.d2 { font-size: clamp(40px, 6vw, 80px); }
.d3 { font-size: clamp(30px, 4vw, 56px); }
.d4 { font-size: clamp(22px, 3vw, 36px); }
.body-sm { font-size: 13px; font-weight: 400; color: var(--ink3); line-height: 1.75; }
.body-md { font-size: 15px; font-weight: 400; color: var(--ink3); line-height: 1.8; }
.wrap { max-width: 1280px; margin: 0 auto; padding: 0 5vw; }
.divider { height: 1px; background: var(--border2); }

/* ═══════════════════════════════════════════
   BUTTONS
═══════════════════════════════════════════ */
.btn {
  display: inline-flex; align-items: center; gap: 8px;
  font-size: 11px; font-weight: 600;
  letter-spacing: 2px; text-transform: uppercase;
  padding: 14px 32px;
  transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
  position: relative; overflow: hidden;
}
.btn::after {
  content: ''; position: absolute; inset: 0;
  transform: scaleX(0); transform-origin: right;
  transition: transform 0.3s ease;
}
.btn:hover::after { transform: scaleX(1); transform-origin: left; }
.btn-ink {
  background: var(--ink); color: var(--white);
  border: 1px solid var(--ink);
}
.btn-ink::after { background: var(--rose); }
.btn-ink:hover { border-color: var(--rose); color: var(--white); }
.btn-outline {
  background: transparent; color: var(--ink);
  border: 1px solid var(--ink);
}
.btn-outline::after { background: var(--ink); }
.btn-outline:hover { color: var(--white); }
.btn-rose {
  background: var(--rose); color: var(--white);
  border: 1px solid var(--rose);
}
.btn-rose::after { background: var(--ink); }
.btn-rose:hover { border-color: var(--ink); }
.btn-ghost {
  background: transparent; color: var(--ink);
  border: 1px solid var(--border);
  padding: 11px 24px;
}
.btn-ghost:hover { border-color: var(--ink); }

/* ═══════════════════════════════════════════
   TOPBAR (à la Vivant / Ginger Ray)
═══════════════════════════════════════════ */
.topbar {
  background: var(--ink);
  display: flex; align-items: center; justify-content: center;
  padding: 10px 5vw; gap: 24px;
  position: relative;
}
.topbar-text {
  font-size: 11px; font-weight: 500; letter-spacing: 1.5px;
  color: rgba(255,255,255,0.7); text-align: center;
}
.topbar-text span { color: var(--rose-lt); }
.topbar-close {
  position: absolute; right: 20px; top: 50%; transform: translateY(-50%);
  background: none; border: none; color: rgba(255,255,255,0.4);
  font-size: 16px; line-height: 1;
}

/* ═══════════════════════════════════════════
   NAV — inspired by Yoonek + Meri Meri
═══════════════════════════════════════════ */
.nav-outer {
  position: sticky; top: 0; z-index: 200;
  background: var(--white);
  border-bottom: 1px solid var(--border2);
}
.nav-main {
  display: flex; align-items: center;
  justify-content: space-between;
  height: 72px; padding: 0 5vw;
}

/* Logo lockup */
.nav-logo {
  display: flex; align-items: center; gap: 14px;
  cursor: none;
}
.nav-logo-svg { width: 38px; height: 38px; flex-shrink: 0; }
.nav-logo-text-block {
  display: flex; flex-direction: column; gap: 1px;
}
.nav-brand-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-weight: 500; letter-spacing: 2px;
  text-transform: uppercase; color: var(--ink); line-height: 1;
}
.nav-slogan {
  font-size: 8px; font-weight: 500; letter-spacing: 3px;
  text-transform: uppercase; color: var(--ink3);
}

/* Center links */
.nav-links {
  display: flex; align-items: center; gap: 0;
  list-style: none;
}
.nav-links a {
  font-size: 11px; font-weight: 500; letter-spacing: 1.5px;
  text-transform: uppercase; color: var(--ink2);
  padding: 10px 16px; position: relative;
  transition: color 0.2s;
}
.nav-links a::after {
  content: ''; position: absolute; bottom: 6px; left: 16px; right: 16px;
  height: 1px; background: var(--rose);
  transform: scaleX(0); transform-origin: right;
  transition: transform 0.3s ease;
}
.nav-links a:hover, .nav-links a.active { color: var(--ink); }
.nav-links a:hover::after, .nav-links a.active::after { transform: scaleX(1); transform-origin: left; }

/* Right actions */
.nav-actions { display: flex; align-items: center; gap: 12px; }
.nav-console-btn {
  display: inline-flex; align-items: center; gap: 6px;
  font-size: 10px; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase;
  background: var(--ink); color: var(--white);
  padding: 10px 20px; border: none;
  transition: background 0.3s;
}
.nav-console-btn:hover { background: var(--rose); }
.nav-console-dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--rose); animation: pdot 1.8s ease-in-out infinite;
}
.nav-console-btn:hover .nav-console-dot { background: white; }
@keyframes pdot { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(1.5)} }

/* Category nav row — Yoonek style */
.nav-cats {
  border-top: 1px solid var(--border2);
  overflow-x: auto; white-space: nowrap;
  padding: 0 5vw;
  scrollbar-width: none;
}
.nav-cats::-webkit-scrollbar { display: none; }
.nav-cats-inner {
  display: inline-flex; align-items: center; gap: 0;
}
.nav-cat-item {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 12px 20px; font-size: 11px; font-weight: 500;
  letter-spacing: 1px; text-transform: uppercase; color: var(--ink3);
  border-bottom: 2px solid transparent;
  transition: all 0.2s; white-space: nowrap;
}
.nav-cat-item:hover { color: var(--ink); border-bottom-color: var(--rose); }
.nav-cat-icon { font-size: 15px; line-height: 1; }

.hamburger { display: none; flex-direction: column; gap: 5px; background: none; border: none; padding: 4px; }
.hamburger span { width: 22px; height: 1px; background: var(--ink); display: block; transition: all 0.3s; }

/* ═══════════════════════════════════════════
   MOBILE MENU
═══════════════════════════════════════════ */
.mob-menu {
  display: none; position: fixed; inset: 0; z-index: 500;
  background: var(--cream); flex-direction: column;
  padding: 80px 8vw 40px;
}
.mob-menu.open { display: flex; }
.mob-close { position: absolute; top: 22px; right: 5vw; background: none; border: none; font-size: 24px; color: var(--ink); }
.mob-menu a {
  font-family: 'Cormorant Garamond', serif;
  font-size: 36px; font-weight: 400; color: var(--ink);
  padding: 12px 0; border-bottom: 1px solid var(--border2);
}

/* ═══════════════════════════════════════════
   HOME — HERO (split editorial à la Vivant)
═══════════════════════════════════════════ */
.hero {
  min-height: calc(100vh - 110px);
  display: grid;
  grid-template-columns: 55% 45%;
}
.hero-left {
  background: var(--cream2);
  display: flex; flex-direction: column; justify-content: flex-end;
  padding: 80px 6vw 80px 5vw;
  position: relative; overflow: hidden;
}
/* Large background letter */
.hero-bg-letter {
  position: absolute; bottom: -40px; right: -20px;
  font-family: 'Cormorant Garamond', serif;
  font-size: 36vw; font-weight: 300; line-height: 1;
  color: rgba(35,31,32,0.04);
  pointer-events: none; user-select: none;
  letter-spacing: -10px;
}
.hero-eyebrow { margin-bottom: 28px; }
.hero-title { margin-bottom: 28px; }
.hero-title em { font-style: italic; color: var(--rose); }
.hero-body { max-width: 420px; margin-bottom: 48px; }
.hero-body p { font-size: 15px; color: var(--ink3); line-height: 1.8; }
.hero-body .slogan {
  font-size: 10px; font-weight: 600; letter-spacing: 3px;
  text-transform: uppercase; color: var(--rose);
  margin-top: 12px;
}
.hero-btns { display: flex; gap: 14px; flex-wrap: wrap; }
.hero-stats {
  display: flex; gap: 0; margin-top: 56px;
  border-top: 1px solid var(--border);
  padding-top: 36px;
}
.hero-stat {
  padding-right: 40px; margin-right: 40px;
  border-right: 1px solid var(--border);
}
.hero-stat:last-child { border-right: none; }
.hs-val {
  font-family: 'Cormorant Garamond', serif;
  font-size: 42px; font-weight: 400; color: var(--ink); line-height: 1;
}
.hs-lbl { font-size: 10px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; color: var(--ink3); margin-top: 4px; }

.hero-right {
  background: var(--white);
  position: relative; overflow: hidden;
}

/* ═══════════════════════════════════════════
   MARQUEE STRIP
═══════════════════════════════════════════ */
.marquee-strip {
  border-top: 1px solid var(--border2);
  border-bottom: 1px solid var(--border2);
  background: var(--white);
  overflow: hidden;
  padding: 16px 0;
}
.marquee-track {
  display: flex; gap: 0;
  animation: marqueeAnim 28s linear infinite;
  white-space: nowrap;
}
.mq-item {
  display: inline-flex; align-items: center; gap: 16px;
  padding: 0 28px;
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 400; font-style: italic;
  color: var(--ink3);
}
.mq-dot {
  width: 4px; height: 4px; border-radius: 50%;
  background: var(--rose); flex-shrink: 0;
}
@keyframes marqueeAnim { from{transform:translateX(0)} to{transform:translateX(-50%)} }

/* ═══════════════════════════════════════════
   HORIZONTAL SCROLL REVEAL (à la Folat)
═══════════════════════════════════════════ */
.scroll-reveal-section {
  padding: 100px 0;
  background: var(--cream);
  overflow: hidden;
}
.sr-header {
  padding: 0 5vw; margin-bottom: 52px;
  display: flex; align-items: flex-end; justify-content: space-between; gap: 24px;
}
.sr-header-left {}
.sr-track-wrap {
  position: relative;
  overflow: hidden;
}
.sr-track {
  display: flex; gap: 2px;
  padding: 0 5vw;
  transition: transform 0.7s cubic-bezier(0.16,1,0.3,1);
  will-change: transform;
}
.sr-card {
  flex-shrink: 0;
  width: 340px; /* desktop */
  background: var(--white);
  position: relative; overflow: hidden;
  cursor: none;
}
.sr-card-img {
  aspect-ratio: 3/4;
  position: relative; overflow: hidden;
  background: var(--cream2);
}
.sr-card-img::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(to top, rgba(35,31,32,0.5) 0%, transparent 50%);
  transition: opacity 0.4s;
}
.sr-card:hover .sr-card-img::after { opacity: 0.7; }
.sr-card-body { padding: 20px 22px 24px; }
.sr-card-cat {
  font-size: 10px; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase; color: var(--rose); margin-bottom: 6px;
}
.sr-card-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-weight: 400; color: var(--ink); margin-bottom: 8px;
  line-height: 1.2;
}
.sr-card-desc { font-size: 12px; color: var(--ink3); line-height: 1.6; }
.sr-card-hover {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: var(--ink); padding: 16px 22px;
  transform: translateY(100%);
  transition: transform 0.35s cubic-bezier(0.16,1,0.3,1);
  display: flex; align-items: center; justify-content: space-between;
}
.sr-card:hover .sr-card-hover { transform: translateY(0); }
.sr-hover-text { font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; color: var(--white); }
.sr-hover-arrow { color: var(--rose); font-size: 18px; }

/* Scroll controls */
.sr-controls {
  display: flex; gap: 10px; flex-shrink: 0;
}
.sr-btn {
  width: 44px; height: 44px; border-radius: 50%;
  border: 1px solid var(--border); background: var(--white);
  display: flex; align-items: center; justify-content: center;
  font-size: 16px; color: var(--ink); transition: all 0.2s;
}
.sr-btn:hover { background: var(--ink); color: var(--white); border-color: var(--ink); }
.sr-btn:disabled { opacity: 0.3; }

/* ═══════════════════════════════════════════
   CATEGORIES ICON GRID (à la PartyDeco)
═══════════════════════════════════════════ */
.cat-section {
  padding: 80px 5vw;
  background: var(--white);
  border-top: 1px solid var(--border2);
}
.cat-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 2px;
  margin-top: 48px;
}
.cat-item {
  display: flex; flex-direction: column; align-items: center;
  gap: 14px; padding: 32px 16px;
  background: var(--cream2);
  border: 1px solid transparent;
  transition: all 0.3s; cursor: none;
}
.cat-item:hover {
  background: var(--white);
  border-color: var(--border);
  transform: translateY(-4px);
}
.cat-icon {
  width: 60px; height: 60px;
  display: flex; align-items: center; justify-content: center;
  font-size: 28px;
}
/* Minimal line-art icons using SVG */
.cat-icon svg { width: 36px; height: 36px; }
.cat-label {
  font-size: 10px; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase; color: var(--ink2);
  text-align: center;
}

/* ═══════════════════════════════════════════
   EDITORIAL FEATURE STRIP (Vivant-style)
═══════════════════════════════════════════ */
.feature-strip {
  background: var(--ink);
  padding: 80px 5vw;
}
.feature-inner {
  display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;
  max-width: 1280px; margin: 0 auto;
}
.feature-text {}
.feature-eyebrow { color: var(--rose-lt); margin-bottom: 24px; }
.feature-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(38px, 5vw, 68px);
  font-weight: 400; line-height: 1.1; color: var(--white);
  margin-bottom: 28px;
}
.feature-title em { font-style: italic; color: var(--rose-lt); }
.feature-body { font-size: 15px; color: rgba(255,255,255,0.55); line-height: 1.8; margin-bottom: 44px; }
.feature-items { display: flex; flex-direction: column; gap: 0; }
.feature-item {
  display: flex; align-items: flex-start; gap: 20px;
  padding: 24px 0; border-bottom: 1px solid rgba(255,255,255,0.08);
}
.feature-item:first-child { border-top: 1px solid rgba(255,255,255,0.08); }
.fi-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 14px; font-weight: 300;
  color: var(--rose-lt); min-width: 28px; padding-top: 2px;
}
.fi-title { font-size: 15px; font-weight: 500; color: var(--white); margin-bottom: 4px; }
.fi-body { font-size: 13px; color: rgba(255,255,255,0.45); line-height: 1.65; }

/* ═══════════════════════════════════════════
   PRODUCT GRID SECTION (EnFete / Ruby Rabbit)
═══════════════════════════════════════════ */
.products-section {
  padding: 100px 5vw;
  background: var(--cream);
}
.prod-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 2px; margin-top: 52px;
}
.prod-card {
  background: var(--white);
  overflow: hidden; cursor: none;
  transition: transform 0.4s cubic-bezier(0.16,1,0.3,1);
  position: relative;
}
.prod-card:hover { transform: translateY(-6px); }
.prod-img {
  aspect-ratio: 1;
  display: flex; align-items: center; justify-content: center;
  font-size: 72px;
  position: relative; overflow: hidden;
}
.prod-overlay {
  position: absolute; inset: 0;
  background: rgba(35,31,32,0.0);
  display: flex; align-items: center; justify-content: center;
  transition: background 0.4s;
}
.prod-card:hover .prod-overlay { background: rgba(35,31,32,0.06); }
.prod-body { padding: 20px 20px 0; }
.prod-cat {
  font-size: 9px; font-weight: 600; letter-spacing: 2.5px;
  text-transform: uppercase; color: var(--rose); margin-bottom: 6px;
}
.prod-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 20px; font-weight: 400; color: var(--ink); line-height: 1.3;
}
.prod-desc { font-size: 12px; color: var(--ink3); line-height: 1.6; margin-top: 6px; }
.prod-foot {
  display: flex; align-items: center; justify-content: space-between;
  padding: 14px 20px; margin-top: 14px;
  border-top: 1px solid var(--border2);
}
.prod-price {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 400; color: var(--ink);
}
.prod-enquire {
  font-size: 10px; font-weight: 600; letter-spacing: 1.5px;
  text-transform: uppercase; color: var(--ink3);
  background: none; border: none;
  transition: color 0.2s;
}
.prod-enquire:hover { color: var(--rose); }

/* Filter tabs */
.filter-tabs {
  display: flex; gap: 0;
  border-bottom: 1px solid var(--border2);
  overflow-x: auto; white-space: nowrap;
  scrollbar-width: none;
}
.filter-tabs::-webkit-scrollbar { display: none; }
.f-tab {
  padding: 12px 22px; font-size: 11px; font-weight: 500;
  letter-spacing: 1.5px; text-transform: uppercase; color: var(--ink3);
  background: none; border: none;
  border-bottom: 2px solid transparent; margin-bottom: -1px;
  transition: all 0.2s; white-space: nowrap;
}
.f-tab:hover, .f-tab.active { color: var(--ink); border-bottom-color: var(--ink); }

/* ═══════════════════════════════════════════
   TESTIMONIALS (Ruby Rabbit style)
═══════════════════════════════════════════ */
.testimonials {
  padding: 100px 5vw;
  background: var(--cream2);
  border-top: 1px solid var(--border2);
}
.test-grid {
  display: grid; grid-template-columns: repeat(3,1fr);
  gap: 2px; margin-top: 52px;
}
.test-card {
  background: var(--white);
  padding: 48px 36px;
  position: relative; transition: background 0.3s;
}
.test-card:nth-child(2) { background: var(--ink); }
.test-card:hover:not(:nth-child(2)) { background: var(--cream); }
.test-mark {
  font-family: 'Cormorant Garamond', serif;
  font-size: 64px; font-weight: 300; line-height: 0.6;
  color: var(--rose-lt); margin-bottom: 24px; display: block;
}
.test-card:nth-child(2) .test-mark { color: rgba(255,255,255,0.2); }
.test-stars { color: var(--sand); font-size: 13px; letter-spacing: 3px; margin-bottom: 20px; }
.test-card:nth-child(2) .test-stars { color: var(--rose-lt); }
.test-q {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 300; font-style: italic;
  line-height: 1.7; color: var(--ink2); margin-bottom: 28px;
}
.test-card:nth-child(2) .test-q { color: rgba(255,255,255,0.75); }
.test-by { font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--ink); }
.test-card:nth-child(2) .test-by { color: var(--white); }
.test-evt { font-size: 11px; color: var(--ink3); margin-top: 3px; }
.test-card:nth-child(2) .test-evt { color: rgba(255,255,255,0.35); }

/* ═══════════════════════════════════════════
   PROCESS STEPS (Vivant editorial)
═══════════════════════════════════════════ */
.process-section {
  padding: 100px 5vw;
  background: var(--white);
  border-top: 1px solid var(--border2);
}
.process-grid {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: 1px; border: 1px solid var(--border2);
  margin-top: 52px;
}
.proc-card {
  padding: 48px 36px;
  background: var(--white);
  border-right: 1px solid var(--border2);
  transition: background 0.3s;
  position: relative;
}
.proc-card:last-child { border-right: none; }
.proc-card:hover { background: var(--cream2); }
.proc-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 48px; font-weight: 300;
  color: rgba(35,31,32,0.08); line-height: 1;
  position: absolute; top: 24px; right: 24px;
}
.proc-icon { font-size: 28px; margin-bottom: 20px; }
.proc-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-weight: 400; color: var(--ink);
  margin-bottom: 10px;
}
.proc-desc { font-size: 13px; color: var(--ink3); line-height: 1.7; }

/* ═══════════════════════════════════════════
   BIG CTA (Vivant full-width)
═══════════════════════════════════════════ */
.big-cta {
  padding: 120px 5vw; text-align: center;
  background: var(--cream2);
  border-top: 1px solid var(--border2);
}
.bc-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(42px, 6vw, 84px);
  font-weight: 400; line-height: 1.1;
  max-width: 800px; margin: 0 auto 20px;
}
.bc-title em { font-style: italic; color: var(--rose); }
.bc-sub { font-size: 14px; color: var(--ink3); max-width: 440px; margin: 0 auto 48px; line-height: 1.8; }
.bc-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

/* ═══════════════════════════════════════════
   CONSOLE STICKY FAB
═══════════════════════════════════════════ */
.console-fab {
  position: fixed; bottom: 30px; left: 50%; transform: translateX(-50%);
  z-index: 300;
  display: inline-flex; align-items: center; gap: 10px;
  background: var(--ink); color: var(--white);
  font-size: 10px; font-weight: 600; letter-spacing: 2.5px;
  text-transform: uppercase;
  padding: 14px 28px;
  border: 1px solid var(--ink);
  box-shadow: 0 8px 32px rgba(35,31,32,0.2);
  transition: all 0.3s;
  white-space: nowrap;
  text-decoration: none;
}
.console-fab:hover { background: var(--rose); border-color: var(--rose); transform: translateX(-50%) translateY(-2px); }
.fab-dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--rose); flex-shrink: 0;
  animation: pdot 1.8s ease-in-out infinite;
}
.console-fab:hover .fab-dot { background: var(--white); }

/* ═══════════════════════════════════════════
   INNER PAGES — COMMON
═══════════════════════════════════════════ */
.page-banner {
  background: var(--cream2);
  padding: 100px 5vw 64px;
  border-bottom: 1px solid var(--border2);
  position: relative; overflow: hidden;
}
.pb-bg {
  position: absolute; right: 0; top: 0; bottom: 0; width: 40%;
  background: var(--cream3);
  opacity: 0.5;
}
.pb-inner { position: relative; z-index: 2; max-width: 700px; }
.pb-eyebrow { margin-bottom: 20px; }
.pb-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(44px, 7vw, 80px);
  font-weight: 400; line-height: 1.05;
  letter-spacing: -0.02em; margin-bottom: 20px;
}
.pb-desc { font-size: 15px; color: var(--ink3); line-height: 1.8; max-width: 480px; }

/* ═══════════════════════════════════════════
   RENTALS PAGE
═══════════════════════════════════════════ */
.rent-grid {
  display: grid; grid-template-columns: repeat(2, 1fr);
  gap: 2px; margin-top: 60px;
}
.rent-card {
  background: var(--white);
  display: grid; grid-template-columns: 100px 1fr;
  overflow: hidden; transition: all 0.3s; cursor: none;
  border: 1px solid transparent;
}
.rent-card:hover { border-color: var(--ink); }
.rent-icon-col {
  background: var(--cream2);
  display: flex; align-items: center; justify-content: center;
  font-size: 36px;
  border-right: 1px solid var(--border2);
}
.rent-body { padding: 28px 24px; }
.rent-cat { font-size: 9px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase; color: var(--rose); margin-bottom: 6px; }
.rent-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 20px; font-weight: 400; color: var(--ink);
  margin-bottom: 6px;
}
.rent-desc { font-size: 12px; color: var(--ink3); line-height: 1.65; margin-bottom: 14px; }
.rent-price {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 400; color: var(--ink);
}
.rent-price small { font-family: 'DM Sans', sans-serif; font-size: 11px; color: var(--ink3); }

.del-band {
  background: var(--cream3);
  padding: 52px 5vw; text-align: center;
  border-top: 1px solid var(--border2);
  border-bottom: 1px solid var(--border2);
}

/* ═══════════════════════════════════════════
   PACKAGES (services page)
═══════════════════════════════════════════ */
.pkg-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 2px; margin-top: 60px; }
.pkg-card {
  padding: 52px 40px; background: var(--white);
  border: 1px solid var(--border2); position: relative;
  transition: all 0.3s;
}
.pkg-card:hover { border-color: var(--ink); }
.pkg-card.featured { background: var(--ink); border-color: var(--ink); }
.pkg-eyebrow { font-size: 9px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; display: block; margin-bottom: 18px; }
.pkg-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 38px; font-weight: 400; color: var(--ink); margin-bottom: 6px;
}
.pkg-card.featured .pkg-name { color: var(--white); }
.pkg-sub { font-size: 12px; color: var(--ink3); }
.pkg-card.featured .pkg-sub { color: rgba(255,255,255,0.35); }
.pkg-price {
  font-family: 'Cormorant Garamond', serif;
  font-size: 52px; font-weight: 300; color: var(--ink);
  line-height: 1; margin: 28px 0;
}
.pkg-card.featured .pkg-price { color: var(--white); }
.pkg-price sup { font-size: 20px; vertical-align: super; }
.pkg-list { list-style: none; margin: 0 0 36px; display: flex; flex-direction: column; gap: 13px; }
.pkg-list li {
  font-size: 13px; color: var(--ink3); display: flex; align-items: center; gap: 12px;
}
.pkg-card.featured .pkg-list li { color: rgba(255,255,255,0.5); }
.pkg-list li::before {
  content: ''; width: 12px; height: 1px; background: var(--sand);
  flex-shrink: 0;
}
.pkg-card.featured .pkg-list li::before { background: var(--rose-lt); opacity: 0.4; }
.pkg-btn {
  width: 100%; padding: 14px;
  font-family: 'DM Sans', sans-serif;
  font-size: 10px; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase; transition: all 0.3s;
}
.pkg-btn-dark { background: var(--ink); color: var(--white); border: none; }
.pkg-btn-dark:hover { background: var(--rose); }
.pkg-btn-light { background: transparent; color: var(--white); border: 1px solid rgba(255,255,255,0.25); }
.pkg-btn-light:hover { background: var(--white); color: var(--ink); border-color: var(--white); }

/* ═══════════════════════════════════════════
   ABOUT PAGE
═══════════════════════════════════════════ */
.about-split {
  display: grid; grid-template-columns: 1fr 1fr;
}
.about-l {
  padding: 80px 5vw;
  display: flex; flex-direction: column; justify-content: center;
  border-right: 1px solid var(--border2);
}
.about-r {
  background: var(--cream3);
  display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden; min-height: 500px;
}
.about-z {
  font-family: 'Cormorant Garamond', serif;
  font-size: 42vw; font-weight: 300; line-height: 1;
  color: rgba(35,31,32,0.06); position: absolute;
  top: 50%; left: 50%; transform: translate(-50%,-50%);
  pointer-events: none; white-space: nowrap;
}
.about-r-content {
  position: relative; z-index: 2; text-align: center;
  padding: 40px;
}
.about-badge {
  display: inline-block; padding: 8px 20px;
  border: 1px solid var(--border); font-size: 10px;
  font-weight: 600; letter-spacing: 3px; text-transform: uppercase;
  color: var(--ink3); margin-bottom: 16px;
}

/* ═══════════════════════════════════════════
   CONTACT PAGE
═══════════════════════════════════════════ */
.contact-split {
  display: grid; grid-template-columns: 1fr 1.1fr;
}
.contact-l {
  padding: 80px 5vw;
  background: var(--cream2);
  border-right: 1px solid var(--border2);
  display: flex; flex-direction: column; justify-content: center;
}
.contact-r { padding: 80px 5vw; }
.c-items { display: flex; flex-direction: column; gap: 32px; margin-top: 44px; }
.c-row .c-label { font-size: 9px; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; color: var(--ink3); margin-bottom: 5px; }
.c-row .c-val { font-size: 15px; font-weight: 400; color: var(--ink); }
.c-row .c-val a { color: var(--ink); transition: color 0.2s; }
.c-row .c-val a:hover { color: var(--rose); }
.form-head {
  font-family: 'Cormorant Garamond', serif;
  font-size: 32px; font-weight: 400; margin-bottom: 36px;
}
.fg { display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px; }
.fg label { font-size: 10px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--ink3); }
.fg input, .fg select, .fg textarea {
  padding: 13px 16px; border: 1px solid var(--border);
  font-family: 'DM Sans', sans-serif; font-size: 14px; color: var(--ink);
  background: var(--cream); outline: none; transition: border-color 0.2s;
  appearance: none;
}
.fg input:focus, .fg select:focus, .fg textarea:focus { border-color: var(--ink); }
.fg textarea { resize: vertical; min-height: 120px; }
.frow { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-send {
  width: 100%; padding: 15px;
  font-family: 'DM Sans', sans-serif; font-size: 10px;
  font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase;
  background: var(--ink); color: var(--white); border: none;
  transition: background 0.3s; margin-top: 4px;
}
.form-send:hover { background: var(--rose); }

/* ═══════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════ */
footer {
  background: var(--ink);
  padding: 72px 5vw 36px;
}
.footer-grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 56px;
  padding-bottom: 52px;
  border-bottom: 1px solid rgba(255,255,255,0.08);
  max-width: 1280px; margin: 0 auto;
}
.footer-logo-block { display: flex; flex-direction: column; gap: 0; }
.footer-logo-row { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
.footer-logo-svg { width: 30px; height: 30px; }
.footer-brand {
  font-family: 'Cormorant Garamond', serif;
  font-size: 20px; font-weight: 400; letter-spacing: 3px;
  text-transform: uppercase; color: var(--white);
}
.footer-slogan { font-size: 8px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.3); }
.footer-desc { font-size: 13px; color: rgba(255,255,255,0.35); line-height: 1.75; max-width: 260px; }
.footer-col h4 { font-size: 10px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 20px; }
.footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.footer-col ul li {
  font-size: 13px; color: rgba(255,255,255,0.35);
  cursor: none; transition: color 0.2s;
}
.footer-col ul li:hover { color: var(--white); }
.footer-bottom {
  max-width: 1280px; margin: 28px auto 0;
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 14px;
}
.footer-copy { font-size: 11px; color: rgba(255,255,255,0.2); }
.footer-socials { display: flex; gap: 20px; }
.footer-socials a { font-size: 11px; font-weight: 500; color: rgba(255,255,255,0.3); text-decoration: none; letter-spacing: 0.5px; transition: color 0.2s; }
.footer-socials a:hover { color: var(--rose-lt); }

/* ═══════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════ */
@media (max-width: 960px) {
  .nav-links { display: none; }
  .hamburger { display: flex; }
  .hero { grid-template-columns: 1fr; min-height: auto; }
  .hero-right { display: none; }
  .hero-left { padding: 60px 5vw; min-height: 90vh; }
  .hero-bg-letter { font-size: 60vw; }
  .feature-inner { grid-template-columns: 1fr; gap: 40px; }
  .prod-grid { grid-template-columns: 1fr 1fr; }
  .cat-grid { grid-template-columns: repeat(3,1fr); }
  .test-grid, .pkg-grid, .process-grid { grid-template-columns: 1fr 1fr; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 36px; }
  .about-split, .contact-split { grid-template-columns: 1fr; }
  .about-r { min-height: 280px; }
  .rent-grid { grid-template-columns: 1fr; }
  .frow { grid-template-columns: 1fr; }
  .sr-card { width: 280px; }
}
@media (max-width: 600px) {
  .prod-grid, .cat-grid, .test-grid, .pkg-grid, .process-grid { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; gap: 32px; }
  .hero-stats { flex-wrap: wrap; gap: 24px; }
  .hero-stat { border-right: none; padding-right: 0; margin-right: 0; }
  .sr-card { width: 240px; }
  .nav-cats { padding: 0 3vw; }
  .console-fab { font-size: 9px; padding: 12px 20px; }
}
</style>
</head>
<body>
<!-- PAGE LOADER -->
<div id="page-loader" aria-hidden="true">
  <svg class="loader-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
    <path id="loader-dot-path" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
    <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
  </svg>
</div>

<div id="cur-dot"></div>

<!-- ─── TOPBAR ─── -->
<div class="topbar" id="topbar">
  <p class="topbar-text">Free delivery &amp; setup in Colombo &amp; Dehiwala — <span>Call us: 077 886 5633</span></p>
  <button class="topbar-close" onclick="document.getElementById('topbar').style.display='none'">×</button>
</div>

<!-- ─── NAV ─── -->
<header class="nav-outer">
  <div class="nav-main">
    <div class="nav-logo" onclick="showPage('home')">
      <svg class="nav-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
        <path style="fill:#231F20" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
        <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
      </svg>
      <div class="nav-logo-text-block">
        <span class="nav-brand-name">Zetanova</span>
        <span class="nav-slogan">Moments to Memories</span>
      </div>
    </div>

    <ul class="nav-links">
      <li><a onclick="showPage('home')" id="nav-home" class="active">Home</a></li>
      <li><a onclick="showPage('products')" id="nav-products">Products</a></li>
      <li><a onclick="showPage('rentals')" id="nav-rentals">Rent</a></li>
      <li><a onclick="showPage('services')" id="nav-services">Services</a></li>
      <li><a onclick="showPage('about')" id="nav-about">About</a></li>
      <li><a onclick="showPage('contact')" id="nav-contact">Contact</a></li>
    </ul>

    <div class="nav-actions">
      <button class="nav-console-btn" onclick="window.open('party-console.html','_blank')">
        <span class="nav-console-dot"></span>
        Party Console
      </button>
      <button class="hamburger" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>

  <!-- Category nav -->
  <nav class="nav-cats" id="navCats">
    <div class="nav-cats-inner">
      <a class="nav-cat-item" href="/kids"><span class="nav-cat-icon">🎉</span> Kids' Parties</a>
      <a class="nav-cat-item" href="/birthdays"><span class="nav-cat-icon">🎂</span> Birthdays</a>
      <a class="nav-cat-item" href="/bouncy"><span class="nav-cat-icon">🏰</span> Bouncy Castles</a>
      <a class="nav-cat-item" href="/balloons"><span class="nav-cat-icon">🎈</span> Balloons</a>
      <a class="nav-cat-item" href="/sound"><span class="nav-cat-icon">🔊</span> Sound</a>
      <a class="nav-cat-item" href="/lighting"><span class="nav-cat-icon">✨</span> Lighting</a>
    </div>
  </nav>
</header>

<!-- ─── MOBILE MENU ─── -->
<div class="mob-menu" id="mobMenu">
  <button class="mob-close" onclick="toggleMenu()">×</button>
  <a onclick="showPage('home');toggleMenu()">Home</a>
  <a onclick="showPage('products');toggleMenu()">Products</a>
  <a onclick="showPage('rentals');toggleMenu()">Rent</a>
  <a onclick="showPage('services');toggleMenu()">Services</a>
  <a onclick="showPage('about');toggleMenu()">About</a>
  <a onclick="showPage('contact');toggleMenu()">Contact</a>
</div>

<!-- ═══════════════════════════════════════════
     HOME PAGE
═══════════════════════════════════════════ -->
<div id="page-home" class="page active">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-left">
      <div class="hero-bg-letter" aria-hidden="true">Z</div>

      <div class="hero-eyebrow">
        <span class="eyebrow eyebrow-rose">Sri Lanka's Premier Party Company</span>
      </div>

      <div class="hero-title">
        <h1 class="display d1">
          We make<br>
          <em>parties</em><br>
          extraordinary.
        </h1>
      </div>

      <div class="hero-body">
        <p>From intimate celebrations to grand events — Zetanova handles every detail so you can be completely present in the moment.</p>
        <p class="slogan">Moments to Memories</p>
      </div>

      <div class="hero-btns">
        <button class="btn btn-ink" onclick="showPage('services')">
          Explore Services
          <svg width="14" height="10" viewBox="0 0 14 10" fill="none"><path d="M9 1L13 5M13 5L9 9M13 5H1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
        </button>
        <button class="btn btn-outline" onclick="showPage('contact')">Plan My Event</button>
      </div>

      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hs-val">500+</div>
          <div class="hs-lbl">Events Delivered</div>
        </div>
        <div class="hero-stat">
          <div class="hs-val">8+</div>
          <div class="hs-lbl">Years of Experience</div>
        </div>
        <div class="hero-stat">
          <div class="hs-val">100%</div>
          <div class="hs-lbl">Happy Clients</div>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <!-- Elegant editorial right panel — matches Vivant quality -->
      <div style="display:flex;flex-direction:column;height:100%;padding:80px 5vw 80px 4vw;gap:0;justify-content:space-between;border-left:1px solid var(--border2);">

        <!-- Top: elegant line art SVG icons in a clean grid -->
        <div style="flex:1;display:flex;flex-direction:column;justify-content:flex-start;">
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:2px;flex:1;">

            <!-- Cell 1: Weddings -->
            <div style="padding:44px 36px;background:var(--cream2);border:1px solid var(--border2);display:flex;flex-direction:column;justify-content:space-between;min-height:240px;transition:background 0.3s;" onmouseover="this.style.background='var(--white)'" onmouseout="this.style.background='var(--cream2)'">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="16" r="8" stroke="#231F20" stroke-width="1"/>
                <path d="M8 36 C8 28 12 24 20 24 C28 24 32 28 32 36" stroke="#231F20" stroke-width="1" stroke-linecap="round"/>
                <path d="M14 12 C14 8 17 6 20 6 C23 6 26 8 26 12" stroke="#C9536A" stroke-width="1" stroke-linecap="round"/>
                <circle cx="20" cy="6" r="1.5" fill="#C9536A"/>
              </svg>
              <div>
                <div style="font-size:9px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--ink3);margin-bottom:8px;">Weddings</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:300;color:var(--ink);line-height:1;">Receptions &amp;<br>Ceremonies</div>
              </div>
            </div>

            <!-- Cell 2: Celebrations -->
            <div style="padding:44px 36px;background:var(--cream3);border:1px solid var(--border2);display:flex;flex-direction:column;justify-content:space-between;min-height:240px;transition:background 0.3s;" onmouseover="this.style.background='var(--white)'" onmouseout="this.style.background='var(--cream3)'">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="8" y="20" width="24" height="14" rx="1" stroke="#231F20" stroke-width="1"/>
                <rect x="12" y="14" width="16" height="8" rx="1" stroke="#231F20" stroke-width="1"/>
                <rect x="16" y="10" width="8" height="6" rx="1" stroke="#231F20" stroke-width="1"/>
                <line x1="20" y1="4" x2="20" y2="10" stroke="#C9536A" stroke-width="1" stroke-linecap="round"/>
                <circle cx="20" cy="3.5" r="2" fill="#C9536A"/>
                <line x1="12" y1="20" x2="12" y2="34" stroke="#231F20" stroke-width="0.75" stroke-dasharray="1.5 2"/>
                <line x1="20" y1="20" x2="20" y2="34" stroke="#231F20" stroke-width="0.75" stroke-dasharray="1.5 2"/>
                <line x1="28" y1="20" x2="28" y2="34" stroke="#231F20" stroke-width="0.75" stroke-dasharray="1.5 2"/>
              </svg>
              <div>
                <div style="font-size:9px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--ink3);margin-bottom:8px;">Birthdays</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:300;color:var(--ink);line-height:1;">Celebrations &amp;<br>Milestones</div>
              </div>
            </div>

            <!-- Cell 3: Styling -->
            <div style="padding:44px 36px;background:var(--sand-lt);border:1px solid var(--border2);display:flex;flex-direction:column;justify-content:space-between;min-height:240px;transition:background 0.3s;" onmouseover="this.style.background='var(--white)'" onmouseout="this.style.background='var(--sand-lt)'">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Balloon outline -->
                <ellipse cx="20" cy="16" rx="8" ry="10" stroke="#231F20" stroke-width="1"/>
                <path d="M20 26 L20 32" stroke="#231F20" stroke-width="1" stroke-linecap="round"/>
                <path d="M17 32 Q20 34 23 32" stroke="#231F20" stroke-width="1" stroke-linecap="round" fill="none"/>
                <!-- Shine -->
                <ellipse cx="17" cy="13" rx="2" ry="3" stroke="#C9536A" stroke-width="0.75" opacity="0.6"/>
              </svg>
              <div>
                <div style="font-size:9px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--ink3);margin-bottom:8px;">Décor</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:300;color:var(--ink);line-height:1;">Styling &amp;<br>Decoration</div>
              </div>
            </div>

            <!-- Cell 4: Corporate -->
            <div style="padding:44px 36px;background:var(--cream2);border:1px solid var(--border2);display:flex;flex-direction:column;justify-content:space-between;min-height:240px;transition:background 0.3s;" onmouseover="this.style.background='var(--white)'" onmouseout="this.style.background='var(--cream2)'">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Star/sparkle -->
                <path d="M20 4 L21.8 14 L32 12 L23 18 L28 28 L20 22 L12 28 L17 18 L8 12 L18.2 14 Z" stroke="#231F20" stroke-width="1" stroke-linejoin="round"/>
                <circle cx="20" cy="20" r="3" stroke="#C9536A" stroke-width="0.75"/>
              </svg>
              <div>
                <div style="font-size:9px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--ink3);margin-bottom:8px;">Corporate</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:300;color:var(--ink);line-height:1;">Events &amp;<br>Launches</div>
              </div>
            </div>

          </div>
        </div>

        <!-- Bottom: a clean stat or quote line -->
        <div style="padding-top:32px;border-top:1px solid var(--border2);display:flex;align-items:center;justify-content:space-between;gap:20px;">
          <p style="font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:300;font-style:italic;color:var(--ink3);line-height:1.6;max-width:260px;">"Crafting moments that become memories, one celebration at a time."</p>
          <button class="btn btn-ink" style="flex-shrink:0;font-size:10px;padding:12px 22px;" onclick="showPage('contact')">Plan Your Event</button>
        </div>

      </div>
    </div>
  </section>

  <!-- MARQUEE STRIP -->
  <div class="marquee-strip">
    <div class="marquee-track">
      <span class="mq-item"><span class="mq-dot"></span>Weddings &amp; Receptions</span>
      <span class="mq-item"><span class="mq-dot"></span>Birthday Celebrations</span>
      <span class="mq-item"><span class="mq-dot"></span>Corporate Events</span>
      <span class="mq-item"><span class="mq-dot"></span>Cocktail Evenings</span>
      <span class="mq-item"><span class="mq-dot"></span>Themed Parties</span>
      <span class="mq-item"><span class="mq-dot"></span>Kids' Celebrations</span>
      <span class="mq-item"><span class="mq-dot"></span>Baby Showers</span>
      <span class="mq-item"><span class="mq-dot"></span>Anniversary Dinners</span>
      <span class="mq-item"><span class="mq-dot"></span>Weddings &amp; Receptions</span>
      <span class="mq-item"><span class="mq-dot"></span>Birthday Celebrations</span>
      <span class="mq-item"><span class="mq-dot"></span>Corporate Events</span>
      <span class="mq-item"><span class="mq-dot"></span>Cocktail Evenings</span>
      <span class="mq-item"><span class="mq-dot"></span>Themed Parties</span>
      <span class="mq-item"><span class="mq-dot"></span>Kids' Celebrations</span>
      <span class="mq-item"><span class="mq-dot"></span>Baby Showers</span>
      <span class="mq-item"><span class="mq-dot"></span>Anniversary Dinners</span>
    </div>
  </div>

  <!-- CATEGORY ICONS (PartyDeco style) -->
  <section class="cat-section">
    <div class="wrap">
      <span class="eyebrow">Shop by Occasion</span>
      <div class="cat-grid">
        <div class="cat-item" onclick="showPage('services')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <path d="M18 6 C18 6 10 14 10 20 a8 8 0 0 0 16 0 C26 14 18 6 18 6z"/>
              <path d="M8 8 C12 12 14 16 14 20" stroke-dasharray="2 2"/>
              <path d="M28 8 C24 12 22 16 22 20" stroke-dasharray="2 2"/>
            </svg>
          </div>
          <span class="cat-label">Weddings</span>
        </div>
        <div class="cat-item" onclick="showPage('services')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <rect x="6" y="18" width="24" height="12" rx="1"/>
              <rect x="10" y="12" width="16" height="8" rx="1"/>
              <rect x="14" y="8" width="8" height="6" rx="1"/>
              <line x1="18" y1="4" x2="18" y2="8"/>
              <circle cx="18" cy="4" r="2" fill="currentColor"/>
            </svg>
          </div>
          <span class="cat-label">Birthdays</span>
        </div>
        <div class="cat-item" onclick="showPage('services')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <rect x="8" y="14" width="20" height="14" rx="1"/>
              <path d="M5 14 h26"/>
              <path d="M12 14 V10 a6 6 0 0 1 12 0 v4"/>
            </svg>
          </div>
          <span class="cat-label">Corporate</span>
        </div>
        <div class="cat-item" onclick="showPage('services')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <circle cx="18" cy="18" r="10"/>
              <path d="M18 8 L18 12 M18 24 L18 28 M8 18 L12 18 M24 18 L28 18"/>
              <path d="M11.5 11.5 L14.2 14.2 M21.8 21.8 L24.5 24.5"/>
              <circle cx="18" cy="18" r="3" fill="currentColor" opacity="0.3"/>
            </svg>
          </div>
          <span class="cat-label">Kids' Parties</span>
        </div>
        <div class="cat-item" onclick="showPage('services')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <path d="M10 26 L12 14 L18 20 L24 14 L26 26"/>
              <path d="M8 26 h20"/>
              <ellipse cx="18" cy="12" rx="4" ry="6"/>
              <path d="M14 8 Q18 4 22 8"/>
            </svg>
          </div>
          <span class="cat-label">Cocktail</span>
        </div>
        <div class="cat-item" onclick="showPage('products')">
          <div class="cat-icon">
            <svg viewBox="0 0 36 36" fill="none" stroke="currentColor" stroke-width="1.2">
              <circle cx="12" cy="16" r="6"/>
              <circle cx="24" cy="16" r="6"/>
              <circle cx="18" cy="10" r="6"/>
              <line x1="12" y1="22" x2="12" y2="30"/>
              <line x1="24" y1="22" x2="24" y2="30"/>
              <line x1="18" y1="16" x2="18" y2="30"/>
            </svg>
          </div>
          <span class="cat-label">Balloons</span>
        </div>
      </div>
    </div>
  </section>

  <!-- HORIZONTAL SCROLL REVEAL — Services / Events (Folat style) -->
  <section class="scroll-reveal-section">
    <div class="sr-header">
      <div class="sr-header-left">
        <span class="eyebrow" style="display:block;margin-bottom:14px;">Our Services</span>
        <h2 class="display d2">Every occasion,<br><em style="font-style:italic;color:var(--rose)">beautifully done.</em></h2>
      </div>
      <div class="sr-controls">
        <button class="sr-btn" id="srPrev" onclick="slideTrack(-1)">←</button>
        <button class="sr-btn" id="srNext" onclick="slideTrack(1)">→</button>
      </div>
    </div>
    <div class="sr-track-wrap">
      <div class="sr-track" id="srTrack">

        <!-- CARD 1: Weddings -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--cream2);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Arch structure -->
              <path d="M100 380 L100 200 Q100 120 170 120 Q240 120 240 200 L240 380" stroke="#231F20" stroke-width="1.2" fill="none"/>
              <!-- Inner arch -->
              <path d="M120 380 L120 210 Q120 145 170 145 Q220 145 220 210 L220 380" stroke="rgba(35,31,32,0.15)" stroke-width="1" fill="none"/>
              <!-- Floral sprigs left -->
              <circle cx="90" cy="190" r="5" fill="#C9536A" opacity="0.6"/>
              <circle cx="78" cy="200" r="3.5" fill="#C9536A" opacity="0.4"/>
              <circle cx="82" cy="175" r="4" fill="#C9536A" opacity="0.5"/>
              <line x1="90" y1="195" x2="72" y2="215" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <line x1="82" y1="180" x2="68" y2="200" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <line x1="78" y1="205" x2="60" y2="220" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <!-- Floral sprigs right -->
              <circle cx="250" cy="190" r="5" fill="#C9536A" opacity="0.6"/>
              <circle cx="262" cy="200" r="3.5" fill="#C9536A" opacity="0.4"/>
              <circle cx="258" cy="175" r="4" fill="#C9536A" opacity="0.5"/>
              <line x1="250" y1="195" x2="268" y2="215" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <line x1="258" y1="180" x2="272" y2="200" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <line x1="262" y1="205" x2="280" y2="220" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <!-- Top floral crown -->
              <circle cx="170" cy="108" r="6" fill="#C9536A" opacity="0.7"/>
              <circle cx="155" cy="113" r="4" fill="#C9536A" opacity="0.45"/>
              <circle cx="185" cy="113" r="4" fill="#C9536A" opacity="0.45"/>
              <circle cx="145" cy="122" r="3" fill="#C9536A" opacity="0.3"/>
              <circle cx="195" cy="122" r="3" fill="#C9536A" opacity="0.3"/>
              <line x1="170" y1="114" x2="145" y2="132" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <line x1="170" y1="114" x2="195" y2="132" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <!-- Two figure silhouettes -->
              <ellipse cx="152" cy="268" rx="10" ry="12" fill="rgba(35,31,32,0.08)"/>
              <line x1="152" y1="280" x2="152" y2="340" stroke="rgba(35,31,32,0.12)" stroke-width="1"/>
              <ellipse cx="188" cy="268" rx="10" ry="12" fill="rgba(35,31,32,0.08)"/>
              <line x1="188" y1="280" x2="188" y2="340" stroke="rgba(35,31,32,0.12)" stroke-width="1"/>
              <!-- Ground line -->
              <line x1="60" y1="380" x2="280" y2="380" stroke="rgba(35,31,32,0.1)" stroke-width="1"/>
              <!-- Dot motif top right -->
              <circle cx="290" cy="60" r="18" stroke="rgba(201,83,106,0.12)" stroke-width="1" fill="none"/>
              <circle cx="290" cy="60" r="10" stroke="rgba(201,83,106,0.2)" stroke-width="1" fill="none"/>
              <circle cx="290" cy="60" r="3" fill="#C9536A" opacity="0.4"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Full Service</div>
            <div class="sr-card-name">Weddings &amp; Receptions</div>
            <div class="sr-card-desc">Floral arrangements, lighting, furniture, and end-to-end coordination for your most important day.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

        <!-- CARD 2: Birthdays -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--sand-lt);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Tiered cake — clean architectural line art -->
              <!-- Tier 3 (top) -->
              <rect x="140" y="175" width="60" height="40" rx="2" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <ellipse cx="170" cy="175" rx="30" ry="7" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.04)"/>
              <!-- Tier 2 (mid) -->
              <rect x="120" y="215" width="100" height="48" rx="2" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <ellipse cx="170" cy="215" rx="50" ry="9" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.04)"/>
              <!-- Tier 1 (base) -->
              <rect x="100" y="263" width="140" height="56" rx="2" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <ellipse cx="170" cy="263" rx="70" ry="11" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.04)"/>
              <!-- Plate -->
              <ellipse cx="170" cy="319" rx="80" ry="8" stroke="rgba(35,31,32,0.2)" stroke-width="1" fill="rgba(35,31,32,0.03)"/>
              <!-- Candles — 3 on top -->
              <rect x="152" y="152" width="5" height="22" rx="2" stroke="#231F20" stroke-width="1" fill="rgba(201,83,106,0.15)"/>
              <rect x="168" y="148" width="5" height="26" rx="2" stroke="#231F20" stroke-width="1" fill="rgba(201,83,106,0.15)"/>
              <rect x="184" y="152" width="5" height="22" rx="2" stroke="#231F20" stroke-width="1" fill="rgba(201,83,106,0.15)"/>
              <!-- Flames -->
              <ellipse cx="154.5" cy="150" rx="3" ry="4" fill="#C9536A" opacity="0.7"/>
              <ellipse cx="170.5" cy="146" rx="3" ry="4" fill="#C9536A" opacity="0.7"/>
              <ellipse cx="186.5" cy="150" rx="3" ry="4" fill="#C9536A" opacity="0.7"/>
              <!-- Ribbon detail on tiers -->
              <line x1="100" y1="291" x2="240" y2="291" stroke="rgba(201,83,106,0.25)" stroke-width="1"/>
              <line x1="120" y1="239" x2="220" y2="239" stroke="rgba(201,83,106,0.25)" stroke-width="1"/>
              <!-- Decorative dots -->
              <circle cx="50" cy="100" r="20" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="50" cy="100" r="12" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="300" cy="370" r="24" stroke="rgba(201,83,106,0.08)" stroke-width="1" fill="none"/>
              <circle cx="300" cy="370" r="14" stroke="rgba(201,83,106,0.12)" stroke-width="1" fill="none"/>
              <circle cx="300" cy="370" r="4" fill="#C9536A" opacity="0.2"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Celebrations</div>
            <div class="sr-card-name">Birthday Parties</div>
            <div class="sr-card-desc">Themed setups, balloon installations, cake tables, and décor that makes every birthday unforgettable.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

        <!-- CARD 3: Corporate -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--cream3);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Abstract geometric composition — clean, professional -->
              <!-- Large circle outline -->
              <circle cx="170" cy="200" r="110" stroke="rgba(35,31,32,0.08)" stroke-width="1" fill="none"/>
              <circle cx="170" cy="200" r="80" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <!-- Central diamond / award shape -->
              <path d="M170 110 L220 200 L170 290 L120 200 Z" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <!-- Inner diamond -->
              <path d="M170 145 L200 200 L170 255 L140 200 Z" stroke="rgba(35,31,32,0.25)" stroke-width="1" fill="rgba(201,83,106,0.05)"/>
              <!-- Centre dot -->
              <circle cx="170" cy="200" r="8" stroke="#C9536A" stroke-width="1" fill="rgba(201,83,106,0.1)"/>
              <circle cx="170" cy="200" r="3" fill="#C9536A" opacity="0.6"/>
              <!-- Radiating lines -->
              <line x1="170" y1="90" x2="170" y2="110" stroke="rgba(35,31,32,0.15)" stroke-width="1"/>
              <line x1="170" y1="290" x2="170" y2="310" stroke="rgba(35,31,32,0.15)" stroke-width="1"/>
              <line x1="60" y1="200" x2="120" y2="200" stroke="rgba(35,31,32,0.15)" stroke-width="1"/>
              <line x1="220" y1="200" x2="280" y2="200" stroke="rgba(35,31,32,0.15)" stroke-width="1"/>
              <!-- Stars at cardinal points -->
              <circle cx="170" cy="85" r="4" fill="rgba(35,31,32,0.15)"/>
              <circle cx="170" cy="315" r="4" fill="rgba(35,31,32,0.15)"/>
              <circle cx="55" cy="200" r="4" fill="rgba(35,31,32,0.15)"/>
              <circle cx="285" cy="200" r="4" fill="rgba(35,31,32,0.15)"/>
              <!-- Corner flourishes -->
              <path d="M40 40 Q60 40 60 60" stroke="rgba(201,83,106,0.2)" stroke-width="1" fill="none"/>
              <path d="M300 40 Q280 40 280 60" stroke="rgba(201,83,106,0.2)" stroke-width="1" fill="none"/>
              <path d="M40 380 Q60 380 60 360" stroke="rgba(201,83,106,0.2)" stroke-width="1" fill="none"/>
              <path d="M300 380 Q280 380 280 360" stroke="rgba(201,83,106,0.2)" stroke-width="1" fill="none"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Professional</div>
            <div class="sr-card-name">Corporate Events</div>
            <div class="sr-card-desc">Product launches, award nights, and conferences styled with precision and brand-perfect execution.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

        <!-- CARD 4: Cocktail -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--cream2);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Martini / coupe glass — elegant line art -->
              <!-- Glass bowl (V shape, wide) -->
              <path d="M100 140 L170 270 L240 140 Z" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <!-- Liquid fill line -->
              <path d="M116 172 Q170 175 224 172" stroke="rgba(201,83,106,0.3)" stroke-width="1" fill="none"/>
              <!-- Stem -->
              <line x1="170" y1="270" x2="170" y2="340" stroke="#231F20" stroke-width="1.2" stroke-linecap="round"/>
              <!-- Base -->
              <path d="M130 340 Q170 348 210 340" stroke="#231F20" stroke-width="1.2" stroke-linecap="round" fill="none"/>
              <!-- Olive on pick -->
              <line x1="195" y1="155" x2="215" y2="145" stroke="#7A9E87" stroke-width="1.2" stroke-linecap="round"/>
              <circle cx="215" cy="143" r="5" stroke="#7A9E87" stroke-width="1" fill="rgba(122,158,135,0.2)"/>
              <!-- Rim garnish dots -->
              <circle cx="100" cy="140" r="3" fill="rgba(201,83,106,0.3)"/>
              <circle cx="240" cy="140" r="3" fill="rgba(201,83,106,0.3)"/>
              <!-- Bubbles -->
              <circle cx="145" cy="210" r="4" stroke="rgba(35,31,32,0.12)" stroke-width="1" fill="none"/>
              <circle cx="162" cy="230" r="3" stroke="rgba(35,31,32,0.1)" stroke-width="1" fill="none"/>
              <circle cx="155" cy="250" r="2.5" stroke="rgba(35,31,32,0.08)" stroke-width="1" fill="none"/>
              <!-- Decorative ring motif -->
              <circle cx="60" cy="360" r="30" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="60" cy="360" r="18" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="280" cy="80" r="25" stroke="rgba(201,83,106,0.1)" stroke-width="1" fill="none"/>
              <circle cx="280" cy="80" r="15" stroke="rgba(201,83,106,0.12)" stroke-width="1" fill="none"/>
              <circle cx="280" cy="80" r="4" fill="#C9536A" opacity="0.25"/>
              <!-- Confetti scatter -->
              <rect x="60" y="100" width="6" height="1.5" rx="1" fill="rgba(201,83,106,0.2)" transform="rotate(-30 60 100)"/>
              <rect x="270" y="300" width="6" height="1.5" rx="1" fill="rgba(201,83,106,0.2)" transform="rotate(20 270 300)"/>
              <rect x="80" y="320" width="5" height="1.5" rx="1" fill="rgba(122,158,135,0.3)" transform="rotate(45 80 320)"/>
              <rect x="280" y="180" width="5" height="1.5" rx="1" fill="rgba(122,158,135,0.3)" transform="rotate(-15 280 180)"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Evening Events</div>
            <div class="sr-card-name">Cocktail Evenings</div>
            <div class="sr-card-desc">Elegant bar styling, ambient lighting, and sophisticated décor for your most stylish gatherings.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

        <!-- CARD 5: Themed Parties -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--sand-lt);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Abstract theatrical mask / drama composition -->
              <!-- Large mask outline -->
              <path d="M100 180 Q100 120 170 110 Q240 120 240 180 Q240 240 200 260 Q190 270 180 265 L170 280 L160 265 Q150 270 140 260 Q100 240 100 180 Z" stroke="#231F20" stroke-width="1.2" fill="rgba(35,31,32,0.03)"/>
              <!-- Eyes -->
              <ellipse cx="145" cy="175" rx="14" ry="10" stroke="#231F20" stroke-width="1" fill="rgba(35,31,32,0.05)"/>
              <ellipse cx="195" cy="175" rx="14" ry="10" stroke="#231F20" stroke-width="1" fill="rgba(35,31,32,0.05)"/>
              <circle cx="145" cy="175" r="5" fill="rgba(35,31,32,0.1)"/>
              <circle cx="195" cy="175" r="5" fill="rgba(35,31,32,0.1)"/>
              <!-- Smile -->
              <path d="M148 210 Q170 225 192 210" stroke="#231F20" stroke-width="1" fill="none" stroke-linecap="round"/>
              <!-- Floral accents on mask -->
              <circle cx="108" cy="165" r="5" fill="#C9536A" opacity="0.5"/>
              <circle cx="100" cy="155" r="3.5" fill="#C9536A" opacity="0.35"/>
              <line x1="108" y1="170" x2="95" y2="182" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <circle cx="232" cy="165" r="5" fill="#C9536A" opacity="0.5"/>
              <circle cx="240" cy="155" r="3.5" fill="#C9536A" opacity="0.35"/>
              <line x1="232" y1="170" x2="245" y2="182" stroke="#7A9E87" stroke-width="1" stroke-linecap="round"/>
              <!-- Stars scattered -->
              <path d="M60 80 L62 88 L70 88 L64 93 L66 101 L60 96 L54 101 L56 93 L50 88 L58 88 Z" stroke="rgba(35,31,32,0.12)" stroke-width="1" fill="rgba(35,31,32,0.04)"/>
              <path d="M270 320 L272 328 L280 328 L274 333 L276 341 L270 336 L264 341 L266 333 L260 328 L268 328 Z" stroke="rgba(201,83,106,0.15)" stroke-width="1" fill="rgba(201,83,106,0.05)"/>
              <!-- Confetti lines -->
              <line x1="50" y1="280" x2="58" y2="295" stroke="rgba(201,83,106,0.2)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="280" y1="120" x2="290" y2="108" stroke="rgba(122,158,135,0.25)" stroke-width="1.5" stroke-linecap="round"/>
              <line x1="55" y1="350" x2="65" y2="340" stroke="rgba(201,83,106,0.2)" stroke-width="1.5" stroke-linecap="round"/>
              <!-- Bottom ring motif -->
              <circle cx="170" cy="360" r="22" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="170" cy="360" r="12" stroke="rgba(35,31,32,0.08)" stroke-width="1" fill="none"/>
              <circle cx="170" cy="360" r="4" fill="rgba(201,83,106,0.2)"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Creative</div>
            <div class="sr-card-name">Themed Parties</div>
            <div class="sr-card-desc">Hollywood, Tropical, Disco, or fully custom — we bring any concept to life in complete detail.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

        <!-- CARD 6: Kids -->
        <div class="sr-card" onclick="showPage('contact')">
          <div class="sr-card-img" style="background:var(--cream2);">
            <svg width="100%" height="100%" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute;inset:0;">
              <!-- Balloon cluster — elegant outlines, no fill blobs -->
              <!-- Balloon 1 (left) -->
              <ellipse cx="135" cy="185" rx="32" ry="40" stroke="#231F20" stroke-width="1.2" fill="rgba(201,83,106,0.07)"/>
              <ellipse cx="128" cy="175" rx="8" ry="12" stroke="rgba(255,255,255,0.5)" stroke-width="0.75" fill="none"/>
              <line x1="135" y1="225" x2="140" y2="290" stroke="#231F20" stroke-width="1" stroke-linecap="round"/>
              <!-- Balloon 2 (centre, tallest) -->
              <ellipse cx="170" cy="170" rx="35" ry="45" stroke="#231F20" stroke-width="1.2" fill="rgba(122,158,135,0.08)"/>
              <ellipse cx="162" cy="158" rx="9" ry="14" stroke="rgba(255,255,255,0.5)" stroke-width="0.75" fill="none"/>
              <line x1="170" y1="215" x2="170" y2="290" stroke="#231F20" stroke-width="1" stroke-linecap="round"/>
              <!-- Balloon 3 (right) -->
              <ellipse cx="207" cy="185" rx="32" ry="40" stroke="#231F20" stroke-width="1.2" fill="rgba(212,197,169,0.2)"/>
              <ellipse cx="200" cy="175" rx="8" ry="12" stroke="rgba(255,255,255,0.5)" stroke-width="0.75" fill="none"/>
              <line x1="207" y1="225" x2="200" y2="290" stroke="#231F20" stroke-width="1" stroke-linecap="round"/>
              <!-- Knot dots -->
              <circle cx="135" cy="225" r="2.5" fill="rgba(35,31,32,0.2)"/>
              <circle cx="170" cy="215" r="2.5" fill="rgba(35,31,32,0.2)"/>
              <circle cx="207" cy="225" r="2.5" fill="rgba(35,31,32,0.2)"/>
              <!-- Strings tied at hand -->
              <path d="M140 290 Q155 295 170 290 Q185 295 200 290" stroke="#231F20" stroke-width="1" fill="none" stroke-linecap="round"/>
              <!-- Rose accent dots -->
              <circle cx="135" cy="145" r="3" fill="#C9536A" opacity="0.4"/>
              <circle cx="170" cy="125" r="3" fill="#C9536A" opacity="0.4"/>
              <circle cx="207" cy="145" r="3" fill="#C9536A" opacity="0.4"/>
              <!-- Confetti at bottom -->
              <rect x="85" y="340" width="8" height="2" rx="1" fill="rgba(201,83,106,0.25)" transform="rotate(-20 85 340)"/>
              <rect x="230" y="355" width="8" height="2" rx="1" fill="rgba(122,158,135,0.3)" transform="rotate(15 230 355)"/>
              <rect x="110" y="360" width="6" height="2" rx="1" fill="rgba(212,197,169,0.4)" transform="rotate(35 110 360)"/>
              <rect x="205" y="330" width="6" height="2" rx="1" fill="rgba(201,83,106,0.2)" transform="rotate(-40 205 330)"/>
              <!-- Ring motif -->
              <circle cx="60" cy="80" r="22" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
              <circle cx="60" cy="80" r="12" stroke="rgba(201,83,106,0.1)" stroke-width="1" fill="none"/>
              <circle cx="60" cy="80" r="3" fill="rgba(201,83,106,0.2)"/>
              <circle cx="280" cy="350" r="18" stroke="rgba(35,31,32,0.06)" stroke-width="1" fill="none"/>
            </svg>
          </div>
          <div class="sr-card-body">
            <div class="sr-card-cat">Children</div>
            <div class="sr-card-name">Kids' Celebrations</div>
            <div class="sr-card-desc">Bouncy castles, themed kits, balloon arches, and setups that make little ones feel like royalty.</div>
          </div>
          <div class="sr-card-hover">
            <span class="sr-hover-text">Enquire Now</span>
            <span class="sr-hover-arrow">→</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FEATURE STRIP (Vivant editorial dark) -->
  <section class="feature-strip">
    <div class="feature-inner">
      <div class="feature-text">
        <div class="eyebrow feature-eyebrow" style="margin-bottom:24px;">Why Zetanova</div>
        <h2 class="feature-title">Your event,<br><em>handled entirely.</em></h2>
        <p class="feature-body">We're not just a supplier — we're your complete event partner from the first conversation to the final farewell. Dehiwala-based, island-wide reach.</p>
        <button class="btn btn-rose" onclick="showPage('services')">
          View Packages
          <svg width="14" height="10" viewBox="0 0 14 10" fill="none"><path d="M9 1L13 5M13 5L9 9M13 5H1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
        </button>
      </div>
      <div>
        <div class="feature-items">
          <div class="feature-item">
            <span class="fi-num">01</span>
            <div>
              <div class="fi-title">Bespoke Design</div>
              <div class="fi-body">Every setup is custom-designed to your brief — no two events ever look alike.</div>
            </div>
          </div>
          <div class="feature-item">
            <span class="fi-num">02</span>
            <div>
              <div class="fi-title">Delivery &amp; Setup</div>
              <div class="fi-body">We arrive, install everything, and return to collect — you simply enjoy the occasion.</div>
            </div>
          </div>
          <div class="feature-item">
            <span class="fi-num">03</span>
            <div>
              <div class="fi-title">Island-wide Service</div>
              <div class="fi-body">Based in Dehiwala, we serve Colombo, Kandy, Galle, and everywhere in between.</div>
            </div>
          </div>
          <div class="feature-item">
            <span class="fi-num">04</span>
            <div>
              <div class="fi-title">Dedicated Coordinator</div>
              <div class="fi-body">A single point of contact who knows your event as well as you do, from start to finish.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <div class="wrap">
      <span class="eyebrow" style="display:block;margin-bottom:14px;">Client Stories</span>
      <h2 class="display d3" style="max-width:500px;">What our clients<br>are saying.</h2>
      <div class="test-grid">
        <div class="test-card">
          <span class="test-mark">"</span>
          <div class="test-stars">★★★★★</div>
          <p class="test-q">"Zetanova turned our daughter's birthday into something truly magical. Every single detail was perfect — we didn't stress about a single thing."</p>
          <div class="test-by">Dilani &amp; Pradeep</div>
          <div class="test-evt">Kids' Birthday · Colombo</div>
        </div>
        <div class="test-card">
          <span class="test-mark">"</span>
          <div class="test-stars">★★★★★</div>
          <p class="test-q">"Our product launch was absolutely flawless. The décor elevated our brand and every guest was impressed. We'll use them for every event from here on."</p>
          <div class="test-by">Sanjeewa R.</div>
          <div class="test-evt">Corporate Launch · Dehiwala</div>
        </div>
        <div class="test-card">
          <span class="test-mark">"</span>
          <div class="test-stars">★★★★★</div>
          <p class="test-q">"From the first call to the final balloon, the Zetanova team was warm, professional, and deeply passionate. Our wedding was a dream come true."</p>
          <div class="test-by">Nadeesha &amp; Kasun</div>
          <div class="test-evt">Wedding Reception · Kandy</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS STEPS -->
  <section class="process-section">
    <div class="wrap">
      <span class="eyebrow" style="display:block;margin-bottom:14px;">How It Works</span>
      <h2 class="display d3">From idea<br>to <em style="color:var(--rose);font-style:italic;">applause.</em></h2>
      <div class="process-grid">
        <div class="proc-card">
          <span class="proc-num">01</span>
          <div class="proc-icon">☕</div>
          <div class="proc-title">Consultation</div>
          <div class="proc-desc">We learn your vision, guest count, venue, budget, and the atmosphere you want to create.</div>
        </div>
        <div class="proc-card">
          <span class="proc-num">02</span>
          <div class="proc-icon">🎨</div>
          <div class="proc-title">Concept Design</div>
          <div class="proc-desc">A custom mood board, layout plan, and complete proposal — tailored entirely to you.</div>
        </div>
        <div class="proc-card">
          <span class="proc-num">03</span>
          <div class="proc-icon">🛠</div>
          <div class="proc-title">Setup &amp; Execution</div>
          <div class="proc-desc">We arrive early, build everything with precision, and run operations throughout your event.</div>
        </div>
        <div class="proc-card">
          <span class="proc-num">04</span>
          <div class="proc-icon">✦</div>
          <div class="proc-title">Wrap Up</div>
          <div class="proc-desc">We pack everything down, leaving you with nothing but the best memories of the occasion.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- BIG CTA -->
  <div class="big-cta">
    <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Ready to Begin?</span>
    <h2 class="bc-title">Let's create your most<br><em>unforgettable event.</em></h2>
    <p class="bc-sub">Tell us what you're celebrating — we'll handle every detail with care and craft.</p>
    <div class="bc-btns">
      <button class="btn btn-ink" onclick="showPage('contact')">
        Plan My Event
        <svg width="14" height="10" viewBox="0 0 14 10" fill="none"><path d="M9 1L13 5M13 5L9 9M13 5H1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </button>
      <a class="btn btn-ghost" href="/party-console" target="_blank">Try Party Console ✦</a>
    </div>
  </div>

</div><!-- /home -->

<!-- ═══════════════════════════════════════════
     PRODUCTS PAGE
═══════════════════════════════════════════ -->
<div id="page-products" class="page">
  <div class="page-banner">
    <div class="pb-bg"></div>
    <div class="pb-inner">
      <div class="pb-eyebrow"><span class="eyebrow">Our Collection</span></div>
      <h1 class="pb-title">Party Products</h1>
      <p class="pb-desc">Everything you need to make your celebration look and feel extraordinary — curated with care and available island-wide.</p>
    </div>
  </div>

  <section class="products-section">
    <div class="wrap">
      <div class="filter-tabs" id="prod-filter-tabs" style="margin-bottom:52px;">
        <button class="f-tab active" data-filter="All">All Items</button>
        <button class="f-tab" data-filter="Plinths">Plinths</button>
        <button class="f-tab" data-filter="Backdrops">Backdrops</button>
        <button class="f-tab" data-filter="Accessories">Accessories</button>
        <button class="f-tab" data-filter="Other">Other</button>
      </div>
      <div class="prod-grid" id="dynamic-prod-grid">
        <!-- Products will be loaded here dynamically -->
      </div>
    </div>
  </section>

  <div class="big-cta">
    <h2 class="bc-title" style="font-size:clamp(36px,4vw,60px);">Can't find what you need?<br><em>Let's create it.</em></h2>
    <p class="bc-sub">We source and create custom items for any brief.</p>
    <div class="bc-btns"><button class="btn btn-ink" onclick="showPage('contact')">Get in Touch →</button></div>
  </div>
</div><!-- /products -->

<!-- ═══════════════════════════════════════════
     RENTALS PAGE
═══════════════════════════════════════════ -->
<div id="page-rentals" class="page">
  <div class="page-banner">
    <div class="pb-bg"></div>
    <div class="pb-inner">
      <div class="pb-eyebrow"><span class="eyebrow">Equipment Rental</span></div>
      <h1 class="pb-title">Rent.<br><em style="color:var(--rose)">Celebrate.</em><br>Return.</h1>
      <p class="pb-desc">Premium equipment delivered, set up, and collected. All you need to do is enjoy your event.</p>
    </div>
  </div>

  <section style="padding:80px 5vw;background:var(--cream);">
    <div class="wrap">
      <div class="rent-grid">
        <div class="rent-card"><div class="rent-icon-col">⛺</div><div class="rent-body"><div class="rent-cat">Outdoor</div><div class="rent-name">Marquee Tents</div><div class="rent-desc">Waterproof marquees in 10×10, 10×20, and 20×20 ft. Perfect for garden parties and outdoor weddings.</div><div class="rent-price">From LKR 15,000 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">💡</div><div class="rent-body"><div class="rent-cat">Lighting</div><div class="rent-name">DJ &amp; Mood Lighting</div><div class="rent-desc">LED par cans, moving heads, uplighting sets, and full DJ booth packages for any atmosphere.</div><div class="rent-price">From LKR 8,000 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🏰</div><div class="rent-body"><div class="rent-cat">Kids</div><div class="rent-name">Bouncy Castle — Classic</div><div class="rent-desc">Standard 10×10ft inflatable, safety-inspected, ideal for garden parties and kids' celebrations.</div><div class="rent-price">From LKR 8,500 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🏯</div><div class="rent-body"><div class="rent-cat">Kids</div><div class="rent-name">Bouncy Castle — Princess</div><div class="rent-desc">Pink princess castle 12×12ft — a guaranteed crowd favourite at any kids' birthday party.</div><div class="rent-price">From LKR 9,500 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">⚔️</div><div class="rent-body"><div class="rent-cat">Kids</div><div class="rent-name">Bouncy Castle — Adventure</div><div class="rent-desc">Full obstacle course castle 15×15ft — perfect for active kids who love a challenge.</div><div class="rent-price">From LKR 11,000 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🌊</div><div class="rent-body"><div class="rent-cat">Kids</div><div class="rent-name">Bouncy Castle — Splash</div><div class="rent-desc">Water slide combo castle — the ultimate outdoor summer birthday experience.</div><div class="rent-price">From LKR 13,000 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🔊</div><div class="rent-body"><div class="rent-cat">Audio</div><div class="rent-name">JBL EON615 Speaker</div><div class="rent-desc">1000W powered PA speaker, crystal-clear sound for any indoor or outdoor event.</div><div class="rent-price">From LKR 4,500 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🎵</div><div class="rent-body"><div class="rent-cat">Audio</div><div class="rent-name">JBL PRX915 Speaker</div><div class="rent-desc">1500W premium speaker with DSP — professional-grade audio for larger events.</div><div class="rent-price">From LKR 6,000 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🎙️</div><div class="rent-body"><div class="rent-cat">Audio</div><div class="rent-name">JBL PartyBox 310</div><div class="rent-desc">Portable party speaker with built-in light show — perfect for smaller celebrations.</div><div class="rent-price">From LKR 3,500 <small>/ day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🪑</div><div class="rent-body"><div class="rent-cat">Furniture</div><div class="rent-name">Tiffany Chair — Gold</div><div class="rent-desc">Premium gold resin Tiffany chairs, available in multiples up to 50 pieces.</div><div class="rent-price">From LKR 150 <small>/ chair / day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🪑</div><div class="rent-body"><div class="rent-cat">Furniture</div><div class="rent-name">Tiffany Chair — White</div><div class="rent-desc">Classic white resin Tiffany chairs — timeless elegance for any occasion.</div><div class="rent-price">From LKR 150 <small>/ chair / day</small></div></div></div>
        <div class="rent-card"><div class="rent-icon-col">🪞</div><div class="rent-body"><div class="rent-cat">Photo</div><div class="rent-name">Mirror Photo Booth</div><div class="rent-desc">Interactive selfie mirror with animated prompts, digital signatures, and instant printing.</div><div class="rent-price">From LKR 20,000 <small>/ event</small></div></div></div>
      </div>
    </div>
  </section>

  <div class="del-band">
    <span class="eyebrow" style="display:block;text-align:center;margin-bottom:16px;">Included with every rental</span>
    <h3 class="display d4" style="text-align:center;margin-bottom:12px;">Delivery, setup &amp; collection — always included.</h3>
    <p class="body-sm" style="text-align:center;max-width:480px;margin:0 auto 32px;">Colombo, Dehiwala, Kandy and surrounding areas. Custom delivery quotes available island-wide.</p>
    <div style="text-align:center;"><button class="btn btn-ink" onclick="showPage('contact')">Request a Quote →</button></div>
  </div>
</div><!-- /rentals -->

<!-- ═══════════════════════════════════════════
     SERVICES PAGE
═══════════════════════════════════════════ -->
<div id="page-services" class="page">
  <div class="page-banner">
    <div class="pb-bg"></div>
    <div class="pb-inner">
      <div class="pb-eyebrow"><span class="eyebrow">Full-Service Events</span></div>
      <h1 class="pb-title">Every detail.<br><em style="color:var(--rose);font-style:italic;">Covered.</em></h1>
      <p class="pb-desc">Tell us your vision — we handle the logistics, the styling, the mood, and every detail that makes the difference.</p>
    </div>
  </div>

  <!-- Process -->
  <section class="process-section">
    <div class="wrap">
      <span class="eyebrow" style="display:block;margin-bottom:14px;">How We Work</span>
      <div class="process-grid">
        <div class="proc-card"><span class="proc-num">01</span><div class="proc-icon">☕</div><div class="proc-title">Consultation</div><div class="proc-desc">We understand your vision, guest count, budget, and the atmosphere you want to create.</div></div>
        <div class="proc-card"><span class="proc-num">02</span><div class="proc-icon">🎨</div><div class="proc-title">Concept Design</div><div class="proc-desc">Custom mood board, layout plan, and a detailed proposal — tailored entirely to you.</div></div>
        <div class="proc-card"><span class="proc-num">03</span><div class="proc-icon">🛠</div><div class="proc-title">Setup &amp; Execution</div><div class="proc-desc">We arrive early, build everything with precision, and run operations throughout.</div></div>
        <div class="proc-card"><span class="proc-num">04</span><div class="proc-icon">✦</div><div class="proc-title">Wrap Up</div><div class="proc-desc">We clear everything away — you leave with nothing but incredible memories.</div></div>
      </div>
    </div>
  </section>

  <!-- Packages -->
  <section style="padding:80px 5vw;background:var(--cream);">
    <div class="wrap">
      <span class="eyebrow" style="display:block;margin-bottom:14px;">Packages</span>
      <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:24px;margin-bottom:0;">
        <h2 class="display d3">Choose your<br><em style="color:var(--rose);font-style:italic;">celebration level.</em></h2>
        <p class="body-md" style="max-width:340px;">Every package includes delivery, setup, and a dedicated event coordinator.</p>
      </div>
      <div class="pkg-grid">
        <div class="pkg-card">
          <span class="pkg-eyebrow" style="color:var(--sage);">Essentials</span>
          <div class="pkg-name">Starter</div>
          <div class="pkg-sub">Perfect for intimate gatherings</div>
          <div class="pkg-price"><sup>LKR</sup> 25,000</div>
          <ul class="pkg-list">
            <li>Up to 50 guests</li>
            <li>Basic décor &amp; balloons</li>
            <li>Table setup &amp; linen</li>
            <li>2-hour setup slot</li>
            <li>1 event coordinator</li>
          </ul>
          <button class="pkg-btn pkg-btn-dark" onclick="showPage('contact')">Book Essentials</button>
        </div>
        <div class="pkg-card featured">
          <span class="pkg-eyebrow" style="color:var(--rose-lt);">Most Popular</span>
          <div class="pkg-name" style="color:var(--white);">Signature</div>
          <div class="pkg-sub">Our most-loved package</div>
          <div class="pkg-price"><sup>LKR</sup> 65,000</div>
          <ul class="pkg-list">
            <li>Up to 150 guests</li>
            <li>Full décor &amp; floral setup</li>
            <li>Lighting rig included</li>
            <li>Photo backdrop</li>
            <li>Sound system</li>
            <li>Dedicated event team</li>
            <li>Supplier coordination</li>
          </ul>
          <button class="pkg-btn pkg-btn-light" onclick="showPage('contact')">Book Signature</button>
        </div>
        <div class="pkg-card">
          <span class="pkg-eyebrow" style="color:var(--rose);">Premium</span>
          <div class="pkg-name">Grand</div>
          <div class="pkg-sub">For once-in-a-lifetime occasions</div>
          <div class="pkg-price" style="font-size:38px;letter-spacing:-1px;">Custom</div>
          <ul class="pkg-list">
            <li>Unlimited guests</li>
            <li>Bespoke concept design</li>
            <li>Full AV production</li>
            <li>Custom fabrication</li>
            <li>VIP coordination</li>
            <li>Multi-day events</li>
            <li>End-to-end management</li>
          </ul>
          <button class="pkg-btn pkg-btn-dark" onclick="showPage('contact')">Enquire Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- What's Included -->
  <section style="padding:80px 5vw;background:var(--white);border-top:1px solid var(--border2);">
    <div class="wrap">
      <span class="eyebrow" style="display:block;margin-bottom:14px;">What's Included</span>
      <h2 class="display d3" style="margin-bottom:52px;">Everything you need<br>in one place.</h2>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2px;">
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">🎨</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Décor &amp; Styling</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">Balloon arches, florals, centrepieces, backdrops, draping, fairy lights, and themed prop styling.</div></div>
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">🎵</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Audio &amp; Lighting</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">Full PA systems, DJ lighting, uplighting, gobo projections, cold sparks, and LED screens.</div></div>
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">🤝</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Vendor Management</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">We coordinate caterers, photographers, entertainers, and transport so you don't have to.</div></div>
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">📸</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Photo Experiences</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">Mirror booths, photo walls, prop stations, and selfie spots guests absolutely love.</div></div>
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">🎪</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Tent &amp; Venue Setup</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">Marquee tents, furniture layout, floor planning, and complete venue transformation.</div></div>
        <div style="padding:36px 30px;background:var(--cream2);border:1px solid var(--border2);"><div style="font-size:24px;margin-bottom:14px;">🍰</div><div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:400;margin-bottom:8px;">Dessert Stations</div><div style="font-size:13px;color:var(--ink3);line-height:1.7;">Candy carts, donut walls, and dessert tables — the sweetest part of every event.</div></div>
      </div>
    </div>
  </section>

  <div class="big-cta">
    <h2 class="bc-title">Start planning your<br><em>perfect event.</em></h2>
    <p class="bc-sub">Every great event starts with one conversation.</p>
    <div class="bc-btns"><button class="btn btn-ink" onclick="showPage('contact')">Get in Touch →</button></div>
  </div>
</div><!-- /services -->

<!-- ═══════════════════════════════════════════
     ABOUT PAGE
═══════════════════════════════════════════ -->
<div id="page-about" class="page">
  <div class="about-split" style="padding-top:72px; min-height:calc(100vh - 72px);">
    <div class="about-l">
      <span class="eyebrow eyebrow-rose" style="display:block;margin-bottom:20px;">Moments to Memories</span>
      <h1 class="display d2" style="margin-bottom:28px;">Born to<br><em style="color:var(--rose);font-style:italic;">celebrate.</em></h1>
      <p class="body-md" style="margin-bottom:20px;">Zetanova Private Limited was founded with one purpose: to give every person in Sri Lanka access to world-class party experiences. Whether you're celebrating a child's first birthday or a golden anniversary — you deserve magic.</p>
      <p class="body-md" style="margin-bottom:44px;">Based at No. 43, By the Sea, Dehiwala, we've grown from a small supplies store into a full-service event company that has delivered joy at hundreds of events across the island.</p>
      <div style="display:flex;gap:0;border-top:1px solid var(--border2);padding-top:36px;margin-top:12px;">
        <div style="padding-right:36px;border-right:1px solid var(--border2);">
          <div class="hs-val">500+</div><div class="hs-lbl">Events</div>
        </div>
        <div style="padding:0 36px;border-right:1px solid var(--border2);">
          <div class="hs-val">8+</div><div class="hs-lbl">Years</div>
        </div>
        <div style="padding-left:36px;">
          <div class="hs-val">100%</div><div class="hs-lbl">Satisfaction</div>
        </div>
      </div>
    </div>
    <div class="about-r">
      <div class="about-z" aria-hidden="true">Z</div>
      <div class="about-r-content">
        <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27" style="margin:0 auto 20px;">
          <path style="fill:#C9536A" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
          <path style="fill:#231F20;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
        </svg>
        <div class="about-badge">Est. Dehiwala, Sri Lanka</div>
      </div>
    </div>
  </div>

  <!-- Values -->
  <section style="background:var(--white);border-top:1px solid var(--border2);">
    <div style="display:grid;grid-template-columns:1fr 1fr;">
      <div style="padding:56px 5vw;border-right:1px solid var(--border2);border-bottom:1px solid var(--border2);">
        <div style="font-size:22px;margin-bottom:14px;">✨</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:400;margin-bottom:10px;">Excellence in Every Detail</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">We sweat the small stuff so you don't have to. Every placement, every colour, every moment — completely intentional.</div>
      </div>
      <div style="padding:56px 5vw;border-bottom:1px solid var(--border2);">
        <div style="font-size:22px;margin-bottom:14px;">🤝</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:400;margin-bottom:10px;">People First, Always</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">Our clients are family. We listen, adapt, and go above and beyond to ensure everyone leaves with a genuine smile.</div>
      </div>
      <div style="padding:56px 5vw;border-right:1px solid var(--border2);">
        <div style="font-size:22px;margin-bottom:14px;">🎨</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:400;margin-bottom:10px;">Creativity Without Limits</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">No two events ever look the same. We bring fresh ideas and original concepts to every project, regardless of scale.</div>
      </div>
      <div style="padding:56px 5vw;">
        <div style="font-size:22px;margin-bottom:14px;">🇱🇰</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:400;margin-bottom:10px;">Proudly Sri Lankan</div>
        <div style="font-size:13px;color:var(--ink3);line-height:1.7;">A local business rooted in community. We celebrate Sri Lankan culture and support local suppliers wherever possible.</div>
      </div>
    </div>
  </section>

  <div class="big-cta">
    <h2 class="bc-title">Let's create something<br><em>together.</em></h2>
    <p class="bc-sub">Your celebration is waiting.</p>
    <div class="bc-btns"><button class="btn btn-ink" onclick="showPage('contact')">Reach Out →</button></div>
  </div>
</div><!-- /about -->

<!-- ═══════════════════════════════════════════
     CONTACT PAGE
═══════════════════════════════════════════ -->
<div id="page-contact" class="page">
  <div class="contact-split" style="padding-top:72px;min-height:calc(100vh - 72px);">
    <div class="contact-l">
      <span class="eyebrow eyebrow-rose" style="display:block;margin-bottom:20px;">Get in Touch</span>
      <h1 class="display d2" style="margin-bottom:20px;">Let's plan your<br><em style="color:var(--rose);font-style:italic;">perfect event.</em></h1>
      <p class="body-md" style="max-width:360px;margin-bottom:0;">Whether you have a clear vision or just a feeling — we're here to shape it into something unforgettable.</p>
      <div class="c-items">
        <div class="c-row"><div class="c-label">Address</div><div class="c-val">No. 43, By the Sea, By Prime, Dehiwala, Sri Lanka</div></div>
        <div class="c-row"><div class="c-label">Phone</div><div class="c-val"><a href="tel:0778865633">077 886 5633</a></div></div>
        <div class="c-row"><div class="c-label">Email</div><div class="c-val"><a href="mailto:info@zetanova.lk">info@zetanova.lk</a></div></div>
        <div class="c-row"><div class="c-label">Hours</div><div class="c-val">Mon – Sat: 9am – 7pm<br>Sunday: By Appointment</div></div>
      </div>
    </div>
    <div class="contact-r">
      <div class="form-head">Tell us about your event</div>
      <div class="frow">
        <div class="fg"><label>Your Name</label><input type="text" placeholder="e.g. Priya Silva"></div>
        <div class="fg"><label>Phone</label><input type="tel" placeholder="+94 77 XXX XXXX"></div>
      </div>
      <div class="fg"><label>Email</label><input type="email" placeholder="you@example.com"></div>
      <div class="frow">
        <div class="fg"><label>Event Type</label>
          <select>
            <option>Select type</option>
            <option>Birthday Party</option>
            <option>Wedding / Reception</option>
            <option>Corporate Event</option>
            <option>Kids' Party</option>
            <option>Cocktail Evening</option>
            <option>Themed Party</option>
            <option>Other</option>
          </select>
        </div>
        <div class="fg"><label>Expected Date</label><input type="date"></div>
      </div>
      <div class="fg"><label>Tell us more</label><textarea placeholder="Guest count, venue, theme ideas, budget, special requirements..."></textarea></div>
      <button class="form-send" onclick="handleSubmit(this)">Send Enquiry →</button>
    </div>
  </div>
</div><!-- /contact -->

<!-- KIDS' PARTIES, BIRTHDAYS, BOUNCY, BALLOONS, SOUND, LIGHTING → now separate HTML files -->

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-logo-block">
      <div class="footer-logo-row">
        <svg class="footer-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
          <path style="fill:#C9536A" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
          <path style="fill:rgba(255,255,255,0.8);fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
        </svg>
        <div>
          <div class="footer-brand">Zetanova</div>
          <div class="footer-slogan">Moments to Memories</div>
        </div>
      </div>
      <p class="footer-desc">Sri Lanka's premier party company. Delivering unforgettable celebrations from Dehiwala to the whole island.</p>
    </div>
    <div class="footer-col">
      <h4>Navigate</h4>
      <ul>
        <li onclick="showPage('home')">Home</li>
        <li onclick="showPage('products')">Products</li>
        <li onclick="showPage('rentals')">Rentals</li>
        <li onclick="showPage('services')">Services</li>
        <li onclick="showPage('about')">About</li>
        <li onclick="showPage('contact')">Contact</li>
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

<!-- PARTY CONSOLE FAB -->
<a class="console-fab" href="/party-console" target="_blank">
  <span class="fab-dot"></span>
  Party Console — Build Your Quote
</a>

<script src="data/products.js"></script>
<script>
/* ── LOADER ── */
window.addEventListener('load', () => {
  setTimeout(() => document.getElementById('page-loader').classList.add('out'), 350);
});

/* ── CURSOR ── */
const cdot = document.getElementById('cur-dot');
document.addEventListener('mousemove', e => {
  cdot.style.left = e.clientX + 'px';
  cdot.style.top  = e.clientY + 'px';
});

/* ── COPYRIGHT YEAR ── */
document.getElementById('footer-year').textContent = new Date().getFullYear();

/* ── NAVIGATION ── */
function showPage(name) {
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  document.getElementById('page-'+name).classList.add('active');
  document.querySelectorAll('.nav-links a').forEach(a=>a.classList.remove('active'));
  const el = document.getElementById('nav-'+name);
  if(el) el.classList.add('active');
  window.scrollTo({top:0,behavior:'smooth'});
}
function toggleMenu(){
  document.getElementById('mobMenu').classList.toggle('open');
}

/* ── HORIZONTAL SCROLL (Folat-style) ── */
let srOffset = 0;
const CARD_W = 342; // card width + gap
const VISIBLE = 3;  // how many cards shift per click
function slideTrack(dir) {
  const track = document.getElementById('srTrack');
  const cards = track.querySelectorAll('.sr-card').length;
  const maxOffset = Math.max(0, (cards - 3) * CARD_W);
  srOffset = Math.max(0, Math.min(maxOffset, srOffset + dir * CARD_W));
  track.style.transform = `translateX(-${srOffset}px)`;
  document.getElementById('srPrev').disabled = srOffset <= 0;
  document.getElementById('srNext').disabled = srOffset >= maxOffset;
}
// Touch/wheel horizontal scroll on the track
(()=>{
  const wrap = document.querySelector('.sr-track-wrap');
  if(!wrap) return;
  let startX = 0;
  wrap.addEventListener('touchstart',e=>{ startX=e.touches[0].clientX; },{passive:true});
  wrap.addEventListener('touchend',e=>{
    const dx = startX - e.changedTouches[0].clientX;
    if(Math.abs(dx)>40) slideTrack(dx>0?1:-1);
  },{passive:true});
})();

/* ── FILTER TABS & DYNAMIC PRODUCTS ── */
let allProducts = [];
const prodGrid = document.getElementById('dynamic-prod-grid');
const filterTabs = document.querySelectorAll('#prod-filter-tabs .f-tab');

function renderProducts(filterCat) {
  if (!prodGrid) return;
  prodGrid.innerHTML = '';
  const filtered = filterCat === 'All' ? allProducts : allProducts.filter(p => p.Category === filterCat);
  
  filtered.forEach(p => {
    const card = document.createElement('div');
    card.className = 'prod-card';
    card.innerHTML = `
      <div class="prod-img" style="background:url('${p.Photo || ''}') center/cover no-repeat #F5EEE8"></div>
      <div class="prod-overlay"></div>
      <div class="prod-body">
        <div class="prod-cat">${p.Category || 'Other'}</div>
        <div class="prod-name">${p['Item Name'] || 'Unknown Product'}</div>
      </div>
      <div class="prod-foot">
        <span class="prod-price">${p['Unit Price '] ? 'LKR ' + p['Unit Price '].toLocaleString() : 'Price on request'}</span>
        <button class="prod-enquire" onclick="showPage('contact')">Enquire →</button>
      </div>
    `;
    prodGrid.appendChild(card);
  });
}

if (prodGrid && typeof productsData !== 'undefined') {
  allProducts = productsData;
  renderProducts('All');
}

document.querySelectorAll('.f-tab').forEach(btn=>{
  btn.addEventListener('click',function(){
    document.querySelectorAll('.f-tab').forEach(b=>b.classList.remove('active'));
    this.classList.add('active');
    if (this.hasAttribute('data-filter')) {
      renderProducts(this.getAttribute('data-filter'));
    }
  });
});

/* ── CONTACT FORM ── */
function handleSubmit(btn){
  btn.textContent='Enquiry sent — we\'ll be in touch within 24 hours.';
  btn.style.background='var(--sage)';
  btn.disabled=true;
}

/* ── SCROLL ANIMATION (subtle fade-in on scroll) ── */
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.style.opacity='1';
      e.target.style.transform='translateY(0)';
    }
  });
},{threshold:0.1});
document.querySelectorAll('.sr-card,.proc-card,.test-card,.prod-card,.cat-item,.feature-item').forEach(el=>{
  el.style.opacity='0';
  el.style.transform='translateY(20px)';
  el.style.transition='opacity 0.6s ease, transform 0.6s ease';
  observer.observe(el);
});

/* ── NAV SCROLL SHADOW ── */
window.addEventListener('scroll',()=>{
  const nav = document.querySelector('.nav-outer');
  if(window.scrollY>10){
    nav.style.boxShadow='0 4px 24px rgba(35,31,32,0.08)';
  } else {
    nav.style.boxShadow='none';
  }
});
</script>
</body>
</html>
