<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="header__container main-container">
        <div class="header__top">
            <div class="header__logo">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="header__contacts">
                <div class="header__contacts-row">
                    <div class="name">
                        <?php echo get_field('adres', 'options')?>
                    </div>
                    <div class="value">
                        <?php echo get_field('sam_adress', 'options')?>
                    </div>
                </div>
                <div class="header__contacts-row">
                    <div class="name">
                        <?php echo get_field('tekst_telefon', 'options')?>
                    </div>
                    <div class="value">
                        <a href="tel:+380443832319">(044) 383-23-19</a>, <a href="tel:+3800937522673">(093) 752-26-73</a></br>
                        <a href="tel:+380980139808">(098) 013-98-08</a>, <a href="tel:++380957903000">(095) 790-30-00</a></br>
                        <span class="js-call"><?php echo get_field('tekst_zakazat_obratnyj_zvonok', 'options')?></span>
                    </div>
                </div>
                <div class="header__contacts-row">
                    <div class="name">
                        E-mail:
                    </div>
                    <div class="value">
                        <a href="mailto:3832319@ukr.net">3832319@ukr.net</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <nav class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'main',
                    )
                );
                ?>
            </nav>
            <div class="header__locale">
                <?php
                    qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
        </div>
        <div class="header__burger">
            <img src="<?php echo get_template_directory_uri();?>/dist/img/burger.svg">
        </div>
    </div>
</header>


