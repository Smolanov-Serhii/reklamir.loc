<?php
/**
* Template Name: Портфолио
 */
get_header();
$post_id = get_the_ID();
?>
	<main class="main">
        <div class="main__breadcrumbs">
            <div class="main-container">
                <div class="left">
                    <?php the_title();?>
                </div>
                <div class="right">
                    <?php the_title();?>
                </div>
            </div>
        </div>
        <section class="all-portfolio">
            <div class="all-portfolio__container main-container">
                <h1 class="all-portfolio__title section-title">
                    <?php echo get_field('zagolovok_straniczy', $post_id)?>
                </h1>
                <p class="all-portfolio__subtitle">
                    <?php echo get_field('podzagolovok_straniczy', $post_id)?>
                </p>
                <div class="all-portfolio__list">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'order' 	 => 'DESC',
                        'post_type' 	 => 'portfolio',
                        'orderby' => "menu_order"
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                            $title = get_field('zagolovok_na_razvodyashhuyu');
                            $image = get_field('kartinka_na_razvodyashhuyu');
                            $desc = get_field('kratkoe_opisani_ena_razvodyashhuyu');
                            ?>
                                <a href="<?php the_permalink();?>" class="all-portfolio__item">
                                    <span class="all-portfolio__item-img">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                                    </span>
                                    <span class="all-portfolio__item-text">
                                        <h2 class="all-portfolio__item-title"><?php echo $title; ?></h2>
                                        <span class="all-portfolio__item-desc"><?php echo $desc; ?></span>
                                    </span>

                                </a>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
	</main>
<?php

get_footer();
