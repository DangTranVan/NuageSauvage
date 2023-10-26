<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_navigation'); ?>
<h2>Votre compte</h2>
<style>
	h1 {
		display: none;
	}
	h2 {
		text-align: center;
		padding: 50px 0;
		font-size: 36px;
	}
</style>
<div class="woocommerce-MyAccount-content">
	<?php
	/**
	 * My Account content.
	 *
	 * @since 2.6.0
	 */
	do_action('woocommerce_account_content');
	?>
	<div class="back-dashboard text-center fw-bold fs-5">
		<a href="<?php echo get_home_url() ?>/user-account/"><i class="fas fa-caret-circle-left"></i>&nbsp;Retour</a>
	</div>
</div>