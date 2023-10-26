<?php
$cat_url = get_queried_object();
?>
<!-- content  -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($cat_url->has_archive) {
    $tax_query = null;
} else {
    $tax_query = array(
        'taxonomy' => 'product_cat',
        'field'    => 'id',
        'terms'    => $cat_url->term_id,
    );
}

$args = array(
    'paged' => $paged,
    'post_type'               => 'product',
    'orderby'                => 'date',
    'order'                    => 'ASC',
    'tax_query' => array(
        $tax_query
    ),
);
$wp_query = new WP_Query($args); ?>
<?php if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post();
        global $product;
        $terms = get_the_terms($product->get_id(), 'product_cat');
    ?>
        <div class="col-lg-4 col-6 mb-1 mb-lg-4 pb-2 pb-lg-4 px-lg-2 px-1">
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
        </div>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
<?php endif; ?>
<!-- <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
    <div class="d-flex justify-content-center texte">
        <div class="pagination">
        <?php
        if (function_exists('prw_wp_corenavi')) prw_wp_corenavi();
        ?>
        </div>
    </div>
</div> -->


<style>
    .container .row .card .card-image .seemore a {
        width: 100%;
        color: white;
        background: #134d09;
        transition: ease 0.5s;
    }

    .container .row .card {
        cursor: pointer;
        position: relative;
        text-align: center;
        height: 411.5px;
        border-radius: 9.25px;
        border: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
    }

    .container .row .card .card-body .card-title a h4 {
        padding: 0 1rem;
    }
</style>