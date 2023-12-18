<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="//code.jivo.ru/widget/12tVTZvANP" async></script>

    <?php wp_head(); ?>
</head>

<body>
    <nav class="menu-mob" id="menu">
        <div class="menu-mob__close-btn magic-hover magic-hover__square">
            <i class="menu-mob__close icon-x"></i>
        </div>
        <ul>
            <div class="menu-mob__title">Меню</div>
            <ul class="menu-mob__list">
                <li><a class="menu-mob__products">Продукция</a></li>
                <li><a href="<?php echo get_permalink(10); ?>">Конфигуратор</a></li>
                <li><a href="<?php echo get_permalink(39); ?>">Каталог</a></li>
                <li><a href="<?php echo get_permalink(41); ?>">Галерея</a></li>
                <li><a href="<?php echo get_permalink(428); ?>">Коллекции</a></li>
                <li><a href="<?php echo get_permalink(642); ?>">Проекты</a></li>
                <li><a href="<?php echo get_permalink(43); ?>">Контакты</a></li>
                <li><a class="menu-mob__more">Еще</a></li>
            </ul>
            <div class="menu-mobile__list">
                <li><a class="menu-mobile__products">Продукция</a></li>
                <div class="menu-mobile__products-list" style="display: none;">
                    <a href="<?php echo get_permalink(7); ?>" class="menu-mobile__item">Квартирные двери</a>
                    <a href="<?php echo get_permalink(33); ?>" class="menu-mobile__item">Двери в коттедж</a>
                    <a href="<?php echo get_permalink(35); ?>" class="menu-mobile__item">Межкомнатные двери</a>
                    <a href="<?php echo get_permalink(37); ?>" class="menu-mobile__item">Перегородки</a>
                </div>
                <li><a href="<?php echo get_permalink(10); ?>">Конфигуратор</a></li>
                <li><a href="<?php echo get_permalink(39); ?>">Каталог</a></li>
                <li><a href="<?php echo get_permalink(41); ?>">Галерея</a></li>
                <li><a href="<?php echo get_permalink(428); ?>">Коллекции</a></li>
                <li><a href="<?php echo get_permalink(642); ?>">Проекты</a></li>
                <li><a href="<?php echo get_permalink(43); ?>">Контакты</a></li>
                <li><a class="menu-mobile__more">Еще</a></li>
                <div class="menu-mobile__more-list" style="display: none;">
                    <a href="<?php echo get_permalink(45); ?>" class="menu-mobile__item">Дилерам</a>
                    <a href="<?php echo get_permalink(47); ?>" class="menu-mobile__item">Работа у нас</a>
                    <a href="<?php echo get_permalink(49); ?>" class="menu-mobile__item">Архитекторам и дизайнерам</a>
                </div>
            </div>
            <a data-fancybox data-src="#popup__form" class="header__mob-btn magic-hover magic-hover__square" data-fancybox data-src="#popup__form">связаться</a>
        </ul>
    </nav>
    <div class="menu-left" id="menu-left-products">
        <div class="menu-container">
            <div class="menu-left__inner">
                <div class="menu-left__top">Продукция</div>
                <div class="menu-left__bottom">
                    <a href="<?php echo get_permalink(7); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-appart.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Квартирные двери</div>
                    </a>
                    <a href="<?php echo get_permalink(33); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-cottage.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Двери в коттедж</div>
                    </a>
                    <a href="<?php echo get_permalink(35); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-indoor.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Межкомнатные двери</div>
                    </a>
                    <a href="<?php echo get_permalink(37); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-part.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Перегородки</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-left menu-left-more" id="menu-left-more">
        <div class="menu-container">
            <div class="menu-left__inner">
                <div class="menu-left__top">Еще</div>
                <div class="menu-left__bottom">
                    <a href="<?php echo get_permalink(45); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-dealers.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Дилерам</div>
                    </a>
                    <a href="<?php echo get_permalink(47); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-work.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Работа у нас</div>
                    </a>
                    <a href="<?php echo get_permalink(49); ?>" class="menu-left__item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/menu/left-menu-img-designers.webp" class="menu-left__item-img"></img>
                        <div class="menu-left__item-text">Архитекторам и дизайнерам</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <main class="slideout-panel panel-main" id="panel">
        <header class="header">
            <div class="header__top header-top-main">
                <div class="header__top-upper">
                    <div class="header__upper-left">
                        <a href="<?php echo get_permalink(10); ?>" class="header__btn-connection magic-hover magic-hover__square">конфигуратор</a>

                    </div>
                    <div class="header__upper-center header__logo">
                        <a href="<?php echo get_permalink(7); ?>">
                            <div class="header__logo-text">PORTAMIA</div>
                            <div class="header__logo-descr">двери Premium класса</div>
                        </a>
                    </div>
                    <div class="header__upper-right">
                        <a href="" data-fancybox data-src="#popup__call" class="header__btn-call magic-hover magic-hover__square">
                            <i class="header__btn-call-icon icon-phone"></i>
                        </a>
                        <a href="" class="header__btn-connection magic-hover magic-hover__square" data-fancybox data-src="#popup__form">оставить заявку</a>
                    </div>
                </div>
                <hr class="header__line">
                <div class="header__top-lower">
                    <div class="header__lower-search">.</div>
                    <div class="header__menu-center">
                        <div class="header__btn-menu magic-hover magic-hover__square">
                            <i class="icon-menu1"></i>
                        </div>
                        <div class="header__btn-name">Меню</div>
                    </div>
                    <div class="header__lower-connection">
                        <a href="" class="header__lower-connection-btn" data-fancybox data-src="#popup__form">Связаться с нами</a>
                    </div>
                </div>
            </div>
            <div class="header__slider">
                <div class="swiper-wrapper">
                    <div class="header__slide slide-1 swiper-slide">
                    <img src="<?php the_field('img') ?>" alt="" class="header__slide-cover-img">
                        <div class="header__slide-text">
                            <h1 class="header__slide-title"><?php the_field('title') ?></h1>
                            <div class="header__slide-descr"><?php the_field('descr') ?></div>
                            <div class="header__slide-btn magic-hover magic-hover__square" data-fancybox data-src="#popup__form">оставить заявку</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </header>