<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <?php
    if( have_rows('slajder', $post_id) ):
        echo '<div class="banner__container swiper-container">';
        echo '<div class="swiper-wrapper banner__wrapper">';
        while( have_rows('slajder', $post_id) ) : the_row();
            $slide = get_sub_field('slajd');
            ?>
            <div class="swiper-slide banner__slide">
                <img src="<?php echo $slide;?>">
            </div>
        <?php
        endwhile;
        echo '</div>';
        ?>
            <div class="banner__navigation">
                <div class="banner__prev">
                    <img src="<?php echo get_template_directory_uri();?>/dist/img/prev.svg" alt="prev">
                </div>
                <div class="banner__next">
                    <img src="<?php echo get_template_directory_uri();?>/dist/img/next.svg" alt="next">
                </div>
            </div>
        <?php
        echo '</div>';
    endif;
    ?>
</section>
