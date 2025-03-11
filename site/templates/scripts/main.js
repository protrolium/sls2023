// theme switcher
const html = document.querySelector('html');
let darkMode = localStorage.getItem('dark-mode');

// Don't force theme-light - check localStorage first
if (darkMode !== "enabled" && !html.dataset.theme) {
  html.dataset.theme = `theme-light`;
}

function switchTheme(theme) {
  html.dataset.theme = `theme-${theme}`;
}

function switchAssets(theme) {

    const logosList = document.querySelectorAll("#logo-header, #logo-footer, #logo-studio, #hv-logo-studio");
    const logosArray = [...logosList];
    const logosLightList = document.querySelectorAll("#logo-light-header, #logo-light-footer, #logo-light-studio, #hv-logo-light-studio");
    const logosLightArray = [...logosLightList];

    if (theme === "dark") {
        document.getElementById("dark-mode-btn").innerHTML = '<svg width="16pt" height="16pt" viewBox="0 0 16 18" fill="white"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/></svg>';
        document.getElementById("dark-mode-btn-desktop").innerHTML = '<svg width="16pt" height="16pt" viewBox="0 0 16 18" fill="white"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/></svg>';
        document.getElementById("header-nav").style.color = "#fff";
        document.getElementById("header-nav-desktop").style.color = "#fff";
        logosArray.forEach(element => {
            element.classList.add("uk-hidden");
        });
        
        logosLightArray.forEach(element => {
            element.classList.remove("uk-hidden");
        });
    } else {
        document.getElementById("dark-mode-btn").innerHTML = '<svg width="16pt" height="16pt" viewBox="0 0 16 18"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/></svg>';
        document.getElementById("dark-mode-btn-desktop").innerHTML = '<svg width="16pt" height="16pt" viewBox="0 0 16 18" fill="inherit"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/></svg>';
        document.getElementById("header-nav").style.color = "#000";
        document.getElementById("header-nav-desktop").style.removeProperty("color");
        document.getElementById("header-nav-desktop").style.color = "000";
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
        console.log("dark mode enabled");
    } else {
        switchTheme('light');
        switchAssets('light');
        localStorage.setItem("dark-mode", "disabled");
        console.log("dark mode disabled");
    }
}

// Apply assets after DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    if (darkMode === "enabled") {
      switchAssets('dark');
    }
  });

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