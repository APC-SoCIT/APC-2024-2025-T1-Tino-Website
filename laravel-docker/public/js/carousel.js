let currentIndex = 0;
const images = document.querySelectorAll('.carousel-img');
const totalImages = images.length;

function showImages(index) {
    const carouselImages = document.querySelector('.carousel-images');
    const imageWidth = 600 + 40; // 600px image width + 40px gap
    // Shift the container by one image width
    carouselImages.style.transform = `translateX(${-index * imageWidth}px)`;
}

function nextImage() {
    if (currentIndex < totalImages - 2) {
        currentIndex += 1; // Move forward by 1 image
    } else {
        currentIndex = 0; // Wrap around to the start
    }
    showImages(currentIndex);
}

function prevImage() {
    if (currentIndex > 0) {
        currentIndex -= 1; // Move backward by 1 image
    } else {
        currentIndex = totalImages - 2; // Wrap around to the last two images
    }
    showImages(currentIndex);
}

// Show the first two images on load
showImages(currentIndex);
