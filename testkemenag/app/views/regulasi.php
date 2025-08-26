<?php
// app/views/regulasi.php

// PDF di public/assets/file/
$BASE_URL = '/assets/file/';

$peraturan = [
  ['title'=>'Undang-Undang (UU) Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik', 'file'=>'PERATURAN 1.pdf'],
  ['title'=>'Peraturan Pemerintah (PP) No 61 Tahun 2010 tentang Pelaksanaan Undang-undang Keterbukaan Informasi Publik', 'file'=>'PERATURAN 2.pdf'],
  ['title'=>'Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik (SLIP)', 'file'=>'PERATURAN 3.pdf'],
  ['title'=>'Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik', 'file'=>'PERATURAN 4.pdf'],
  ['title'=>'Peraturan Mahkamah Agung RI (Perma) Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan', 'file'=>'PERATURAN 5.pdf'],
  ['title'=>'Keputusan Menteri Agama (KMA) Nomor 92 Tahun 2019 tentang Pedoman Layanan Informasi Publik ...', 'file'=>'PERATURAN 6.pdf'],
  ['title'=>'Keputusan Menteri Agama Nomor 657 Tahun 2021 tentang PPID Kementerian Agama dan Atasan PPID Kementerian Agama', 'file'=>'PERATURAN 7.pdf'],
];

$rancangan = [
  ['title'=>'Rancangan Keputusan Menteri Agama RI tentang Pejabat Pengelola Informasi dan Dokumentasi ...', 'file'=>'RANCANGAN PERATURAN 1.pdf'],
  ['title'=>'Rancangan Keputusan Menteri Agama RI tentang Pedoman Layanan Informasi Publik ...', 'file'=>'RANCANGAN PERATURAN 2.pdf'],
];

// ----- RENDER (meniru struktur Informasi Berkala) -----
?>
<section class="card">
  <p>Halaman ini berisi daftar regulasi dan peraturan yang berlaku di lingkungan Kementerian Agama Kabupaten Jombang.</p>
</section>

<?php
$groups = [
  'P' => ['title' => 'Peraturan',            'items' => $peraturan],
  'R' => ['title' => 'Rancangan Peraturan',  'items' => $rancangan],
];

foreach ($groups as $code => $grp): ?>
  <section class="bkl-group" id="group-<?= htmlspecialchars($code) ?>">
    <div class="bkl-head">
      <span class="bkl-title"><?= htmlspecialchars($grp['title']) ?></span>
    </div>

    <div class="bkl-list">
      <?php $i = 1; foreach ($grp['items'] as $it): ?>
        <a class="bkl-item"
           href="<?= $BASE_URL . rawurlencode($it['file']) ?>"
           target="_blank" rel="noopener">
          <div class="bkl-text">
            <span class="bkl-idx"><?= $i++ ?>.</span> <?= htmlspecialchars($it['title']) ?>
          </div>
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
