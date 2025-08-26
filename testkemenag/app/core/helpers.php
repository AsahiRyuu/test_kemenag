<?php
// app/core/helpers.php

/**
 * Helper function untuk assets (CSS, JS, Images)
 */
function asset($path) {
    return "/assets/{$path}";
}

/**
 * Helper function untuk escape HTML output
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Helper function untuk debug
 */
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

/**
 * Helper function untuk redirect
 */
function redirect($url) {
    header("Location: {$url}");
    exit();
}

/**
 * Helper function untuk check if current page
 */
function isCurrentPage($page) {
    $currentPage = $_GET['page'] ?? 'home';
    return $currentPage === $page;
}

/**
 * Helper function untuk check if current sub page
 */
function isCurrentSub($sub) {
    $currentSub = $_GET['sub'] ?? null;
    return $currentSub === $sub;
}
?>



