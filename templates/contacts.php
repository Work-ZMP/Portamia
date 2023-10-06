<?php
/*
Template Name: Контакты

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>






<section class="contacts__section">
    <div class="container">
        <div class="contacts__inner">
            <hr class="contacts__line default-line">
            <p class="contacts__descr default-descr">Наши металлические двери – надежная защита для <br> вашего дома или офиса.</p>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A231ff4fe348d2d6bdda7453c7b86ea0d7a5f1f2c03a6ef949a30e7edf8f04539&amp;source=constructor" width="1244" height="500" frameborder="0"></iframe>

            <div class="contacts__items">
                <div class="contacts__form">
                <div class="contacts__subtitle2 subtitle-default">Оставьте заявку на звонок</div>
                    <?php echo do_shortcode('[contact-form-7 id="b944839" title="Контактная форма 1"]') ?>
                </div>
                <div class="contacts__info">
                    <h3 class="contacts__subtitle2 subtitle-default">Контакты</h3>
                    <div class="contacts__adress">
                        <div class="contacts__block">
                            <div class="contacts__icon">
                                <img class="contacts__img" src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon1.svg" alt="">
                                <a class="contacts__element contacts-num" href="tel:+79888888888">+7-988-888-88-88</a>
                            </div>
                            <div class="contacts__icon">
                                <img class="contacts__img" src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon2.svg" alt="">
                                <a class="contacts__element contacts-num" href="tel:+79888888888">+7-988-888-88-88</a>
                            </div>
                            <div class="contacts__icon">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon3.svg" alt="">
                                <a class="contacts__element contacts-mail" href="mailto:info@portamia.ru">info@portamia.ru</a>
                            </div>
                            <div class="contacts__icon">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon4.svg" alt="">
                                <span class="contacts__element contacts-location">Оренбург. пер. Тупой, 55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<?php get_footer(); ?>