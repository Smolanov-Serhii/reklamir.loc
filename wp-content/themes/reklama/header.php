<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reklama
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="header__logo">
        <?php
        the_custom_logo();
        ?>
    </div>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu',
                'menu_id'        => 'main-menu',
            )
        );
        ?>
    </nav>
</header

