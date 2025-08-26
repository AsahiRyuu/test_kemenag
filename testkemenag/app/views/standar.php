<?php /* app/views/standar.php */
$sub = $_GET['sub'] ?? null;
?>

<?php if ($sub === null): ?>
  <!-- LANDING: pilih sub-bab -->
  <section class="section-box">
    <h2>Standar Pelayanan</h2>
    <div class="instansi-grid" style="margin-top:16px">
      <a class="instansi-card" href="?page=standar&sub=jadwal">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🕐</div>
        <div>
          <div class="title">Jadwal Pelayanan</div>
          <div class="sub">Jam operasional dan jadwal layanan informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=standar&sub=biaya">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">💰</div>
        <div>
          <div class="title">Biaya/Tarif Layanan</div>
          <div class="sub">Biaya penggandaan dan tarif layanan informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=standar&sub=standar-layanan">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📊</div>
        <div>
          <div class="title">Standar Layanan</div>
          <div class="sub">Indikator dan standar kualitas layanan</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=standar&sub=kebijakan">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🎯</div>
        <div>
          <div class="title">Arah Kebijakan Layanan</div>
          <div class="sub">Kebijakan dan orientasi layanan informasi</div>
        </div>
      </a>

      <!-- NEW: Maklumat Pelayanan -->
      <a class="instansi-card" href="?page=standar&sub=maklumat">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📜</div>
        <div>
          <div class="title">Maklumat Pelayanan</div>
          <div class="sub">Komitmen pelayanan publik</div>
        </div>
      </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=standar&sub=jadwal"            class="<?= $sub==='jadwal'?'active':'' ?>">Jadwal Pelayanan</a>
  <a href="?page=standar&sub=biaya"             class="<?= $sub==='biaya'?'active':'' ?>">Biaya/Tarif Layanan</a>
  <a href="?page=standar&sub=standar-layanan"   class="<?= $sub==='standar-layanan'?'active':'' ?>">Standar Layanan</a>
  <a href="?page=standar&sub=kebijakan"         class="<?= $sub==='kebijakan'?'active':'' ?>">Arah Kebijakan Layanan</a>
  <a href="?page=standar&sub=maklumat"          class="<?= $sub==='maklumat'?'active':'' ?>">Maklumat Pelayanan</a>
  <a href="?page=standar&sub=strategi"          class="<?= $sub==='strategi'?'active':'' ?>">Strategi dan Metode PPEM</a>
</nav>

<?php if ($sub==='jadwal'): ?>
  <section class="card">
    <h2>Jadwal Pelayanan</h2>
    <p>
      Layanan permohonan informasi pada PPID Kantor Kementerian Agama Kabupaten Jombang
      dilaksanakan pada hari kerja, mulai Senin sampai dengan Jumat, dengan ketentuan
      waktu sebagai berikut:
    </p>

    <div class="table-responsive">
      <table class="schedule-table">
        <thead>
          <tr><th class="group" colspan="2">Senin – Kamis</th></tr>
        </thead>
        <tbody>
          <tr>
            <td class="label">Jam Layanan</td>
            <td class="value">: 08.00 WIB – 15.00 WIB</td>
          </tr>
          <tr>
            <td class="label">Istirahat, Shalat, Makan</td>
            <td class="value">: 12.00 WIB – 13.00 WIB</td>
          </tr>
        </tbody>

        <thead>
          <tr><th class="group" colspan="2">Jumat</th></tr>
        </thead>
        <tbody>
          <tr>
            <td class="label">Jam Layanan</td>
            <td class="value">: 08.00 WIB – 15.00 WIB</td>
          </tr>
          <tr>
            <td class="label">Istirahat, Shalat, Makan</td>
            <td class="value">: 11.00 WIB – 13.00 WIB</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

<?php elseif ($sub==='biaya'): ?>
  <section class="card">
    <p>
      PPID Kantor Kementerian Agama Kabupaten Jombang menyediakan informasi publik secara gratis
      (tidak dipungut biaya). Adapun untuk penggandaan atau perekaman, pemohon/pengguna informasi publik
      dapat melakukan penggandaan/fotokopi sendiri di sekitar gedung Kementerian Agama atau
      menyediakan CD/DVD kosong atau flashdisk untuk perekaman data dan informasinya.
    </p>
  </section>

<?php elseif ($sub==='standar-layanan'): ?>
  <!-- FIX: dibungkus <section class="card"> dan tidak ada </section> nyasar -->
  <section class="card">
    <?php
      // === Lampiran PDF Standar Layanan ===
      // Pakai NAMA FILE yang ada di folder /public/assets/file
      $pdfName = 'Standar Pelayanan 2024.pdf'; // <-- ganti kalau beda
      $pdfFs   = __DIR__ . '/../../public/assets/file/' . $pdfName; // path di server
      $pdfUrl  = asset('file/' . rawurlencode($pdfName));          // URL untuk browser
    ?>

    <div class="std-section">
      <h3>Lampiran Dokumen</h3>

      <?php if (file_exists($pdfFs) && is_file($pdfFs)): ?>
        <div class="meta-right" style="margin-bottom:8px; gap:8px;">
          <a class="btn btn-outline" target="_blank" rel="noopener" href="<?= $pdfUrl ?>">Buka di Tab Baru</a>
          <a class="btn btn-primary" download href="<?= $pdfUrl ?>">Unduh PDF</a>
        </div>

        <!-- Pratinjau PDF -->
        <iframe
          src="<?= $pdfUrl ?>#view=FitH"
          style="width:100%;height:720px;border:1px solid var(--line);border-radius:12px"
        ></iframe>
      <?php else: ?>
        <p class="muted">
          File <code><?= htmlspecialchars($pdfName) ?></code> belum ditemukan di folder
          <code>/public/assets/file</code>.
        </p>
      <?php endif; ?>
    </div>
  </section>

<?php elseif ($sub==='kebijakan'): ?>
  <section class="card">
    <ol>
      <li>
        <p><strong>Menetapkan dan menunjuk Pejabat Pengelola Informasi dan Dokumentasi (PPID)</strong> di lingkungan Kanwil Kemenag Kab. Jombang, antara lain:</p>
        <ul>
          <li>Atasan PPID Unit</li>
          <li>PPID Unit</li>
          <li>Bidang Pelayanan Informasi, Dokumentasi, dan Arsip</li>
          <li>Bidang Pengelolaan Informasi</li>
          <li>Bidang Pengaduan dan Penyelesaian Sengketa</li>
          <li>Pejabat Fungsional Tertentu</li>
        </ul>
      </li>

      <li>
        <p><strong>Menyusun strategi</strong> serta metode pembinaan, pengawasan, pemantauan, dan evaluasi terhadap pelaksanaan kebijakan pelayanan informasi publik.</p>
      </li>

      <li>
        <p><strong>Mengimplementasikan layanan informasi publik</strong> sesuai dengan ketentuan yang berlaku.</p>
      </li>

      <li>
        <p><strong>Memberikan respon terhadap keberatan</strong> yang diajukan oleh pemohon informasi terkait layanan informasi publik.</p>
      </li>

      <li>
        <p><strong>Menerapkan prinsip-prinsip layanan informasi publik</strong>, yaitu:</p>
        <ul>
          <li>Memberikan layanan secara cepat</li>
          <li>Menyampaikan informasi tepat waktu</li>
          <li>Biaya layanan bersifat ringan dan proporsional</li>
          <li>Prosedur penyampaian informasi dibuat sederhana</li>
          <li>Informasi yang dikecualikan diatur secara ketat dan terbatas</li>
        </ul>
      </li>
    </ol>
  </section>

<?php elseif ($sub==='maklumat'): ?>
  <section class="card" style="padding:24px">
    <h2 style="margin:0 0 12px; text-align:center;">Maklumat Pelayanan</h2>

    <p style="margin:0; text-align:center; text-transform:uppercase; line-height:1.8; font-weight:700;">
      Dengan ini, kami segenap karyawan/karyawati Kantor Kementerian Agama Kabupaten Jombang, 
      menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang ditetapkan, 
      apabila tidak menepati janji ini kami siap menerima sanksi sesuai peraturan 
      perundang-undangan yang berlaku.
    </p>
  </section>


<?php elseif ($sub==='strategi'): ?>
  <!-- Judul sub: tanpa garis hijau -->
  <section class="card" style="margin-bottom:12px">
    <h2 style="margin:0;border:0 !important;padding-bottom:0;box-shadow:none !important;background-image:none !important"> 
      <center> Strategi dan Metode Pembinaan, Pengawasan, Evaluasi, dan Monitoring atas Pelaksanaan </center> <center>  Kebijakan Informasi Publik</center>
  </section>

  <!-- Policy blocks -->
  <section class="policy">
    <div class="policy-block is-blue">
      <div class="policy-head">
        <span class="num">1</span>
        <span>Strategi dan Metode Pembinaan</span>
      </div>
      <div class="policy-body">
        <ul class="list">
          <li><strong>Pelatihan dan Workshop:</strong> Menyelenggarakan pelatihan untuk meningkatkan pemahaman PPID dan petugas terkait peraturan dan praktik terbaik dalam pengelolaan informasi publik.</li>
          <li><strong>Penyusunan Panduan Kerja:</strong> Membuat panduan operasional untuk PPID Pelaksana dan Petugas Layanan Informasi mengenai tugas dan tanggung jawab mereka.</li>
          <li><strong>Sosialisasi Kebijakan:</strong> Melakukan sosialisasi berkala mengenai kebijakan informasi publik untuk meningkatkan kesadaran dan pemahaman.</li>
        </ul>
      </div>
    </div>

    <div class="policy-block is-green">
      <div class="policy-head">
        <span class="num">2</span>
        <span>Strategi dan Metode Pengawasan</span>
      </div>
      <div class="policy-body">
        <ul class="list">
          <li><strong>Audit Berkala:</strong> Melakukan audit rutin terhadap pelaksanaan kebijakan informasi publik untuk memastikan kepatuhan terhadap peraturan yang berlaku.</li>
          <li><strong>Pengawasan Internal:</strong> Membentuk tim pengawasan yang terdiri dari anggota internal untuk memantau dan mengevaluasi kinerja PPID secara berkala.</li>
          <li><strong>Sistem Pelaporan:</strong> Mengimplementasikan sistem pelaporan yang memudahkan masyarakat untuk melaporkan ketidakpuasan atau masalah yang dihadapi dalam mengakses informasi publik.</li>
        </ul>
      </div>
    </div>

    <div class="policy-block is-cyan">
      <div class="policy-head">
        <span class="num">3</span>
        <span>Strategi dan Metode Monitoring</span>
      </div>
      <div class="policy-body">
        <ul class="list">
          <li><strong>Sistem Informasi Manajemen:</strong> Mengembangkan sistem informasi manajemen untuk memantau alur permohonan informasi publik dan menilai kinerja petugas.</li>
          <li><strong>Feedback dari Masyarakat:</strong> Mengumpulkan umpan balik dari masyarakat untuk mendapatkan insight mengenai pengalaman mereka dalam mengakses informasi.</li>
          <li><strong>Laporan Berkala:</strong> Membuat laporan berkala mengenai aktivitas PPID dan analisis tren permohonan informasi untuk mengidentifikasi area yang perlu diperbaiki.</li>
        </ul>
      </div>
    </div>

    <div class="policy-block is-orange">
      <div class="policy-head">
        <span class="num">4</span>
        <span>Strategi dan Metode Evaluasi</span>
      </div>
      <div class="policy-body">
        <ul class="list">
          <li><strong>Kinerja Kualitatif dan Kuantitatif:</strong> Menentukan indikator kinerja utama (IKU) untuk mengevaluasi efektivitas layanan informasi publik.</li>
          <li><strong>Survei Kepuasan Publik:</strong> Melakukan survei secara berkala untuk mengukur kepuasan masyarakat terhadap layanan informasi publik yang diberikan.</li>
          <li><strong>Reviu Tahunan:</strong> Melakukan reviu tahunan untuk mengevaluasi capaian, tantangan, dan rekomendasi perbaikan.</li>
        </ul>
      </div>
    </div>

    <div class="policy-block is-purple">
      <div class="policy-head">
        <span class="num">5</span>
        <span>Peningkatan Kapasitas</span>
      </div>
      <div class="policy-body">
        <ul class="list">
          <li><strong>Kolaborasi dengan Stakeholder:</strong> Menjalin kerja sama dengan lembaga lain dan organisasi non-pemerintah untuk berbagi pengalaman dan praktik baik dalam pengelolaan informasi publik.</li>
          <li><strong>Inovasi Teknologi:</strong> Memanfaatkan teknologi informasi untuk mempermudah akses masyarakat terhadap informasi publik, seperti portal online atau aplikasi mobile.</li>
        </ul>
      </div>
    </div>
  </section>
<?php endif; ?>
