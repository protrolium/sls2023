// theme switcher
const html = document.querySelector('html');
html.dataset.theme = `theme-light`;

function switchTheme(theme) {
    html.dataset.theme = `theme-${theme}`;
}

function toggleTheme() {
    if (html.dataset.theme === 'theme-light') {
        switchTheme('dark');
        document.getElementById("dark-mode-btn").innerHTML = '🌕';
    } else {
        switchTheme('light');
        document.getElementById("dark-mode-btn").innerHTML = '🌑';
    }
}

// listen to os preference
const matchMediaPrefDark = window.matchMedia('(prefers-color-scheme: dark)');

function startListeningToOSTheme() {
    matchMediaPrefDark.addEventListener('change', onSystemThemeChange);
}

function stopListeningToOSTheme() {
    matchMediaPrefDark.removeEventListener('change', onSystemThemeChange);
}

function onSystemThemeChange(e) {
    const isDark = e.matches;
    document.querySelector('html').dataset.theme = 
    `theme-${isDark ? 'dark' : 'light'}`;
}