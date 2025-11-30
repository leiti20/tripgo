/* Display forms */
var formals = document.getElementById("formals");
var formalr = document.getElementById("formalr");
var formmld = document.getElementById("formmld");
var formml = document.getElementById("formml");
var alr = document.getElementById("alr");
var als = document.getElementById("als");
var amld = document.getElementById("amld");

window.addEventListener("load", function () {
    formalr.style.display = "flex";
    formmld.style.display = "none";
    formals.style.display = "none";
    formml.style.display = "none";
});

alr.addEventListener("input", function () {
    formalr.style.display = "flex";
    formmld.style.display = "none";
    formals.style.display = "none";
    formml.style.display = "none";
});

als.addEventListener("input", function () {
    formalr.style.display = "none";
    formmld.style.display = "none";
    formals.style.display = "flex";
    formml.style.display = "none";
});

amld.addEventListener("input", function () {
    formalr.style.display = "none";
    formmld.style.display = "flex";
    formals.style.display = "none";
    formml.style.display = "flex";
});

/* Replace with calendar */

var dated = document.getElementById("datedalr");
var dater = document.getElementById("dateralr");

dated.addEventListener("click", function () {
    var inptd = document.createElement("input");
    inptd.type = "date";
    formalr.replaceChild(inptd, dated);
});

dater.addEventListener("click", function () {
    var inptd = document.createElement("input");
    inptd.type = "date";
    formalr.replaceChild(inptd, dater);
});


/* Carousel functionality */
const carousel = document.querySelector('.carouse');
let currentIndex = 0;

function prevSlide() {
    currentIndex = (currentIndex - 1 + 9) % 9;
    updateCarousel();
    stopAnimation();
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % 9;
    updateCarousel();
    stopAnimation();
}

function updateCarousel() {
    carousel.style.transform = `rotateY(${currentIndex * -40}deg)`;
}

function stopAnimation() {
    carousel.style.animation = 'none';
}

function rotate() {
    carousel.style.animation = 'rotate360 60s infinite forwards linear';
    setTimeout(stopAnimation, 60 * 1000);
}

function scrollAnimation() {
    var elementsToAnimate = document.querySelectorAll('.card');
    elementsToAnimate.forEach(function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('animate');
        } else {
            element.classList.remove('animate');
        }
    });
}

function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

window.addEventListener('scroll', scrollAnimation);
scrollAnimation();

function openPage(url) {
    window.location.href = url;
}
