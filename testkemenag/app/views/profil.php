<?php /* app/views/profil.php */
$sub = $_GET['sub'] ?? null; // null = landing, selain itu = sub-bab
?>

<?php if ($sub === null): ?>
  <!-- LANDING: kartu pilihan sub-bab -->
  <section class="section-box">
    <h2>Profil PPID</h2>
    <div class="instansi-grid" style="margin-top:16px">
      <a class="instansi-card" href="?page=profil&sub=tentang">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📋</div>
        <div>
          <div class="title">Tentang PPID</div>
          <div class="sub">Ringkasan profil & mandat PPID</div>
        </div>
      </a>
      <a class="instansi-card" href="?page=profil&sub=pejabat">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">👤</div>
        <div>
          <div class="title">Profil Pejabat</div>
          <div class="sub">Nama, jabatan, & kontak</div>
        </div>
      </a>
      <a class="instansi-card" href="?page=profil&sub=struktur">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🏗️</div>
        <div>
          <div class="title">Struktur Organisasi</div>
          <div class="sub">Bagan organisasi PPID</div>
        </div>
      </a>
      <a class="instansi-card" href="?page=profil&sub=visi-misi">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🎯</div>
        <div>
          <div class="title">Visi & Misi</div>
          <div class="sub">Arah & tujuan layanan informasi</div>
        </div>
      </a>
      <a class="instansi-card" href="?page=profil&sub=tugas">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">⚙️</div>
        <div>
          <div class="title">Tugas & Fungsi</div>
          <div class="sub">Uraian tugas & fungsi utama</div>
        </div>
      </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- ================= SUB-BAB ================= -->

<?php if ($sub==='tentang'): ?>
  <nav class="tabs subnav" style="margin-top:8px">
    <a href="?page=profil&sub=tentang" class="active">Tentang PPID</a>
    <a href="?page=profil&sub=pejabat">Profil Pejabat</a>
    <a href="?page=profil&sub=visi-misi">Visi & Misi</a>
    <a href="?page=profil&sub=struktur">Struktur Organisasi</a>
    <a href="?page=profil&sub=tugas">Tugas & Fungsi</a>
  </nav>

  <!-- Satu kolom memanjang (scroll ke bawah) -->
  <section class="card std-section">
    <h2>Peraturan:</h2>
    <ul class="list">
      <li>Undang-Undang (UU) Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik;</li>
      <li>Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2010 tentang Standar Layanan Informasi Publik (SLIP);</li>
      <li>Peraturan Pemerintah (PP) Nomor 61 Tahun 2010 tentang Keterbukaan Informasi Publik;</li>
      <li>Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik;</li>
      <li>Peraturan Mahkamah Agung RI (Perma) Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan;</li>
      <li>Keputusan Ketua Mahkamah Agung (KMA) Nomor 085 Tahun 2011 tentang Pembentukan Kelompok Kerja Penyusunan Peraturan Mahkamah Agung terkait perkara TUN atas Putusan Komisi Informasi;</li>
      <li>Keputusan Menteri Agama (KMA) Nomor 533 Tahun 2018 tentang Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama;</li>
      <li>Keputusan Menteri Agama (KMA) Nomor 92 Tahun 2019 tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama.</li>
    </ul>

    <h2 style="margin-top:16px">Rancangan Peraturan:</h2>
    <ul class="list">
      <li>Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi;</li>
      <li>Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama.</li>
      <li>Peraturan Pemerintah (PP) Nomor 61 Tahun 2010 tentang Keterbukaan Informasi Publik;</li>
      <li>Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik;</li>
      <li>Peraturan Mahkamah Agung RI (Perma) Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan;</li>
      <li>Keputusan Ketua Mahkamah Agung (KMA) Nomor 085 Tahun 2011 tentang Pembentukan Kelompok Kerja Penyusunan Peraturan Mahkamah Agung terkait perkara TUN atas Putusan Komisi Informasi Pada Pengadilan Tata Usaha Negara dan/atau Pengadilan Negeri;</li>
      <li>Keputusan Menteri Agama (KMA) Nomor 533 Tahun 2018 tentang Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama;</li>
      <li>Keputusan Menteri Agama (KMA) Nomor 92 Tahun 2019 tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama.</li>
    </ul>

    <h2 style="margin-top:16px">Rancangan Peraturan:</h2>
    <ul class="list">
      <li>Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pejabat Pengelola Informasi dan Dokumentasi;</li>
      <li>Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama.</li>
    </ul>
  </section>

<?php elseif ($sub==='pejabat'): ?>
  <nav class="tabs subnav" style="margin-top:8px">
    <a href="?page=profil&sub=tentang">Tentang PPID</a>
    <a href="?page=profil&sub=pejabat" class="active">Profil Pejabat</a>
    <a href="?page=profil&sub=visi-misi">Visi & Misi</a>
    <a href="?page=profil&sub=struktur">Struktur Organisasi</a>
    <a href="?page=profil&sub=tugas">Tugas & Fungsi</a>
  </nav>

  <!-- Tambahan konten sesuai halaman contoh -->
  <section class="card std-section">
    <h2>Dasar Hukum</h2>
    <p>
      Keputusan Menteri Agama (KMA) Nomor 657 Tahun 2021 tentang Pejabat Pengelola Informasi dan Dokumentasi
      Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama.
    </p>

    <h2 style="margin-top:16px">Data Unit PPID</h2>
    <table style="width:100%;border-collapse:collapse;margin-top:8px">
      <tbody>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb;width:28%">Atasan PPID</th>
          <td style="padding:10px;border:1px solid #e5e7eb">Kepala Kantor Wilayah Kementerian Agama Provinsi Jawa Timur</td>
        </tr>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb">PPID</th>
          <td style="padding:10px;border:1px solid #e5e7eb">Kepala Bagian Tata Usaha Kantor Wilayah Kementerian Agama Provinsi Jawa Timur</td>
        </tr>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb">Alamat</th>
          <td style="padding:10px;border:1px solid #e5e7eb">
            Jl. Raya Bandara Juanda No.26, Semalang, Semambung, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61253
          </td>
        </tr>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb">Telepon</th>
          <td style="padding:10px;border:1px solid #e5e7eb">(031) 8686014</td>
        </tr>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb">Email</th>
          <td style="padding:10px;border:1px solid #e5e7eb">kanwiljatim@kemenag.go.id</td>
        </tr>
        <tr>
          <th style="text-align:left;vertical-align:top;padding:10px;border:1px solid #e5e7eb">Website</th>
          <td style="padding:10px;border:1px solid #e5e7eb">
            <a href="https://ppid.kemenagjatim.id" target="_blank" rel="noopener">ppid.kemenagjatim.id</a>
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Konten lama kamu tetap ada -->
  <section class="columns-2" style="margin-top:20px">
    <div class="card"><h2>Kepala PPID</h2><p>Nama, jabatan, kontak…</p></div>
    <div class="card"><h2>PPID Pelaksana</h2><p>Nama, jabatan, unit…</p></div>
  </section>



  <?php elseif ($sub==='visi-misi'): ?>
  <nav class="tabs subnav" style="margin-top:8px">
    <a href="?page=profil&sub=tentang">Tentang PPID</a>
    <a href="?page=profil&sub=pejabat">Profil Pejabat</a>
    <a href="?page=profil&sub=visi-misi" class="active">Visi & Misi</a>
    <a href="?page=profil&sub=struktur">Struktur Organisasi</a>
    <a href="?page=profil&sub=tugas">Tugas & Fungsi</a>
  </nav>

<section class="vimi-wrap">
  <h2 class="vimi-title">VISI</h2>
  <div class="visi-hero">
    <ol class="quote">Terwujudnya Pelayanan Informasi yang Akuntabel</ol>
  </div>

  <h2 class="vimi-title">MISI</h2>
  <div class="misi-card">
    <div class="misi-inner">Meningkatkan layanan informasi yang cepat, tepat, dan transparan</div>
  </div>
  <div class="misi-card">
    <div class="misi-inner">Meningkatkan kompetensi SDM pelayanan informasi</div>
  </div>
  <div class="misi-card">
    <div class="misi-inner">Penguatan koordinasi antar PPID/ID lintas sektoral</div>
  </div>

  <h2 class="vimi-title">MOTTO</h2>
  <div class="visi-hero">
    <ol class="quote">Melayani dengan ikhlas</ol>
  </div>
</section>


<?php elseif ($sub==='struktur'): ?>
  <nav class="tabs subnav" style="margin-top:8px">
    <a href="?page=profil&sub=tentang">Tentang PPID</a>
    <a href="?page=profil&sub=pejabat">Profil Pejabat</a>
    <a href="?page=profil&sub=visi-misi">Visi & Misi</a>
    <a href="?page=profil&sub=struktur" class="active">Struktur Organisasi</a>
    <a href="?page=profil&sub=tugas">Tugas & Fungsi</a>
  </nav>
  <section class="card">
    <h2>Struktur Organisasi PPID</h2>
    <div style="background:#f8f9fa;border:2px dashed #dee2e6;border-radius:12px;padding:40px;text-align:center;color:#6c757d">
      <div style="font-size:48px;margin-bottom:16px">🏛️</div>
      <h3 style="margin:0 0 8px;color:#495057">Struktur Organisasi</h3>
      <p style="margin:0;font-size:14px">Gambar struktur organisasi akan ditampilkan di sini</p>
    </div>
  </section>

<?php else: /* tugas */ ?>
  <nav class="tabs subnav" style="margin-top:8px">
    <a href="?page=profil&sub=tentang">Tentang PPID</a>
    <a href="?page=profil&sub=pejabat">Profil Pejabat</a>
    <a href="?page=profil&sub=visi-misi">Visi & Misi</a>
    <a href="?page=profil&sub=struktur">Struktur Organisasi</a>
    <a href="?page=profil&sub=tugas" class="active">Tugas & Fungsi</a>
  </nav>

  <section class="columns-2">
    <div class="card">
      <h2>Tugas</h2>
      <ul class="list">
        <li>Menyediakan dan mengamankan Informasi Publik.</li>
        <li>Memberikan pelayanan Informasi Publik yang cepat, tepat, dan sederhana.</li>
        <li>Menyusun SOP pelaksanaan tugas dan kewenangan PPID serta penyebarluasan Informasi Publik.</li>
        <li>Melakukan pengumpulan seluruh Informasi Publik yang meliputi:
          informasi yang wajib diumumkan secara berkala, serta-merta, dan setiap saat.</li>
        <li>Melakukan pengumpulan Informasi Publik yang dikecualikan.</li>
        <li>Melakukan pengumuman Informasi Publik melalui media yang efektif dan efisien.</li>
        <li>Menyampaikan Informasi Publik dalam bahasa Indonesia yang baik, benar, dan mudah dipahami.</li>
        <li>Memenuhi permohonan Informasi Publik yang dapat diakses oleh publik.</li>
        <li>Menetapkan dan menugaskan petugas layanan informasi untuk pelaksanaan layanan.</li>
        <li>Mengembangkan kompetensi petugas layanan informasi.</li>
        <li>Menyediakan sarana/prasarana layanan informasi yang didukung teknologi untuk layanan cepat dan tepat waktu.</li>
      </ul>
    </div>

    <div class="card">
      <h2>Fungsi</h2>
      <ul class="list">
        <li>Koordinasi pengelolaan dan pendokumentasian Informasi Publik pada satuan kerja.</li>
        <li>Penyediaan, pendistribusian, dan/atau publikasi Informasi Publik.</li>
        <li>Verifikasi dan validasi informasi sebelum dipublikasikan.</li>
        <li>Perlindungan Informasi Publik yang dikecualikan sesuai ketentuan.</li>
        <li>Penyelenggaraan layanan permohonan, keberatan, dan dukungan penyelesaian sengketa informasi.</li>
      <li>Pembinaan, monitoring, dan evaluasi layanan informasi di lingkungan unit kerja.</li>
        <li>Penyusunan dan pemutakhiran DIP (Daftar Informasi Publik) dan DIK (Daftar Informasi Dikecualikan).</li>
        <li>Penyusunan laporan layanan Informasi Publik secara berkala.</li>
      </ul>
    </div>
  </section>
<?php endif; ?>
