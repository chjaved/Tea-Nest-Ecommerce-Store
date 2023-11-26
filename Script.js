const header = document.querySelector('header');
function fixedNavbar() {
    header.classList.toggle('scroll', window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})
userBtn.addEventListener('click', function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
})

// Home Page Slider
"use strict";

const leftArrow = document.querySelector('.left-arrow .bxs-left-arrow'),
      rightArrow = document.querySelector('.right-arrow .bxs-right-arrow'),
      slider = document.querySelector('.slider');

// Scroll To Right
function scrollRight() {
    slider.scrollLeft += window.innerWidth;
    if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
        slider.scrollLeft = 0;
    }
}

// Scroll To Left
function scrollLeft() {
    slider.scrollLeft -= window.innerWidth;
    if (slider.scrollLeft < 0) {
        slider.scrollLeft = slider.scrollWidth - slider.clientWidth;
    }
}

let timerId = setInterval(scrollRight, 7000);

// Reset Time to Scroll Right
function resetTimer() {
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
}

// Scroll event
slider.addEventListener('click', function(ev) {
    if (ev.target === leftArrow) {
        scrollLeft();
        resetTimer();
    } else if (ev.target === rightArrow) {
        scrollRight();
        resetTimer();
    }
});
