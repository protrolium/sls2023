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

//remove search engine pager from DOM
let searchResults = document.getElementById('se-results');
let themeSwitcher = document.getElementById('dark-mode-btn');

// Get the current URL
let currentUrl = window.location.href;

// Find the index of the "?q=" string in the URL
let urlStringToRemoveFrom = currentUrl.indexOf('?q=');

// Extract the part of the URL before the "?q=tokimonsta" string
let cleanedUrl = currentUrl.substring(0, urlStringToRemoveFrom);

// Get the input element
let searchInputField = document.getElementById('se-form-input');

// Add an event listener to the document object to detect clicks
document.addEventListener('click', function(event) {
  
    // Check if the target of the click event is the div or a descendant of the div
  if (!searchResults.contains(event.target)) {
    
    // The target of the click event is not the div or a descendant of the div, so remove the div from the DOM tree
    searchResults.parentNode.removeChild(searchResults);
    
    // Change the URL of the current page to the new URL
    // history.pushState({}, '', cleanedUrl);
    
    // Clear the value of the input element
    searchInputField.value = '';
  }
});
