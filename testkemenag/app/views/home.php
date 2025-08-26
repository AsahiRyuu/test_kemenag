<?php /* app/views/home.php */ ?>

<!-- HERO: foto dipasang via <img>, bukan di CSS -->
<section class="hero-banner">
  <!-- foto background -->
  <img class="hero-bgimg" src="<?= asset('img/ptsp.jpg') ?>" alt="Foto PTSP Kemenag Jombang">

  <!-- teks di atas foto 
  <div class="hero-overlay">
    <h1 class="hero-title">PPID KEMENAG</h1>
    <p class="hero-sub">JOMBANG</p>
  </div> -->
</section>

<div class="ticker" role="region" aria-label="Pengumuman">
  <div class="ticker-left">🔔 Pengumuman</div>

  <div class="ticker-content">
    <div class="ticker-track">
      <span>Selasa, 22 Juli 2025 — Seleksi Administrasi PPG Dalam Jabatan Bagi Guru Madrasah Batch-II</span>
      <!-- Tambah satu lagi kalau mau animasinya mulus terus -->
      <!-- <span>Pengumuman kedua…</span> -->
    </div>
  </div>

  <div class="ticker-right"></div>
</div>

<div class="layout">
  <div class="content">
    <h2 class="section-title"><span>INFORMASI INSTANSI</span></h2>

    <div class="instansi-grid">
      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-profil.svg') ?>" alt="Ikon Profil PPID">
        <div>
          <div class="title">Informasi 1</div>
          <div class="sub">Tentang PPID, Struktur, Visi & Misi, Tugas & Fungsi</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-info.svg') ?>" alt="Ikon Informasi Publik">
        <div>
          <div class="title">Informasi 2</div>
          <div class="sub">Berkala · Serta Merta · Setiap Saat</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-layanan.svg') ?>" alt="Ikon Layanan Informasi">
        <div>
          <div class="title">Informasi 3</div>
          <div class="sub">Permohonan · Keberatan · Sengketa · SOP</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-standar.svg') ?>" alt="Ikon Standar Layanan">
        <div>
          <div class="title">Informasi 4</div>
          <div class="sub">Maklumat · Jadwal · Biaya/Tarif · Standar Pengumuman</div>
        </div>
      </a>
    </div>

    <h2 class="section-title with-pill">
      <span>BERITA UTAMA</span><span class="pill">Berita Utama</span>
    </h2>
    <div class="news-placeholder" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; margin-bottom: 16px;">
        <svg style="width: 32px; height: 32px; color: white;" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
        </svg>
      </div>
      <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600; color: #1e293b;">Berita Terkini</h3>
      <p style="color: #64748b; margin: 0; font-size: 14px; line-height: 1.5;">Area berita akan menampilkan informasi terbaru dari Kementerian Agama Kabupaten Jombang.</p>
    </div>
  </div>

  <aside class="sidebar">
    <div class="widget" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
      <h3 style="margin: 0 0 12px; font-size: 16px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
        <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 50%; color: white; font-size: 12px;">📊</span>
        Jajak Pendapat
      </h3>
      <p style="color: #64748b; margin: 0; font-size: 14px; line-height: 1.5;">Jajak Pendapat telah ditutup..!</p>
    </div>

    <div class="widget" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
      <h3 style="margin: 0 0 12px; font-size: 16px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
        <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border-radius: 50%; color: white; font-size: 12px;">🎥</span>
        Video
      </h3>
      <div class="video-thumb" style="position: relative; background: linear-gradient(135deg, #e7eef5 0%, #f1f5f9 100%); height: 170px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 2px solid #e2e8f0; overflow: hidden;">
        <div class="play" style="display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; color: white; font-size: 24px; box-shadow: 0 4px 12px rgba(59,130,246,0.3); transition: all 0.3s ease;">▶</div>
      </div>
      <a class="btn" href="#" style="display: inline-block; margin-top: 12px; padding: 10px 16px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none; border-radius: 10px; font-weight: 600; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">Lihat Semua Video →</a>
    </div>

    <div class="widget" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 20px; box-shadow: 0 4px 16px rgba(0,0,0,0.08);">
      <h3 style="margin: 0 0 12px; font-size: 16px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
        <span style="display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border-radius: 50%; color: white; font-size: 12px;">📈</span>
        Info Grafis
      </h3>
      <div style="border-radius: 12px; overflow: hidden; border: 2px solid #e2e8f0;">
        <img class="infografis" src="<?= asset('img/infografis-placeholder.png') ?>" alt="Info grafis" style="width: 100%; height: auto; display: block;">
      </div>
    </div>
  </aside>
</div>
