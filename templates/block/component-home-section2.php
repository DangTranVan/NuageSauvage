<section class="home_section2">
    <div class="container">
        <div class="title-text-box">
            <h1 class="text">
                PRODUIT populaires
            </h1>
            <span class="absolute-text">
                Produit
            </span>
        </div>
        <div class="row row-cols-2 row-cols-lg-4 gx-1 gy-1">
            <?php
            $args = array(
                'post_type'           => 'product',
                'posts_per_page'      => 8,
                'orderby'          => 'rand',
                'post__in'            => wc_get_featured_product_ids(),
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    get_template_part('templates/block/component', 'shop-product-item');

                endwhile;
            else :
                _e('', 'textdomain');
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>