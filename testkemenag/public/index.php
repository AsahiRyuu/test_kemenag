<?php
// public/index.php
require_once __DIR__ . '/../core/config.php';
require_once __DIR__ . '/../app/core/helpers.php';

// allowlist halaman yang valid
$allowed = [
  'home','profil','informasi','layanan','regulasi','standar','kontak','berita','404'
];

$page = strtolower($_GET['page'] ?? 'home');
if (!in_array($page, $allowed, true)) {
  http_response_code(404);
  $page = '404';
}

// judul dinamis sedikit lebih manusiawi
function page_title(string $page): string {
  $map = [
    'home'     => 'Beranda',
    'profil'   => 'Profil',
    'informasi' => 'Informasi Publik',
    'layanan'  => 'Layanan Informasi',
    'regulasi' => 'Regulasi',
    'standar'  => 'Standar Layanan',
    'kontak'   => 'Kontak',
    'berita'   => 'Berita',
    '404'      => 'Tidak Ditemukan',
  ];
  $base = $map[$page] ?? ucfirst($page);

  // tambahkan konteks tab jika ada
  if ($page === 'informasi' && isset($_GET['jenis'])) {
    $jenis = str_replace('_',' ', $_GET['jenis']);
    $base .= ' — ' . ucwords($jenis);
  }
  if ($page === 'layanan' && isset($_GET['sub'])) {
    $base .= ' — ' . ucwords(str_replace('_',' ', $_GET['sub']));
  }
  return $base;
}

$title    = page_title($page) . ' | ' . APP_NAME;
$viewPath = __DIR__ . '/../app/views/' . $page . '.php';

// layout
include __DIR__ . '/../app/views/partials/header.php';

if (is_file($viewPath)) {
  include $viewPath;
} else {
  http_response_code(404);
  include __DIR__ . '/../app/views/404.php';
}

// Footer hanya di halaman home
if ($page === 'home') {
  include __DIR__ . '/../app/views/partials/footer.php';
}
