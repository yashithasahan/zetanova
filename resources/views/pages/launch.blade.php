<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zetanova Launch</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  body, html { margin: 0; padding: 0; height: 100%; font-family: 'DM Sans', sans-serif; }
  #launch-screen {
    position: fixed; inset: 0; z-index: 999999;
    background: #231F20; color: #FFF;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    transition: opacity 0.8s ease;
  }
  #launch-screen.hide { opacity: 0; pointer-events: none; }
  .launch-logo { width: 120px; margin-bottom: 40px; }
  .launch-title { font-family: 'Cormorant Garamond', serif; font-size: 48px; margin-bottom: 40px; text-align: center;}
  .launch-btn { 
    background: #FF2D78; color: #FFF; border: none; 
    padding: 18px 48px; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; 
    cursor: pointer; transition: background 0.3s;
    text-decoration: none; display: inline-block;
  }
  .launch-btn:hover { background: #FF4D8D; }
</style>
</head>
<body>
<div id="launch-screen">
  <svg class="launch-logo" xmlns="http://www.w3.org/2000/svg" viewBox="268 391.31 59.27 59.27">
    <path style="fill:#FF2D78" d="M279.54,393.21a8.52,8.52,0,0,1,1.5.5,8.17,8.17,0,0,1,3.53,3.1,7.84,7.84,0,0,1,1.1,2.95,8,8,0,0,1-.61,4.65,8.12,8.12,0,0,1-.79,1.37,8.44,8.44,0,0,1-1,1.19,7.91,7.91,0,0,1-1.26,1,8.14,8.14,0,0,1-1.42.7A7.94,7.94,0,0,1,279,409a8.39,8.39,0,0,1-1.58.1,8.24,8.24,0,0,1-1.57-.21,8.12,8.12,0,0,1-2.87-1.3,8.45,8.45,0,0,1-1.19-1,7.83,7.83,0,0,1-1-1.26,8.51,8.51,0,0,1-.7-1.42,8.21,8.21,0,0,1-.4-1.53,7.84,7.84,0,0,1,.1-3.15,7.8,7.8,0,0,1,.51-1.5,8.12,8.12,0,0,1,.79-1.37,8.07,8.07,0,0,1,2.31-2.15,7.49,7.49,0,0,1,1.42-.7,7.84,7.84,0,0,1,1.53-.41A7.59,7.59,0,0,1,278,393,7.42,7.42,0,0,1,279.54,393.21Z"/>
    <path style="fill:#fff;fill-rule:evenodd" d="M277.82,450.15a8.19,8.19,0,0,1-2.36-.32,7.76,7.76,0,0,1-2.17-1,8.14,8.14,0,0,1-1.78-1.58,8.22,8.22,0,0,1-1.25-2,8,8,0,0,1-.59-2.31,7.92,7.92,0,0,1,.11-2.38,8.08,8.08,0,0,1,.79-2.24,8.38,8.38,0,0,1,1.42-1.92l41-41a7.36,7.36,0,0,1,1.22-1,8.24,8.24,0,0,1,1.4-.76,8,8,0,0,1,1.51-.46,7.7,7.7,0,0,1,1.58-.16,8.3,8.3,0,0,1,1.58.15,7.85,7.85,0,0,1,1.52.46,7.24,7.24,0,0,1,1.4.75,7.46,7.46,0,0,1,1.23,1,8.47,8.47,0,0,1,1,1.23,8,8,0,0,1,1.21,2.92,8.13,8.13,0,0,1,0,3.16,8.1,8.1,0,0,1-.47,1.52,7.88,7.88,0,0,1-.75,1.4,8.39,8.39,0,0,1-1,1.22L297.2,434h21.52a8.27,8.27,0,0,1,1.57.15,8.07,8.07,0,0,1,1.52.46,7.46,7.46,0,0,1,1.39.75,7.86,7.86,0,0,1,2.23,2.22,7.88,7.88,0,0,1,.75,1.4,8.88,8.88,0,0,1,.46,1.52,8.27,8.27,0,0,1,.15,1.57,8.37,8.37,0,0,1-.15,1.58,8.78,8.78,0,0,1-.46,1.51,7.54,7.54,0,0,1-.75,1.4,7.83,7.83,0,0,1-1,1.22,8.47,8.47,0,0,1-1.23,1,8.11,8.11,0,0,1-2.91,1.2,8.28,8.28,0,0,1-1.57.16Z"/>
  </svg>
  <div class="launch-title">Welcome to Zetanova</div>
  <a href="https://zetanova.lk" class="launch-btn" id="launchBtn">Launch Website</a>
</div>
<script>
  if (localStorage.getItem('launched') === 'true') {
    window.location.href = "https://zetanova.lk";
  }
  
  document.getElementById('launchBtn').addEventListener('click', function(e) {
    e.preventDefault();
    localStorage.setItem('launched', 'true');
    const screen = document.getElementById('launch-screen');
    screen.classList.add('hide');
    setTimeout(() => {
      window.location.href = "https://zetanova.lk";
    }, 800);
  });
</script>
</body>
</html>
