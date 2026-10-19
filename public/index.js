
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('gamesCarousel');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    if (!carousel || !scrollLeft || !scrollRight) {
        return;
    }

    scrollLeft.addEventListener('click', () => {
        carousel.scrollBy({
            left: -carousel.clientWidth * 0.8,
            behavior: 'smooth'
        });
    });

    scrollRight.addEventListener('click', () => {
        carousel.scrollBy({
            left: carousel.clientWidth * 0.8,
            behavior: 'smooth'
        });
    });
});
