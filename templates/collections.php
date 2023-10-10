<?php
/*
Template Name: Все коллекции

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
                    'category' => 9,
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
                                <div class="collection__item-text">
                                    <div class="collection__item-left">
                                        <div class="collection__item-title"><?php echo the_title(); ?></div>
                                        <div class="collection__item-hide-list" style="display: none">
                                            <li>Дверь "<?php the_field('door-1') ?>"</li>
                                            <li>Дверь "<?php the_field('door-2') ?>"</li>
                                            <li>Дверь "<?php the_field('door-3') ?>"</li>
                                            <li>Дверь "<?php the_field('door-4') ?>"</li>
                                            <li>Дверь "<?php the_field('door-5') ?>"</li>
                                            <li>и др.</li>
                                        </div>
                                    </div>
                                    <div class="collection__item-right">
                                        <button href="<?php echo get_permalink() ?>" class="collection__item-btn">перейти</button>
                                    </div>

                                </div>

                                <div class="collection__item-cover">
                                    <?php the_field('icon') ?>
                                </div>
                            </a>
            

                <?php }
                }
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>











<?php get_footer(); ?>