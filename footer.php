<footer class="footer">
    <div class="footer__inner">
        <div class="container">
            <div class="footer__top">
                <a href="tel:+7(3532)97-24-24" class="footer__top-phone">+7 (3532) 97-24-24</a>
                <a href="mailto:info@portamia.ru" class="footer__top-email">info@portamia.ru</a>
                <a class="footer__top-btn" data-fancybox data-src="#popup__form">оставить заявку</a>
            </div>

            <div class="footer__bottom">
                <div class="footer__bottom-upper">
                    <div class="footer__bottom-upper-left">
                        <div class="footer__bottom-menu menu-left">
                            <div class="footer-menu__title">Продукция</div>
                            <hr class="footer-menu__line">
                            <div class="footer-menu__items">
                                <a href="<?php echo get_permalink(7); ?>" class="footer-menu__item">Квартирные двери</a>
                                <a href="<?php echo get_permalink(33); ?>" class="footer-menu__item">Двери в коттедж</a>
                                <a href="<?php echo get_permalink(35); ?>" class="footer-menu__item">Межкомнатные двери</a>
                                <a href="<?php echo get_permalink(37); ?>" class="footer-menu__item">Перегородки</a>
                            </div>
                        </div>
                        <div class="footer__bottom-menu menu-center">
                            <div class="footer-menu__title">Меню</div>
                            <hr class="footer-menu__line">
                            <div class="footer-menu__items">
                                <a href="<?php echo get_permalink(10); ?>" class="footer-menu__item">Конфигуратор</a>
                                <a href="<?php echo get_permalink(39); ?>" class="footer-menu__item">Каталог</a>
                                <a href="<?php echo get_permalink(41); ?>" class="footer-menu__item">Галерея</a>
                                <a href="<?php echo get_permalink(43); ?>" class="footer-menu__item">Контакты</a>
                            </div>
                        </div>
                        <div class="footer__bottom-menu menu-right">
                            <div class="footer-menu__title">Контакты</div>
                            <hr class="footer-menu__line">
                            <div class="footer-menu__items">
                                <a href="tel:+7(3532)97-24-24" class="footer-menu__item">+7 (3532) 97-24-24</a>
                                <a href="mailto:info@portamia.ru" class="footer-menu__item">info@portamia.ru</a>
                                <a href="https://yandex.ru/profile/19710376217" target="_blank" class="footer-menu__item">Оренбург. пер. Тупой, 55</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom-upper-right">
                        <div class="footer__bottom-banner banner-dealers">
                            <div class="footer-banner__title">Дилерам</div>
                            <div class="footer-banner__descr">Оставьте заявку или свяжитесь с нами для сотрудничества</div>
                            <a href="<?php echo get_permalink(45); ?>" class="footer-banner__btn">перейти</a>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom-lower">
                    <div class="footer__bottom-lower-left">
                        <div class="footer__bottom-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa2ea127bcd04339121388599b3627ffde58fa60e5e909ab14adb6b1638a6f826&amp;width=630&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="footer__bottom-lower-right">
                        <div class="footer__bottom-banner banner-work">
                            <div class="footer-banner__title">Вакансии</div>
                            <div class="footer-banner__descr">Достойные условия трудоустройства и надежный работодатель</div>
                            <a href="<?php echo get_permalink(47); ?>" class="footer-banner__btn">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="container">
                <a href="" class="footer__logo">PORTAMIA</a>
                <a href="<?php echo get_permalink(99); ?>" class="footer__policy">Политика конфиденциальности </a>
            </div>
        </div>

    </div>

</footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 400,
        'tolerance': 70
    });

    function close(eve) {
        eve.preventDefault();
        slideout.close();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    }

    slideout
        .on('beforeopen', function() {
            this.panel.classList.add('panel-open');
        })
        .on('open', function() {
            this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
            this.panel.classList.remove('panel-open');
            this.panel.removeEventListener('click', close);
        });

    // Toggle button
    document.querySelector('.header__btn-menu').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide')
    });

    document.querySelector('#menu .menu-mob__close-btn').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    });
</script>

<div id="popup__form" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Оставить заявку</div>
                        <div class="form__block-descr">Заполните форму, и мы обязательно свяжемся с вами!</div>
                        <div class="form__block-form" onclick="pickDate()">
                            <?php echo do_shortcode('[contact-form-7 id="52" title="Оставить заявку"]') ?>
                        </div>
                    </div>
                </div>
                <div class="form__descr-call">Или позвоните нам</div>
                <div class="form__block-numbers">
                    <a href="tel:+7(3532)97-24-24" class="form__block-number">+7 (3532) 97-24-24</a>
                    <div class="form__block-number-descr">(основной)</div>
                    <a href="tel:+7(987)847-24-24" class="form__block-number">+7 (987) 847-24-24</a>
                    <div class="form__block-number-descr">(мобильный телефон)</div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="popup__call" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Контактные номера телефонов</div>
                        <div class="form__block-descr">Позвоните и наши специалисты проконсультируют Вас по любому вопросу</div>
                        <div class="form__block-numbers">
                            <a href="tel:+7(3532)97-24-24" class="form__block-number">+7 (3532) 97-24-24</a>
                            <div class="form__block-number-descr">(основной)</div>
                            <a href="tel:+7(987)847-24-24" class="form__block-number">+7 (987) 847-24-24</a>
                            <div class="form__block-number-descr">(мобильный телефон)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="popup__connection" class="popup__block" style="display: none">
    <section class="form__section" id="form-section">
        <div class="container">
            <div class="form__inner">
                <div class="form__block">
                    <div class="form__block-inner">
                        <div class="form__block-title">Связаться с нами</div>
                        <div class="form__block-descr">Найдите удобный способ связи с нами для Вас</div>

                        <div class="form__block-numbers">
                            <a href="tel:+7(3532)97-24-24" class="form__block-number">+7 (3532) 97-24-24</a>
                            <div class="form__block-number-descr">(основной)</div>
                            <a href="tel:+7(987)847-24-24" class="form__block-number">+7 (987) 847-24-24</a>
                            <div class="form__block-number-descr">(мобильный телефон)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>

<?php wp_footer(); ?>

</html>