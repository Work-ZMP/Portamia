<?php
/*
Template Name: Наши компании

*/

// … остальной код шаблона
?>

<?php get_header('thanks'); ?>



<section class="companies__section">
    <div class="companies__back">
        <img src="" alt="" class="companies__back-img">
    </div>
    <div class="companies__overlay">
        <img src="" alt="" class="companies__overlay-img">
    </div>
    <div class="container">
        <div class="companies__inner">
            <div class="companies__block">
                <div class="companies__top">
                    <div class="companies__descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit itaque, nisi molestias laudantium minus temporibus saepe totam quos amet eveniet, officiis consequatur odit reprehenderit ut ea dolore architecto sint.</div>
                </div>
                <div class="companies__bottom">
                    <div class="companies__btns">
                        <a class="companies__btn link-portamia active">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/companies/companies-logo-portamia.svg" alt="">
                        </a>
                        <a class="companies__btn link-leyenda">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/companies/companies-logo-leyenda.svg" alt="">
                        </a>
                        <a class="companies__btn link-zmp">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/companies/companies-logo-zmp.svg" alt="">
                        </a>
                        <a class="companies__btn link-mercato">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/companies/companies-logo-mercato.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<?php get_footer('thanks'); ?>