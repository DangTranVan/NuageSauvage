<?php
$product = wc_get_product();
$product_price  = $product->price;
$product_id = get_the_ID();
$product_sku = $product->get_sku();
$terms = get_the_terms($product_id, 'product_cat');
$tax_product = $terms[0]->slug;
?>
<div class="shop_product_item">
    <div class="card">
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('full'); ?>" class="card-img-top" alt="..." onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
            </a>
            <!-- <div class="addcart"> -->
            <?php
            //echo "<a href='" . $product->add_to_cart_url() . "'>Ajouter au panier <i class='fas fa-shopping-cart'></i></a>";
            // if ($tax_product == 'atelier-passe') {
            // } else {
            // echo do_shortcode('[add_to_cart class="add-cart" id="' . $product_id . '" show_price="false" style="border: none; background: unset;"]');
            // echo '<p class="product woocommerce add_to_cart_inline add-cart" style="border: none; background: unset;"><a href="?add-to-cart='.$product_id.'" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" aria-label="Add “Gâteau aux haricots verts 8” to cart" rel="nofollow">Ajouter au panier <i class="fas fa-shopping-cart"></i></a></p>';
            // }

            ?>
            <!-- </div> -->

            <div class="seemore">
                <a href="<?php the_permalink(); ?>">
                    <button class="btn btn-seemore">Découvrir<i class="fal fa-chevron-right"></i></button>

                    <?php //echo do_shortcode('[woosq id="' . $product_id . '"]');
                    ?>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-title">
                <a href="<?php the_permalink(); ?>">
                    <h4 class="title line-2"><?php echo the_title() ?></h4>
                </a>
            </div>
            <div class="card-price">
                <?php
                if (empty($product_price)) {
                    //$product_price = 'Liên hệ';
                ?>
                    <div class="price">
                        <a href="<?php //echo site_url('/lien-he'); 
                                    ?>"><button class="btn"><?php //echo $product_price; 
                                                            ?></button></a>
                    </div>
                <?php
                } else {
                    if ($tax_product == 'atelier-passe') {
                    } else {
                        woocommerce_template_loop_price();
                    }
                ?>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- <a href="<?php //the_permalink(); 
                        ?>">
            <div class="overlay"></div>
        </a> -->
    </div>
</div>