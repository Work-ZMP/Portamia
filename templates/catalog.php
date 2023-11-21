<?php
/*
Template Name: Каталог

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>




<section class="production__section">
    <div class="container">
        <div class="production__inner">
            <hr class="production__line line-default">
            <div class="container__top">
                <p class="production__descr default-descr">Исследуйте разнообразие продукции в нашем каталоге. Наши уникальные дизайны и высококачественные материалы станут воплощением вашего вкуса и стиля в интерьере.</p>
                <a class="footer__top-btn" data-fancybox="" data-src="#popup__form">оставить заявку</a>
            </div>
            <div class="production__items">
                <div class="">
                    <div class="production__item-top">
                        <a class="production__link" href="<?php echo get_permalink(7); ?>">
                            <div class="production__item item1">
                                <h3 class="production__subtitle">Квартирные двери</h3>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog/apartment_doors.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="production__item-top">
                        <a class="production__link" href="<?php echo get_permalink(33); ?>">
                            <div class="production__item item2">
                                <h3 class="production__subtitle">Коттеджные двери</h3>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog/cottage_doors.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="production__item-top">
                        <a class="production__link" href="<?php echo get_permalink(35); ?>">
                            <div class="production__item item3">
                                <h3 class="production__subtitle">Межкомнатные двери</h3>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog/interior_doors.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="production__item-top">
                        <a class="production__link" href="<?php echo get_permalink(37); ?>">
                            <div class="production__item item4">
                                <h3 class="production__subtitle">Аллюминиевые перегородки</h3>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog/aluminum_partitions.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<?php get_footer(); ?>