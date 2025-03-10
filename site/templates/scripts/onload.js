// /recent horizontal scroll
const recent = document.getElementById("recentContainer");
let distance = null;

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

document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;    
  
    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazyLoad");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("lazyLoad");
            imageObserver.unobserve(image);
          }
        });
      });
  
      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {  
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazyLoad");
      
      function lazyload () {
        if(lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }    
  
        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('lazyLoad');
              }
          });
          if(lazyloadImages.length == 0) { 
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }
  
      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }

    const div = document.getElementById('se-results');
    
    if (div) {
      div.addEventListener('click', function() {
        this.classList.add('hidden');
      });
    }
  });


  