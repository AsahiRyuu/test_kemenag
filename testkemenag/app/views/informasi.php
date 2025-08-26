<?php /* app/views/informasi.php */ 
$jenis = $_GET['jenis'] ?? null;

/* parameter sub-halaman (dipakai ulang untuk Berkala & Setiap Saat) */
$group = $_GET['group'] ?? null;   // kode grup
$item  = $_GET['item']  ?? null;   // slug item

/* =============================
 *  DATA: INFORMASI BERKALA (A–U)
 * ============================= */
$berkala = [
  'A' => [
    'title' => 'Profil Kementerian Agama',
    'items' => [
      ['slug'=>'alamat',          'title'=>'Alamat Kantor Lengkap'],
      ['slug'=>'visi-misi',       'title'=>'Visi dan Misi'],
      ['slug'=>'tugas-fungsi',    'title'=>'Tugas dan Fungsi'],
      ['slug'=>'sejarah',         'title'=>'Sejarah'],
      ['slug'=>'tujuan',          'title'=>'Tujuan'],
      ['slug'=>'struktur',        'title'=>'Struktur Organisasi'],
      ['slug'=>'ruang-lingkup',   'title'=>'Ruang Lingkup Satuan Kerja'],
      ['slug'=>'profil-kepala',   'title'=>'Profil Kepala Kantor Wilayah Kemenag Prov. Jawa Timur'],
      ['slug'=>'profil-pejabat',  'title'=>'Profil Pejabat Tinggi Madya/Pratama, Kepala Kanwil, Rektor/Ketua PTKN, dll'],
      ['slug'=>'logo-kemenag',    'title'=>'Logo Kementerian Agama (KMA Nomor 717 tahun 2006)'],
      ['slug'=>'lhkpn',           'title'=>'Laporan Harta Kekayaan Penyelenggara Negara (LHKPN)'],
    ],
  ],
  'B' => [
    'title' => 'Program dan/atau Kegiatan yang Sedang Dijalankan',
    'items' => [
      ['slug'=>'rencana-kerja',   'title'=>'Rencana Kerja'],
      ['slug'=>'renstra',         'title'=>'Rencana Strategis'],
      ['slug'=>'dipa',            'title'=>'Daftar Isian Pelaksanaan Anggaran (DIPA)'],
      ['slug'=>'rekap-rkakl',     'title'=>'Rekap RKAKL Kementerian Agama'],
      ['slug'=>'realisasi-keu',   'title'=>'Informasi realisasi atau penyerapan penggunaan keuangan'],
    ],
  ],
  'C' => [
    'title' => 'Program Strategis sesuai Tugas dan Fungsi',
    'items' => [
      ['slug'=>'program-lengkap', 'title'=>'Program/kegiatan lengkap dengan pelaksana, target, jadwal dan anggaran'],
      ['slug'=>'prioritas-2025',  'title'=>'Program prioritas Tahun 2025'],
      ['slug'=>'ringkasan',       'title'=>'Ringkasan kinerja dan capaian program/kegiatan'],
    ],
  ],
  'F' => [ 'title' => 'Rencana Umum Pengadaan Barang/Jasa', 'items' => [] ],
  'G' => [ 'title' => 'Pengumuman Pengadaan Barang dan Jasa', 'items' => [] ],
  'H' => [ 'title' => 'Peraturan, Keputusan, dan/atau Kebijakan Publik', 'items' => [] ],
  'I' => [
    'title' => 'Ringkasan Program/Kegiatan yang Telah Dijalankan',
    'items' => [
      ['slug'=>'laporan-keu',      'title'=>'Laporan Keuangan'],
      ['slug'=>'laporan-kinerja',  'title'=>'Laporan Kinerja'],
      ['slug'=>'laporan-pelayanan','title'=>'Laporan Tahunan Pelayanan Publik'],
    ],
  ],
  'J' => [ 'title' => 'Data Perbendaharaan atau Inventaris Barang Milik Negara', 'items' => [] ],
  'K' => [ 'title' => 'Pencatatan Nikah', 'items' => [] ],
  'L' => [ 'title' => 'Layanan Informasi Haji dan Umrah', 'items' => [] ],
  'M' => [ 'title' => 'Layanan Pengaduan Masyarakat dan Whistleblowing', 'items' => [] ],
  'N' => [ 'title' => 'Program Bantuan Penelitian, Publikasi, dan Pengabdian Litapdimas', 'items' => [] ],
  'O' => [ 'title' => 'Layanan Produk Halal', 'items' => [] ],
  'P' => [ 'title' => 'Informasi tentang Rekrutmen ASN Kementerian Agama', 'items' => [] ],
  'Q' => [ 'title' => 'Sistem Pendaftaran Online JPT Terbuka', 'items' => [] ],
  'R' => [ 'title' => 'Perjanjian Kinerja', 'items' => [] ],
  'S' => [ 'title' => 'Agenda Kegiatan Badan Publik', 'items' => [] ],
  'T' => [ 'title' => 'Dokumen Pengadaan Barang/Jasa yang telah selesai dan diserahterimakan', 'items' => [] ],
  'U' => [ 'title' => 'Informasi Publik yang terbuka berdasarkan keberatan/sengketa', 'items' => [] ],
];

/* =========================================
 *  DATA: INFORMASI SETIAP SAAT (berbasis .bkl-*)
 * ========================================= */
$setiapSaat = [
  'PUBLIK' => [
    'title' => 'Nama Informasi Publik',
    'items' => [
      ['slug'=>'daftar-informasi-publik',   'title'=>'Daftar Informasi Publik'],
      ['slug'=>'daftar-pengecualian',       'title'=>'Daftar Informasi Publik yang Dikecualikan'],
      ['slug'=>'dok-pendukung-peraturan',   'title'=>'Dokumen Pendukung dalam Penyusunan Peraturan/Kebijakan/Keputusan yang Telah Ditetapkan'],
      ['slug'=>'perjanjian-pihak-ketiga',   'title'=>'Perjanjian dengan Pihak Ketiga'],
      ['slug'=>'pedoman-administrasi',      'title'=>'Pedoman Pengelolaan Administrasi'],
      ['slug'=>'pedoman-organisasi',        'title'=>'Pedoman Pengelolaan Organisasi'],
      ['slug'=>'pedoman-kepegawaian',       'title'=>'Pedoman Pengelolaan Kepegawaian'],
      ['slug'=>'prosedur-keuangan',         'title'=>'Prosedur Pengelolaan Keuangan'],
      ['slug'=>'stat-kepeg-1',              'title'=>'Statistik Kepegawaian — berdasarkan Agama, Pendidikan, Jenis Kelamin, Pangkat, Golongan, Usia, Tipe Jabatan, Jabatan Struktural, dan JFT'],
      ['slug'=>'stat-kepeg-2',              'title'=>'Statistik Kepegawaian — berdasarkan Sebaran PNS, Agama, Jenis Kelamin, Jenjang Pendidikan, Perkiraan Pensiun, Penerimaan PNS'],
      ['slug'=>'program-moderasi',          'title'=>'Program Moderasi Beragama'],
      ['slug'=>'ensiklopedia-agama',        'title'=>'Ensiklopedia Agama'],
      ['slug'=>'pedoman-penanggulangan',    'title'=>'Pedoman Induk Penanggulangan Darurat Kebakaran dan Bencana Alam di Lingkungan Kantor Pusat'],
      ['slug'=>'ikjhi',                     'title'=>'Indeks Kepuasan Jemaah Haji Indonesia (IKJHI)'],
      ['slug'=>'ikub',                      'title'=>'Indeks Kerukunan Umat Beragama (IKUB)'],
      ['slug'=>'indeks-pelayanan-kua',      'title'=>'Indeks Pelayanan Keagamaan Menurut Kantor Urusan Agama'],
      ['slug'=>'indeks-kesalehan',          'title'=>'Indeks Kesalehan Sosial Umat Beragama'],
      ['slug'=>'indeks-sadar-halal',        'title'=>'Indeks Sadar Halal Generasi Muslim Milenial'],
      ['slug'=>'judul-penelitian',          'title'=>'Daftar Judul Penelitian Kementerian Agama'],
      ['slug'=>'layanan-disabilitas',       'title'=>'Layanan Penyandang Disabilitas'],
      ['slug'=>'info-nikah',                'title'=>'Info Nikah'],
      ['slug'=>'syarat-rohaniawan',         'title'=>'Syarat-syarat Pengurusan Dokumen Rohaniawan dan Tenaga Ahli Asing'],
      ['slug'=>'syarat-mhs-asing',          'title'=>'Syarat-syarat Pengurusan Dokumen bagi Mahasiswa Pelajar Asing'],
      ['slug'=>'daftar-produk-hukum',       'title'=>'Daftar Produk Hukum'],
      ['slug'=>'statistik-kemenag',         'title'=>'Statistik Kementerian Agama'],
      ['slug'=>'lhkasn',                    'title'=>'Informasi jumlah dan prosentase LHKASN dalam lingkup Kementerian Agama'],
      ['slug'=>'satu-data',                 'title'=>'Penyelenggara Satu Data Kementerian Agama'],
      ['slug'=>'layanan-masyarakat',        'title'=>'Layanan Masyarakat'],
      ['slug'=>'daftar-peraturan',          'title'=>'Daftar peraturan perundang-undangan, keputusan, dan/atau kebijakan yang telah disahkan atau ditetapkan'],
      ['slug'=>'rancangan-peraturan',       'title'=>'Daftar rancangan dan tahap pembentukan peraturan perundang-undangan, keputusan, dan/atau kebijakan yang sedang dalam proses pembuatan'],
      ['slug'=>'dokumen-rancangan',         'title'=>'Dokumen rancangan peraturan, keputusan, kebijakan yang dibentuk'],
      ['slug'=>'peraturan-kementerian',     'title'=>'Peraturan, Keputusan, dan/atau Kebijakan Kementerian Agama'],
    ],
  ],
];

?>

<?php if ($jenis === null): ?>
  <!-- LANDING: pilih jenis informasi -->
  <section class="section-box">
    <h2>Informasi Publik</h2>
    <div class="instansi-grid" style="margin-top:16px">
      <a class="instansi-card" href="?page=informasi&jenis=berkala">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📅</div>
        <div>
          <div class="title">Informasi Berkala</div>
          <div class="sub">Informasi yang diumumkan secara berkala setiap 6 bulan</div>
        </div>
      </a>
      <!-- Serta Merta langsung ke beranda -->
      <a class="instansi-card" href="?page=home">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🚨</div>
        <div>
          <div class="title">Informasi Serta Merta</div>
          <div class="sub">Menuju Beranda</div>
        </div>
      </a>
      <a class="instansi-card" href="?page=informasi&jenis=setiap_saat">
        <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🔍</div>
        <div>
          <div class="title">Informasi Setiap Saat</div>
          <div class="sub">Informasi yang dapat diakses setiap saat</div>
        </div>
      </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=informasi&jenis=berkala" class="<?= $jenis==='berkala'?'active':'' ?>">Berkala</a>
  <a href="?page=home">Serta Merta</a> <!-- langsung beranda -->
  <a href="?page=informasi&jenis=setiap_saat" class="<?= $jenis==='setiap_saat'?'active':'' ?>">Setiap Saat</a>
</nav>

<?php
/* =============================
 *  JENIS: INFORMASI BERKALA
 * ============================= */
?>
<?php if ($jenis==='berkala'): ?>

  <?php
  $isDetail = $group && isset($berkala[$group]);
  if ($isDetail):
    $gTitle = $berkala[$group]['title'];
    $activeItem = null;
    if ($item && !empty($berkala[$group]['items'])) {
      foreach ($berkala[$group]['items'] as $it) {
        if ($it['slug'] === $item) { $activeItem = $it; break; }
      }
    }
    $titleText = $activeItem ? $activeItem['title'] : ($group.'. '.$gTitle);
  ?>
    <!-- DETAIL: hanya judul + satu kalimat + tombol kembali -->
    <section class="card">
      <div class="meta" style="justify-content:space-between;align-items:center">
        <a class="btn btn-outline" href="?page=informasi&jenis=berkala#group=<?= urlencode($group) ?>#group-<?= urlencode($group) ?>">Kembali</a>
      </div>

      <h2 style="margin-top:8px;border-bottom:none;">
        <?= htmlspecialchars($titleText) ?>
      </h2>

      <p>Halaman detail untuk <strong><?= htmlspecialchars($titleText) ?></strong>.</p>
    </section>

  <?php else: ?>
    <!-- LISTING BERKALA (grup & item) -->
    <section class="card">
      <p>Informasi yang diumumkan secara berkala sesuai ketentuan UU Keterbukaan Informasi Publik.</p>
    </section>

    <?php foreach ($berkala as $letter => $grp): ?>
      <section class="bkl-group" id="group-<?= htmlspecialchars($letter) ?>">
        <div class="bkl-head">
          <span class="bkl-letter"><?= htmlspecialchars($letter) ?>.</span>
          <span class="bkl-title"><?= htmlspecialchars($grp['title']) ?></span>
        </div>

        <div class="bkl-list">
          <?php if (!empty($grp['items'])): ?>
            <?php $i=1; foreach ($grp['items'] as $it): ?>
              <a class="bkl-item" href="?page=informasi&jenis=berkala&group=<?= urlencode($letter) ?>&item=<?= urlencode($it['slug']) ?>">
                <div class="bkl-text"><span class="bkl-idx"><?= $i++ ?>.</span> <?= htmlspecialchars($it['title']) ?></div>
                <span class="bkl-view" aria-label="Lihat">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                </span>
              </a>
            <?php endforeach; ?>
          <?php else: ?>
            <a class="bkl-item" href="?page=informasi&jenis=berkala&group=<?= urlencode($letter) ?>">
              <div class="bkl-text"><span class="bkl-idx">1.</span> Lihat rincian <?= htmlspecialchars($grp['title']) ?></div>
              <span class="bkl-view" aria-label="Lihat">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </span>
            </a>
          <?php endif; ?>
        </div>
      </section>
    <?php endforeach; ?>

  <?php endif; ?>

<?php /* ===== JENIS: Serta Merta ===== */ ?>
<?php elseif ($jenis==='serta_merta'): ?>
  <script>window.location.href='?page=home';</script>
  <noscript>
    <meta http-equiv="refresh" content="0;url=?page=home">
    <p>Mengarahkan ke beranda… <a href="?page=home">Klik di sini</a> jika tidak otomatis.</p>
  </noscript>
  <?php return; ?>

<?php /* ===== JENIS: SETIAP SAAT (sub-bab + detail sederhana) ===== */ ?>
<?php elseif ($jenis==='setiap_saat'): ?>

  <?php
  $isDetail = $group && isset($setiapSaat[$group]);
  if ($isDetail):
    $gTitle = $setiapSaat[$group]['title'];
    $activeItem = null;
    if ($item && !empty($setiapSaat[$group]['items'])) {
      foreach ($setiapSaat[$group]['items'] as $it) {
        if ($it['slug'] === $item) { $activeItem = $it; break; }
      }
    }
    $titleText = $activeItem ? $activeItem['title'] : $gTitle;
  ?>
    <section class="card">
      <div class="meta" style="justify-content:space-between;align-items:center">
        <a class="btn btn-outline" href="?page=informasi&jenis=setiap_saat#group-<?= urlencode($group) ?>">Kembali</a>
      </div>

      <h2 style="margin-top:8px;border-bottom:none;">
        <?= htmlspecialchars($titleText) ?>
      </h2>

      <p>Halaman detail untuk <strong><?= htmlspecialchars($titleText) ?></strong>.</p>
    </section>

  <?php else: ?>
    <section class="card">
      <p>Informasi yang dapat diakses setiap saat dan selalu tersedia untuk masyarakat.</p>
    </section>

    <?php foreach ($setiapSaat as $code => $grp): ?>
      <section class="bkl-group" id="group-<?= htmlspecialchars($code) ?>">
        <div class="bkl-head">
          
          <span class="bkl-title"><?= htmlspecialchars($grp['title']) ?></span>
        </div>

        <div class="bkl-list">
          <?php $i = 1; foreach ($grp['items'] as $it): ?>
            <a class="bkl-item" href="?page=informasi&jenis=setiap_saat&group=<?= urlencode($code) ?>&item=<?= urlencode($it['slug']) ?>">
              <div class="bkl-text"><span class="bkl-idx"><?= $i++ ?>.</span> <?= htmlspecialchars($it['title']) ?></div>
              <span class="bkl-view" aria-label="Lihat">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endforeach; ?>

  <?php endif; ?>

<?php endif; ?>
