<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
?>
<!-- <div class="container"> -->
<?php
// do_action('woocommerce_before_main_content');
?>

<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

?>
<?php $terms = get_queried_object(); ?>

<?php
if ($terms->taxonomy == 'product_tag') {
?>
	<div class="container">
		<!-- <header class="woocommerce-products-header pb-3"> -->
		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		//do_action('woocommerce_archive_description');
		?>
		<!-- </header> -->
		<div class="row">
			<div class="col-md-4 col-lg-3 ">
				<div class="filters-products">
					<h4 class="mb-4">NOS PRODUITS</h4>

					<?php echo do_shortcode('[yith_wcan_filters slug="product-tags"]'); ?>
					<?php echo do_shortcode('[wpf-filters id=1]'); ?>
				</div>
				<div class="sidebar-category__contact mt-4 mb-5">
					<div class="sidebar-category__contact--icon gray-light-co phone">
						<a href="tel:0634274505">
							<svg version="" "1.1"="" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
								<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                  c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                  c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                  c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                  c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                  C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
								<path d="M41.1,15.7
                                  c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                  c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
								<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                  C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
							</svg>
						</a>
					</div>
					<h5 class="sidebar-category__contact--title gray-light-co">
						Cần giúp đỡ?
					</h5>
					<h4 class="sidebar-category__contact--desc gray-light-co">
						LIÊN HỆ CHÚNG TÔI
					</h4>
					<h2 class="sidebar-category__contact--num gray-light-co mt-4">
						01 73 70 05 55
					</h2>
				</div>
			</div>
			<div class="col-md-8 col-lg-9 ">
				<div class="content-reward mb-4">

				</div>

				<!-- custom -->
				<div class="feature-product products mt-0">
					<?php
					// -----custom-content-product---	

					$term_slug = $terms->slug;
					?>
					<?php
					echo do_shortcode('[products limit="12"  columns="3" tag="' . $term_slug . '" paginate="true"]');
					?>

					<div class="arc-pr-bot pt-4 pb-4">

						<?php
						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						// do_action('woocommerce_before_shop_loop');
						//do_action('woocommerce_after_shop_loop');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} elseif (!empty($terms->slug)) {
?>
	<?php
	if ($terms->slug == "hoi-thao-dang-dien-ra-sap-dien-ra" || $terms->slug == "hoi-thao-truoc-day") {
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

	<?php
	if ($terms->slug == "hoi-thao-dang-dien-ra-sap-dien-ra" || $terms->slug == "hoi-thao-truoc-day") {
	?>
		<?php
		// -----custom-content-product---	
		$term_slug;
		if ($terms->has_archive) {
			$term_slug = "";
		} else {
			$term_slug = $terms->slug;
		}
		?>
		<div class="woocommerce-products-tabs">
			<div class="container">
				<div class="items">
					<a href="<?php echo get_term_link('hoi-thao-dang-dien-ra-sap-dien-ra', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green <?php echo ($term_slug == "hoi-thao-dang-dien-ra-sap-dien-ra") ? 'active' : '' ?>"><?php $term = get_term_by('slug', 'hoi-thao-dang-dien-ra-sap-dien-ra', 'product_cat');
																																																											echo $term->name; ?></button></a>
					<a href="<?php echo get_term_link('hoi-thao-truoc-day', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green <?php echo ($term_slug == "hoi-thao-truoc-day") ? 'active' : '' ?>"><?php $term = get_term_by('slug', 'hoi-thao-truoc-day', 'product_cat');
																																																				echo $term->name; ?></button></a>
					<a href="<?php echo site_url('/xuong-rieng-duoc-dat-truoc'); ?>"><button class="btn btn-cus btn-cus--green"><?php echo get_the_title(423); ?></button></a>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- <header class="woocommerce-products-header pb-3"> -->

			<?php
			/**
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			// do_action('woocommerce_archive_description');
			?>
			<!-- </header> -->
			<div class="archive-product-title-cus">
				<div class="title-text-box">
					<h1 class="text"><?php echo $terms->name; ?></h1>
					<span class="absolute-text">Atelier</span>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="feature-product products mt-0">
						<?php
						// -----custom-content-product---	
						// $terms = get_queried_object();
						$term_slug;
						if ($terms->has_archive) {
							$term_slug = "";
						} else {
							$term_slug = $terms->slug;
						}
						?>

						<?php
						echo do_shortcode('[products limit="12" columns="4" category="' . $term_slug . '" paginate="true"]');
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	} else {
	?>
		<div class="container">
			<!-- <header class="woocommerce-products-header pb-3"> -->
			<?php
			/**
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			//do_action('woocommerce_archive_description');
			?>
			<!-- </header> -->
			<div class="row">
				<div class="col-md-4 col-lg-3 ">
					<div class="filters-products">
						<h4 class="mb-4">NOS PRODUITS</h4>
						<?php
						$parent_taxonomy_id;
						$parent_taxonomy_slug;
						if ($terms->parent == 0) {
							$parent_taxonomy_id = $terms->term_taxonomy_id;
						} else {
							$parent_taxonomy_id = $terms->parent;
						}

						$term = get_term($parent_taxonomy_id, 'product_cat');
						$parent_taxonomy_slug = $term->slug;
						?>

						<?php
						if (have_rows('sidebar_product', 2)) :
							while (have_rows('sidebar_product', 2)) : the_row(); ?>
								<?php

								$get_tax_id =  get_sub_field('taxonomy_parent_id');
								$get_tax_slug =  get_sub_field('taxonomy_parent_slug');

								if ($parent_taxonomy_id == $get_tax_id || $parent_taxonomy_slug == $get_tax_slug) {
									if (have_rows('taxonomy_child')) :
										while (have_rows('taxonomy_child')) : the_row();
											$taxonomy_child =  get_sub_field('item');
											echo do_shortcode($taxonomy_child);
										endwhile;
									else :
									// Do something...
									endif;
								}
								?>
						<?php
							endwhile;
						else :
						// Do something...
						endif;
						?>
						<?php echo do_shortcode('[wpf-filters id=1]'); ?>
					</div>
					<div class="sidebar-category__contact mt-4 mb-5">
						<div class="sidebar-category__contact--icon gray-light-co phone">
							<a href="tel:0634274505">
								<svg version="" "1.1"="" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
									<path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                  c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                  c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                  c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                  c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                  C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
									<path d="M41.1,15.7
                                  c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                  c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
									<path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                  C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
								</svg>
							</a>
						</div>
						<h5 class="sidebar-category__contact--title gray-light-co">
							Cần giúp đỡ?
						</h5>
						<h4 class="sidebar-category__contact--desc gray-light-co">
							LIÊN HỆ CHÚNG TÔI
						</h4>
						<h2 class="sidebar-category__contact--num gray-light-co mt-4">
							01 73 70 05 55
						</h2>
					</div>
				</div>
				<div class="col-md-8 col-lg-9 ">
					<div class="content-reward mb-4">
						<?php
						if ($terms->slug == "coffret-personnalise") {
						?>
							<div class="content">
								<?php if (have_rows('content', 5)) :
									while (have_rows('content', 5)) : the_row();
								?>
										<h5 class="content-cadeau">
											<span class="icon"><?php echo get_sub_field('icon-cadeau', 5); ?></span> <?php echo get_sub_field('content-cadeau', 5); ?>
										</h5>
								<?php endwhile;
								endif; ?>
							</div>
						<?php
						}
						?>
					</div>

					<!-- custom -->
					<div class="feature-product products mt-0">
						<?php
						// -----custom-content-product---						

						$terms = get_queried_object();
						$term_slug;
						if ($terms->has_archive) {
							$term_slug = "";
						} else {
							$term_slug = $terms->slug;
						}
						?>
						<?php
						echo do_shortcode('[products limit="12"  columns="3" category="' . $term_slug . '" paginate="true"]');
						?>

						<div class="arc-pr-bot pt-4 pb-4">

							<?php
							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							// do_action('woocommerce_before_shop_loop');
							//do_action('woocommerce_after_shop_loop');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
} else {
	?>
	<div class="product_search">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="title text-center">RÉSULTATS DE RECHERCHE</h2>
					<div class="search_form">
						<?php
						echo do_shortcode('[ivory-search id="421" title="AJAX Search Form"]');
						?>
					</div>

					<?php
					woocommerce_result_count();
					woocommerce_catalog_ordering();

					if (woocommerce_product_loop()) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						//do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_loop_start();

						if (wc_get_loop_prop('total')) {
							while (have_posts()) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action('woocommerce_shop_loop');

								wc_get_template_part('content', 'product');
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action('woocommerce_after_shop_loop');
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action('woocommerce_no_products_found');
						// echo "khoong tim thay THANH TRONG NAY";
					}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action('woocommerce_after_main_content');
					?>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
<?php get_footer('shop'); ?>