const recent = document.getElementById("recentContainer");
let distanct = null;

if (recent != null) {
    let distance = recent.clientWidth;
    console.log(distance);

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
}

// display the Los Angeles CA local time in 24H time and update it every second
function displayTime() {
    var time = document.getElementById('studio-time');
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    var strTime = hours + ':' + minutes + ':' + seconds;
    time.innerHTML = strTime;
    setTimeout(displayTime, 1000);
}

//only display the time if the element exists on the page
if (document.getElementById('studio-time')) {
    displayTime();
}
