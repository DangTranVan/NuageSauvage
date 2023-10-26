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
	<div class="quantity">
		<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php esc_html_e('Quantity', 'woocommerce'); ?></label>
		<input type="button" value="-" class="qty_button minus" />
		<input type="number" id="<?php echo esc_attr($input_id); ?>" class="input-text qty text" step="<?php echo esc_attr($step); ?>" min="<?php echo esc_attr($min_value); ?>" max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" name="<?php echo esc_attr($input_name); ?>" value="<?php echo esc_attr($input_value); ?>" title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>" size="4" pattern="<?php echo esc_attr($pattern); ?>" inputmode="<?php echo esc_attr($inputmode); ?>" aria-labelledby="<?php echo esc_attr($labelledby); ?>" />
		<input type="button" value="+" class="qty_button plus" />
	</div>
<?php
}
?>

<style>
	.quantity input::-webkit-outer-spin-button,
	.quantity input::-webkit-inner-spin-button {
		display: none;
		margin: 0;
	}

	.quantity input.qty {
		appearance: textfield;
		-webkit-appearance: none;
		-moz-appearance: textfield;
	}

	.quantity input.qty_button {
		-webkit-appearance: button;
		width: 40px;
		height: 33px;
		background: none !important;
		content: "\f068";
		font-family: fontawesome;
		font-size: 19px;
		color: #a6a9b2;
		text-align: center;
		/* line-height: 33px; */
		cursor: pointer;
		border: none;
		font-weight: 900 !important;
	}

	.quantity .input-text {
		height: 30px;
		border: none;
		outline: none;
		font-size: 24px;
		/* font-weight: bold; */
		width: 50px !important;
	}

	.quantity {
		display: inline-flex;
		/* border: 1px solid #ddd; */
	}
</style>