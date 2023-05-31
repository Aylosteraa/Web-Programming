let slideIndex1 = 1;

function changeSlide1(n) {
    slideIndex1 += n;
    showSlide1(slideIndex1);
}

function showSlide1(n) {
    const slides = document.getElementById("slider1").getElementsByClassName("slide");

    if (n > slides.length) {
        slideIndex1 = 1;
    } else if (n < 1) {
        slideIndex1 = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex1 - 1].style.display = "block";
}

showSlide1(slideIndex1);

let slideIndex2 = 1;

function changeSlide2(n) {
    slideIndex2 += n;
    showSlide(slideIndex2);
}

function showSlide2(n) {
    const slides = document.getElementById("slider2").getElementsByClassName("slide");
    if (n > slides.length) {
        slideIndex2 = 1;
    } else if (n < 1) {
        slideIndex2 = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex2 - 1].style.display = "block";

}

showSlide2(slideIndex2);

let slideIndex3 = 1;

function changeSlide3(n) {
    slideIndex3 += n;
    showSlide(slideIndex3);
}

function showSlide3(n) {
    const slides = document.getElementById("slider3").getElementsByClassName("slide");

    if (n > slides.length) {
        slideIndex3 = 1;
    } else if (n < 1) {
        slideIndex3 = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex3 - 1].style.display = "block";
}

showSlide3(slideIndex3);

