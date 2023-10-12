<?php
/*
Template Name: Все проекты

*/

// … остальной код шаблона
?>

<?php get_header('dark'); ?>




<div class="collections__section">
    <div class="container">
        <div class="collections__inner">
            <hr class="collections__line">
            <p class="collections__descr">Наши металлические двери – надежная защита для вашего дома или офиса.</p>
            <div class="collections__items">
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


                                <div class="project__item">
                                    <div class="project__item-left">
                                        <img src="<?php the_field('img-object') ?>" alt="">
                                    </div>
                                    <div class="project__item-right">
                                        <hr class="project__line">
                                        <div class="project__title"><?php the_field('item-title') ?></div>
                                        <div class="project__descr"><?php the_field('item-descr') ?></div>
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