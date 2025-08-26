<?php /* app/views/layanan.php */
$sub = $_GET['sub'] ?? null;
?>

<?php if ($sub === null): ?>
  <!-- LANDING: samakan gaya dengan Standar Layanan -->
  <section class="section-box">
    <h2>Layanan Informasi</h2>

    <div class="instansi-grid" style="margin-top:16px">
      <a class="instansi-card" href="?page=layanan&sub=permohonan">
        <div>📝</div>
        <div>
          <div class="title">Permohonan Informasi</div>
          <div class="sub">Formulir pengajuan permohonan informasi publik</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=keberatan">
        <div>⚠️</div>
        <div>
          <div class="title">Pengajuan Keberatan</div>
          <div class="sub">Pengajuan keberatan atas penolakan informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=sengketa">
        <div>⚖️</div>
        <div>
          <div class="title">Penyelesaian Sengketa</div>
          <div class="sub">Mekanisme penyelesaian sengketa informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=sop">
        <div>📋</div>
        <div>
          <div class="title">SOP Layanan Informasi</div>
          <div class="sub">Standar Operasional Prosedur layanan</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=standar">
        <div>📢</div>
        <div>
          <div class="title">Standar Pengumuman Informasi</div>
          <div class="sub">Standar dan format pengumuman informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=pengaduan">
        <div>📞</div>
        <div>
          <div class="title">Tata Cara Pengaduan Masyarakat</div>
          <div class="sub">Prosedur dan mekanisme pengaduan</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=alasan">
        <div>❓</div>
        <div>
          <div class="title">Alasan Pengajuan Keberatan</div>
          <div class="sub">Dasar dan alasan yang dapat diajukan keberatan</div>
        </div>
      </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=layanan&sub=permohonan" class="<?= $sub==='permohonan'?'active':'' ?>">Permohonan Informasi</a>
  <a href="?page=layanan&sub=keberatan"  class="<?= $sub==='keberatan'?'active':'' ?>">Pengajuan Keberatan</a>
  <a href="?page=layanan&sub=sengketa"   class="<?= $sub==='sengketa'?'active':'' ?>">Penyelesaian Sengketa</a>
  <a href="?page=layanan&sub=sop"        class="<?= $sub==='sop'?'active':'' ?>">SOP Layanan</a>
  <a href="?page=layanan&sub=standar"    class="<?= $sub==='standar'?'active':'' ?>">Standar Pengumuman</a>
  <a href="?page=layanan&sub=pengaduan"  class="<?= $sub==='pengaduan'?'active':'' ?>">Pengaduan Masyarakat</a>
  <a href="?page=layanan&sub=alasan"     class="<?= $sub==='alasan'?'active':'' ?>">Alasan Keberatan</a>
</nav>

<?php if ($sub==='permohonan'): ?>
  <section class="card">
    <p>Silakan isi formulir di bawah ini untuk mengajukan permohonan informasi publik:</p>
    <form class="form" action="#" method="POST">
      <div class="row">
        <label>Nama Lengkap *<input type="text" name="nama" required></label>
        <label>Email *<input type="email" name="email" required></label>
      </div>
      <div class="row">
        <label>No. Telepon<input type="tel" name="telepon"></label>
        <label>Instansi/Organisasi<input type="text" name="instansi"></label>
      </div>
      <label>Alamat Lengkap<textarea name="alamat" rows="3"></textarea></label>
      <label>
        Jenis Informasi yang Diminta *
        <select name="jenis_info" required>
          <option value="">Pilih jenis informasi</option>
          <option value="berkala">Informasi Berkala</option>
          <option value="serta_merta">Informasi Serta Merta</option>
          <option value="setiap_saat">Informasi Setiap Saat</option>
        </select>
      </label>
      <label>
        Rincian Informasi yang Diminta *
        <textarea name="rincian" rows="5" required placeholder="Jelaskan secara detail informasi yang Anda butuhkan..."></textarea>
        <div class="help">Berikan penjelasan yang jelas dan spesifik agar kami dapat membantu dengan tepat</div>
      </label>
      <label>Tujuan Penggunaan Informasi<textarea name="tujuan" rows="3" placeholder="Untuk apa informasi tersebut akan digunakan?"></textarea></label>
      <div class="actions">
        <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
        <button type="reset" class="btn btn-outline">Reset Form</button>
      </div>
    </form>
  </section>

<?php elseif ($sub==='keberatan'): ?>
  <section class="card">
    <h3 style="color: #495057; margin-bottom: 16px;">Tata Cara Pengajuan Keberatan</h3>

    <div class="steps-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 100%;">
      <!-- STEP 1 --> 
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #0ea5a3 0%, #0b7a79 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(14,165,163,0.3);">1</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Ajukan Keberatan</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Melalui website, surat, email, telepon, atau datang langsung ke PTSP Kemenag Jombang.
        </p>
      </div>

      <!-- STEP 2 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(245,158,11,0.3);">2</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Lengkapi Formulir & Dokumen</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Isi formulir keberatan dan lampirkan salinan KTP, surat kuasa (jika diwakilkan), atau bukti badan hukum. Dapatkan tanda bukti dari petugas.
        </p>
      </div>

      <!-- STEP 3 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(16,185,129,0.3);">3</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Tanggapan & Lanjutan</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Tanggapan diberikan paling lambat <strong style="color: #495057;">30 hari kerja</strong>. Jika tidak puas, ajukan sengketa ke <strong>Komisi Informasi Pusat</strong> maksimal <strong style="color: #495057;">14 hari kerja</strong> setelah menerima tanggapan.
        </p>
      </div>
    </div>
  </section>


<?php elseif ($sub==='sengketa'): ?>
  <section class="card">
    <h3 style="color: #495057; margin-bottom: 16px;">Tata Cara Penyelesaian Sengketa</h3>

    <div class="steps-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 100%;">
      <!-- STEP 1 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #0ea5a3 0%, #0b7a79 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(14,165,163,0.3);">1</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Pengajuan Sengketa</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Pemohon dapat mengajukan penyelesaian sengketa informasi publik ke Komisi Informasi apabila tanggapan dari Atasan PPID tidak memuaskan.
        </p>
      </div>

      <!-- STEP 2 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(245,158,11,0.3);">2</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Batas Waktu Pengajuan</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Pengajuan sengketa harus dilakukan paling lambat <strong style="color: #495057;">14 hari kerja</strong> setelah menerima tanggapan tertulis dari Atasan PPID.
        </p>
      </div>

      <!-- STEP 3 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(16,185,129,0.3);">3</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Proses oleh Komisi Informasi</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Komisi Informasi wajib memulai proses penyelesaian melalui mediasi dan/atau ajudikasi nonlitigasi dalam waktu <strong style="color: #495057;">14 hari kerja</strong> sejak menerima permohonan sengketa.
        </p>
      </div>

      <!-- STEP 4 -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(139,92,246,0.3);">4</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Batas Waktu Penyelesaian</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Proses penyelesaian sengketa paling lambat diselesaikan dalam waktu <strong style="color: #495057;">100 hari kerja</strong>.
        </p>
      </div>
    </div>
  </section>



<?php elseif ($sub==='sop'): ?>
  <section class="card">
    <h3>Standar Operasional Prosedur (SOP)</h3>

    <div class="sop-grid">
      <?php
      // Taruh semua PDF di: /public/assets/file/
      $sops = [
        ['file' => '01. SOP Pengelolaan Permohonan Informasi.pdf',       'title' => '01 • Pengelolaan Permohonan Informasi', 'desc' => 'Alur permohonan, verifikasi, dan batas waktu.'],
        ['file' => '02. SOP Pengelolaan Keberatan.pdf',                   'title' => '02 • Pengelolaan Keberatan',            'desc' => 'Penerimaan & tindak lanjut keberatan.'],
        ['file' => '03. SOP Penanganan Sengketa Informasi.pdf',           'title' => '03 • Penanganan Sengketa Informasi',    'desc' => 'Mediasi/ajudikasi non-litigasi.'],
        ['file' => '04. SOP Penetapan dan Pemutakhiran DIP.pdf',          'title' => '04 • Penetapan & Pemutakhiran DIP',     'desc' => 'Daftar Informasi Publik (DIP).'],
        ['file' => '05. SOP Pendokumentasian Informasi Publik.pdf',       'title' => '05 • Pendokumentasian Informasi Publik','desc' => 'Pencatatan & penyimpanan.'],
        ['file' => '06. SOP Pengujian Konsekuensi.pdf',                   'title' => '06 • Pengujian Konsekuensi',            'desc' => 'Uji dampak keterbukaan informasi.'],
        ['file' => '07. SOP Pendokumentasian Informasi yang Dikecualikan.pdf', 'title' => '07 • Dok. Informasi Dikecualikan', 'desc' => 'Pengelolaan informasi dikecualikan.'],
      ];

      $baseFs  = __DIR__ . '/../../public/assets/file/'; // path di server
      foreach ($sops as $doc):
        $fs   = $baseFs . $doc['file'];
        $ok   = file_exists($fs);
        $href = asset('file/' . rawurlencode($doc['file'])); // url ke PDF
      ?>
        <div class="sop-card">
          <div class="sop-icon">PDF</div>
          <div class="sop-content">
            <div class="sop-title"><?= htmlspecialchars($doc['title']) ?></div>
            <div class="sop-desc"><?= htmlspecialchars($doc['desc']) ?></div>

            <div class="sop-actions">
              <?php if ($ok): ?>
                <a class="btn btn-primary" href="<?= $href ?>" target="_blank" rel="noopener">Buka</a>
                <a class="btn btn-outline" href="<?= $href ?>" download>Unduh</a>
              <?php else: ?>
                <span class="muted">File belum ditemukan di <code>/public/assets/file</code></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php elseif ($sub==='standar'): ?>
  <section class="card">
    <h3 style="color: #495057; margin-bottom: 16px;">Standar Pengumuman Informasi</h3>
    <p style="color: #6c757d; margin-bottom: 24px; font-size: 13px; line-height: 1.5;">
      Berlaku untuk Kementerian Agama Pusat, PTKN, Kanwil Kemenag Provinsi, Kankemenag Kab/Kota,
      Balai Litbang Agama, Balai Diklat Keagamaan, dan KUA Kecamatan.
    </p>

    <div class="steps-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 100%;">
      <!-- 1. Waktu -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(59,130,246,0.3);">1</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Waktu Pengumuman</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Pengumuman dilakukan <strong style="color: #495057;">paling lambat 10 hari kerja</strong> sejak Informasi Publik ditetapkan atau disimpulkan.
        </p>
      </div>

      <!-- 2. Media -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(245,158,11,0.3);">2</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Media Penyebarluasan Informasi</h4>
        <ul style="color: #6c757d; font-size: 13px; line-height: 1.5; text-align: left; margin: 0; padding-left: 20px;">
          <li style="margin-bottom: 8px;">Papan pengumuman</li>
          <li style="margin-bottom: 8px;">Laman resmi (website) PPID dan/atau Badan Publik</li>
          <li style="margin-bottom: 8px;">Media sosial PPID dan/atau Badan Publik</li>
          <li style="margin-bottom: 8px;">Portal Satu Data Indonesia</li>
          <li style="margin-bottom: 0;">Aplikasi berbasis teknologi informasi</li>
        </ul>
      </div>

      <!-- 3. Aksesibilitas -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(16,185,129,0.3);">3</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Aksesibilitas bagi Penyandang Disabilitas</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Pengumuman dan penyebarluasan Informasi Publik wajib memperhatikan aksesibilitas bagi penyandang disabilitas.
        </p>
      </div>

      <!-- 4. Format -->
      <div class="step-card" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #e2e8f0; border-radius: 16px; padding: 24px; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: all 0.3s ease; text-align: center;">
        <div style="position: absolute; top: -16px; left: 50%; transform: translateX(-50%); width: 48px; height: 48px; background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; box-shadow: 0 4px 12px rgba(139,92,246,0.3);">4</div>
        <h4 class="step-title" style="margin: 20px 0 10px; font-size: 16px; font-weight: 600; color: #495057;">Format Pengumuman</h4>
        <p class="step-desc" style="color: #6c757d; line-height: 1.5; font-size: 13px; margin: 0;">
          Pengumuman paling sedikit dilengkapi dengan <strong style="color: #495057;">audio</strong>, <strong style="color: #495057;">visual</strong>, dan/atau <strong style="color: #495057;">braille</strong>.
        </p>
      </div>
    </div>
  </section>


<?php elseif ($sub==='pengaduan'): ?>
  <section class="card">
    <h3>Tata Cara Pengaduan Masyarakat</h3>

    <!-- Alur singkat -->
    <div class="flow">
      <div class="flow-step"><span class="num">1</span><span>Siapkan identitas & bukti</span></div>
      <div class="sep"></div>
      <div class="flow-step"><span class="num">2</span><span>Pilih salah satu kanal</span></div>
      <div class="sep"></div>
      <div class="flow-step"><span class="num">3</span><span>Simpan nomor laporan</span></div>
    </div>

    <!-- OFFLINE -->
    <h4 class="group-title" style="margin:10px 0 6px">Offline</h4>
    <div class="channel-list">
      <div class="channel-card">
        <div class="channel-icon">🗣️</div>
        <div class="channel-body">
          <h5 class="channel-title">Lisan Langsung</h5>
          <p class="channel-desc">
            Datang langsung ke Kantor Kementerian Agama Kabupaten Jombang.<br>
            <strong>Alamat:</strong> Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">✉️</div>
        <div class="channel-body">
          <h5 class="channel-title">Melalui Surat (Offline)</h5>
          <p class="channel-desc">
            Ditujukan kepada:<br>
            <strong>Kepala Kantor Kementerian Agama Kabupaten Jombang</strong><br>
            Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>
    </div>

    <!-- ONLINE -->
    <h4 class="group-title" style="margin:16px 0 6px">Online</h4>
    <div class="channel-list">
      <div class="channel-card">
        <div class="channel-icon">☎️</div>
        <div class="channel-body">
          <h5 class="channel-title">Telepon</h5>
          <p class="channel-desc">Sampaikan pengaduan melalui nomor berikut.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-outline" href="tel:+62321861321">0321-861321</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📧</div>
        <div class="channel-body">
          <h5 class="channel-title">Email</h5>
          <p class="channel-desc">Kirimkan pengaduan lengkap ke alamat email ini.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-outline"
             href="mailto:kabjombang@kemenag.go.id?subject=Pengaduan%20Masyarakat%20-%20PPID%20Kemenag%20Jombang">
            kabjombang@kemenag.go.id
          </a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">🌐</div>
        <div class="channel-body">
          <h5 class="channel-title">Website</h5>
          <p class="channel-desc">Ajukan pengaduan melalui laman resmi Kemenag Jombang.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://jombang.kemenag.go.id/aduan_eksternal.php">Buka Layanan</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">💬</div>
        <div class="channel-body">
          <h5 class="channel-title">Kembang Jawa (WhatsApp)</h5>
          <p class="channel-desc">Salurkan pengaduan via WhatsApp resmi.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://wa.me/6285133225322">Buka WhatsApp</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📱</div>
        <div class="channel-body">
          <h5 class="channel-title">SP4N Lapor</h5>
          <p class="channel-desc">Gunakan aplikasi nasional untuk menyampaikan aspirasi/pelaporan.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://www.lapor.go.id/">Buka SP4N Lapor</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📮</div>
        <div class="channel-body">
          <h5 class="channel-title">Melalui Surat (Online)</h5>
          <p class="channel-desc">
            Sama seperti offline, surat ditujukan kepada
            <strong>Kepala Kantor Kementerian Agama Kabupaten Jombang</strong>,
            Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>
    </div>

    <div class="alert alert-info" style="margin-top:12px">
      <strong>Catatan:</strong> Sertakan <em>identitas & kontak</em>, <em>uraian singkat masalah</em>, dan
      <em>bukti pendukung</em> (jika ada) agar penanganan lebih cepat.
    </div>
  </section>

<?php elseif ($sub==='alasan'): ?>
  <section class="card">
    <h3>Alasan Pengajuan Keberatan</h3>
    <p class="muted">Keberatan dapat diajukan jika terjadi salah satu kondisi berikut:</p>

    <ul class="misi-list">
      <li>Penolakan atas permohonan Informasi Publik dengan alasan pengecualian/informasi rahasia.</li>
      <li>Tidak disediakannya informasi berkala.</li>
      <li>Tidak ditanggapinya permohonan Informasi Publik.</li>
      <li>Permohonan Informasi Publik ditanggapi tidak sebagaimana yang diminta.</li>
      <li>Tidak dipenuhinya permohonan Informasi Publik atau dipenuhi sebagian.</li>
      <li>Pengenaan biaya yang tidak wajar.</li>
      <li>Penyampaian Informasi Publik yang melebihi waktu yang diatur.</li>
</ul>
<?php endif; ?>

