<?php get_header(); ?>
<?php //get_template_part('templates/block/breadcrumb', ''); 
?>
<div class="container mb-5">
    <h1 class="text-center mt-5">PAIEMENT</h1>
    <div class="cart-page mt-5">
        <?php echo do_shortcode('[woocommerce_checkout]') ?>
    </div>
</div>

<?php get_footer(); ?>