<?php get_header(); ?>
<?php //get_template_part('templates/block/breadcrumb', ''); 
?>
<div class="container">
    <h1 class="text-center mt-5">PANIER</h1>
    <div class="cart-page mt-5">
        <?php echo do_shortcode('[woocommerce_cart]') ?>
    </div>
</div>

<?php get_footer(); ?>