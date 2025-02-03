<?php
$post_id = get_the_ID();
?>
<section class="column">
    <?php
    if( have_rows('perechen_elementov', $post_id) ):
        echo '<div class="column__container main-container">';
        echo '<div class="column__list">';
        while( have_rows('perechen_elementov', $post_id) ) : the_row();
            $icon= get_sub_field('ikonka');
            $title= get_sub_field('zagolovok');
            $desc= get_sub_field('opisanie');
            ?>
            <div class="column__item">
                <div class="column__item-head">
                    <img src="<?php echo $icon;?>" alt="<?php echo $title;?>">
                    <h3><?php echo $title;?></h3>
                </div>
                <div class="column__item-desc"><?php echo $desc;?></div>
            </div>
        <?php
        endwhile;
        echo '</div>';
        echo '</div>';
    endif;
    ?>
</section>
