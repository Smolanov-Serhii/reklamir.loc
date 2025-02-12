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
                    <div class="contacts__main">
                        <h2 class="contacts__main-title">
                            <?php echo get_field('zagolovok_bloka_kontakt', $post_id)?>
                        </h2>
                        <div class="contacts__main-list">
                            <?php
                            if( have_rows('kontakty', $post_id) ):
                                while( have_rows('kontakty', $post_id) ) : the_row();
                                    $title = get_sub_field('zagolovok_polya');
                                    $desc = get_sub_field('opisanie_polya');
                                    ?>
                                    <div class="contacts__main-item">
                                        <div class="contacts__main-item-title">
                                            <?php echo $title;?>
                                        </div>
                                        <div class="contacts__main-item-desc">
                                            <?php echo $desc;?>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="contacts__form">
                        <h2 class="contacts__form-title">
                            <?php echo get_field('zagolovk_blokka_forma_obratnoj_svyazi', $post_id)?>
                        </h2>
                        <div class="contacts__form-desc">
                            <?php echo get_field('tekst_opisanie_pered_formoj', $post_id)?>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="90655e9" title="Форма страницы контакты"]')?>
                    </div>
                    <div class="contacts__map">
                        <h2 class="contacts__map-title"><?php echo get_field('zagolovok_bloka_dopolnitelnaya_informacziya', $post_id)?></h2>
                        <p class="contacts__map-desc"><?php echo get_field('opisanie_bloka_dopolnitelnaya_informacziya', $post_id)?></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.1023671711612!2d30.48495487042211!3d50.48865251989144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdf074bf95b5%3A0xc871c0645575dd77!2z0L_RgNC-0YHQv9C10LrRgiDQodGC0LXQv9Cw0L3QsCDQkdCw0L3QtNC10YDQuCwgOCwg0JrQuNGX0LIsINCj0LrRgNCw0ZfQvdCwLCAwMjAwMA!5e1!3m2!1suk!2sbg!4v1739346392135!5m2!1suk!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </section>
	</main>
<?php

get_footer();
