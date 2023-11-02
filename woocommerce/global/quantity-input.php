<?php

/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

if ($max_value && $min_value === $max_value) {
?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr($input_id); ?>" class="qty" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($min_value); ?>" />
	</div>
<?php
} else {
	/* translators: %s: Quantity. */
	$labelledby = !empty($args['product_name']) ? sprintf(__('%s quantity', 'woocommerce'), strip_tags($args['product_name'])) : '';
?>
	<!-- <div class="quantity">
		<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php esc_html_e('Quantity', 'woocommerce'); ?></label>
		<input type="button" value="-" class="qty_button minus" />
		<input type="number" id="<?php echo esc_attr($input_id); ?>" class="input-text qty text" step="<?php echo esc_attr($step); ?>" min="<?php echo esc_attr($min_value); ?>" max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($input_value); ?>" title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>" size="4" pattern="<?php echo esc_attr($pattern); ?>" inputmode="<?php echo esc_attr($inputmode); ?>" aria-labelledby="<?php echo esc_attr($labelledby); ?>" />
		<input type="button" value="+" class="qty_button plus" />
	</div> -->
	<div class="quantity">
		<?php do_action('woocommerce_before_quantity_input_field'); ?>
		<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php echo esc_attr($label); ?></label>

		<div class="input_quantity">
			<?php
			if ($getObj->post_name == 'gio-hang') {
			?>
				<input type="number" id="<?php echo esc_attr($input_id); ?>" class="<?php echo esc_attr(join(' ', (array) $classes)); ?>" step="<?php echo esc_attr($step); ?>" min="<?php echo esc_attr($min_value); ?>" max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($input_value); ?>" title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>" size="4" placeholder="<?php echo esc_attr($placeholder); ?>" inputmode="<?php echo esc_attr($inputmode); ?>" autocomplete="<?php echo esc_attr(isset($autocomplete) ? $autocomplete : 'on'); ?>" />
			<?php
			} else {
			?>
				<div class="input_qty_down"><span>-</span></div>
				<input type="number" id="<?php echo esc_attr($input_id); ?>" class="<?php echo esc_attr(join(' ', (array) $classes)); ?>" step="<?php echo esc_attr($step); ?>" min="<?php echo esc_attr($min_value); ?>" max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($input_value); ?>" title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>" size="4" placeholder="<?php echo esc_attr($placeholder); ?>" inputmode="<?php echo esc_attr($inputmode); ?>" autocomplete="<?php echo esc_attr(isset($autocomplete) ? $autocomplete : 'on'); ?>" />
				<div class="input_qty_up"><span>+</span></div>
			<?php
			}
			?>
		</div>
		<?php do_action('woocommerce_after_quantity_input_field'); ?>
	</div>
<?php
}
?>

<style>

</style>