<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>
<?php $current_term = array_shift(array_values(get_the_terms(get_the_ID(), 'product_cat'))); ?>
<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
// do_action('woocommerce_before_main_content');
?>

<?php
if ($current_term->slug == "hoi-thao-dang-dien-ra-sap-dien-ra" || $current_term->slug == "hoi-thao-truoc-day") {
	get_template_part('templates/block/introduce', 'banner');
?>
	<div class="breadcrumb_product">
		<div class="section__breadcrumb">
			<div class="container">
				<?php the_breadcrumb(); ?>
			</div>
		</div>
	</div>
<?php
} else {
	get_template_part('templates/block/breadcrumb', '');
}
?>

<div class="single-product-custom">
	<?php if ($current_term->slug == "hoi-thao-dang-dien-ra-sap-dien-ra" || $current_term->slug == "hoi-thao-truoc-day") {
	?>
		<div class="woocommerce-products-tabs">
			<div class="container">
				<div class="items">
					<a href="<?php echo get_term_link('hoi-thao-dang-dien-ra-sap-dien-ra', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green <?php echo ($current_term->slug == "hoi-thao-dang-dien-ra-sap-dien-ra") ? 'active' : '' ?>">Atelier encour/ à venir</button></a>
					<a href="<?php echo get_term_link('hoi-thao-truoc-day', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green <?php echo ($current_term->slug  == "hoi-thao-truoc-day") ? 'active' : '' ?>">Atelier passé</button></a>
					<a href="<?php echo site_url('/xuong-rieng-duoc-dat-truoc'); ?>"><button class="btn btn-cus btn-cus--green">Atelier prive (a reservez)</button></a>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<div class="container">
		<?php while (have_posts()) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part('content', 'single-product'); ?>

		<?php endwhile; // end of the loop. 
		?>

		<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
		?>

		<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action('woocommerce_sidebar');
		?>
	</div>
</div>
<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
