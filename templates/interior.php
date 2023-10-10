<?php
/*
Template Name: Межкомнатные двери

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>


<section class="advantages__section">
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


<section class="interior-page popular__section">
    <div class="container">
        <div class="popular__inner">
            <hr class="popular__line">
            <h1 class="popular__title">Популярные модели</h1>
            <div class="popular__items swiper">
                <div class="swiper-wrapper">
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/popular-item-1.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">BERNETTI</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">BERNETTI</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/popular-item-2.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">GRAPHIC</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">GRAPHIC</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/popular-item-3.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">CREDO V</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">CREDO V</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/popular-item-2.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">GRAPHIC</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">GRAPHIC</div>
                            <a href="<?php echo get_permalink(33); ?>" class="popular__btn">подробнее</a>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/popular-item-3.png" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover">CREDO V</div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title">CREDO V</div>
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


<section class="why__section">
    <div class="container">
        <div class="why__inner">
            <hr class="why__line">
            <h2 class="why__title">Почему наши двери?</h2>
            <p class="why__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
        </div>
    </div>
</section>

<section class="mdf__section">
    <div class="container">
        <div class="mdf__inner">
            <div class="mdf__left">
                <hr class="mdf__line">
                <h2 class="mdf__title">Широкий выбор МДФ-панелей</h2>
                <p class="mdf__descr">Наша продукция производится из лучших материалов и проходит строгие контрольные процедуры по качеству, чтобы обеспечить вам максимальное удобство и долговечность.</p>
            </div>
            <div class="mdf__right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/mdf-item-1.png" alt="" class="mdf__img-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/mdf-item-2.png" alt="" class="mdf__img-2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/mdf-item-3.png" alt="" class="mdf__img-3">
            </div>
        </div>
    </div>
</section>

<section class="furniture__section">
    <div class="container">
        <div class="furniture__inner">
            <div class="furniture__left">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/furniture-img.webp" alt="" class="furniture__img">
            </div>
            <div class="furniture__right">
                <hr class="furniture__line">
                <h2 class="furniture__title">Премиум фурнитура</h2>
                <p class="furniture__descr">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойденную эстетику и иновационные решения.</p>
                <a data-fancybox data-src="#popup__form" class="furniture__btn">оставить заявку</a>
            </div>
        </div>
    </div>
</section>

<section class="sizes__section">
    <div class="container">
        <div class="sizes__inner">
            <div class="sizes__left">
                <hr class="sizes__line">
                <h2 class="sizes__title">Размеры дверей</h2>
                <p class="sizes__descr">Наша продукция производится из лучших материалов и проходит строгие контрольные процедуры по качеству, чтобы обеспечить вам максимальное удобство и долговечность.</p>
            </div>
            <div class="sizes__right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/sizes-img-1.svg" alt="" class="sizes__img-1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/sizes-img-2.svg" alt="" class="sizes__img-2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/sizes-img-3.svg" alt="" class="sizes__img-3">
            </div>
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

<section class="catalogue__section">
    <div class="container">
        <div class="catalogue__inner">
            <hr class="catalogue__line">
            <h2 class="catalogue__title">Межкомнатные двери</h2>
            <p class="catalogue__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="catalogue__items">
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-1.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">FLEXO</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">FLEXO</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-2.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">CREDO V</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">CREDO V</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-3.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">CREDO 2</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">CREDO 2</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-4.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">BERNETTI</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">BERNETTI</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-5.png" alt="" class="catalogue__item-img">
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
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-6.png" alt="" class="catalogue__item-img">
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
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-7.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">LINEA</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">LINEA</div>
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/interior/cat-item-8.png" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">SENTYS</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">SENTYS</div>
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