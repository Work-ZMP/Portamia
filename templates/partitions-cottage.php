<?php
/*
Template Name: Дизайнерская перегородка в коттедж 

*/

// … остальной код шаблона
?>

<?php get_header('collection'); ?>

<section class="elegance__section">
    <div class="container">
        <div class="elegance__inner">
            <div class="elegance__items">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/collection-elegance/elegance_photo1.png" alt="">

            </div>
        </div>
    </div>
</section>




<section class="partitions__section">
    <div class="container">
        <div class="partitions__inner">
            <div class="partitions__item1">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/partitions-cottage/partitions1.png" alt="">
            </div>
            <div class="partitions__item2">
                <hr class="partitions__line">
                <h3 class="partitions__subtitle">Наши металлические двери – надежная защита для вашего дома или офиса.</h3>
                <p class="partitions__descr">Переосмысление роскоши и элегантности - коллекция дверей “New Elegance” воплощает современные тренды и вдохновляет создать стильную и привлекательную входную зону для Вашего дома</p>
            </div>
        </div>
    </div>
</section>






<section class="partitions__section section2">
    <div class="container">
        <div class="project__inner">
            <div class="partitions__left">
                <hr class="partitions__line">
                <h1 class="partitions__title">О проекте</h1>
                <p class="partitions__descr">Переосмысление роскоши и элегантности - коллекция дверей “New Elegance” воплощает современные тренды и вдохновляет создать стильную и привлекательную входную зону для Вашего дома</p>
                <div class="partitions__descr-li">
                    <ul class="partitions__ul">
                        <li class="partitions__li">Организация и контроль технологического процесса производства дверей.</li>
                        <li class="partitions__li">Настройка оборудования и контроль качества выпускаемой продукции.</li>
                        <li class="partitions__li">Разработка и внедрение улучшений в производственные процессы.</li>
                    </ul>
                </div>
            </div>
            <div class="partitions__right partitions-object">
                <img class="img1" src="<?php bloginfo('template_url'); ?>/assets/img/partitions-cottage/partitions2.png" alt="">
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
                <p class="application__descr">Скорее отправляйте заявку и наш менеджер свяжется с Вами в ближайшее время!</p>
                <?php echo do_shortcode('[contact-form-7 id="bb7d83a" title="Контактная форма project"]') ?>
                <a class="application__top-btn" data-fancybox="" data-src="#popup__form">оставить заявку</a>
            </div>
        </div>
    </div>
</section>











<?php get_footer(); ?>