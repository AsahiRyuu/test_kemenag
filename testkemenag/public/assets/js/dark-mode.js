// Dark Mode Toggle with localStorage
(function() {
    'use strict';
    
    const DARK_MODE_KEY = 'ppid-dark-mode';
    const DARK_MODE_CLASS = 'dark-mode';
    
    let isDarkMode = false;
    
    // Initialize dark mode from localStorage
    function initDarkMode() {
        const savedDarkMode = localStorage.getItem(DARK_MODE_KEY);
        isDarkMode = savedDarkMode === 'true';
        applyDarkMode();
    }
    
    // Apply dark mode to document
    function applyDarkMode() {
        if (isDarkMode) {
            document.body.classList.add(DARK_MODE_CLASS);
        } else {
            document.body.classList.remove(DARK_MODE_CLASS);
        }
        
        // Save to localStorage
        localStorage.setItem(DARK_MODE_KEY, isDarkMode.toString());
        
        // Update button state
        updateToggleButton();
    }
    
    // Update toggle button appearance
    function updateToggleButton() {
        const button = document.getElementById('dark-mode-toggle');
        if (button) {
            const lightIcon = button.querySelector('.light-icon');
            const darkIcon = button.querySelector('.dark-icon');
            
            if (isDarkMode) {
                button.classList.add('active');
                if (lightIcon) lightIcon.style.display = 'none';
                if (darkIcon) darkIcon.style.display = 'inline';
            } else {
                button.classList.remove('active');
                if (lightIcon) lightIcon.style.display = 'inline';
                if (darkIcon) darkIcon.style.display = 'none';
            }
            
            button.setAttribute('aria-label', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
            button.setAttribute('title', isDarkMode ? 'Switch to light mode' : 'Switch to dark mode');
        }
    }
    
    // Toggle dark mode
    function toggleDarkMode() {
        isDarkMode = !isDarkMode;
        applyDarkMode();
        
        // Add smooth transition effect
        document.body.style.transition = 'background-color 0.3s ease, color 0.3s ease';
        setTimeout(() => {
            document.body.style.transition = '';
        }, 300);
    }
    
    // Detect system preference
    function detectSystemPreference() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return true;
        }
        return false;
    }
    
    // Initialize when DOM is ready
    function init() {
        // If no saved preference, use system preference
        const savedDarkMode = localStorage.getItem(DARK_MODE_KEY);
        if (savedDarkMode === null) {
            isDarkMode = detectSystemPreference();
        }
        
        // Initialize dark mode
        initDarkMode();
        
        // Add event listener to toggle button
        const button = document.getElementById('dark-mode-toggle');
        if (button) {
            button.addEventListener('click', toggleDarkMode);
        }
        
        // Listen for system theme changes
        if (window.matchMedia) {
            const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            mediaQuery.addEventListener('change', function(e) {
                // Only auto-switch if user hasn't manually set a preference
                const savedDarkMode = localStorage.getItem(DARK_MODE_KEY);
                if (savedDarkMode === null) {
                    isDarkMode = e.matches;
                    applyDarkMode();
                }
            });
        }
        
        // Add keyboard shortcut (Ctrl + Shift + D)
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.shiftKey && e.key === 'D') {
                e.preventDefault();
                toggleDarkMode();
            }
        });
    }
    
    // Initialize when DOM is loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();