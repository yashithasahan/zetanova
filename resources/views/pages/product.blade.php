<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $product->name }} | Zetanova</title>
<meta name="description" content="{{ $product->description ?? 'Premium party rental by Zetanova Sri Lanka.' }}">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="theme-color" content="#231F20">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/style.css">
<style>
.pd-wrap{max-width:1100px;margin:0 auto;padding:60px 5vw;display:grid;grid-template-columns:1fr 420px;gap:60px;align-items:start;}
@media(max-width:900px){.pd-wrap{grid-template-columns:1fr;padding:40px 5vw;}}
.pd-main-img{width:100%;aspect-ratio:4/3;border-radius:16px;background:var(--cream2);display:flex;align-items:center;justify-content:center;font-size:80px;overflow:hidden;}
.pd-main-img img{width:100%;height:100%;object-fit:cover;border-radius:16px;display:block;}
.pd-thumbs{display:flex;gap:10px;margin-top:12px;flex-wrap:wrap;}
.pd-thumb{width:76px;height:76px;border-radius:10px;object-fit:cover;cursor:pointer;border:2px solid transparent;transition:border-color 0.2s;background:var(--cream2);}
.pd-thumb.active,.pd-thumb:hover{border-color:var(--rose);}
.pd-breadcrumb{font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--ink3);margin-bottom:16px;}
.pd-breadcrumb a{color:var(--ink3);text-decoration:none;}
.pd-breadcrumb a:hover{color:var(--rose);}
.pd-category{display:inline-block;font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--rose);background:rgba(201,83,106,0.08);padding:4px 12px;border-radius:100px;margin-bottom:14px;}
.pd-title{font-family:"Cormorant Garamond",serif;font-size:clamp(26px,3vw,38px);font-weight:500;line-height:1.2;color:var(--ink);margin-bottom:12px;}
.pd-price{font-size:28px;font-weight:700;color:var(--ink);margin-bottom:6px;}
.pd-price-note{font-size:12px;color:var(--ink3);font-weight:400;margin-left:4px;}
.pd-divider{height:1px;background:#e8e4de;margin:24px 0;}
.pd-desc{font-size:14px;line-height:1.8;color:#4a4545;margin-bottom:28px;}
.pd-enquiry{background:var(--cream2,#F5EEE8);border-radius:16px;padding:28px;margin-bottom:20px;}
.pd-enquiry-title{font-family:"Cormorant Garamond",serif;font-size:20px;font-weight:500;margin-bottom:16px;color:var(--ink);}
.pd-field{margin-bottom:12px;}
.pd-field label{display:block;font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--ink3);margin-bottom:5px;}
.pd-field input,.pd-field textarea,.pd-field select{width:100%;padding:10px 14px;border:1px solid #e8e4de;border-radius:10px;font-family:"DM Sans",sans-serif;font-size:13px;background:var(--white);color:var(--ink);outline:none;transition:border-color 0.2s;}
.pd-field input:focus,.pd-field textarea:focus{border-color:var(--rose);}
.pd-field textarea{resize:vertical;min-height:80px;}
.pd-submit{width:100%;padding:14px;background:var(--ink);color:var(--white);border:none;border-radius:10px;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:700;letter-spacing:1px;text-transform:uppercase;cursor:pointer;transition:background 0.2s,transform 0.15s;margin-top:4px;}
.pd-submit:hover{background:var(--rose);transform:translateY(-1px);}
.pd-wa{display:flex;align-items:center;gap:12px;padding:14px 18px;background:#25D366;color:white;border-radius:10px;text-decoration:none;font-weight:600;font-size:13px;transition:opacity 0.2s,transform 0.15s;}
.pd-wa:hover{opacity:0.9;transform:translateY(-1px);}
.pd-related{padding:80px 5vw;background:var(--cream);border-top:1px solid #e8e4de;}
.pd-success{display:none;background:#f0fdf4;border:1px solid #86efac;color:#166534;border-radius:10px;padding:14px;text-align:center;font-size:13px;font-weight:600;margin-top:12px;}
</style>
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
  <p class="topbar-text">Free delivery &amp; setup in Colombo &amp; Dehiwala &mdash; <span>Call us: 077 886 5633</span></p>
  <button class="topbar-close" onclick="document.getElementById('topbar').style.display='none'">x</button>
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
      <a class="nav-cat-item" href="/kids"><span class="nav-cat-icon">&#127881;</span> Kids' Parties</a>
      <a class="nav-cat-item" href="/birthdays"><span class="nav-cat-icon">&#127874;</span> Birthdays</a>
      <a class="nav-cat-item" href="/bouncy"><span class="nav-cat-icon">&#127984;</span> Bouncy Castles</a>
      <a class="nav-cat-item" href="/balloons"><span class="nav-cat-icon">&#127880;</span> Balloons</a>
      <a class="nav-cat-item" href="/sound"><span class="nav-cat-icon">&#128266;</span> Sound</a>
      <a class="nav-cat-item" href="/lighting"><span class="nav-cat-icon">&#10024;</span> Lighting</a>
    </div>
  </nav>
</header>
<div class="mob-menu" id="mobMenu">
  <button class="mob-close" onclick="toggleMenu()">x</button>
  <a href="/">Home</a>
  <a href="/kids">Kids' Parties</a>
  <a href="/birthdays">Birthdays</a>
  <a href="/bouncy">Bouncy Castles</a>
  <a href="/balloons">Balloons</a>
  <a href="/sound">Sound</a>
  <a href="/lighting">Lighting</a>
</div>

<main style="background:var(--white);min-height:60vh;">
  <div class="pd-wrap">
    <!-- Gallery -->
    <div class="pd-gallery">
      <div class="pd-main-img" id="mainImgWrap">
        @if($product->images->count() > 0)
          <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="{{ $product->name }}" id="mainImg">
        @else
          <div style="font-size:80px;display:flex;align-items:center;justify-content:center;width:100%;height:100%;background:var(--cream2);border-radius:16px;">&#128230;</div>
        @endif
      </div>
      @if($product->images->count() > 1)
      <div class="pd-thumbs">
        @foreach($product->images as $i => $img)
          <img src="{{ Storage::url($img->image_path) }}" alt="{{ $product->name }}" class="pd-thumb {{ $i === 0 ? 'active' : '' }}" onclick="switchImage(this, '{{ Storage::url($img->image_path) }}')">
        @endforeach
      </div>
      @endif
    </div>

    <!-- Info panel -->
    <div class="pd-info">
      <div class="pd-breadcrumb">
        <a href="/">Home</a> &nbsp;/&nbsp;
        @if($product->category)
          <a href="/{{ strtolower(str_replace(' ', '-', $product->category)) }}">{{ $product->category }}</a> &nbsp;/&nbsp;
        @endif
        <span style="color:var(--ink);">{{ Str::limit($product->name, 40) }}</span>
      </div>

      @if($product->category)
        <span class="pd-category">{{ $product->category }}</span>
      @endif

      <h1 class="pd-title">{{ $product->name }}</h1>

      <div class="pd-price">
        LKR {{ number_format($product->price) }}<span class="pd-price-note">/ day</span>
      </div>

      @if($product->quantity > 0)
        <p style="font-size:12px;color:#16a34a;font-weight:600;margin-bottom:4px;">&#10003; In stock &mdash; {{ $product->quantity }} available</p>
      @else
        <p style="font-size:12px;color:#dc2626;font-weight:600;margin-bottom:4px;">Currently unavailable</p>
      @endif

      <div class="pd-divider"></div>

      @if($product->description)
        <p class="pd-desc">{{ $product->description }}</p>
      @endif

      <!-- Enquiry Form -->
      <div class="pd-enquiry">
        <div class="pd-enquiry-title">Request a Quote</div>
        <form id="enquiryForm" onsubmit="submitEnquiry(event)">
          <input type="hidden" id="productName" value="{{ $product->name }}">
          <input type="hidden" id="productPrice" value="{{ $product->price }}">
          <div class="pd-field">
            <label>Your Name</label>
            <input type="text" id="fname" placeholder="e.g. Priya Silva" required>
          </div>
          <div class="pd-field">
            <label>Phone Number</label>
            <input type="tel" id="fphone" placeholder="e.g. 077 123 4567" required>
          </div>
          <div class="pd-field">
            <label>Event Date</label>
            <input type="date" id="fdate">
          </div>
          <div class="pd-field">
            <label>Message (Optional)</label>
            <textarea id="fmessage" placeholder="Tell us about your event..."></textarea>
          </div>
          <button type="submit" class="pd-submit" id="enquiryBtn">Send Enquiry &rarr;</button>
          <div class="pd-success" id="enquirySuccess">
            &#10003; Enquiry sent! We'll be in touch within 24 hours.
          </div>
        </form>
      </div>

      <a href="https://wa.me/94778865633?text={{ urlencode('Hi Zetanova! I\'m interested in: ' . $product->name . ' (LKR ' . number_format($product->price) . '/day).') }}" target="_blank" class="pd-wa">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.557 4.118 1.528 5.845L0 24l6.335-1.652A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.015-1.376l-.36-.214-3.732.979 1.001-3.641-.235-.374A9.818 9.818 0 0112 2.182c5.424 0 9.818 4.394 9.818 9.818 0 5.425-4.394 9.818-9.818 9.818z"/></svg>
        Chat on WhatsApp
      </a>
    </div>
  </div>
</main>

@if($related->count() > 0)
<section class="pd-related">
  <div class="wrap">
    <span class="eyebrow" style="display:block;margin-bottom:14px;">You may also like</span>
    <h2 class="display d3" style="margin-bottom:40px;">More from <em style="color:var(--rose);font-style:italic;">{{ $product->category }}</em></h2>
    <div class="prod-grid">
      @foreach($related as $rel)
      <a href="/products/{{ $rel->id }}" style="text-decoration:none;color:inherit;">
        <div class="prod-card">
          <div class="prod-img" style="background:var(--cream2);display:flex;align-items:center;justify-content:center;height:180px;overflow:hidden;">
            @if($rel->images->count() > 0)
              <img src="{{ Storage::url($rel->images->first()->image_path) }}" alt="{{ $rel->name }}" style="width:100%;height:100%;object-fit:cover;">
            @else
              <div style="font-size:48px;">&#128230;</div>
            @endif
          </div>
          <div class="prod-body">
            <div class="prod-tag">{{ $rel->category }}</div>
            <div class="prod-name">{{ $rel->name }}</div>
            <div class="prod-foot">
              <span class="prod-price">LKR {{ number_format($rel->price) }} <span style="font-size:11px;font-weight:400;color:var(--ink3);">/ day</span></span>
              <span class="btn btn-outline" style="font-size:11px;padding:8px 16px;">View &rarr;</span>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endif

<div class="big-cta">
  <span class="eyebrow" style="display:block;text-align:center;margin-bottom:20px;">Ready to book?</span>
  <h2 class="bc-title">Make your event<br><em>unforgettable.</em></h2>
  <p class="bc-sub">Tell us the date, the theme, and the dream &mdash; we'll take it from there.</p>
  <div class="bc-btns"><a class="btn btn-ink" href="/party-console" target="_blank">Build Your Quote &rarr;</a></div>
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
    <div class="footer-col"><h4>Navigate</h4><ul><li><a href="/">Home</a></li><li><a href="/">About</a></li><li><a href="/">Contact</a></li><li><a href="/party-console" target="_blank">Party Console</a></li></ul></div>
    <div class="footer-col"><h4>Services</h4><ul><li><a href="/kids">Kids' Parties</a></li><li><a href="/birthdays">Birthdays</a></li><li><a href="/bouncy">Bouncy Castles</a></li><li><a href="/balloons">Balloons</a></li><li><a href="/sound">Sound Systems</a></li><li><a href="/lighting">Lighting</a></li></ul></div>
    <div class="footer-col"><h4>Contact</h4><ul><li>info@zetanova.lk</li><li>077 886 5633</li><li>No 43, By the Sea</li><li>Dehiwala, Sri Lanka</li></ul></div>
  </div>
  <div class="footer-bottom">
    <p class="footer-copy">&copy; <span id="footer-year"></span> Zetanova Private Limited. All rights reserved.</p>
    <div class="footer-socials"><a href="#">Instagram</a><a href="#">Facebook</a><a href="#">LinkedIn</a></div>
  </div>
</footer>
<a class="console-fab" href="/party-console" target="_blank"><span class="fab-dot"></span> Party Console &mdash; Build Your Quote</a>

<script>
window.addEventListener('load', () => setTimeout(() => document.getElementById('page-loader').classList.add('out'), 350));
const cdot = document.getElementById('cur-dot');
document.addEventListener('mousemove', e => { cdot.style.left = e.clientX + 'px'; cdot.style.top = e.clientY + 'px'; });
function toggleMenu() { document.getElementById('mobMenu').classList.toggle('open'); }
window.addEventListener('scroll', () => {
  document.querySelector('.nav-outer').style.boxShadow = window.scrollY > 10 ? '0 4px 24px rgba(35,31,32,0.08)' : 'none';
});
document.getElementById('footer-year').textContent = new Date().getFullYear();

function switchImage(thumb, src) {
  const main = document.getElementById('mainImg');
  if (main) main.src = src;
  document.querySelectorAll('.pd-thumb').forEach(t => t.classList.remove('active'));
  thumb.classList.add('active');
}

function submitEnquiry(e) {
  e.preventDefault();
  const btn = document.getElementById('enquiryBtn');
  const success = document.getElementById('enquirySuccess');
  const name = document.getElementById('fname').value;
  const phone = document.getElementById('fphone').value;
  const date = document.getElementById('fdate').value || 'TBD';
  const message = document.getElementById('fmessage').value;
  const product = document.getElementById('productName').value;
  const price = document.getElementById('productPrice').value;
  btn.textContent = 'Sending...';
  btn.disabled = true;
  const msg = encodeURIComponent(`Hi Zetanova! Enquiry about: ${product} (LKR ${Number(price).toLocaleString()}/day)\nName: ${name}\nPhone: ${phone}\nDate: ${date}\n${message}`);
  setTimeout(() => {
    btn.style.display = 'none';
    success.style.display = 'block';
    setTimeout(() => window.open('https://wa.me/94778865633?text=' + msg, '_blank'), 800);
  }, 600);
}
</script>
</body>
</html>
