<?php
/* Template Name: Головна сторінка */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akymed
 */
get_header();
$post_id = get_the_ID();
?>

	<main class="main">
<!--        --><?php //get_template_part( 'template-parts/content', 'banner' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'delivered' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'hiw' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'or' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'wwu' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'myn' ); ?>
	</main>

<?php

get_footer();
