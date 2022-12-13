const recent = document.getElementById("recentContainer");
const distance = recent.clientWidth;

function leftScroll() {
    recent.scrollBy({
        left: -distance,
        behavior: 'smooth'
    });
}

function rightScroll() {
    recent.scrollBy({
        left: distance,
        behavior: 'smooth'
    });
}
