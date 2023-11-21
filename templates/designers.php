<?php
/*
Template Name: Дизайнерам

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>


<section class="cooperation__section designers">
    <div class="container">
        <div class="cooperation__inner">
            <hr class="cooperation__line">
            <h2 class="cooperation__title">Мы сотрудничаем с дизайнерами</h2>
            <p class="cooperation__descr">Мы гордимся партнерством с талантливыми дизайнерами, обеспечивая инновационные решения и высококачественные межкомнатные двери для уникальных проектов. </p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/coop-cover.svg" class="cooperation__img-cover" alt="">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/coop-cover-star-1.svg" class="cooperation__img-cover-star-1" alt="">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/coop-cover-star-2.svg" class="cooperation__img-cover-star-2" alt="">
        </div>
    </div>
</section>

<section class="projects__section">
    <div class="container">
        <div class="projects__inner">
            <hr class="projects__line">
            <h2 class="projects__title">Наши проекты</h2>
            <div class="projects__descr">Обзор наших проектов — это путеводитель в мир утонченного дизайна и выдающегося мастерства.</div>
            <div class="projects__items-inner">
                <div class="projects__items swiper">
                    <div class="swiper-wrapper">



                        <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => 5,
                            'category' => 11,
                            'order' => 'ASC',
                            'orderby' => 'date',
                            'post_type' => 'any'
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                        ?>


                                <div class="projects__item swiper-slide">
                                    <img src="<?php the_field('img-object') ?>" alt="" class="projects__item-img">
                                    <div class="projects__item-text">
                                        <div class="projects__item-top">
                                            <div class="projects__item-subtitle">Проект</div>
                                            <div class="projects__item-title"><?php the_field('item-title') ?></div>
                                        </div>

                                        <a href="<?php echo get_permalink(); ?>" class="projects__item-btn">подробнее</a>
                                    </div>
                                </div>


                        <?php }
                        }
                        wp_reset_postdata(); ?>




                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </div>
</section>


<section class="advantages__section">
    <div class="container">
        <div class="advantages__inner">
            <hr class="advantages__line">
            <h2 class="advantages__title">Преимущества работы с нами</h2>
            <div class="advantages__descr">Преимущества работы с нами — это не только качественное сотрудничество, но и надежное партнерство, индивидуальный подход и эффективная поддержка. </div>
            <div class="advantages__items">
                <div class="advantages__item item-1">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/adv-icon-1.svg" alt="">
                    </div>
                    <div class="advantages__item-text">
                        <div class="advantages__item-title">Инновационные проекты</div>
                        <div class="advantages__item-descr">Уникальные проекты и вызовы, которые могут стать площадкой для проявления креативности</div>
                    </div>
                </div>
                <div class="advantages__item item-2">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/adv-icon-2.svg" alt="">
                    </div>
                    <div class="advantages__item-text">
                        <div class="advantages__item-title title-creative">Творческая свобода</div>
                        <div class="advantages__item-descr">Возможность воплотить свои идеи и творческие концепции в жизнь</div>
                    </div>
                </div>
                <div class="advantages__item item-3">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/adv-icon-3.svg" alt="">
                    </div>
                    <div class="advantages__item-text">
                        <div class="advantages__item-title">Профессиональный рост</div>
                        <div class="advantages__item-descr">Возможность совершенствовать свои навыки и опыт в сфере дизайна</div>
                    </div>
                </div>
                <div class="advantages__item item-4">
                    <div class="advantages__item-icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/designers/adv-icon-4.svg" alt="">
                    </div>
                    <div class="advantages__item-text">
                        <div class="advantages__item-title">Профессиональное оборудование</div>
                        <div class="advantages__item-descr">Доступ к современному оборудованию и инструментам</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="work__section">
    <div class="container">
        <div class="work__inner">
            <hr class="work__line">
            <h2 class="work__title">Хотели бы работать с нами? Оставьте заявку</h2>
            <p class="work__descr">Оставьте заявку на сотрудничество, и мы свяжемся с вами для обсуждения перспективного партнерства.</p>
            <div class="work__form">

                <div class="work__form-shortcode">
                    <p class="work__form-descr">Заполните форму и мы обязательно свяжемся с вами</p>
                    <hr class="work__form-line">
                    <?php echo do_shortcode('[contact-form-7 id="124b8b2" title="Оставить заявку на звонок ( контакты, дилерам)"]') ?>
                </div>
                <h4 class="work__form-subtitle">или свяжитесь с нами</h4>
                <div class="work__form-contacts">
                    <a href="tel:+7(3532) 97-24-24" class="work__form-number">+7(3532) 97-24-24</a>
                    <hr class="work__form-line">
                    <a href="mailto:info@portamia.ru" class="work__form-email">info@portamia.ru</a>
                </div>
            </div>
        </div>
    </div>
</section>









<?php get_footer(); ?>