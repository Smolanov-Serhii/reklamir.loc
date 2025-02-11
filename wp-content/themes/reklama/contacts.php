<?php
/**
* Template Name: Контакты
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
                    <h1 class="contacts__title section-title">
                        <?php echo get_field('zagolovok_straniczy', $post_id)?>
                    </h1>
                    <p class="contacts__subtitle">
                        <?php echo get_field('podzagolovok_straniczy', $post_id)?>
                    </p>
                    <div class="contacts__main">

                    </div>
                    <div class="contacts__form">

                    </div>
                    <div class="contacts__map">

                    </div>
                </div>

            </div>
        </section>
	</main>
<?php

get_footer();
