<?php
/**
* Template Name: Услуги
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
        <section class="services">
            <div class="services__container main-container">
                <?php get_template_part( 'template-parts/content', 'category-nav' ); ?>
                <div class="services__content">
                    <h1 class="services__title section-title">
                        <?php the_title();?>
                    </h1>
                    <p class="services__subtitle"><span><?php echo get_field('podzagolovok', $post_id)?></span></p>
                    <div class="services__blick">
                        <?php the_content();?>
                    </div>
<!--                    <div class="services__comments">-->
<!--                        --><?php //comments_template(); ?>
<!--                    </div>-->
                </div>
            </div>
        </section>
	</main>
<?php

get_footer();
