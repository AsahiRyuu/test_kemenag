<?php /* app/views/partials/header.php */ 
// ==== Session untuk kontrol hit 1x per sesi ====
// Pastikan cookie sesi berakhir saat browser ditutup (lifetime = 0)
if (session_status() === PHP_SESSION_NONE) {
  session_set_cookie_params(0);
  session_start();
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title ?? 'PPID Kemenag Jatim') ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

  <!-- Sedikit styling untuk badge kunjungan -->
  <style>
    .info-right { display:flex; align-items:center; gap:12px; }
    .visit-counter {
      display:inline-flex; align-items:center; gap:6px;
      padding:4px 10px; border-radius:999px; font-weight:600;
      background:#eaf2ff; color:#0b3b8c;
    }
    .visit-counter svg { width:18px; height:18px; display:block; }
    .dark .visit-counter { background:#1f2937; color:#e5e7eb; }
  </style>

  <script src="<?= asset('js/font-adjuster.js') ?>" defer></script>
  <script src="<?= asset('js/dark-mode.js') ?>" defer></script>

  <!-- Favicon (pakai logo yang sama) -->
  <link rel="icon" href="<?= asset('img/logo-kemenag.png') ?>" type="image/png">
</head>
<body>
<?php
  // zona waktu & helper tanggal Indonesia
  date_default_timezone_set('Asia/Jakarta');
  function indo_date(?DateTime $dt=null): string {
    $dt = $dt ?: new DateTime('now');
    $hari = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
    $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    return $hari[(int)$dt->format('w')] . ', ' . $dt->format('j') . ' ' . $bulan[(int)$dt->format('n')-1] . ' ' . $dt->format('Y');
  }

  $currPage = $_GET['page'] ?? 'home';
  $currSub = $_GET['sub'] ?? null;
  $currJenis = $_GET['jenis'] ?? null;

  /* =======================
   * COUNTER KUNJUNGAN SITE
   * Kriteria:
   * - Hanya hit saat berada di HOME (page home / default).
   * - Hanya 1x per sesi (tidak bertambah saat spam klik).
   * - Bertambah lagi jika user tutup browser lalu buka lagi (sesi baru).
   * ======================= */
  $visitCount = 0;
  $counterFile = __DIR__ . '/../../storage/visits.count'; 
  $counterDir  = dirname($counterFile);

  if (!is_dir($counterDir)) {
    @mkdir($counterDir, 0775, true);
  }


  $isHome = !isset($_GET['page']) || $_GET['page'] === '' || $_GET['page'] === 'home';
  $shouldCount = $isHome && empty($_SESSION['visit_counted_home']);

  $fh = @fopen($counterFile, 'c+'); 
  if ($fh) {
    if (flock($fh, LOCK_EX)) {
      $contents = stream_get_contents($fh);
      $visitCount = (int)trim($contents);

      if ($shouldCount) {
        $visitCount++;
        ftruncate($fh, 0);
        rewind($fh);
        fwrite($fh, (string)$visitCount);
        fflush($fh);
        $_SESSION['visit_counted_home'] = true;
      }
      flock($fh, LOCK_UN);
    } else {
      $visitCount = (int)trim(@file_get_contents($counterFile));   
    }
    fclose($fh);
  } else {
    if ($shouldCount && @file_put_contents($counterFile, '1') !== false) {
      $visitCount = 1;
      $_SESSION['visit_counted_home'] = true;
    } else {      
      $visitCount = (int)@file_get_contents($counterFile);
    }
  }

  
  $visitCountDisplay = number_format($visitCount, 0, ',', '.');
?>


<div class="info-bar">
  <div class="container">
    <div class="info-left">
      <span id="infobar-date"><?= indo_date() ?></span>
      <span class="info-sep">•</span>
      <span id="infobar-time"><?= date('H:i') ?> WIB</span>
    </div>
    <div class="info-right">
      <div class="visit-counter" aria-label="Jumlah kunjungan" title="Jumlah kunjungan">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" />
        </svg>
        <span><?= $visitCountDisplay ?></span>
      </div>

      
      <div class="accessibility-controls">        
        <div class="font-controls">
          <button id="font-decrease" class="accessibility-btn" aria-label="Perkecil ukuran font" title="Perkecil ukuran font">A-</button>
          <button id="font-increase" class="accessibility-btn" aria-label="Perbesar ukuran font" title="Perbesar ukuran font">A+</button>
        </div>
        
        <button id="dark-mode-toggle" class="accessibility-btn dark-toggle" aria-label="Toggle dark mode" title="Toggle dark mode">
          <div class="toggle-slider">
            <span class="light-icon">🌞</span>
            <span class="dark-icon">🌙</span>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>

<header class="topbar topbar">
  <div class="container">
    <div class="header-inner">
      <a class="brand" href="?page=home">
        <img class="logo" src="<?= asset('img/logo-kemenag.png') ?>" alt="Logo Kemenag">
        <div class="brand-text">
          <strong>PPID UNIT</strong>
          <span>Kanwil Kementrian Agama <br>Kabupaten Jombang</span>
        </div>
      </a>

      <button class="nav-toggle" aria-label="Buka menu" onclick="toggleNav()">☰</button>

      <nav id="mainnav" class="nav" aria-label="Menu utama">
        <a href="?page=home" class="<?= $currPage==='home' ? 'active' : '' ?>">BERANDA</a>
        <a href="?page=profil" class="<?= $currPage==='profil' ? 'active' : '' ?>">PROFIL</a>
        <a href="?page=informasi" class="<?= $currPage==='informasi' ? 'active' : '' ?>">INFORMASI PUBLIK</a>
        <a href="?page=regulasi" class="<?= $currPage==='regulasi' ? 'active' : '' ?>">REGULASI</a>
        <a href="?page=layanan" class="<?= $currPage==='layanan' ? 'active' : '' ?>">LAYANAN INFORMASI</a>
        <a href="?page=standar" class="<?= $currPage==='standar' ? 'active' : '' ?>">STANDAR LAYANAN</a>
      </nav>
    </div>
  </div>
</header>


<main class="container" style="margin-top:20px;">

<script>
  
  function toggleNav(){
    document.getElementById('mainnav').classList.toggle('open');
  }

 
  (function(){
    var el = document.getElementById('infobar-time');
    if(!el) return;
    function two(n){return n<10?'0'+n:n;}
    function tick(){
      var d=new Date();
      el.textContent = two(d.getHours())+':'+two(d.getMinutes())+' WIB';
    }
    setInterval(tick,30000);
  })();
</script>
