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

<div class="single-product-custom">
	<div class="container">


		<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action('woocommerce_before_single_product_summary');
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
				do_action('woocommerce_single_product_summary');

				?>

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
				<div class="ship-cost">
					<p class="m-0">
						Giao hàng Colissimo miễn phí tại Pháp khi mua hàng 59 €
					</p>
					<div>
						<a class="share-fb d-inline-block" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
							Chia sẻ:
							<i class="fab fa-facebook-f"></i>
						</a>
					</div>
				</div>
				<!-- <div class="entry-share">
					Chia sẻ:
					<a class="share-fb d-inline-block" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
						<i class="fab fa-facebook"></i>
					</a>
				</div> -->
			</div>
			<div class="spec-info">
				<div class="row row-cols-1 row-cols-lg-4 g-3 g-lg-0">
					<div class="col">
						<div class="item">
							<img src="https://nuagesauvage.fr/wp-content/uploads/2022/10/item_4.png" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
							<p class="title">TEMPS D’INFUSION</p>
							<p class="text">3' - 4'</p>
						</div>
					</div>
					<div class="col">
						<div class="item">
							<img src="https://nuagesauvage.fr/wp-content/uploads/2022/10/item_3.png" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
							<p class="title">DOSAGE</p>
							<p class="text">3g/30cl</p>
						</div>
					</div>
					<div class="col">
						<div class="item">
							<img src="https://nuagesauvage.fr/wp-content/uploads/2022/10/item_2.png" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
							<p class="title">TEMPÉRATURE D’INFUSION</p>
							<p class="text">100°C</p>
						</div>
					</div>
					<div class="col">
						<div class="item">
							<img src="https://nuagesauvage.fr/wp-content/uploads/2022/10/item_1.png" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
							<p class="title">MOMENT DE LA JOURNÉE</p>
							<p class="text">Toute la journée ou le soir</p>
						</div>
					</div>
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
			?>
		</div>

	</div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>