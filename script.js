let currentIndex = 0;

function changeSlide(n) {
    currentIndex += n;
    showSlide();
}

function showSlide() {
    const slides = document.querySelectorAll('.slider img');

    if (currentIndex < 0) {
        currentIndex = slides.length - 1;
    } else if (currentIndex >= slides.length) {
        currentIndex = 0;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slides[currentIndex].style.display = 'block';
}

// To automatically advance the slider, you can uncomment the following line:
// setInterval(() => changeSlide(1), 3000);

// Uncommenting the line above will make the slider automatically advance every 3 seconds.
