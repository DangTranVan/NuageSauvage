<?php
get_header();
$queried_object = get_queried_object();
global $post;
?>
<section class="page-blogs" >
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="title text-center">RÉSULTATS DE RECHERCHE</h2>
                    <div class="search_form">
                        <?php
                        echo do_shortcode('[ivory-search id="421" title="AJAX Search Form"]');
                        ?>
                    </div>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'post_type'          => 'product',
                        // 'orderby'            => 'date',
                        // 'order'              => 'DESC',
                        'paged'             => get_query_var('paged'),
                        's'                  => get_search_query()
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php if ($_GET['s'] == '') { ?>
                        <h4 class="mb-3 mb-md-4">Vui lòng nhập từ khóa bạn muốn tìm kiếm.</h4>
                    <?php
                    } else {
                    ?>
                        <h4 class="mb-3 mb-md-4"><?php echo count($getposts->posts) ?> kết quả tìm kiếm được tìm thấy</h4>

                        <div class="row row-cols-4">
                            <?php if ($getposts->have_posts()) : ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <div class="col">
                                        <?php get_template_part('templates/block/component', 'shop-product-item');
                                        ?>

                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>

                            <?php endif; ?>

                        </div>
                    <?php } //if (function_exists('prw_wp_corenavi')) prw_wp_corenavi($getposts, $paged); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>
<div class="clear"></div>

<?php get_footer(); ?>