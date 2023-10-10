<?php
/*
Template Name: Дверь / Перегородка
Template Post Type: post, page, product

*/

// … остальной код шаблона
?>

<?php get_header('door'); ?>



<section class="quote__section">
    <div class="container">
        <div class="quote__inner">
            <div class="quote__left"></div>
            <div class="quote__right">
                <h2 class="quote__title"><?php the_field('quote-title') ?></h2>
                <p class="quote__descr"><?php the_field('quote-descr') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="first-images__section">

    <div class="first-images__inner">
        <img src="<?php the_field('img-1') ?>" alt="" class="first-images__img">
        <img src="<?php the_field('img-2') ?>" alt="" class="first-images__img">
    </div>

</section>

<section class="partitions-page popular__section">
    <div class="container">
        <div class="popular__inner">
            <hr class="popular__line">
            <h1 class="popular__title">Варианты исполнения</h1>
            <p class="popular__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="popular__items swiper">
                <div class="swiper-wrapper">
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php the_field('popular-img-1') ?>" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover"><?php the_field('popular-title-1') ?></div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title"><?php the_field('popular-title-1') ?></div>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php the_field('popular-img-2') ?>" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover"><?php the_field('popular-title-2') ?></div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title"><?php the_field('popular-title-2') ?></div>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php the_field('popular-img-3') ?>" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover"><?php the_field('popular-title-3') ?></div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title"><?php the_field('popular-title-3') ?></div>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php the_field('popular-img-4') ?>" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover"><?php the_field('popular-title-4') ?></div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title"><?php the_field('popular-title-4') ?></div>
                        </div>
                    </div>
                    <div class="popular__item swiper-slide">
                        <div class="popular__item-top">
                            <img src="<?php the_field('popular-img-5') ?>" alt="" class="popular__item-img">
                            <div class="popular__item-top-cover"><?php the_field('popular-title-5') ?></div>
                        </div>
                        <div class="popular__item-bottom">
                            <div class="popular__item-subtitle">Модель</div>
                            <div class="popular__item-title"><?php the_field('popular-title-5') ?></div>
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


<section class="second-images__section">

    <div class="second-images__inner">
        <img src="<?php the_field('img-3') ?>" alt="" class="first-images__img">
        <img src="<?php the_field('img-4') ?>" alt="" class="first-images__img">
    </div>

</section>

<section class="materials__section">
    <div class="container">
        <div class="materials__inner">
            <div class="materials__left">
                <img src="<?php the_field('materials-img') ?>" alt="" class="materials__img">
            </div>
            <div class="materials__right">
                <hr class="materials__line">
                <h2 class="materials__title">Прошедшие проверку временем материалы</h2>
                <p class="materials__descr">Наши металлические двери – надежная защита для вашего дома или офиса. Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            </div>
        </div>
    </div>
</section>

<section class="colors__section">
    <div class="container">
        <div class="colors__inner">
            <hr class="colors__line">
            <h2 class="colors__title">Материал и цвет</h2>
            <div class="colors__block">
                <div class="colors__left">
                    <img src="<?php the_field('colors-img-1') ?>" alt="" class="colors__img first">
                    <img src="<?php the_field('colors-img-2') ?>" alt="" class="colors__img second">
                </div>
                <div class="colors__right" data-doortype="<?php the_field('door-id') ?>">
                    <div class="colors__main-block">
                        <h3 class="colors__block-subtitle">Основной цвет</h3>
                        <hr class="colors__block-line">
                        <div class="colors__block-items swiper main">
                            <div class="swiper-wrapper">
                                <div class="colors__block-item swiper-slide active" data-color="col-main-1">
                                    <img src="<?php the_field('colors-main-img-1') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-main-title-1') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-main-2">
                                    <img src="<?php the_field('colors-main-img-2') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-main-title-2') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-main-3">
                                    <img src="<?php the_field('colors-main-img-3') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-main-title-3') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-main-4">
                                    <img src="<?php the_field('colors-main-img-4') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-main-title-4') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-main-5">
                                    <img src="<?php the_field('colors-main-img-5') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-main-title-5') ?></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="colors__accent-block">
                        <h3 class="colors__block-subtitle">Акцентный цвет</h3>
                        <hr class="colors__block-line">
                        <div class="colors__block-items swiper accent">
                            <div class="swiper-wrapper">
                                <div class="colors__block-item swiper-slide" data-color="col-acc-1">
                                    <img src="<?php the_field('colors-accent-img-1') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-accent-title-1') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-acc-2">
                                    <img src="<?php the_field('colors-accent-img-2') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-accent-title-2') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide active" data-color="col-acc-3">
                                    <img src="<?php the_field('colors-accent-img-3') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-accent-title-3') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-acc-4">
                                    <img src="<?php the_field('colors-accent-img-4') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-accent-title-4') ?></div>
                                </div>
                                <div class="colors__block-item swiper-slide" data-color="col-acc-5">
                                    <img src="<?php the_field('colors-accent-img-5') ?>" alt="" class="colors__block-item-img">
                                    <div class="colors__block-item-title"><?php the_field('colors-accent-title-5') ?></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="application__section">
    <div class="container">
        <div class="application__inners">
            <div class="work__inner">
                <div class="work__form">
                    <div class="work__form-shortcode">
                        <p class="work__form-descr">Заполните форму и мы обязательно свяжемся с вами</p>
                        <hr class="work__form-line">
                        <?php echo do_shortcode('[contact-form-7 id="b944839" title="Контактная форма 1"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>