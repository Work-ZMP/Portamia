<?php
/*
Template Name: Работа у нас

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>

<section class="work__section">
    <div class="container">
        <div class="work__inner">
            <hr class="work__line default-line">
            <h1 class="work__title default-title">Люди - наша главная ценность</h1>
            <p class="work__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="work__items">
                <div class="work__item item1">
                    <div class="work__icon icon1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/work/work-icon1.svg" alt="">
                    </div>
                    <h3 class="work__subtitle">Профессиональный рост</h3>
                    <p class="work__item-descr">Возможность развиваться и повышать свои профессиональные навыки</p>
                </div>
                <div class="work__item item2">
                    <div class="work__icon icon2">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/work/work-icon2.svg" alt="">
                    </div>
                    <h3 class="work__subtitle">Инновации и технологии</h3>
                    <p class="work__item-descr">Доступ к передовым технологиям и инструментам</p>
                </div>
                <div class="work__item item3">
                    <div class="work__icon icon3">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/work/work-icon3.svg" alt="">
                    </div>
                    <h3 class="work__subtitle subtitle3">Творческая среда</h3>
                    <p class="work__item-descr">Мы ценим различные идеи и инициативы сотрудников</p>
                </div>
                <div class="work__item item4">
                    <div class="work__icon icon4">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/work/work-icon4.svg" alt="">
                    </div>
                    <h3 class="work__subtitle subtitle4">Обучение и тренинги</h3>
                    <p class="work__item-descr">Обучение сотрудников, обеспечивая доступ к тренингам и семинарам</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>











<section class="vacancy__section">
    <div class="container">
        <div class="vacancy__inner">
            <hr class="vacancy__line default-line">
            <h1 class="vacancy__title default-title">Наши вакансии</h1>
            <p class="vacancy__descr default-descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="vacancy__items">
                <div class="vacancy__item item1">
                    <div class="vacancy__subtitle">
                        <span class="vacancy__subtitle1">Вакансия</span>
                        <h2 class="vacancy__subtitle2">Инженер-конструктор дверей</h2>
                    </div>
                    <div class="vacancy__block block1">
                        <h3 class="vacancy__block-descr">Обязанности:</h3>
                        <div class="vacancy-spisok">
                            <ul>
                                <li class="spisok">Разработка и проектирование новых моделей дверей.</li>
                                <li class="spisok">Создание технической документации и чертежей.</li>
                                <li class="spisok">Тестирование и оптимизация дизайнов с учетом требований к прочности и эстетике.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy__case-btn">
                        <a href="#" class="vacancy__btn">подробнее</a>
                    </div>
                </div>
                <div class="vacancy__item item2">
                    <div class="vacancy__subtitle">
                        <span class="vacancy__subtitle1">Вакансия</span>
                        <h2 class="vacancy__subtitle2">Менеджер по продажам</h2>
                    </div>
                    <div class="vacancy__block block2">
                        <h3 class="vacancy__block-descr">Обязанности:</h3>
                        <div class="vacancy-spisok">
                            <ul>
                                <li class="spisok">Поиск новых клиентов и партнеров.</li>
                                <li class="spisok">Консультирование клиентов по характеристикам продукции.</li>
                                <li class="spisok">Управление отношениями с клиентами, поддержка послепродажного обслуживания.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy__case-btn">
                        <a href="#" class="vacancy__btn">подробнее</a>
                    </div>
                </div>
                <div class="vacancy__item item3">
                    <div class="vacancy__subtitle">
                        <span class="vacancy__subtitle1">Вакансия</span>
                        <h2 class="vacancy__subtitle2">Технолог по производству дверей</h2>
                    </div>
                    <div class="vacancy__block block3">
                        <h3 class="vacancy__block-descr">Обязанности:</h3>
                        <div class="vacancy-spisok">
                            <ul>
                                <li class="spisok">Организация и контроль технологического процесса производства дверей.</li>
                                <li class="spisok">Настройка оборудования и контроль качества выпускаемой продукции.</li>
                                <li class="spisok">Разработка и внедрение улучшений в производственные процессы.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy__case-btn">
                        <a href="#" class="vacancy__btn">подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<section class="contacts__section">
    <div class="container">
        <div class="contacts__inner">
            <hr class="contacts__line default-line">
            <h1 class="contacts__title default-title">Контакты</h1>
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

<hr class="footer__hr">




<?php get_footer(); ?>