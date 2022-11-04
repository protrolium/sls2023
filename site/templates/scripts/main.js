// theme switcher
const html = document.querySelector('html');
html.dataset.theme = `theme-light`;
let darkMode = localStorage.getItem('dark-mode');

function switchTheme(theme) {
    html.dataset.theme = `theme-${theme}`;
}

// logos switcher
function toggleTheme() {

    const logosList = document.querySelectorAll("#logo-header, #logo-footer");
    const logosArray = [...logosList];
    const logosLightList = document.querySelectorAll("#logo-light-header, #logo-light-footer");
    const logosLightArray = [...logosLightList];

    if (html.dataset.theme === 'theme-light') {
        switchTheme('dark');
        localStorage.setItem("dark-mode", "enabled");

        document.getElementById("dark-mode-btn").innerHTML = '🌕';
        logosArray.forEach(element => {
            element.classList.add("uk-hidden");
        });
        
        logosLightArray.forEach(element => {
            element.classList.remove("uk-hidden");
        });
    }
    else {
        switchTheme('light');
        localStorage.setItem("dark-mode", "disabled");

        document.getElementById("dark-mode-btn").innerHTML = '🌑';
        logosArray.forEach(element => {
            element.classList.remove("uk-hidden");
        });
        
        logosLightArray.forEach(element => {
            element.classList.add("uk-hidden");
        });
    }
}

if (darkMode === "enabled") { // set state of darkMode on page load
    document.addEventListener('DOMContentLoaded', (event) => {
        toggleTheme();
    });
}

// listen to os preference
const isOsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
const matchMediaPrefDark = window.matchMedia('(prefers-color-scheme: dark)');

function startListeningToOSTheme() {
    matchMediaPrefDark.addEventListener('change', onSystemThemeChange);
}

function stopListeningToOSTheme() {
    matchMediaPrefDark.removeEventListener('change', onSystemThemeChange);
}

function onSystemThemeChange(e) {
    const isDark = e.matches;
    document.querySelector('html').dataset.theme = `theme-${isDark ? 'dark' : 'light'}`;
}