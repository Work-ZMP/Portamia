<?php
/*
Template Name: Галерея

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>



<section class="catalogue__section">
    <div class="container">
        <div class="catalogue__inner">
            <hr class="catalogue__line">
            <h2 class="catalogue__title">Дверные фрезерованные панели</h2>
            <p class="catalogue__descr">Фрезерованные панели от Portamia под любой вкус и любые предпочтения по ценам от производителя!</p>
            <div class="catalogue__items">
                <div class="catalogue__item">
                    <div class="catalogue__item-top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/holding/holding-logo-portamia.svg" alt="" class="catalogue__item-img">
                        <div class="catalogue__item-top-cover">FK-MDF 001</div>
                    </div>
                    <div class="catalogue__item-bottom">
                        <div class="catalogue__item-subtitle">Модель</div>
                        <div class="catalogue__item-title">FK-MDF 001</div>
                        <a href="<?php echo get_permalink() ?>" class="catalogue__btn">подробнее</a>
                    </div>
                </div>
                
            </div>
            <hr class="catalogue__line long-line">
        </div>
    </div>
</section>







<?php get_footer(); ?>