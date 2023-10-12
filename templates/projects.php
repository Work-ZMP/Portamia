<?php
/*
Template Name: Все проекты

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>




<div class="projects__section">
    <div class="container">
        <div class="projects__inner">
            <hr class="projects__line">
            <p class="projects__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="projects__items">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category' => 11,
                    'order' => 'ASC',
                    'orderby' => 'date',
                    'post_type' => 'any'
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>

                            <a href='<?php echo get_permalink() ?>' class="collection__item">
                                <?php the_post_thumbnail(
                                    array(363, 530),
                                    array('class' => 'collection__item-image')
                                ); ?>


                                <div class="projects__item">
                                    <div class="projects__item-left">
                                        <img src="<?php the_field('img-object') ?>" alt="">
                                    </div>
                                    <div class="projects__item-right">
                                        <hr class="projects__item-line">
                                        <div class="projects__item-title"><?php the_field('item-title') ?></div>
                                        <div class="projects__item-descr"><?php the_field('item-descr') ?></div>
                                        <a href="<?php get_permalink( ) ?>">перейти</a>
                                    </div>
                                </div>


                <?php }
                }
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>











<?php get_footer(); ?>