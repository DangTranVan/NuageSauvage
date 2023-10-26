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
        <!-- <?php get_template_part('partials/loop/product', 'home-section7'); ?> -->

        <!-- <div class="row row-cols-2 row-cols-lg-4 gx-1 gy-1">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8,
                'orderby' => 'rand'
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
            ?>
                    <div class="shop_product_item">
                        <div class="card ">
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  bloginfo('template_directory') . '/assets/images/thumbnail.jpg' ?>" class="card-img-top" alt="Not found">
                                </a>
                                <div class="seemore">
                                    <a href="">
                                        <button class="btn btn-seemore" style="padding: 12.94px 39.8px;  width: 100%;  border-radius: 0px 0px 20px 20px; color: white;background: #134d09; transition: ease 0.5s;">
                                            <?php woocommerce_template_loop_add_to_cart(); ?>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="title line-2"><?php the_title(); ?></h4>
                                    </a>
                                </div>
                                <div class="card-price">
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <div>
                                                <span class="bl__card-price " href="<?php the_permalink(); ?>"><?php do_action('woocommerce_after_shop_loop_item_title'); ?></span>
                                            </div>
                                        </span>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div> -->
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