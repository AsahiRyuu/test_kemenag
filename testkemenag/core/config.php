<?php
// core/config.php

// Konfigurasi aplikasi
define('APP_NAME', 'PPID Kemenag Jatim');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'http://localhost');

// Konfigurasi database (jika diperlukan)
define('DB_HOST', 'localhost');
define('DB_NAME', 'ppid_kemenag');
define('DB_USER', 'root');
define('DB_PASS', '');

// Konfigurasi path
define('BASE_PATH', __DIR__ . '/..');
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', BASE_PATH . '/public');
define('CORE_PATH', BASE_PATH . '/core');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Session (jika diperlukan)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
