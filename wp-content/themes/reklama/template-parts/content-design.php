<?php
$post_id = get_the_ID();
?>
<section class="design">
    <div class="design__container main-container">
        <div class="design__left">
            <div class="design__main">
                <?php
                if( have_rows('perechen_uslug_dlya_slajdera', $post_id) ):
                    $counter = 1;
                    while( have_rows('perechen_uslug_dlya_slajdera', $post_id) ) : the_row();
                        $title = get_sub_field('nazvanie_servisa');
                        $img = get_sub_field('izobrazhenie_servisa');
                        $lnk = get_sub_field('ssylka_na_servis');
                        if ($lnk){
                            ?>
                                <a href="<?php echo $lnk;?>" class="design__main-item <?php if ($counter == 1) { echo 'active';}?>">
                            <?php
                        } else {
                            ?>
                                <div class="design__main-item <?php if ($counter == 1) { echo 'active';}?>">
                            <?php
                        }
                        ?>


                            <span class="design__main-item-img">
                                <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                            </span>
                            <h3 class="design__main-item-title">
                                <?php echo $title;?>
                            </h3>

                    <?php
                        if ($lnk){
                            ?>
                                </a>
                            <?php
                        } else {
                            ?>
                                </div>
                            <?php
                        }
                        $counter ++;
                    endwhile;
                endif;
                ?>
            </div>
            <div class="design__prev">
                <div class="design__prev__container">
                    <?php
                    if( have_rows('perechen_uslug_dlya_slajdera', $post_id) ):
                        while( have_rows('perechen_uslug_dlya_slajdera', $post_id) ) : the_row();
                            $title = get_sub_field('nazvanie_servisa');
                            $img = get_sub_field('izobrazhenie_servisa');
                            ?>
                            <div class="design__prev-item">
                                <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="design__right">
            <h2 class="design__title section-title">
                <?php echo get_field('zagolovok_bloka_dizjn_studiya', $post_id)?>
            </h2>
            <div class="section-undertitle">
                <?php echo get_field('pod_zagolovok_bloka_dizajn_studiya', $post_id)?>
            </div>
            <div class="design__desc">
                <?php echo get_field('opisanie_bloka_dizajn_studii', $post_id)?>
            </div>
            <a class="button button-blue design__lnk" href="<?php echo get_field('ssylka_na_knopku_dizajn_studii', $post_id)?>">
                <span><?php echo get_field('tekst_podrobnee', 'options')?></span>
            </a>
        </div>
    </div>
</section>
