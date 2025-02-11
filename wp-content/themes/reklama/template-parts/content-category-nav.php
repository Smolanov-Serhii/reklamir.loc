<aside class="services__aside">
    <?php
    $terms = get_terms(
        array(
            'taxonomy'   => 'service-type',
            'hide_empty' => true,
            'hierarchical' => false,
            'orderby' => 'name',
            'order' => 'ASC',
        )
    );
    foreach ( $terms as $term ) { ?>
        <div class='services__category'>
            <h2 class="services__category-name"><?php echo $term->name; ?></h2>
            <?php
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service-type',
                        'field' => 'name',
                        'terms' => $term->name
                    )
                )
            );
            $partnersList = new WP_Query( $args );
            if($partnersList->have_posts()) {
                echo '<ul class="services__category-list">';
                while($partnersList->have_posts()) {
                    $partnersList->the_post();
                    ?>
                    <li class="services__category-item">
                        <a class="services__category-lnk" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                }
                echo '</ul>';
            }
            wp_reset_postdata();
            ?>
        </div>
    <?php } ?>
</aside>