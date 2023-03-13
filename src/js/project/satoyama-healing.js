import Swiper from 'swiper/bundle';

const satoyamaHealingOnsenSlideSwiper = new Swiper(".satoyamaHealingOnsenSlideSwiper", {
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

const satoyamaHealingBigBathSwiper = new Swiper(".satoyamaHealingBigBathSwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
const satoyamaHealingBigBathSwiper2 = new Swiper(".satoyamaHealingBigBathSwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: satoyamaHealingBigBathSwiper,
    },
});

const satoyamaHealingOpenAirBathSwiper = new Swiper(".satoyamaHealingOpenAirBathSwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
const satoyamaHealingOpenAirBathSwiper2 = new Swiper(".satoyamaHealingOpenAirBathSwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: satoyamaHealingOpenAirBathSwiper,
    },
});

const satoyamaHealingDressingRoomSwiper = new Swiper(".satoyamaHealingDressingRoomSwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
const satoyamaHealingDressingRoomSwiper2 = new Swiper(".satoyamaHealingDressingRoomSwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: satoyamaHealingDressingRoomSwiper,
    },
});