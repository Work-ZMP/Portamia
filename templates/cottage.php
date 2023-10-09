<?php
/*
Template Name: Коттеджные двери

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>






<section class="advantages__section ">
    <div class="container">
        <div class="advantages__inner">
            <hr class="advantages__line">
            <h1 class="advantages__title">Наши преимущества</h1>
            <p class="advantages__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="advantages__items">
                <div class="advantages__item">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/adv-icon-1.svg" alt="">
                    </div>
                    <div class="advantages__item-title">Прочность и надежность</div>
                    <div class="advantages__item-descr">Наши двери изготовлены из высококачественных материлов</div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/adv-icon-2.svg" alt="">
                    </div>
                    <div class="advantages__item-title">Дизайнерские решения</div>
                    <div class="advantages__item-descr">Широкий выбор моделей дверей разных стилей и вкусов</div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/adv-icon-3.svg" alt="">
                    </div>
                    <div class="advantages__item-title">Технологические решения</div>
                    <div class="advantages__item-descr">Инновационное оборудование на производстве</div>
                </div>
                <div class="advantages__item">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/adv-icon-4.svg" alt="">
                    </div>
                    <div class="advantages__item-title">Индивидуальный заказ</div>
                    <div class="advantages__item-descr">Возможность воссоздать дверь по индивидуальным предпочтениям</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular__section cottage-page">
    <div class="container">
        <div class="popular__inner">
            <hr class="popular__line">
            <h1 class="popular__title">Популярные модели</h1>
            <div class="popular__items swiper">
                <div class="swiper-wrapper">
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/popular-item-1.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">ESSENCE</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">ESSENCE</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/popular-item-2.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">LEVEL ONE</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">LEVEL ONE</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/popular-item-3.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">ROOM 47</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">ROOM 47</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/popular-item-2.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">LEVEL ONE</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">LEVEL ONE</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/popular-item-3.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">ROOM 47</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">ROOM 47</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <hr class="popular__line line-long">
        </div>
    </div>
</section>

<section class="banner__section zamer-section">
    <div class="container">
        <div class="banner__inner">
            <h2 class="banner__title">Оставьте заявку на бесплатный замер</h1>
                <p class="banner__descr">Заполните форму и наш менеджер свяжется с вами, чтобы обсудить детали</p>
                <a data-fancybox data-src="#popup__form" class="banner__btn">заказать замер</a>
        </div>
    </div>
</section>

<section class="difference__section">
    <div class="container">
        <div class="difference__inner">
            <div class="difference__left">
                <hr class="difference__line">
                <h2 class="difference__title">Отличия коттеджных дверей от квартирных</h2>
                <div class="difference__descr">Наша продукция производится из лучших материалов и проходит строгие контрольные процедуры по качеству, чтобы обеспечить вам максимальное удобство и долговечность.</div>
                <a data-fancybox data-src="#popup__form" class="difference__btn">оставить заявку</a>
            </div>
            <div class="difference__right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/dif-item-1.svg" alt="" class="difference__img-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/dif-item-2.svg" alt="" class="difference__img-2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/dif-item-3.svg" alt="" class="difference__img-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/dif-item-4.svg" alt="" class="difference__img-4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/dif-item-5.svg" alt="" class="difference__img-5">
            </div>
        </div>
    </div>
</section>

<section class="materials__section">
    <div class="container">
        <div class="materials__inner">
            <div class="materials__left">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/mat-item-1.svg" alt="" class="materials__img-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/mat-item-2.svg" alt="" class="materials__img-2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/mat-item-3.svg" alt="" class="materials__img-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/mat-item-4.svg" alt="" class="materials__img-4">
            </div>
            <div class="materials__right">
                <hr class="materials__line">
                <h2 class="materials__title">Высококачественные материалы</h2>
                <p class="materials__descr">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойденную эстетику и иновационные решения.</p>
                <a data-fancybox data-src="#popup__form" class="materials__btn">оставить заявку</a>
            </div>
        </div>
    </div>
</section>

<section class="catalogue__section">
    <div class="container">
        <div class="catalogue__inner">
            <hr class="catalogue__line">
            <h2 class="catalogue__title">Коттеджные двери</h2>
            <p class="catalogue__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="catalogue__items">
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-1.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">CREDO NEO</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">CREDO NEO</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-2.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">FLEXO NEO</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">FLEXO NEO</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-3.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">CRYSTAL</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">CRYSTAL</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-4.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">AURORA</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">AURORA</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-5.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">VIRGIN</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">VIRGIN</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-6.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">GRAPHIC</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">GRAPHIC</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-7.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">ESSENCE</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">ESSENCE</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-8.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">LEVEL ONE</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">LEVEL ONE</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cottage/cat-item-9.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">RAIN ONE</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">RAIN ONE</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
            </div>
            <hr class="catalogue__line long-line">
        </div>
    </div>
</section>

<section class="reviews__section">
    <div class="container">
        <div class="reviews__inner">
            <div class="reviews__left">
                <hr class="reviews__line">
                <h2 class="reviews__title">Наши отзывы</h2>
                <p class="reviews__descr">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойденную эстетику и иновационные решения.</p>
                <a data-fancybox data-src="#popup__form" class="reviews__btn">оставить заявку</a>
            </div>
            <div class="reviews__right">
                <div class="reviews__line-1">
                    <div class="reviews__line-item-1-1"></div>
                    <div class="reviews__line-item-1-2">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-1-3">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-1-4"></div>
                </div>
                <div class="reviews__line-2">
                    <div class="reviews__line-item-2-1"></div>
                    <div class="reviews__line-item-2-2">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-2-3"></div>
                    <div class="reviews__line-item-2-4"></div>
                </div>
                <div class="reviews__line-3">
                    <div class="reviews__line-item-3-1"></div>
                    <div class="reviews__line-item-3-2">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-3-3">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-3-4"></div>
                </div>
                <div class="reviews__line-4">
                    <div class="reviews__line-item-4-1"></div>
                    <div class="reviews__line-item-4-2">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-4-3"></div>
                    <div class="reviews__line-item-4-4"></div>
                </div>
                <div class="reviews__line-5">
                    <div class="reviews__line-item-5-1"></div>
                    <div class="reviews__line-item-5-2">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-5-3">
                        <div class="reviews__line-top">
                            <div class="reviews__line-icon"></div>
                            <div class="reviews__line-name">Наталья М.</div>
                        </div>
                        <div class="reviews__line-bottom">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойде</div>
                    </div>
                    <div class="reviews__line-item-5-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>














<?php get_footer(); ?>