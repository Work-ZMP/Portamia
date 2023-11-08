<?php
/*
Template Name: Холдинг

*/

// … остальной код шаблона
?>

<?php get_header('thanks'); ?>


<section class="holding__section">
    <div class="holding__back">
        <img src="" alt="" class="holding__back-img">
    </div>
    <div class="holding__overlay">
        <img src="" alt="" class="holding__overlay-img">
    </div>
    <div class="container">
        <div class="holding__inner">
            <div class="holding__block">
                <div class="holding__left">
                    <div class="holding__btns">
                        <a class="holding__btn link-portamia active">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/holding/holding-logo-portamia.svg" alt="">
                        </a>
                        <a class="holding__btn link-leyenda">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/holding/holding-logo-leyenda.svg" alt="">
                        </a>
                        <a class="holding__btn link-zmp">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/holding/holding-logo-zmp.svg" alt="">
                        </a>
                        <a class="holding__btn link-mercato">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/holding/holding-logo-mercato.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="holding__right">
                    <div class="holding__text">
                        <div class="holding__title">Portamia</div>
                        <div class="holding__subtitle">(ООО “Завод МетПром”)</div>
                        <div class="holding__subtitleBig">Производство высококачественных входных дверей</div>
                        <div class="holding__descr">"Portamia" - это гарантия безопасности и стиля в вашем доме. Наше предприятие специализируется на производстве высококачественных металлических входных и межкомнатных дверей, которые сочетают в себе элегантный дизайн и надежную защиту.</div>
                        <a href="https://portamia.ru/" class="holding__link">перейти на сайт</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











<?php get_footer('thanks'); ?>