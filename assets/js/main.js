

$(function () {


    document.querySelector('.menu-mob__products').addEventListener('click', function () {
        document.querySelector('#menu-left-more').classList.remove('active');
        document.querySelector('#menu-left-products').classList.toggle('active');
    })
    document.querySelector('.menu-mob__more').addEventListener('click', function () {
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.toggle('active');
    })

    document.querySelector('.menu-mobile__products').addEventListener('click', function () {
        document.querySelector('.menu-mobile__products').classList.toggle('active');
        $('.menu-mobile__products-list').slideToggle('slow');
    })
    document.querySelector('.menu-mobile__more').addEventListener('click', function () {
        document.querySelector('.menu-mobile__more').classList.toggle('active');
        $('.menu-mobile__more-list').slideToggle('slow');
    })


    var swiper = new Swiper(".mySwiper", {

        pagination: {
            el: ".swiper-pagination",
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false
        },

        loop: true,
    });
    swiper.on("slideChangeTransitionStart", function () {
        console.log("Transition Start");
        gsap.fromTo(
            "h1",
            {
                opacity: 1
            },
            {
                opacity: 0,
                duration: 0
            }
        );
        gsap.fromTo(
            ".header__slide-descr",
            {
                opacity: 1
            },
            {
                opacity: 0,
                duration: 0
            }
        );
        gsap.fromTo(
            ".header__slide-btn",
            {
                opacity: 1
            },
            {
                opacity: 0,
                duration: 0
            }
        );

    });

    swiper.on("slideChangeTransitionEnd", function () {
        console.log("On Change");

        gsap.fromTo(
            "h1",
            {
                xPercent: -10,
                opacity: 0
            },
            {
                opacity: 1,
                xPercent: 0,
                ease: "power4",
                duration: 1.4
            }
        );
        gsap.fromTo(
            ".header__slide-descr",
            {
                xPercent: -15,
                opacity: 0
            },
            {
                opacity: 1,
                xPercent: 0,
                ease: "power4",
                duration: 1.4,
                delay: 0.2
            }
        );
        gsap.fromTo(
            ".header__slide-btn",
            {
                xPercent: -15,
                opacity: 0
            },
            {
                opacity: 1,
                xPercent: 0,
                ease: "power4",
                duration: 1.4,
                delay: 0.4
            }
        );

    });
    if (document.querySelector(".cottage-page .popular__items")) {
        var swiperCottage = new Swiper(".cottage-page .popular__items", {
            slidesPerView: "1",
            breakpoints: {
                640: {
                    slidesPerView: "2",
                    spaceBetween: 20,
                    loop: true,
                }, 
                800: {
                    slidesPerView: "3",
                    spaceBetween: 30,
                    loop: true,
                }
                }    ,  
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false
            },
            loop: true,            
        });

    };
    if (document.querySelector(".interior-page .popular__items")) {
        var swiperInterior = new Swiper(".interior-page .popular__items", {
            slidesPerView: "1",
            breakpoints: {
                640: {
                    slidesPerView: "2",
                    spaceBetween: 20,
                }, 
                800: {
                    slidesPerView: "3",
                    spaceBetween: 30,
                },                              
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false
            },
            loop: true,
            // spaceBetween: 30,
        });
        window.addEventListener('resize', function () {
            swiperInterior.update(); // Обновляем Swiper
          });

    };
    if (document.querySelector(".catalogue-page .swiper__items")) {  
        function initSwiper() {     
        var swiperInteriorBottom = new Swiper(".catalogue-page .swiper__items", {
            slidesPerView: "1",      
            navigation: {
                nextEl: ".swiper-button-next1",
                prevEl: ".swiper-button-prev1",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false
            },
            loop: true,            
        });
    }
        var mediaQuery = window.matchMedia("(max-width: 800px)");
        function checkMediaQuery() {
            if (mediaQuery.matches) {
                initSwiper();
            }
        }
        checkMediaQuery();
        
        mediaQuery.addEventListener(checkMediaQuery);
        window.addEventListener('resize', function () {
            swiperInterior.update(); // Обновляем Swiper
          });

    };
    if (document.querySelector(".partitions-page .popular__items")) {
        var swiperPartitions = new Swiper(".partitions-page .popular__items", {
            slidesPerView: "4",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false
            },
            loop: true,
            spaceBetween: 30,
        });

    }
    if (document.querySelector(".designers")) {
        var swiperDes = new Swiper(".projects__items", {
            slidesPerView: "3",
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false
            },
            loop: true,
        });

    };



    $('.slider__inner').slick({
        nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,

    });

    $('.shortcode__inner').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1200,
        pauseOnHover: false,
        pauseOnFocus: false,
        swipeToSlide: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    AOS.init();

    //$('select').styler();

    // наведение на обычную дверь
    $(".doortype__img1").on("mouseover", function () {
        $(".doortype__title").text('Входные двери'),
            $(".doortype__descr").text('Наши ходные металлические двери отличаются своим качеством и надежностью'),
            $(".doortype__block-text").addClass('active')
    });
    $(".doortype__img1").on("mouseout", function () {
        $(".doortype__title").text('Двери на любой случай'),
            $(".doortype__descr").text('Мы занимаемся производством металлических входных, а также противопожарных дверей'),
            $(".doortype__block-text").removeClass('active')
    });


    // наведение на премиум дверь
    $(".doortype__img2").on("mouseover", function () {
        $(".doortype__title").text('Двери Премиум класса'),
            $(".doortype__descr").text('Изготовим высококачественную дверь по Вашим предпочтениям и индивидуальным размерам'),
            $(".doortype__block-text").addClass('active')
    });
    $(".doortype__img2").on("mouseout", function () {
        $(".doortype__title").text('Двери на любой случай'),
            $(".doortype__descr").text('Мы занимаемся производством металлических входных, а также противопожарных дверей'),
            $(".doortype__block-text").removeClass('active')
    });


    // наведение на противопожарную дверь
    $(".doortype__img3").on("mouseover", function () {
        $(".doortype__title").text('Противопожарные двери'),
            $(".doortype__descr").text('Противопожарная дверь — дверь, обеспечивающая защиту помещений от распространения дыма и огня пожара'),
            $(".doortype__block-text").addClass('active')
    });
    $(".doortype__img3").on("mouseout", function () {
        $(".doortype__title").text('Двери на любой случай'),
            $(".doortype__descr").text('Мы занимаемся производством металлических входных, а также противопожарных дверей'),
            $(".doortype__block-text").removeClass('active')
    });


    // иконка вк становится цветной при наведении на ее блок
    $(".sm__block-vk").on("mouseover", function () {
        $('.sm__img-vk').addClass('active')
    });
    $(".sm__block-vk").on("mouseout", function () {
        $('.sm__img-vk').removeClass('active')

    });


    // иконка тг становится цветной при наведении на ее блок
    $(".sm__block-tg").on("mouseover", function () {
        $('.sm__img-tg').addClass('active')
    });
    $(".sm__block-tg").on("mouseout", function () {
        $('.sm__img-tg').removeClass('active')
    });



    $(".pulse").on("mouseover", function () {
        $(".pulse").addClass('active')
    });
    $(".pulse").on("mouseout", function () {
        $(".pulse").removeClass('active')
    });

    $(".call_back.icon-phone-call").on("mouseover", function () {
        $(".pulse").addClass('active')
    });
    $(".call_back.icon-phone-call").on("mouseout", function () {
        $(".pulse").removeClass('active')
    });




});


function scrollingAnimation(section) {

    let options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5,
    };

    let callback = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Элемент виден внутри области наблюдения.
                // Выполните необходимые действия.
                document.querySelector(`${section}`).classList.add('scrolled');
            } else {
                // Элемент скрыт вне области наблюдения.
                // Выполните необходимые действия.
            }

        });
    };
    let observer = new IntersectionObserver(callback, options);

    let target = document.querySelector(`${section}`);
    observer.observe(target);
}
if (document.querySelector('.homepage')) {
    scrollingAnimation('.header__slider');
    scrollingAnimation('.catalogue__section');
    scrollingAnimation('.banner-conf__section');
    scrollingAnimation('.furniture__section');
    scrollingAnimation('.banner-part__section');
    scrollingAnimation('.exclusive__section');
    scrollingAnimation('.collection__section');
    scrollingAnimation('.trust__section');
}
if (document.querySelector('.cottage-page')) {
    scrollingAnimation('.header__slider');
    scrollingAnimation('.advantages__section');
    scrollingAnimation('.popular__section');
    scrollingAnimation('.banner__section.zamer-section');
    scrollingAnimation('.difference__section');
    scrollingAnimation('.materials__section');
    scrollingAnimation('.catalogue__section');
    scrollingAnimation('.reviews__section');
}
if (document.querySelector('.interior-page')) {
    scrollingAnimation('.header__slider');
    scrollingAnimation('.advantages__section');
    scrollingAnimation('.popular__section');
    scrollingAnimation('.banner__section.zamer-section');
    scrollingAnimation('.why__section');
    scrollingAnimation('.mdf__section');
    scrollingAnimation('.furniture__section');
    scrollingAnimation('.sizes__section');
    scrollingAnimation('.catalogue__section');
    scrollingAnimation('.reviews__section');
}

if (document.querySelector('.partitions-page')) {
    scrollingAnimation('.header__slider');
    scrollingAnimation('.types__section');
    scrollingAnimation('.partitions-page');
    scrollingAnimation('.banner__section.zamer-section');
    scrollingAnimation('.glass__section');
    scrollingAnimation('.materials__section');
    scrollingAnimation('.catalogue__section');
    scrollingAnimation('.projects__section');
    scrollingAnimation('.reviews__section');
}
if (document.querySelector('.header__slider')) {
    scrollingAnimation('.header__slider');
}
if (document.querySelector('.partitions-page')) {
    function partitionsCnfg(btn, curcost, oldcost, link) {
        document.querySelector(`${btn}`).addEventListener('click', function () {
            if (document.querySelector(`${btn}`).classList.contains('active')) {

            } else {
                document.querySelectorAll('.types__cnfg-block .types__cnfg-block-item').forEach(b => b.classList.remove('active'));
                document.querySelector(`${btn}`).classList.add('active');
                document.querySelector('.types__cnfg-cost').textContent = `${curcost} ₽`;
                document.querySelector('.types__cnfg-sale').textContent = `${oldcost} ₽`;
                document.querySelector('.types__cnfg-img > img').setAttribute('src', `${link}`);
            }
        });

    }
    partitionsCnfg('.types__cnfg-block.block-1 .types__cnfg-block-item.item-1', '176 800', '208 000', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-1.webp');
    partitionsCnfg('.types__cnfg-block.block-1 .types__cnfg-block-item.item-2', '246 330', '289 800', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-2.webp');
    partitionsCnfg('.types__cnfg-block.block-1 .types__cnfg-block-item.item-3', '480 420', '565 200', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-3.webp');
    partitionsCnfg('.types__cnfg-block.block-2 .types__cnfg-block-item.item-1', '270 555', '318 300', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-4.webp');
    partitionsCnfg('.types__cnfg-block.block-2 .types__cnfg-block-item.item-2', '376 380', '442 800', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-5.webp');
    partitionsCnfg('.types__cnfg-block.block-2 .types__cnfg-block-item.item-3', '427 635', '503 100', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-6.webp');
    partitionsCnfg('.types__cnfg-block.block-3 .types__cnfg-block-item.item-1', '182 920', '215 200', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-7.webp');
    partitionsCnfg('.types__cnfg-block.block-3 .types__cnfg-block-item.item-2', '342 210', '402 600', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-8.webp');
    partitionsCnfg('.types__cnfg-block.block-3 .types__cnfg-block-item.item-3', '422 875', '497 500', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-9.webp');
    partitionsCnfg('.types__cnfg-block.block-4 .types__cnfg-block-item.item-1', '103 955', '122 300', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-10.webp');
    partitionsCnfg('.types__cnfg-block.block-4 .types__cnfg-block-item.item-2', '224 000', '190 400', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-11.webp');
    partitionsCnfg('.types__cnfg-block.block-4 .types__cnfg-block-item.item-3', '303 875', '357 500', 'https://portamia.ru/wp-content/themes/mercato/assets/img/partitions/cnfg-img-12.webp');
}





function copyTextWithButton(elem, button) {
    const str = document.getElementById(elem).value;
    console.log(str);
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    $(`.${button}`).addClass('copyied');
    setTimeout(function () {
        $(`.${button}`).removeClass('copyied');
    }, 1500);
}

function copyElementValue(elem) {
    const el = document.getElementById(elem);
    el.select();
    document.execCommand('copy');
    alert('Ссылка скопирована в буфер обмена!');
}

function copyText(elem) {
    const str = document.getElementById(elem).innerText;
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
    $(`.${elem}`).addClass('copyied');
    setTimeout(function () {
        $(`.${elem}`).removeClass('copyied');
    }, 1500);
}

function popupGetCall() {
    const numbtn = document.querySelector('#popup__get-call .popup-btn-numbers');
    const callbtn = document.querySelector('#popup__get-call .popup-btn-call');
    const numblock = document.querySelector('#popup__get-call .popup__call-form-inner-numbers');
    const callblock = document.querySelector('#popup__get-call .popup__call-form-inner');

    if (callbtn.classList.contains('active')) {

    } else {
        callbtn.classList.add('active');
        numbtn.classList.remove('active');
        callblock.style.display = '';
        numblock.style.display = 'none';
    }
}

function popupGetNumbers() {
    const numbtn = document.querySelector('#popup__get-call .popup-btn-numbers');
    const callbtn = document.querySelector('#popup__get-call .popup-btn-call');
    const numblock = document.querySelector('#popup__get-call .popup__call-form-inner-numbers');
    const callblock = document.querySelector('#popup__get-call .popup__call-form-inner');


    if (numbtn.classList.contains('active')) {

    } else {
        numbtn.classList.add('active');
        callbtn.classList.remove('active');
        numblock.style.display = '';
        callblock.style.display = 'none';
    }
}





function popupGetCallOrder() {
    const numbtn = document.querySelector('#popup__get-order .popup-btn-numbers');
    const callbtn = document.querySelector('#popup__get-order .popup-btn-call');
    const numblock = document.querySelector('#popup__get-order .popup__call-form-inner-numbers');
    const callblock = document.querySelector('#popup__get-order .popup__call-form-inner');

    if (callbtn.classList.contains('active')) {

    } else {
        callbtn.classList.add('active');
        numbtn.classList.remove('active');
        callblock.style.display = '';
        numblock.style.display = 'none';
    }
}

function popupGetNumbersOrder() {
    const numbtn = document.querySelector('#popup__get-order .popup-btn-numbers');
    const callbtn = document.querySelector('#popup__get-order .popup-btn-call');
    const numblock = document.querySelector('#popup__get-order .popup__call-form-inner-numbers');
    const callblock = document.querySelector('#popup__get-order .popup__call-form-inner');


    if (numbtn.classList.contains('active')) {

    } else {
        numbtn.classList.add('active');
        callbtn.classList.remove('active');
        numblock.style.display = '';
        callblock.style.display = 'none';
    }
}







function pickDate() {
    let nowHours = new Date().getHours();
    let nowMinutes = new Date().getMinutes();
    let pickTimeOptions = document.querySelectorAll('.popup__form-inputs-hours option');
    let pickDay = document.querySelector('.popup__form-inputs-day').value;
    console.log(pickDay);

    if (pickDay == 'сегодня') {
        for (element of pickTimeOptions) {
            let pickHours = element.value.slice(0, 2);
            let pickMinutes = element.value.slice(3, 5);
            if (pickHours < nowHours) {
                element.disabled = "true";
            }
            if (pickHours == nowHours && pickMinutes == 00 && 0 < nowMinutes < 59) {
                element.disabled = "true";
            }
            if (pickHours == nowHours && pickMinutes == 30 && nowMinutes > 30) {
                element.disabled = "true";
            }
        }
    };
    if (pickDay == 'завтра') {
        for (element of pickTimeOptions) {
            element.disabled = false;
        }
    };
}
let pickTime = document.querySelector('.popup__form-inputs-hours');
pickTime.value = document.querySelector('.popup__form-inputs-hours option:not([disabled])').value;