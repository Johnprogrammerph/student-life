const sliderTrack = document.querySelector('.slider-track');
const slides = Array.from(document.querySelectorAll('.slide'));
const slideWidth = slides[0].offsetWidth;
let isHovered = false;

function moveSlides() {
    if (!isHovered) {
        sliderTrack.style.transform = `translateX(${-slideWidth}px)`;
        sliderTrack.appendChild(slides[0]);
    }
}

setInterval(moveSlides, 5000);

sliderTrack.addEventListener('mouseenter', () => {
    isHovered = true;
});

sliderTrack.addEventListener('mouseleave', () => {
    isHovered = false;
});