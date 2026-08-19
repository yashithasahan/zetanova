<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Party Console — Zetanova</title>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-config" content="/browserconfig.xml">
<meta name="theme-color" content="#231F20">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<style>
:root {
  --black: #231F20;
  --pink:  #FF2D78;
  --blue:  #1A5FFF;
  --mint:  #00B870;
  --orange:#FF6000;
  --purple:#7B2FFF;
  --yellow:#FFBE00;
  --white: #FFFFFF;
  --grey:  #F4F4F4;
  --mid:   #E8E8E8;
  --muted: #888888;
  --border:#E0E0E0;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html,body{height:100%;font-family:'DM Sans',sans-serif;background:var(--grey);color:var(--black);overflow:hidden;}
@media(max-width:768px){html,body{overflow:auto;}}

/* ── CURSOR ── */
*{cursor:none!important;}
#cdot{width:10px;height:10px;background:var(--black);border-radius:50%;position:fixed;top:0;left:0;z-index:9999;pointer-events:none;transform:translate(-50%,-50%);transition:background .2s,width .15s,height .15s;}
#cring{width:36px;height:36px;border:1.5px solid rgba(35,31,32,.25);border-radius:50%;position:fixed;top:0;left:0;z-index:9998;pointer-events:none;transform:translate(-50%,-50%);transition:border-color .2s,width .2s,height .2s;}
body:has(button:hover) #cdot,body:has(a:hover) #cdot,.item-card:hover~#cdot{background:var(--pink);width:14px;height:14px;}
body:has(button:hover) #cring,body:has(a:hover) #cring{border-color:var(--pink);width:44px;height:44px;}

/* ── LAYOUT ── */
.app{display:grid;grid-template-rows:56px 1fr;height:100vh;}
@media(max-width:768px){.app{height:auto;min-height:100vh;overflow:auto;}}

/* ── TOP BAR ── */
.topbar{
  background:var(--black);display:flex;align-items:center;justify-content:space-between;
  padding:0 20px;border-bottom:1px solid rgba(255,255,255,.08);
  position:sticky;top:0;z-index:100;
}
.topbar-logo{display:flex;align-items:center;gap:10px;}
.topbar-logo svg{width:26px;height:26px;}
.topbar-wordmark{display:flex;flex-direction:column;gap:1px;}
.topbar-name{font-size:13px;font-weight:900;letter-spacing:3px;text-transform:uppercase;color:#fff;}
.topbar-tag{font-size:8px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.35);}
.topbar-title{font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--pink);}
.topbar-actions{display:flex;align-items:center;gap:10px;}
.topbar-btn{padding:7px 16px;border-radius:100px;font-family:'DM Sans',sans-serif;font-size:12px;font-weight:700;border:none;transition:all .2s;}
.btn-ghost{background:rgba(255,255,255,.08);color:rgba(255,255,255,.7);}
.btn-ghost:hover{background:rgba(255,255,255,.15);}
.btn-accent{background:var(--pink);color:#fff;}
.btn-accent:hover{background:#e0005a;}

/* ── THREE-PANEL ── */
.panels{
  display:grid;grid-template-columns:280px 1fr 300px;
  height:calc(100vh - 56px);overflow:hidden;
}
@media(max-width:1100px){.panels{grid-template-columns:240px 1fr 260px;}}
@media(max-width:768px){
  .panels{grid-template-columns:1fr;grid-template-rows:auto 1fr auto;height:auto;overflow:visible;}
  .app{height:auto;}
}

/* ── LEFT: INVENTORY ── */
.panel-left{
  background:var(--white);border-right:1px solid var(--border);
  display:flex;flex-direction:column;overflow:hidden;
}
.panel-header{
  padding:16px 18px;border-bottom:1px solid var(--border);
  display:flex;flex-direction:column;gap:10px;flex-shrink:0;
}
.panel-title{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--muted);}
.search-input{
  width:100%;padding:8px 12px;border:1px solid var(--border);border-radius:8px;
  font-family:'DM Sans',sans-serif;font-size:13px;outline:none;background:var(--grey);
  transition:border-color .2s;
}
.search-input:focus{border-color:var(--pink);}
.cat-tabs{display:flex;gap:0;overflow-x:auto;padding-bottom:2px;}
.cat-tab{
  padding:6px 12px;font-size:11px;font-weight:700;letter-spacing:.5px;
  background:none;border:none;border-bottom:2px solid transparent;
  color:var(--muted);white-space:nowrap;transition:all .2s;flex-shrink:0;
}
.cat-tab.active,.cat-tab:hover{color:var(--black);border-bottom-color:var(--pink);}

.items-scroll{flex:1;overflow-y:auto;padding:12px;}
.items-scroll::-webkit-scrollbar{width:4px;}
.items-scroll::-webkit-scrollbar-track{background:transparent;}
.items-scroll::-webkit-scrollbar-thumb{background:var(--mid);border-radius:4px;}

.item-card{
  display:grid;grid-template-columns:48px 1fr auto;
  align-items:center;gap:10px;
  padding:12px;margin-bottom:6px;
  background:var(--grey);border-radius:10px;
  border:1.5px solid transparent;
  transition:all .2s;position:relative;
  -webkit-user-select:none;user-select:none;
}
.item-card:hover{background:#fff;border-color:var(--pink);transform:translateX(2px);}
.item-card.dragging{opacity:.4;transform:scale(.96);}
.item-emoji{font-size:26px;text-align:center;line-height:1;}
.item-name{font-size:13px;font-weight:700;color:var(--black);line-height:1.2;}
.item-price{font-size:11px;font-weight:600;color:var(--muted);margin-top:2px;}
.item-add-btn{
  width:28px;height:28px;border-radius:50%;background:var(--black);color:#fff;
  border:none;font-size:16px;display:flex;align-items:center;justify-content:center;
  transition:all .2s;flex-shrink:0;line-height:1;
}
.item-card:hover .item-add-btn{background:var(--pink);}
.item-cat-badge{
  position:absolute;top:6px;right:40px;
  font-size:8px;font-weight:700;letter-spacing:1px;text-transform:uppercase;
  padding:2px 6px;border-radius:4px;
}

/* ── MIDDLE: CANVAS / DROP ZONE ── */
.panel-mid{
  display:flex;flex-direction:column;background:var(--grey);
  overflow:hidden;position:relative;
}
.mid-header{
  background:var(--white);border-bottom:1px solid var(--border);
  padding:14px 20px;display:flex;align-items:center;justify-content:space-between;flex-shrink:0;
}
.mid-header-left{display:flex;flex-direction:column;gap:2px;}
.mid-event-label{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--muted);}
.mid-event-name{font-size:16px;font-weight:800;letter-spacing:-.3px;color:var(--black);}
.mid-actions{display:flex;gap:8px;}

.canvas-area{
  flex:1;overflow-y:auto;padding:20px;
  display:flex;flex-direction:column;gap:0;
}
.canvas-area::-webkit-scrollbar{width:4px;}
.canvas-area::-webkit-scrollbar-thumb{background:var(--mid);border-radius:4px;}

.drop-zone{
  min-height:200px;border:2px dashed var(--mid);border-radius:16px;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  color:var(--muted);text-align:center;padding:40px;
  transition:all .3s;margin-bottom:16px;
}
.drop-zone.drag-over{border-color:var(--pink);background:rgba(255,45,120,.04);}
.drop-zone-icon{font-size:40px;margin-bottom:12px;opacity:.4;}
.drop-zone-text{font-size:14px;font-weight:600;margin-bottom:6px;}
.drop-zone-sub{font-size:12px;color:var(--muted);}

.canvas-item{
  display:grid;grid-template-columns:44px 1fr auto auto;
  align-items:center;gap:12px;
  background:var(--white);border-radius:10px;border:1px solid var(--border);
  padding:12px 14px;margin-bottom:6px;
  animation:slideIn .2s ease;
}
@keyframes slideIn{from{opacity:0;transform:translateY(-8px)}to{opacity:1;transform:translateY(0)}}
.ci-emoji{font-size:24px;text-align:center;}
.ci-info{min-width:0;}
.ci-name{font-size:13px;font-weight:700;color:var(--black);}
.ci-meta{font-size:11px;color:var(--muted);margin-top:2px;}
.ci-qty{
  display:flex;align-items:center;gap:6px;
}
.qty-btn{
  width:24px;height:24px;border-radius:50%;border:1.5px solid var(--border);
  background:none;font-size:14px;display:flex;align-items:center;justify-content:center;
  transition:all .2s;
}
.qty-btn:hover{border-color:var(--pink);color:var(--pink);}
.qty-val{font-size:13px;font-weight:800;min-width:20px;text-align:center;}
.ci-line{font-size:13px;font-weight:800;color:var(--black);min-width:72px;text-align:right;}
.ci-remove{background:none;border:none;color:var(--mid);font-size:18px;transition:color .2s;padding:2px 4px;}
.ci-remove:hover{color:var(--pink);}

.canvas-empty-state{display:flex;flex-direction:column;align-items:center;justify-content:center;height:100%;color:var(--muted);text-align:center;padding:40px;}
.ces-icon{font-size:48px;margin-bottom:16px;opacity:.3;}
.ces-text{font-size:14px;font-weight:600;margin-bottom:6px;}
.ces-sub{font-size:12px;}

/* ── RIGHT: SUMMARY ── */
.panel-right{
  background:var(--white);border-left:1px solid var(--border);
  display:flex;flex-direction:column;overflow:hidden;
}
.summary-header{
  padding:16px 18px;border-bottom:1px solid var(--border);flex-shrink:0;
}
.summary-scroll{flex:1;overflow-y:auto;padding:16px 18px;}
.summary-scroll::-webkit-scrollbar{width:3px;}
.summary-scroll::-webkit-scrollbar-thumb{background:var(--mid);}

.event-form{display:flex;flex-direction:column;gap:12px;margin-bottom:20px;}
.form-grp{display:flex;flex-direction:column;gap:5px;}
.form-label{font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--muted);}
.form-input{
  width:100%;padding:9px 12px;border:1px solid var(--border);border-radius:8px;
  font-family:'DM Sans',sans-serif;font-size:13px;font-weight:500;color:var(--black);
  background:var(--grey);outline:none;transition:border-color .2s;
}
.form-input:focus{border-color:var(--pink);background:#fff;}
select.form-input{appearance:none;}

.section-divider{height:1px;background:var(--border);margin:16px 0;}

.summary-line{
  display:flex;justify-content:space-between;align-items:baseline;
  padding:6px 0;border-bottom:1px solid rgba(0,0,0,.04);
}
.sl-name{font-size:12px;font-weight:600;color:var(--black);flex:1;min-width:0;padding-right:8px;line-height:1.4;}
.sl-qty{font-size:11px;color:var(--muted);flex-shrink:0;}
.sl-price{font-size:12px;font-weight:700;color:var(--black);flex-shrink:0;}
.summary-empty{font-size:13px;color:var(--muted);text-align:center;padding:24px 0;}

.total-block{
  background:var(--black);border-radius:12px;padding:16px;margin-top:16px;
}
.total-row{display:flex;justify-content:space-between;align-items:center;padding:3px 0;}
.total-label{font-size:11px;font-weight:600;color:rgba(255,255,255,.5);}
.total-val{font-size:12px;font-weight:700;color:rgba(255,255,255,.7);}
.grand-label{font-size:12px;font-weight:800;color:#fff;letter-spacing:.5px;}
.grand-val{font-size:22px;font-weight:900;color:var(--pink);letter-spacing:-1px;}
.total-divider{height:1px;background:rgba(255,255,255,.1);margin:10px 0;}
.note-text{font-size:10px;color:rgba(255,255,255,.3);line-height:1.6;margin-top:8px;}

.summary-footer{padding:16px 18px;border-top:1px solid var(--border);flex-shrink:0;}
.quote-btn{
  width:100%;padding:14px;border-radius:10px;background:var(--pink);color:#fff;
  font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;letter-spacing:.5px;
  border:none;margin-bottom:8px;transition:all .2s;
}
.quote-btn:hover{background:#e0005a;transform:translateY(-1px);}
.clear-btn{
  width:100%;padding:10px;border-radius:10px;background:var(--grey);color:var(--muted);
  font-family:'DM Sans',sans-serif;font-size:12px;font-weight:600;
  border:1px solid var(--border);transition:all .2s;
}
.clear-btn:hover{border-color:var(--black);color:var(--black);}

/* ── COLOR SWATCH PICKER ── */
.swatch-row{display:flex;gap:6px;flex-wrap:wrap;margin-top:6px;}
.swatch{
  width:24px;height:24px;border-radius:50%;border:2px solid transparent;
  transition:all .2s;cursor:none;
}
.swatch.selected,.swatch:hover{border-color:var(--black);transform:scale(1.2);}

/* ── TOAST ── */
.toast{
  position:fixed;bottom:80px;left:50%;transform:translateX(-50%) translateY(20px);
  background:var(--black);color:#fff;padding:10px 20px;border-radius:100px;
  font-size:12px;font-weight:700;letter-spacing:.5px;opacity:0;
  transition:all .3s;pointer-events:none;z-index:500;white-space:nowrap;
}
.toast.show{opacity:1;transform:translateX(-50%) translateY(0);}

/* ── MOBILE BOTTOM BAR ── */
.mobile-total-bar{
  display:none;position:sticky;bottom:0;
  background:var(--black);padding:14px 20px;
  border-top:1px solid rgba(255,255,255,.08);
  flex-direction:column;gap:10px;z-index:100;
}
@media(max-width:768px){
  .mobile-total-bar{display:flex;}
  .panels{overflow:visible;}
  .panel-left,.panel-mid,.panel-right{height:auto;max-height:none;overflow:visible;}
  .items-scroll,.canvas-area,.summary-scroll{overflow:visible;max-height:none;}
  .app,.html,body{overflow:auto;}
}
.mob-total-row{display:flex;justify-content:space-between;align-items:center;}
.mob-total-label{font-size:11px;font-weight:600;color:rgba(255,255,255,.5);}
.mob-grand{font-size:20px;font-weight:900;color:var(--pink);letter-spacing:-1px;}
.mob-quote-btn{background:var(--pink);color:#fff;border:none;border-radius:100px;padding:12px 24px;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;width:100%;}

/* ── PRINT ── */
@media print{
  #cdot,#cring,.topbar,.mob-action-btn,.topbar-actions,.panel-left,.panel-right,.mob,.console-fab{display:none!important;}
  .panels{grid-template-columns:1fr!important;}
  .panel-mid{overflow:visible!important;}
}
</style>
</head>
<body>

<div id="cdot"></div>
<div id="cring"></div>

<div class="app">

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="topbar-logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
        <path style="fill:#FF2D78" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
        <path style="fill:#fff;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
      </svg>
      <div class="topbar-wordmark">
        <span class="topbar-name">Zetanova</span>
        <span class="topbar-tag">Moments to Memories</span>
      </div>
    </div>
    <div class="topbar-title">✦ Party Console</div>
    <div class="topbar-actions">
      <button class="topbar-btn btn-ghost" onclick="clearAll()">Clear</button>
      <button class="topbar-btn btn-ghost" onclick="window.print()">🖨 Print</button>
      <button class="topbar-btn btn-accent" onclick="generateQuote()">Send Quote →</button>
    </div>
  </div>

  <!-- THREE PANELS -->
  <div class="panels">

    <!-- ── LEFT: INVENTORY ── -->
    <div class="panel-left">
      <div class="panel-header">
        <div class="panel-title">Inventory</div>
        <input class="search-input" type="text" id="searchInput" placeholder="Search items..." oninput="filterItems()">
        <div class="cat-tabs" id="catTabs">
          <button class="cat-tab active" data-cat="all" onclick="setCategory(this,'all')">All</button>
          <button class="cat-tab" data-cat="plinths" onclick="setCategory(this,'plinths')">Plinths</button>
          <button class="cat-tab" data-cat="backdrops" onclick="setCategory(this,'backdrops')">Backdrops</button>
          <button class="cat-tab" data-cat="accessories" onclick="setCategory(this,'accessories')">Accessories</button>
          <button class="cat-tab" data-cat="other" onclick="setCategory(this,'other')">Other</button>
        </div>
      </div>
      <div class="items-scroll" id="itemsScroll"></div>
    </div>

    <!-- ── MIDDLE: CANVAS ── -->
    <div class="panel-mid">
      <div class="mid-header">
        <div class="mid-header-left">
          <span class="mid-event-label">Event Builder</span>
          <span class="mid-event-name" id="midEventName">My Party — drag items here</span>
        </div>
        <div class="mid-actions">
          <button class="topbar-btn btn-ghost" style="font-size:11px;padding:6px 12px;" onclick="clearCanvas()">Clear Board</button>
        </div>
      </div>
      <div class="canvas-area" id="canvasArea"
        ondragover="event.preventDefault();this.classList.add('drag-over-mid')"
        ondragleave="this.classList.remove('drag-over-mid')"
        ondrop="dropOnCanvas(event)">
        <div class="canvas-empty-state" id="emptyState">
          <div class="ces-icon">🎪</div>
          <div class="ces-text">Your event board is empty</div>
          <div class="ces-sub">Drag items from the left, or tap the + button on any item</div>
        </div>
      </div>
    </div>

    <!-- ── RIGHT: SUMMARY / QUOTE ── -->
    <div class="panel-right">
      <div class="summary-header">
        <div class="panel-title">Quote Summary</div>
      </div>
      <div class="summary-scroll">
        <!-- Event details form -->
        <div class="event-form">
          <div class="form-grp">
            <label class="form-label">Client Name</label>
            <input class="form-input" type="text" id="clientName" placeholder="e.g. Priya Silva" oninput="updateMidName()">
          </div>
          <div class="form-grp">
            <label class="form-label">Phone Number</label>
            <input class="form-input" type="tel" id="clientPhone" placeholder="e.g. 077 123 4567">
          </div>
          <div class="form-grp">
            <label class="form-label">Event Type</label>
            <select class="form-input" id="eventType" onchange="updateMidName()">
              <option value="">Select type</option>
              <option>Birthday Party</option>
              <option>Wedding / Reception</option>
              <option>Corporate Event</option>
              <option>Kids' Party</option>
              <option>Cocktail Evening</option>
              <option>Themed Party</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-grp">
            <label class="form-label">Event Date</label>
            <input class="form-input" type="date" id="eventDate">
          </div>
          <div class="form-grp">
            <label class="form-label">Duration</label>
            <select class="form-input" id="eventDuration">
              <option value="1">Half day (up to 4 hrs)</option>
              <option value="1" selected>Full day (up to 8 hrs)</option>
              <option value="2">2 days</option>
              <option value="3">3 days</option>
            </select>
          </div>
        </div>

        <div class="section-divider"></div>

        <!-- Line items -->
        <div class="panel-title" style="margin-bottom:12px;">Items</div>
        <div id="summaryItems">
          <div class="summary-empty" id="summaryEmpty">No items added yet.</div>
        </div>

        <!-- Totals -->
        <div class="total-block" id="totalBlock" style="display:none;">
          <div class="total-row">
            <span class="total-label">Subtotal</span>
            <span class="total-val" id="subtotalVal">LKR 0</span>
          </div>
          <div class="total-row">
            <span class="total-label">Duration</span>
            <span class="total-val" id="durationVal">× 1 day</span>
          </div>
          <div class="total-divider"></div>
          <div class="total-row">
            <span class="grand-label">Total Estimate</span>
            <span class="grand-val" id="grandTotal">LKR 0</span>
          </div>
          <p class="note-text">This is an estimate. Final pricing confirmed on booking. Delivery, setup & collection included for Colombo area. Call us on 077 886 5633 for full quote.</p>
        </div>
      </div>
      <div class="summary-footer">
        <button class="quote-btn" onclick="generateQuote()">Send This Quote →</button>
        <button class="clear-btn" onclick="clearAll()">Clear Everything</button>
      </div>
    </div>

  </div><!-- /panels -->

  <!-- MOBILE BOTTOM BAR -->
  <div class="mobile-total-bar" id="mobileTotalBar" style="display:none;">
    <div class="mob-total-row">
      <span class="mob-total-label">Total Estimate</span>
      <span class="mob-grand" id="mobGrand">LKR 0</span>
    </div>
    <button class="mob-quote-btn" onclick="generateQuote()">Send Quote →</button>
  </div>

</div><!-- /app -->

<div class="toast" id="toast"></div>
<script>
    const productsData = @json($productsData);
</script>
<script>
// ── CURSOR ──
const cdot = document.getElementById('cdot');
const cring = document.getElementById('cring');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;});
(function anim(){cdot.style.left=mx+'px';cdot.style.top=my+'px';rx+=(mx-rx)*.1;ry+=(my-ry)*.1;cring.style.left=rx+'px';cring.style.top=ry+'px';requestAnimationFrame(anim);})();

// ── INVENTORY DATA ──
const INVENTORY = productsData.map((p, i) => {
  const cat = (p.Category || 'other').toLowerCase();
  let emoji = '📦';
  if (cat === 'plinths') emoji = '🏛️';
  if (cat === 'backdrops') emoji = '🌸';
  if (cat === 'accessories') emoji = '✨';
  return {
    id: 'dyn_' + i,
    cat: cat,
    emoji: emoji,
    name: p['Item Name'] || 'Unknown Item',
    desc: p.Category || '',
    price: p['Unit Price '] || 0,
    unit: '/ day'
  };
}) : [];

const BALLOON_COLORS = [
  {name:'White',    hex:'#ffffff', border:'#ccc'},
  {name:'Blush',    hex:'#ffb3c1', border:'transparent'},
  {name:'Pink',     hex:'#FF2D78', border:'transparent'},
  {name:'Red',      hex:'#e63946', border:'transparent'},
  {name:'Orange',   hex:'#FF6000', border:'transparent'},
  {name:'Yellow',   hex:'#FFBE00', border:'transparent'},
  {name:'Mint',     hex:'#00B870', border:'transparent'},
  {name:'Teal',     hex:'#0077b6', border:'transparent'},
  {name:'Blue',     hex:'#1A5FFF', border:'transparent'},
  {name:'Purple',   hex:'#7B2FFF', border:'transparent'},
  {name:'Gold',     hex:'#C9A84C', border:'transparent'},
  {name:'Black',    hex:'#231F20', border:'transparent'},
  {name:'Silver',   hex:'#adb5bd', border:'transparent'},
];

let activeCategory = 'all';
let canvasItems = []; // [{...item, qty, selectedColor}]

// ── RENDER INVENTORY ──
function renderItems() {
  const q = document.getElementById('searchInput').value.toLowerCase();
  const scroll = document.getElementById('itemsScroll');
  scroll.innerHTML = '';

  const filtered = INVENTORY.filter(item => {
    const catMatch = activeCategory === 'all' || item.cat === activeCategory;
    const qMatch = !q || item.name.toLowerCase().includes(q) || item.desc.toLowerCase().includes(q);
    return catMatch && qMatch;
  });

  if (!filtered.length) {
    scroll.innerHTML = '<div style="text-align:center;padding:32px;color:#aaa;font-size:13px;">No items found</div>';
    return;
  }

  filtered.forEach(item => {
    const el = document.createElement('div');
    el.className = 'item-card';
    el.draggable = true;
    el.dataset.id = item.id;
    el.innerHTML = `
      <div class="item-emoji">${item.emoji}</div>
      <div>
        <div class="item-name">${item.name}</div>
        <div class="item-price">LKR ${item.price.toLocaleString()} ${item.unit}</div>
      </div>
      <button class="item-add-btn" onclick="addItem('${item.id}')" title="Add to event">+</button>
    `;
    el.addEventListener('dragstart', e => {
      e.dataTransfer.setData('itemId', item.id);
      el.classList.add('dragging');
    });
    el.addEventListener('dragend', () => el.classList.remove('dragging'));
    // Touch support
    el.addEventListener('touchend', () => addItem(item.id));
    scroll.appendChild(el);
  });
}

function setCategory(btn, cat) {
  document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  activeCategory = cat;
  renderItems();
}

function filterItems() { renderItems(); }

// ── ADD ITEM ──
function addItem(id) {
  const item = INVENTORY.find(i => i.id === id);
  if (!item) return;
  const existing = canvasItems.find(ci => ci.id === id);
  if (existing) {
    existing.qty = Math.min((existing.qty || 1) + (item.minQty || 1), item.maxQty || 999);
  } else {
    canvasItems.push({...item, qty: item.minQty || 1, selectedColor: item.hasColors ? 'Pink' : null});
  }
  renderCanvas();
  renderSummary();
  showToast(`${item.emoji} ${item.name} added`);
}

// ── DROP ON CANVAS ──
function dropOnCanvas(e) {
  e.preventDefault();
  document.getElementById('canvasArea').classList.remove('drag-over-mid');
  const id = e.dataTransfer.getData('itemId');
  if (id) addItem(id);
}

// ── RENDER CANVAS ──
function renderCanvas() {
  const area = document.getElementById('canvasArea');
  const empty = document.getElementById('emptyState');
  if (!canvasItems.length) {
    if (empty) empty.style.display = 'flex';
    // remove all canvas-item elements
    area.querySelectorAll('.canvas-item').forEach(el => el.remove());
    return;
  }
  if (empty) empty.style.display = 'none';
  area.querySelectorAll('.canvas-item').forEach(el => el.remove());

  canvasItems.forEach((ci, idx) => {
    const lineTotal = ci.price * ci.qty;
    const el = document.createElement('div');
    el.className = 'canvas-item';

    let colorHtml = '';
    if (ci.hasColors) {
      const selectedColor = BALLOON_COLORS.find(c => c.name === ci.selectedColor) || BALLOON_COLORS[4];
      colorHtml = `<div style="margin-top:4px;display:flex;align-items:center;gap:6px;">
        <span style="font-size:10px;color:#aaa;font-weight:600;">Colour:</span>
        <select style="font-size:11px;padding:2px 6px;border:1px solid #e0e0e0;border-radius:6px;background:#f4f4f4;font-family:DM Sans,sans-serif;cursor:none;" onchange="changeColor(${idx},this.value)">
          ${BALLOON_COLORS.map(c=>`<option value="${c.name}" ${c.name===ci.selectedColor?'selected':''}>${c.name}</option>`).join('')}
        </select>
        <span style="width:14px;height:14px;border-radius:50%;background:${selectedColor.hex};border:1px solid ${selectedColor.border||'transparent'};display:inline-block;"></span>
      </div>`;
    }

    el.innerHTML = `
      <div class="ci-emoji">${ci.emoji}</div>
      <div class="ci-info">
        <div class="ci-name">${ci.name}</div>
        <div class="ci-meta">LKR ${ci.price.toLocaleString()} ${ci.unit}</div>
        ${colorHtml}
      </div>
      <div class="ci-qty">
        <button class="qty-btn" onclick="changeQty(${idx},-${ci.minQty||1})">−</button>
        <span class="qty-val">${ci.qty}</span>
        <button class="qty-btn" onclick="changeQty(${idx},${ci.minQty||1})">+</button>
      </div>
      <div class="ci-line">LKR ${lineTotal.toLocaleString()}</div>
      <button class="ci-remove" onclick="removeItem(${idx})" title="Remove">×</button>
    `;
    area.appendChild(el);
  });
}

function changeQty(idx, delta) {
  const ci = canvasItems[idx];
  if (!ci) return;
  ci.qty = Math.max(ci.minQty || 1, (ci.qty||1) + delta);
  if (ci.maxQty) ci.qty = Math.min(ci.qty, ci.maxQty);
  renderCanvas();
  renderSummary();
}

function changeColor(idx, color) {
  if (canvasItems[idx]) canvasItems[idx].selectedColor = color;
  renderCanvas();
}

function removeItem(idx) {
  canvasItems.splice(idx, 1);
  renderCanvas();
  renderSummary();
}

function clearCanvas() {
  canvasItems = [];
  renderCanvas();
  renderSummary();
}

// ── RENDER SUMMARY ──
function renderSummary() {
  const container = document.getElementById('summaryItems');
  const empty = document.getElementById('summaryEmpty');
  const totalBlock = document.getElementById('totalBlock');
  const mobBar = document.getElementById('mobileTotalBar');

  container.querySelectorAll('.summary-line').forEach(el => el.remove());

  if (!canvasItems.length) {
    empty.style.display = 'block';
    totalBlock.style.display = 'none';
    mobBar.style.display = 'none';
    return;
  }
  empty.style.display = 'none';
  totalBlock.style.display = 'block';
  mobBar.style.display = 'flex';

  let subtotal = 0;
  canvasItems.forEach(ci => {
    const line = ci.price * ci.qty;
    subtotal += line;
    const el = document.createElement('div');
    el.className = 'summary-line';
    const colorDot = ci.selectedColor ? ` <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:${(BALLOON_COLORS.find(c=>c.name===ci.selectedColor)||{hex:'#ccc'}).hex};vertical-align:middle;"></span>` : '';
    el.innerHTML = `
      <span class="sl-name">${ci.name}${colorDot}</span>
      <span class="sl-qty">×${ci.qty}</span>
      <span class="sl-price">LKR ${line.toLocaleString()}</span>
    `;
    container.appendChild(el);
  });

  const dur = parseInt(document.getElementById('eventDuration').value) || 1;
  const grand = subtotal * dur;
  document.getElementById('subtotalVal').textContent = 'LKR ' + subtotal.toLocaleString();
  document.getElementById('durationVal').textContent = '× ' + dur + ' day' + (dur > 1 ? 's' : '');
  document.getElementById('grandTotal').textContent = 'LKR ' + grand.toLocaleString();
  document.getElementById('mobGrand').textContent = 'LKR ' + grand.toLocaleString();
}

document.getElementById('eventDuration').addEventListener('change', renderSummary);

// ── UPDATE MID NAME ──
function updateMidName() {
  const name = document.getElementById('clientName').value || '';
  const type = document.getElementById('eventType').value || 'My Party';
  const el = document.getElementById('midEventName');
  el.textContent = name ? `${name} — ${type}` : (type + ' — drag items here');
}

// ── GENERATE QUOTE ──
function generateQuote() {
  const name = document.getElementById('clientName').value || 'Guest';
  const phone = document.getElementById('clientPhone').value || 'Not provided';
  const type = document.getElementById('eventType').value || 'Event';
  const date = document.getElementById('eventDate').value || 'TBD';
  const dur  = parseInt(document.getElementById('eventDuration').value) || 1;

  if (!canvasItems.length) { showToast('⚠️ Add items first'); return; }

  let subtotal = canvasItems.reduce((s, ci) => s + ci.price * ci.qty, 0);
  let grand = subtotal * dur;

  let itemLines = canvasItems.map(ci => {
    let colorTxt = ci.selectedColor ? `<span style="font-size:12px; color:#FF2D78;">(${ci.selectedColor})</span>` : '';
    return `
      <tr>
        <td style="padding: 12px; border-bottom: 1px solid #EEE;">${ci.name} ${colorTxt}</td>
        <td style="padding: 12px; border-bottom: 1px solid #EEE; text-align:center;">${ci.qty}</td>
        <td style="padding: 12px; border-bottom: 1px solid #EEE; text-align:right;">LKR ${(ci.price * ci.qty).toLocaleString()}</td>
      </tr>
    `;
  }).join('');

  const subject = `Quote: ${name} — ${type} on ${date}`;
  const body = `
  <html>
  <body style="background-color: #FAF7F2; font-family: 'Arial', sans-serif; padding: 40px 20px; color: #231F20;">
    <div style="max-width: 600px; margin: 0 auto; background: #FFF; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      
      <!-- Header -->
      <div style="background: #231F20; padding: 30px; text-align: center;">
        <h2 style="color: #FFF; margin: 0; font-weight: 300; letter-spacing: 2px;">NEW QUOTE REQUEST</h2>
        <p style="color: #FF2D78; margin: 5px 0 0; font-size: 14px; letter-spacing: 1px; text-transform: uppercase;">Zetanova Console</p>
      </div>

      <!-- Details -->
      <div style="padding: 30px;">
        <table style="width: 100%; margin-bottom: 30px; font-size: 14px;">
          <tr><td style="padding: 4px 0; color:#888; width:100px;">Client:</td><td style="font-weight:bold;">${name}</td></tr>
          <tr><td style="padding: 4px 0; color:#888;">Phone:</td><td style="font-weight:bold;">${phone}</td></tr>
          <tr><td style="padding: 4px 0; color:#888;">Event:</td><td style="font-weight:bold;">${type}</td></tr>
          <tr><td style="padding: 4px 0; color:#888;">Date:</td><td style="font-weight:bold;">${date}</td></tr>
          <tr><td style="padding: 4px 0; color:#888;">Duration:</td><td style="font-weight:bold;">${dur} day(s)</td></tr>
        </table>

        <h3 style="margin: 0 0 15px; font-size: 16px; border-bottom: 2px solid #231F20; padding-bottom: 8px;">Requested Items</h3>
        <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin-bottom: 30px;">
          <thead>
            <tr>
              <th style="padding: 10px 12px; text-align: left; background: #F9F9F9; color:#888; font-weight:normal;">Item</th>
              <th style="padding: 10px 12px; text-align: center; background: #F9F9F9; color:#888; font-weight:normal;">Qty</th>
              <th style="padding: 10px 12px; text-align: right; background: #F9F9F9; color:#888; font-weight:normal;">Line Total</th>
            </tr>
          </thead>
          <tbody>
            ${itemLines}
          </tbody>
        </table>

        <!-- Totals -->
        <div style="background: #FAF7F2; padding: 20px; border-radius: 8px;">
          <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 14px;">
            <span style="color:#888;">Subtotal:</span>
            <strong>LKR ${subtotal.toLocaleString()}</strong>
          </div>
          <div style="display: flex; justify-content: space-between; margin-bottom: 15px; font-size: 14px;">
            <span style="color:#888;">Duration Multiplier:</span>
            <strong>× ${dur}</strong>
          </div>
          <div style="display: flex; justify-content: space-between; border-top: 1px solid #DDD; padding-top: 15px; font-size: 18px;">
            <span style="font-weight: bold;">Estimated Total:</span>
            <strong style="color: #FF2D78;">LKR ${grand.toLocaleString()}</strong>
          </div>
        </div>

      </div>
    </div>
  </body>
  </html>
  `;

  showToast('⏳ Sending quote...');
  
  fetch('send_quote.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ subject, body })
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      showToast('✓ Quote sent successfully!');
      setTimeout(() => clearAll(), 1500); // Clear after sending
    } else {
      showToast('⚠️ Error: ' + (data.error || 'Failed to send'));
    }
  })
  .catch(err => {
    console.error(err);
    showToast('⚠️ Network error. Please try again.');
  });
}

// ── CLEAR ALL ──
function clearAll() {
  canvasItems = [];
  document.getElementById('clientName').value = '';
  document.getElementById('clientPhone').value = '';
  document.getElementById('eventType').value = '';
  document.getElementById('eventDate').value = '';
  document.getElementById('eventDuration').value = '1';
  renderCanvas();
  renderSummary();
  updateMidName();
  showToast('Board cleared');
}

// ── TOAST ──
function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(t._timer);
  t._timer = setTimeout(() => t.classList.remove('show'), 2200);
}

// ── MOBILE: show bottom bar on scroll ──
if (window.innerWidth <= 768) {
  document.getElementById('mobileTotalBar').style.display = 'none';
}

// ── INIT ──
renderItems();
</script>
</body>
</html>
