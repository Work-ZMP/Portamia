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
            <div class="dealers__items">
                <hr class="line line-default">
                <h2 class="dealers__title default-title">Партнерство с нами</h2>
                <p class="dealers__descr default-descr">Откройте новые горизонты бизнеса вместе с нами! Партнерство с нами — это возможность встретить высококачественные межкомнатные двери, инновационные решения и выгодные предложения. Давайте вместе создадим успешное будущее для вашего бизнеса.</p>
                <a class="dealers__btn default-btn" data-fancybox="" data-src="#popup__form">оставить заявку</a>
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
            <p class="production__descr default-descr">Исследуйте разнообразие в нашем каталоге продукции, где каждая страница представляет собой искусство совершенства в мире межкомнатных дверей.</p>
            <div class="production__items">
                <a href="<?php echo get_permalink(7); ?>" class="production__item item1">
                    <h3 class="production__subtitle">Квартирные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/apartment_doors.svg" alt="">
                </a>
                <a href="<?php echo get_permalink(33); ?>" class="production__item item2">
                    <h3 class="production__subtitle">Коттеджные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/cottage_doors.svg" alt="">
                </a>
                <a href="<?php echo get_permalink(37); ?>" class="production__item item3">
                    <h3 class="production__subtitle">Аллюминиевые перегородки</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/aluminum_partitions.svg" alt="">
                </a>
                <a href="<?php echo get_permalink(35); ?>" class="production__item item4">
                    <h3 class="production__subtitle">Межкомнатные двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/interior_doors.svg" alt="">
                </a>
                <a href="<?php echo get_permalink(37); ?>" class="production__item item5">
                    <h3 class="production__subtitle">Гаражные ворота</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/garage_doors.svg" alt="">
                </a>
                <a href="<?php echo get_permalink(7); ?>" class="production__item item6">
                    <h3 class="production__subtitle subtitle5">Другие двери</h3>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/other_doors.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>








<section class="advantages__section">
    <div class="container">
        <div class="advantages__inner">
            <hr class="advantages__line line-default">
            <h2 class="advantages__title default-title">Преимущества для дилеров:</h2>
            <p class="default-descr">Мы предлагаем выдающиеся условия сотрудничества, эксклюзивные предложения и персональную поддержку, чтобы сделать ваш бизнес с нами процветающим и успешным.</p>
            <div class="advantages__items">
                <div class="advantages__item item1-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon1.svg" alt="">
                    </div>
                    <div class="advantages__descr-top">
                        <h3 class="advantages__subtitle">Гибкие условия сотрудничества</h3>
                        <p class="advantages__descr">Условия, которые будут соответствовать вашим потребностям</p>
                    </div>
                </div>
                <div class="advantages__item item2-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon2.svg" alt="">
                    </div>
                    <div class="advantages__descr-top">
                        <h3 class="advantages__subtitle">Маркетинговая поддержка</h3>
                        <p class="advantages__descr">Маркетинговые ресурсы для помощи в создании успешных кампаний</p>
                    </div>
                </div>
                <div class="advantages__item item3-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon3.svg" alt="">
                    </div>
                    <div class="advantages__descr-top">
                        <h3 class="advantages__subtitle">Индивидуальная поддержка и обучение</h3>
                        <p class="advantages__descr">Поддержка и необходимые инструменты для успешных продаж</p>
                    </div>
                </div>
                <div class="advantages__item item4-1">
                    <div class="advantages__img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dealers/dealers-icon4.svg" alt="">
                    </div>
                    <div class="advantages__descr-top">
                        <h3 class="advantages__subtitle">Эксклюзивный ассортимент продукции</h3>
                        <p class="advantages__descr">Доступ к уникальному и разнообразному ассортименту продукции</p>
                    </div>
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
            <div class="conditions__items">
                <p class="conditions__item-top">Portamia предлагает вам уникальную возможность стать дилером нашей компании и получить эксклюзивные права на продажу нашей продукции в вашей области. Мы специализируемся на производстве и поставке высококачественных дверей и других товаров для интерьера.</p>
                <p class="conditions__item-bottom">Мы предлагаем следующие условия для дилерства с Portamia:</p>
                <div>
                    <ol class="conditions__criterion">
                        <li><div>Эксклюзивные права на продажу:</div> В качестве дилера Portamia вы получите эксклюзивное право на продажу нашей продукции в вашей области. Мы гарантируем, что не будем предоставлять право дилерства другим компаниям в той же области.</li>
                        <li><div>Качественное обслуживание клиентов:</div> Мы ожидаем, что вы предоставите выдающееся обслуживание клиентов, включая консультации и помощь в выборе наших продуктов.</li>
                        <li><div>Маркетинговая поддержка:</div> Мы предоставляем нашим дилерам маркетинговые материалы и рекламную поддержку для продвижения нашей продукции в вашей области.</li>
                        <li><div>Поддержка и обучение:</div> Мы обеспечим вас необходимым обучением и информацией о наших продуктах, чтобы вы могли наилучшим образом представить их своим клиентам.</li>
                        <li><div>Долгосрочное партнерство:</div> Мы стремимся к долгосрочным отношениям с нашими дилерами и готовы поддерживать вас в развитии бизнеса.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>













<section class="contacts__section">
    <div class="container">
        <div class="contacts__inner">
            <hr class="contacts__line line-default">
            <h2 class="contacts__title default-title">Контакты для дилерства</h2>
            <p class="contacts__descr default-descr">Готовы стать нашим партнером? Наши контакты для дилерства ждут ваших запросов. Обсудим перспективы сотрудничества и создадим вместе успешные истории в мире межкомнатных дверей.</p>
            <div class="contacts__items">
                <div class="contacts__input">
                    <?php echo do_shortcode('[contact-form-7 id="124b8b2" title="Оставить заявку на звонок ( контакты, дилерам)"]') ?>
                </div>
                <div class="contacts__info">
                    <h3 class="contacts__subtitle2 subtitle-default">Контакты</h3>
                    <div class="contacts__adress">
                        <div class="contacts__block">
                            <div class="contacts__icon">
                                <img class="contacts__img" src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon1.svg" alt="">
                                <a class="contacts__element contacts-num" href="tel:+7 987 847-24-24">+7-987-847-24-24</a>
                            </div>
                            <div class="contacts__icon">
                                <img class="contacts__img" src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon2.svg" alt="">
                                <a class="contacts__element contacts-num" href="tel:+7 3532 97-24-24">+7 (3532) 97-24-24</a>
                            </div>
                            <div class="contacts__icon">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon3.svg" alt="">
                                <a class="contacts__element contacts-mail" href="mailto:info@portamia.ru">info@portamia.ru</a>
                            </div>
                            <div class="contacts__icon">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/work/contacts-icon4.svg" alt="">
                                <span class="contacts__element contacts-location">Оренбург. пер. Тупой, 55</span>
                            </div>
                            <div class="contacts__map">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A002045108c4c3f384e9f7ee4e951cee3dbe2568466d5d66e5b570d74fb4ea606&amp;source=constructor" width="300" height="270" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php get_footer(); ?>