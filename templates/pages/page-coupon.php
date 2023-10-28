<?php get_header(); ?>
<?php //get_template_part('templates/block/breadcrumb', ''); 
?>
<div class="container mb-5">
    <h1 class="text-center mt-5">COUPON</h1>
    <div class="cart-page mt-5">
        <div class="row m-0">
            <div class="coupon-component">
                <h4 class="m-0"><i class="fas fa-coins"></i> Mes points de fidélité: <span class="coupon-point"><?php echo (do_shortcode('[wr_points_balance]') != "") ? do_shortcode('[wr_points_balance]') : "0 points" ?></span></h4>
            </div>
            <div class="coupon-component-available">
                <h4 class="m-0">Code promo disponible:<br><span class="coupon-point-available mt-2"><?php echo (do_shortcode('[wr_available_coupons]') != "") ? do_shortcode('[wr_available_coupons]') : "Vous n'avez pas encore de coupon" ?></span></h4>
            </div>
        </div>
    </div>
    <div class="back-dashboard text-center fw-bold fs-5">
        <a href="<?php echo get_home_url() ?>/user-account/"><i class="fas fa-caret-circle-left"></i>&nbsp;Retour</a>
    </div>
</div>

<?php get_footer(); ?>