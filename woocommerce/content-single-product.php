<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
// $obj = get_queried_object();

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<!---------------------------CUSTOM---------------------------------------- -->
<?php
$current_term = array_shift(array_values(get_the_terms(get_the_ID(), 'product_cat')));
$tax_parent = get_term($current_term->parent);
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	// do_action('woocommerce_before_single_product_summary');
	woocommerce_show_product_images();
	?>
	<div class="summary entry-summary">

		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */

		woocommerce_template_single_title();
		woocommerce_template_single_rating();
		?>
		<?php
		if (empty($product->get_children())) {
		?>
			<div class="price_cus">
				<?php
				woocommerce_template_single_price();
				woocommerce_template_single_add_to_cart();
				?>
			</div>
		<?php
		} else {
			woocommerce_template_single_add_to_cart();
		}
		?>
		<?php woocommerce_template_single_excerpt(); ?>
		<div class="mt-5">
		</div>

		<div class="add-to-cart-cus">
			<?php
			if (!empty($product->get_price())) {
				if (empty($product->get_children())) {
			?>
					<div class="add">
						<a href="<?php echo WC()->cart->add_to_cart() ?>?add-to-cart=<?php echo $product->id; ?>" id="add-to-cart-single" class="add-to-cart btns btn-cus btn-cus--white">AJOUTER AU PANIER</a>
					</div>
					<div class="buy">
						<a href="<?php echo WC()->cart->get_checkout_url(); ?>?add-to-cart=<?php echo $product->id; ?>" id="buy-now-single" class="buy-now btns btn-cus btn-cus--green">ACHETER MAINTENANT</a>
					</div>
				<?php
				} else {
				?>
					<div class="add">
						<a href="<?php echo WC()->cart->add_to_cart() ?>" id="add-to-cart-single-variable" class="add-to-cart btns btn-cus btn-cus--white">AJOUTER AU PANIER</a>
					</div>
					<div class="buy">
						<a href="<?php echo WC()->cart->get_checkout_url(); ?>" id="buy-now-single-variable" class="buy-now btns btn-cus btn-cus--green">ACHETER MAINTENANT</a>
					</div>
				<?php
				}
			} else {
				?>
				<div class="contact text-center text-lg-start">
					<a href="<?php echo site_url('/lien-he');
								?>"><button class="buy-now btn btn-cus btn-cus--green">Liên hệ báo giá</button></a>
				</div>
			<?php
			}
			?>
		</div>
		<div class="product_meta">
			<ul class="more-info">
				<li>
					<span class="posted_in">Danh mục:
						<?php
						$product_id = get_the_ID();
						$product_categories = wp_get_post_terms($product_id, 'product_cat');

						if (!empty($product_categories) && !is_wp_error($product_categories)) {
							foreach ($product_categories as $product_category) {
								echo '<a href="' . get_term_link($product_category->term_id) . '">' . $product_category->name . '</a>';
							}
						}
						?>
					</span>
				</li>
				<li></li>
			</ul>
		</div>
		<?php woocommerce_template_single_meta(); ?>

		<div class="ship-cost">
			<p class="m-0">Livraison Colissimo offerte en France dès 59€ d’achat</p>
			<div>
				<a class="share-fb btn-floating btn btn-tw" type="button" role="button" title="Share on facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($product->get_id()); ?>" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($product->get_id()); ?>','popup','width=600,height=600'); return false;" target="popup" rel="noopener">
					Partager sur
				</a>
				<i class="fab fa-facebook-f"></i>
			</div>
		</div>
		<?php

		?>
	</div>

	<div class="spec-info">
		<div class="row row-cols-1 row-cols-lg-4 g-3 g-lg-0">
			<?php

			if ($tax_parent->slug == "tra" || $tax_parent->slug == "tra-thao-moc" || $tax_parent->slug == "xuong") {
				if (have_rows('info_important')) :
					while (have_rows('info_important')) : the_row();
						$image = get_sub_field('image');
			?>
						<div class="col">
							<div class="item">
								<img src="<?php echo esc_url($image['url']); ?>" />
								<p class="title"><?php echo get_sub_field('title'); ?></p>
								<p class="text"><?php echo get_sub_field('info'); ?></p>
							</div>
						</div>
					<?php
					endwhile;
				else :
					?>
					
			<?php
				endif;
			}
			?>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	//get_template_part('templates/blocks/component', 'shop-product-item');
	?>

</div>

<?php do_action('woocommerce_after_single_product'); ?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> -->