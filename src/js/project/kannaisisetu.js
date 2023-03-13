import Swiper from 'swiper/bundle';

const kannaisisetuSlideSwiper = new Swiper(".kannaisisetuSlideSwiper", {
    slidesPerView: 1.5,
    slidesPerGroup: 2,
    spaceBetween: 80,
    centeredSlides: false,
    slidesPerGroupSkip: 2,
    grabCursor: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3.5,
            slidesPerGroup: 2,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});