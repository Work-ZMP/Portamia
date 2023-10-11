<?php
/*
Template Name: Коллекция Elegance

*/

// … остальной код шаблона
?>

<?php get_header('collection'); ?>

<section class="elegance__section">
    <div class="container">
        <div class="elegance__inner">
            <div class="elegance__items">
                <img src="<?php the_field('img-1') ?>" alt="">
                <img src="<?php the_field('img-2') ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section class="style__section">
    <div class="container">
        <div class="style__inner">
            <h1 class="style__title title-default"><?php the_field('style-title') ?></h1>
            <p class="style__descr descr-default"><?php the_field('style-descr') ?></p>
            <img src="<?php the_field('style-img') ?>" alt="">
        </div>
    </div>
</section>


<section class="catalogue__section">
    <div class="container">
        <div class="catalogue__inner">
            <hr class="catalogue__line">
            <h2 class="catalogue__title">Двери коллекции</h2>
            <p class="catalogue__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="catalogue__items">

                <?php
                global $post;

                $myposts = get_posts([
                    'include' => the_field('posts-id'),
                    'order' => 'DESC',
                    'orderby' => 'post_in',
                    'post_type' => 'any'
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>

                        <div class="catalogue__item">
                            <div class="catalogue__item-top">
                                <img src="<?php the_field('colors-img-2') ?>" alt="" class="catalogue__item-img">
                                <div class="catalogue__item-top-cover"><?php the_field('door-name') ?></div>
                            </div>
                            <div class="catalogue__item-bottom">
                                <div class="catalogue__item-subtitle">Модель</div>
                                <div class="catalogue__item-title"><?php the_field('door-name') ?></div>
                                <a href="<?php echo get_permalink() ?>" class="catalogue__btn">подробнее</a>
                            </div>
                        </div>


                <?php }
                }
                wp_reset_postdata(); ?>

            </div>
            <hr class="catalogue__line long-line">
        </div>
    </div>
</section>


<section class="application__section">
    <div class="container">
        <div class="application__inners">
            <div class="work__inner">
                <div class="work__form">
                    <div class="work__form-shortcode">
                        <p class="work__form-descr">Заполните форму и мы обязательно свяжемся с вами</p>
                        <hr class="work__form-line">
                        <?php echo do_shortcode('[contact-form-7 id="124b8b2" title="Оставить заявку на звонок ( контакты, дилерам)"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>