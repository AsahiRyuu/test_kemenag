/**
 * Font Size Adjuster
 * Mengatur ukuran font di seluruh website menggunakan CSS custom property --font-scale
 */

(function() {
    'use strict';
    
    // Konfigurasi skala font
    const FONT_SCALES = {
        small: 0.9,
        normal: 1.0,
        large: 1.1
    };
    
    const STORAGE_KEY = 'ppid-font-scale';
    
    // Inisialisasi font adjuster
    function initFontAdjuster() {
        // Load saved font scale dari localStorage
        loadSavedFontScale();
        
        // Setup event listeners untuk tombol A+ dan A-
        setupFontButtons();
    }
    
    // Load font scale yang tersimpan
    function loadSavedFontScale() {
        try {
            const savedScale = localStorage.getItem(STORAGE_KEY);
            if (savedScale && !isNaN(parseFloat(savedScale))) {
                setFontScale(parseFloat(savedScale));
            } else {
                setFontScale(FONT_SCALES.normal);
            }
        } catch (error) {
            console.warn('Error loading font scale:', error);
            setFontScale(FONT_SCALES.normal);
        }
    }
    
    // Set font scale ke CSS custom property
    function setFontScale(scale) {
        // Batasi nilai scale antara 0.8 - 1.3
        scale = Math.max(0.8, Math.min(1.3, scale));
        
        // Set CSS custom property
        document.documentElement.style.setProperty('--font-scale', scale.toString());
        
        // Simpan ke localStorage
        try {
            localStorage.setItem(STORAGE_KEY, scale.toString());
        } catch (error) {
            console.warn('Error saving font scale:', error);
        }
        
        // Update visual state tombol
        updateButtonStates(scale);
    }
    
    // Setup event listeners untuk tombol font
    function setupFontButtons() {
        // Tombol A+ (increase font) - menggunakan ID yang ada di header.php
        const increaseBtn = document.getElementById('font-increase');
        if (increaseBtn) {
            increaseBtn.addEventListener('click', function(e) {
                e.preventDefault();
                increaseFontSize();
            });
        }
        
        // Tombol A- (decrease font) - menggunakan ID yang ada di header.php
        const decreaseBtn = document.getElementById('font-decrease');
        if (decreaseBtn) {
            decreaseBtn.addEventListener('click', function(e) {
                e.preventDefault();
                decreaseFontSize();
            });
        }
        
        // Fallback untuk selector alternatif
        const increaseBtns = document.querySelectorAll('[data-font-action="increase"], .font-increase');
        increaseBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                increaseFontSize();
            });
        });
        
        const decreaseBtns = document.querySelectorAll('[data-font-action="decrease"], .font-decrease');
        decreaseBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                decreaseFontSize();
            });
        });
        
        // Tombol reset (jika ada)
        const resetBtns = document.querySelectorAll('[data-font-action="reset"], .font-reset');
        resetBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                resetFontSize();
            });
        });
    }
    
    // Increase font size
    function increaseFontSize() {
        const currentScale = getCurrentFontScale();
        const newScale = Math.min(1.3, currentScale + 0.1);
        setFontScale(newScale);
        
        // Feedback visual
        showFontFeedback('Font diperbesar');
    }
    
    // Decrease font size
    function decreaseFontSize() {
        const currentScale = getCurrentFontScale();
        const newScale = Math.max(0.8, currentScale - 0.1);
        setFontScale(newScale);
        
        // Feedback visual
        showFontFeedback('Font diperkecil');
    }
    
    // Reset font size
    function resetFontSize() {
        setFontScale(FONT_SCALES.normal);
        showFontFeedback('Font direset ke ukuran normal');
    }
    
    // Get current font scale
    function getCurrentFontScale() {
        const currentScale = getComputedStyle(document.documentElement)
            .getPropertyValue('--font-scale')
            .trim();
        return parseFloat(currentScale) || FONT_SCALES.normal;
    }
    
    // Update visual state tombol
    function updateButtonStates(scale) {
        // Update tombol utama berdasarkan ID dari header.php
        const increaseBtn = document.getElementById('font-increase');
        const decreaseBtn = document.getElementById('font-decrease');
        
        if (increaseBtn) {
            increaseBtn.disabled = scale >= 1.3;
            increaseBtn.style.opacity = scale >= 1.3 ? '0.5' : '1';
        }
        
        if (decreaseBtn) {
            decreaseBtn.disabled = scale <= 0.8;
            decreaseBtn.style.opacity = scale <= 0.8 ? '0.5' : '1';
        }
        
        // Fallback untuk selector alternatif
        const increaseBtns = document.querySelectorAll('[data-font-action="increase"], .font-increase');
        const decreaseBtns = document.querySelectorAll('[data-font-action="decrease"], .font-decrease');
        
        increaseBtns.forEach(btn => {
            btn.disabled = scale >= 1.3;
            btn.style.opacity = scale >= 1.3 ? '0.5' : '1';
        });
        
        decreaseBtns.forEach(btn => {
            btn.disabled = scale <= 0.8;
            btn.style.opacity = scale <= 0.8 ? '0.5' : '1';
        });
    }
    
    // Show feedback visual
    function showFontFeedback(message) {
        // Hapus feedback sebelumnya jika ada
        const existingFeedback = document.querySelector('.font-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Buat elemen feedback
        const feedback = document.createElement('div');
        feedback.className = 'font-feedback';
        feedback.textContent = message;
        feedback.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            z-index: 9999;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        `;
        
        document.body.appendChild(feedback);
        
        // Animate in
        setTimeout(() => {
            feedback.style.opacity = '1';
        }, 10);
        
        // Remove after 2 seconds
        setTimeout(() => {
            feedback.style.opacity = '0';
            setTimeout(() => {
                if (feedback.parentNode) {
                    feedback.parentNode.removeChild(feedback);
                }
            }, 300);
        }, 2000);
    }
    
    // Keyboard shortcuts (opsional)
    function setupKeyboardShortcuts() {
        document.addEventListener('keydown', function(e) {
            // Ctrl + Plus untuk increase
            if (e.ctrlKey && (e.key === '+' || e.key === '=')) {
                e.preventDefault();
                increaseFontSize();
            }
            // Ctrl + Minus untuk decrease
            else if (e.ctrlKey && e.key === '-') {
                e.preventDefault();
                decreaseFontSize();
            }
            // Ctrl + 0 untuk reset
            else if (e.ctrlKey && e.key === '0') {
                e.preventDefault();
                resetFontSize();
            }
        });
    }
    
    // Initialize ketika DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFontAdjuster);
    } else {
        initFontAdjuster();
    }
    
    // Setup keyboard shortcuts
    setupKeyboardShortcuts();
    
    // Export functions untuk debugging (opsional)
    window.FontAdjuster = {
        increase: increaseFontSize,
        decrease: decreaseFontSize,
        reset: resetFontSize,
        setScale: setFontScale,
        getCurrentScale: getCurrentFontScale
    };
    
})();