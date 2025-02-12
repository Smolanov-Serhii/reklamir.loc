<?php
/**
* Template Name: Статьи
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
            <div class="main__breadcrumbs-banner">
                <a href="#">
                    <img src="">
                </a>
            </div>
        </div>
        <section class="services">
            <div class="services__container main-container">
                <?php get_template_part( 'template-parts/content', 'category-nav' ); ?>
                <div class="services__content">
                    <div class="services__blick">
                        <?php the_content();?>
                    </div>

                </div>
            </div>
        </section>
	</main>
<?php

get_footer();
