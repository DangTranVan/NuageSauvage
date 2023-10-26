
<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}
// $product = wc_get_product();
$term =  wp_get_post_terms(get_the_ID(), 'product_cat');
$array = array_shift($term);
$term_parent_id = $array->parent;
$tax_parent = get_term($term_parent_id);
$tax_parent_slug = $tax_parent->slug;

?>

<section class="related products">

	<?php
	//$heading = apply_filters('woocommerce_product_related_products_heading', __('Related products', 'woocommerce'));

	// if ($heading) :
	?>
	<div class="title-text-box">
		<!-- <h2 class="title"><?php //echo esc_html($heading); 
								?></h2> -->
		<!-- <span class="text"><?php //echo get_sub_field('title') 
								?></span>
				<span class="absolute-text top-50"><?php //echo get_sub_field('titre_derriere') 
													?></span> -->
		<h1 class="text">À DÉCOUVRIR ABSOLUMENT</h1>
		<span class="absolute-text">découvrir</span>
	</div>

	<!-- <?php //endif; 
			?> -->

	<?php woocommerce_product_loop_start(); ?>
	<div id="owl_product_related" class="owl-carousel owl-theme">
		<?php
		$args = array(
			'post_type'           => 'product',
			'orderby'          => 'rand',
			'posts_per_page'      => -1,
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
		// wp_reset_postdata();
		?>
	</div>

	<div class="related-see-more">
		<a href="<?php echo get_home_url(); ?>/<?php echo $tax_parent_slug; ?>"><button class="btn-see-more btn-cus--green">Voir Plus</button></a>
	</div>
	<?php woocommerce_product_loop_end(); ?>

</section>
<?php

wp_reset_postdata();
