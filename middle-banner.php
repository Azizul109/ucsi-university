<div style="background-color: rgb(141, 21, 21);">
    <div class="wrap" style="background-color: rgba(212, 17, 10, 0.226);">
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
          <div class="slide slide1">

          </div>

          <div class="slide slide6">

          </div>
          
          <div class="slide slide3">

          </div>

          <div class="slide slide2">

          </div>


          <div class="slide slide4">

          </div>
          

          <div class="slide slide5">

          </div>

        </div>
        <div id="arrow-right" class="arrow"></div>
    </div>
</div>

  <script>
    let sliderImages = document.querySelectorAll(".slide"),
        arrowLeft = document.querySelector("#arrow-left"),
        arrowRight = document.querySelector("#arrow-right"),
        current = 0,
        slideInterval;
    
    // Clear all images
    function reset() {
        for (let i = 0; i < sliderImages.length; i++) {
            sliderImages[i].style.transition = "transform 0.5s ease-in-out";
            sliderImages[i].style.transform = "translateX(100%)";
        }
    }
    
    // Init slider
    function startSlide() {
        reset();
        sliderImages[0].style.transform = "translateX(0)";
    }
    
    // Show prev
    function slideLeft() {
        if (current === 0) {
            current = sliderImages.length;
        }
        reset();
        sliderImages[current - 1].style.transform = "translateX(0)";
        current--;
    }
    
    // Show next
    function slideRight() {
        if (current === sliderImages.length - 1) {
            current = -1;
        }
        reset();
        sliderImages[current + 1].style.transform = "translateX(0)";
        current++;
    }
    
    // Slide automatically
    function slideAuto() {
        slideInterval = setInterval(function() {
            slideRight();
        }, 4000); // Change duration here (2000ms = 2 seconds)
    }
    
    // Stop auto slide on arrow click
    arrowLeft.addEventListener("click", function() {
        clearInterval(slideInterval);
        slideLeft();
        slideAuto();
    });
    
    arrowRight.addEventListener("click", function() {
        clearInterval(slideInterval);
        slideRight();
        slideAuto();
    });
    
    startSlide();
    slideAuto(); // Start auto slide


    /**document.querySelector('.wrap').addEventListener('mouseover', function() {
        clearInterval(slideInterval);
    });

    document.querySelector('.wrap').addEventListener('mouseout', function() {
        slideAuto();
    });

    arrowLeft.addEventListener('mouseover', function() {
        clearInterval(slideInterval);
    });

    arrowRight.addEventListener('mouseover', function() {
        clearInterval(slideInterval);
    });

    arrowLeft.addEventListener('mouseout', function() {
        slideAuto();
    });**/

    </script>
    



<style>
#slider,
.wrap,
.slide-content {
margin: 0;
padding: 0;
font-family: Arial, Helvetica, sans-serif;
width: 100vw;
height: 95vh;
overflow-x: hidden;
}

.wrap {
position: relative;
}

.slide {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-size: cover;
background-position: center;
background-repeat: no-repeat;
transition: transform 0.5s ease-in-out;
}

.slide1 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-cararousel-1.jpg");
}
.slide2 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-carousel-2.jpg");
}
.slide3 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-carousel-class-new.jpg");
}
.slide4 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-carousel-lab.jpg");
}
.slide5 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-carousel-admission-2.jpg");
}
.slide6 {
background-image: url("https://www.bangladesh.ucsiuniversity.edu.my/sites/default/files/bottom-carousel-soprts.jpg");
}

.slide-content {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}

.slide-content span {
font-size: 5rem;
color: #fff;
}

.arrow {
cursor: pointer;
position: absolute;
top: 50%;
margin-top: -35px;
width: 0;
height: 0;
border-style: solid;
opacity: 50%;
}

#arrow-left {
border-width: 30px 40px 30px 0;
border-color: transparent black transparent transparent;
left: 0;
margin-left: 30px;
z-index: 10;
}

#arrow-right {
border-width: 30px 0 30px 40px;
border-color: transparent transparent transparent black;
right: 0;
margin-right: 50px;
z-index: 10;
}

.arrow:hover {
    opacity: 100%;
}


@media (max-width: 600px) {
    #slider,
    .wrap,
    .slide-content {
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 200px;
    overflow-x: hidden;
    }

  .arrow {
    font-size: 1.5rem; /* Decrease arrow size for smaller screens */
    margin-top: -20px; /* Adjust arrow position */
  }

  #arrow-left {
    margin-left: 10px; /* Adjust arrow margin */
  }

  #arrow-right {
    margin-right: 10px; /* Adjust arrow margin */
  }
}

@media (min-width: 2400px) {
    #arrow-right {
        margin-right: 110px;
        border-width: 90px 0 90px 120px;
    }

    #arrow-left {
        border-width: 90px 120px 90px 0;
    }
}

</style>