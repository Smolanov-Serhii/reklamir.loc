<?php
$post_id = get_the_ID();
?>
<section class="product">
    <div class="product__container main-container">
        <h2 class="product__title section-title">
            <?php echo get_field('zagolovok_bloka_izgotovenie', $post_id)?>
        </h2>
        <div class="product__content">
            <?php echo get_field('kontent_bloka', $post_id)?>
        </div>
    </div>
</section>
