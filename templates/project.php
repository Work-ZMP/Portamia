<?php
/*
Template Name: Проект
Template Post Type: post, page, product
*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>

<section class="elegance__section">
    <div class="container">
        <div class="elegance__inner">
            <div class="elegance__items swiper">
                <div class="swiper-wrapper">
                    <img class="swiper-slide" src="<?php the_field('img-1_slide') ?>" alt="">
                    <img class="swiper-slide" src="<?php the_field('img-2_slide') ?>" alt="">
                    <img class="swiper-slide" src="<?php the_field('img-3_slide') ?>" alt="">
                    <img class="swiper-slide" src="<?php the_field('img-4_slide') ?>" alt="">
                    <img class="swiper-slide" src="<?php the_field('img-5_slide') ?>" alt="">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>




<section class="partitions__section">
    <div class="container">
        <div class="partitions__inner">
            <div class="partitions__item1">
                <img src="<?php the_field('img-door') ?>" alt="">
            </div>
            <div class="partitions__item2">
                <hr class="partitions__line">
                <h3 class="partitions__subtitle"><?php the_field('style-subtitle') ?></h3>
                <p class="partitions__descr"><?php the_field('style-descr') ?></p>
            </div>
        </div>
    </div>
</section>






<section class="partitions__section section2">
    <div class="container">
        <div class="project__inner">
            <div class="partitions__left">
                <hr class="partitions__line">
                <h1 class="partitions__title"><?php the_field('style-title') ?></h1>
                <p class="partitions__descr"><?php the_field('style-descr') ?></p>
                <div class="partitions__descr-li">
                    <ul class="partitions__ul">
                        <li class="partitions__li"><?php the_field('style-li1') ?></li>
                        <li class="partitions__li"><?php the_field('style-li2') ?></li>
                        <li class="partitions__li"><?php the_field('style-li3') ?></li>
                    </ul>
                </div>
            </div>
            <div class="partitions__right partitions-object">
                <img class="img-object" src="<?php the_field('img-object') ?>" alt="">
            </div>
        </div>
    </div>
</section>





<section class="application__section">
    <div class="container">
        <div class="application__inner">
            <div class="application__block">
                <hr class="application__line">
                <h1 class="application__title">Понравился проект?</h1>
                <p class="application__descr">Заполните форму и наш менеджер свяжется с вами в ближайшее время!</p>
                <?php echo do_shortcode('[contact-form-7 id="34042ef" title="Контактная форма проекты"]') ?>
                <a class="application__top-btn" data-fancybox="" data-src="#popup__form">оставить заявку</a>
            </div>            
        </div>
    </div>
</section>











<?php get_footer(); ?>