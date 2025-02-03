<?php
/**
* Template Name: Главная страница
 */
get_header();
$post_id = get_the_ID();
?>
	<main class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'column' ); ?>
	</main>
<?php

get_footer();
