const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].clientWidth;
const navbar = document.getElementById('navbar');

let slideIndex = 0;
let firstLoopCompleted = false;

function nextSlide() {
    slideIndex++;

    if (slideIndex >= slides.length) {
        if (!firstLoopCompleted) {
            // Stop the slider after the first loop
            firstLoopCompleted = true;
            return;
        } else {
            // Show the navbar after the first loop is completed
            navbar.style.top = '0';
        }
    }

    updateSlider();
}

function updateSlider() {
    slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
}

// Initially hide the navbar
navbar.style.top = '-50px';

setInterval(nextSlide, 3000); // Change slide every 3 seconds
