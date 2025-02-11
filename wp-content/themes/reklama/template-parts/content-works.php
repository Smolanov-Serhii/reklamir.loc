<?php
$post_id = get_the_ID();
?>
<section class="works">
    <div class="works__container main-container">
        <h2 class="works__title section-title border">
            <?php echo get_field('zagolovok_bloka_nashy_raboty', $post_id)?>
        </h2>
        <div class="works__subtitle section-subtitle">
            <?php echo get_field('opisanie_bloka_nashi_raboty', $post_id)?>
        </div>
        <?php
        $featured_posts = get_field('portfolio', $post_id);
        if( $featured_posts ): ?>
            <div class="works__list">
                <?php foreach( $featured_posts as $post ):
                    setup_postdata($post);
                    $post_in = get_the_ID();
                ?>
                    <a href="<?php the_permalink(); ?>" class="works__item">
                        <span class="works__item-img">
                            <img src="<?php the_field( 'kartinka_uslugi', $post_in ); ?>" alt="<?php the_title(); ?>">
                        </span>
                        <h3 class="works__item-title">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
