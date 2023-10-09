<?php
/*
Template Name: Home

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>

<section class="catalogue__section homepage">
    <div class="container">
        <div class="catalogue__inner">
            <hr class="catalogue__line overline">
            <div class="catalogue__title default-title">Каталог продукции</div>
            <div class="catalogue__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</div>
            <div class="catalogue__items">
                <div class="catalogue__item app">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/catalogue-item-img-1.webp" class="catalogue__cover-img" alt="">
                    <div class="catalogue__cover">
                        <a href="<?php echo get_permalink(33); ?>" class="catalogue__cover-btn">коттеджные двери</a>
                    </div>
                </div>
                <div class="catalogue__item cot">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/catalogue-item-img-2.webp" class="catalogue__cover-img" alt="">
                    <div class="catalogue__cover">
                        <a href="<?php echo get_permalink(35); ?>" class="catalogue__cover-btn">межкомнатные двери</a>
                    </div>
                </div>
                <div class="catalogue__item el">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/catalogue-item-img-3.webp" class="catalogue__cover-img" alt="">
                    <div class="catalogue__cover">
                        <a href="<?php echo get_permalink(7); ?>" class="catalogue__cover-btn">перегородки</a>
                    </div>
                </div>
            </div>
            <a href="<?php echo get_permalink(39); ?>" class="catalogue__btn">полный каталог</a>
            <div class="catalogue__line underline"></div>
        </div>
</section>

<section class="banner-conf__section">
    <div class="container">
        <div class="banner__title">Ваша личная дверь</div>
        <div class="banner__descr">Создайте свой индивидуальный дизайн двери и воплотите его в жизнь с помощью нашего конфигуратора</div>
        <a href="<?php echo get_permalink(10); ?>" class="banner__btn default-btn">перейти</a>
    </div>
</section>

<section class="furniture__section">
    <div class="container">
        <div class="furniture__inner">
            <div class="furniture__left">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/furniture-img-1.png" alt="">
            </div>
            <div class="furniture__right">
                <hr class="furniture__line">
                <div class="furniture__title default-title">Широкий выбор Premium фурнитуры</div>
                <div class="furniture__descr default-descr">Наша продукция производится из лучших материалов и проходит строгие контрольные процедуры по качеству, чтобы обеспечить вам максимальное удобство и долговечность.
                </div>
                <a href="" class="furniture__btn default-btn" data-fancybox data-src="#popup__form">оставить заявку</a>
            </div>
        </div>
    </div>
</section>

<section class="banner-part__section">
    <div class="container">
        <div class="banner__title default-title">Перегородки для каждого дома</div>
        <div class="banner__descr default-descr">Наши перегородки из высококачественных материалов идеально подойдут для любого интерьера.</div>
        <a href="<?php echo get_permalink(37); ?>" class="banner__btn default-btn">перейти</a>
    </div>
</section>

<section class="exclusive__section">
    <div class="exclusive__inner">
        <div class="exclusive__top">
            <div class="exclusive__top-left">
                <hr class="exclusive__line">
                <div class="exclusive__title default-title">Индивудальные двери на заказ</div>
                <div class="exclusive__descr default-descr">Мы предлагаем Вам уникальную возможность создать именно ту дверь, о которой Вы всегда мечтали с помощью нашего конфигуратора</div>
                <div class="exclusive__items">
                    <div class="exclusive__item">
                        <div class="exclusive__item-number">25</div>
                        <div class="exclusive__item-descr">уникальных цветов двери</div>
                    </div>
                    <div class="exclusive__item">
                        <div class="exclusive__item-number">64</div>
                        <div class="exclusive__item-descr">вариаций фрезеровок</div>
                    </div>
                    <div class="exclusive__item">
                        <div class="exclusive__item-number">22</div>
                        <div class="exclusive__item-descr">вида дверной панели</div>
                    </div>
                    <div class="exclusive__item">
                        <div class="exclusive__item-number">37</div>
                        <div class="exclusive__item-descr">различных вариантов ручек</div>
                    </div>
                </div>
            </div>
            <div class="exclusive__top-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/exclusive-top-img.webp" class="" alt="">
            </div>
        </div>
        <div class="exclusive__bottom">
            <div class="exclusive__btm-left">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/exclusive-btm-img.webp" class="" alt="">
            </div>
            <div class="exclusive__btm-right">
                <hr class="exclusive__line">
                <div class="exclusive__title default-title">Эксклюзивные коллекции дверей</div>
                <div class="exclusive__descr default-descr">Мы рады представить Вам наши коллекции эксклюзивных дверей, которые воплощают непревзойденную эстетику и иновационные решения. Наша команда талантливых дизайнеров работает над созданием прототипов дверей, вдохновленных последними тенденциями и передовыми концепциями.</div>
                <a href="<?php echo get_permalink(39); ?>" class="exclusive__btn default-btn">перейти</a>
            </div>
        </div>
    </div>
</section>

<section class="collection__section">
    <div class="container">
        <div class="collection__inner">
            <div class="collection__subtitle">новая коллекция</div>
            <hr class="collection__line">
            <div class="collection__title default-title">New Elegance</div>
            <div class="collection__descr default-descr">Переосмысление роскоши и элегантности - коллекция дверей “New Elegance” воплощает современные тренды и вдохновляет создать стильную и привлекательную входную зону для Вашего дома</div>
            <a href="<?php echo get_permalink(3999); ?>" class="collection__btn default-btn">перейти</a>
        </div>
    </div>
</section>

<section class="trust__section">
    <div class="container">
        <div class="trust__inner">
            <div class="trust__text">
                <hr class="trust__line">
                <div class="trust__title default-title">Гарант доверия</div>
                <div class="trust__descr default-descr">Мы гордимся, что нас выбирают ведущие бренды и компании, ведь они знают, что сотрудничество с Portamia - это залог успеха и качества.</div>
                <a href="<?php echo get_permalink(39); ?>" class="trust__btn default-btn">подробнее</a>
            </div>
            <div class="trust__circle-xs trust-circle"></div>
            <div class="trust__circle-sm trust-circle"></div>
            <div class="trust__circle-md trust-circle"></div>
        </div>
    </div>
</section>








<?php get_footer(); ?>