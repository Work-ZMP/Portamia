if (document.querySelector(".elegance__items")) {
    var swiperElegance = new Swiper(".elegance__items", {
        slidesPerView: "1.3",
        
        
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },
        loop: true,
        spaceBetween: 30,

        pagination: {
            el: ".swiper-pagination",
        },
    });

};