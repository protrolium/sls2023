// theme switcher
const html = document.querySelector('html');
html.dataset.theme = `theme-light`;
let darkMode = localStorage.getItem('dark-mode');

function switchTheme(theme) {
    html.dataset.theme = `theme-${theme}`;
}

function switchAssets(theme) {

    const logosList = document.querySelectorAll("#logo-header, #logo-footer, #logo-studio, #hv-logo-studio");
    const logosArray = [...logosList];
    const logosLightList = document.querySelectorAll("#logo-light-header, #logo-light-footer, #logo-light-studio, #hv-logo-light-studio");
    const logosLightArray = [...logosLightList];

    if (theme === "dark") {
        document.getElementById("dark-mode-btn").innerHTML = '🌞';
        document.getElementById("header-nav").style.color = "#fff";
        logosArray.forEach(element => {
            element.classList.add("uk-hidden");
        });
        
        logosLightArray.forEach(element => {
            element.classList.remove("uk-hidden");
        });
    } else {
        document.getElementById("dark-mode-btn").innerHTML = '🌙';
        document.getElementById("header-nav").style.color = "#000";
        logosArray.forEach(element => {
            element.classList.remove("uk-hidden");
        });
        
        logosLightArray.forEach(element => {
            element.classList.add("uk-hidden");
        });
    }
}

// logos switcher
function toggleTheme() {
    if (html.dataset.theme === 'theme-light') {
        switchTheme('dark');
        switchAssets('dark');
        localStorage.setItem("dark-mode", "enabled");
    } else {
        switchTheme('light');
        switchAssets('light');
        localStorage.setItem("dark-mode", "disabled");
    }
}

if (darkMode === "enabled") { // set state of darkMode on page load
    document.addEventListener('DOMContentLoaded', (event) => {
        switchAssets('dark');
    });
}


/*
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
*/