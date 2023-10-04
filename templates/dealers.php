<?php
/*
Template Name: Дилерам

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>

<section class="dealers__section">
    <div class="container">
        <div class="dealers__inner">
            <div>
                <hr class="line line-default">
                <h2 class="dealers__title default-title">Партнерство с нами</h2>
                <p class="dealers__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
                <a href="#" class="dealers__btn default-btn">оставить заявку</a>
            </div>
            <div class="dealers-img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/partners.png" alt="">
            </div>
        </div>
    </div>
</section>



<section class="production__section">
    <div class="container">
        <div class="production__inner">
            <hr class="production__line line-default">
            <h2 class="production__title default-title">Продукция</h2>
            <p class="production__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="production__items">
                <div class="production__item item1">
                    <h3 class="production__subtitle">Квартирные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/apartment_doors.svg" alt="">
                </div>
                <div class="production__item item2">
                    <h3 class="production__subtitle">Коттеджные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/cottage_doors.svg" alt="">
                </div>
                <div class="production__item item3">
                    <h3 class="production__subtitle">Аллюминиевые перегородки</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/aluminum_partitions.svg" alt="">
                </div>
                <div class="production__item item4">
                    <h3 class="production__subtitle">Межкомнатные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/interior_doors.svg" alt="">
                </div>
                <div class="production__item item5">
                    <h3 class="production__subtitle">Гаражные ворота</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/garage_doors.svg" alt="">
                </div>
                <div class="production__item item6">
                    <h3 class="production__subtitle">Другие двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/other_doors.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>








<section class="advantages__section">
    <div class="container">
        <div class="advantages__inner">
            <hr class="advantages__line line-default">
            <h2 class="advantages__title default-title">Преимущества для дилеров:</h2>
            <p class="default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="advantages__items">
                <div class="advantages__item item1-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon1.svg" alt="">
                    </div>
                    <h3 class="advantages__subtitle">Гибкие условия сотрудничества</h3>
                    <p class="advantages__descr">Условия, которые будут соответствовать вашим потребностям</p>
                </div>
                <div class="advantages__item item2-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon2.svg" alt="">
                    </div>
                    <h3 class="advantages__subtitle">Маркетинговая поддержка</h3>
                    <p class="advantages__descr">Маркетинговые ресурсы для помощи в создании успешных кампаний</p>
                </div>
                <div class="advantages__item item3-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon3.svg" alt="">
                    </div>
                    <h3 class="advantages__subtitle">Индивидуальная поддержка и обучение</h3>
                    <p class="advantages__descr">Поддержка и необходимые инструменты для успешных продаж</p>
                </div>
                <div class="advantages__item item4-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon4.svg" alt="">
                    </div>
                    <h3 class="advantages__subtitle">Эксклюзивный ассортимент продукции</h3>
                    <p class="advantages__descr">Доступ к уникальному и разнообразному ассортименту продукции</p>
                </div>
            </div>
        </div>
    </div>
</section>










<section class="conditions__section">
    <div class="container">
        <div class="conditions__inner">
            <hr class="conditions__line line-default">
            <h2 class="conditions__title default-title">Условия сотрудничества</h2>
            <p class="conditions__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
        </div>
    </div>
</section>













<section class="contacts__section">
    <div class="container">
        <div class="contacts__inner">
            <hr class="contacts__line line-default">
            <h2 class="contacts__title default-title">Контакты для дилерства</h2>
            <p class="contacts__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="contacts__items">
                <div class="contacts__input">
                    <?php echo do_shortcode('[contact-form-7 id="839579d" title="Оставить заявку"]') ?>
                </div>
                <div class="contacts__item">
                    <h3 class="contacts__subtitle"></h3>Контакты</h3>
                    <div class="contacts__info">
                        <div class="contacts__icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/contacts-call-icon1.svg" alt="">
                            <a href="tel:+79888888888">+7-988-888-88-88</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>