<?php get_header(); ?>
<?php get_template_part('templates/block/introduce', 'banner'); ?>
<div class="breadcrumb_product">
    <div class="section__breadcrumb">
        <div class="container">
            <?php the_breadcrumb(); ?>
        </div>
    </div>
</div>
<?php $terms = get_queried_object(); ?>
<div class="woocommerce-products-tabs">
    <div class="container">
        <div class="items">
            <a href="<?php echo get_term_link('hoi-thao-dang-dien-ra-sap-dien-ra', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green"><?php $term = get_term_by('slug', 'hoi-thao-dang-dien-ra-sap-dien-ra', 'product_cat');
                                                                                                                                                    echo $term->name; ?></button></a>
            <a href="<?php echo get_term_link('hoi-thao-truoc-day', 'product_cat') ?>"><button class="btn btn-cus btn-cus--green"><?php $term = get_term_by('slug', 'hoi-thao-truoc-day', 'product_cat');
                                                                                                                                    echo $term->name; ?></button></a>
            <a href="<?php echo site_url('/xuong-rieng-duoc-dat-truoc'); ?>"><button class="btn btn-cus btn-cus--green <?php echo ($terms->post_name == "xuong-rieng-duoc-dat-truoc") ? 'active' : '' ?>"><?php echo get_the_title(423); ?> </button></a>
        </div>
    </div>
</div>

<section class="xuong-rieng-duoc-dat-truoc">

    <div class="title-text-box">
        <h1 class="text"><?php echo get_the_title(423); ?></h1>
        <span class="absolute-text">Atelier</span>
    </div>
    <div class="container">
        <?php
        if (have_rows('xuong_rieng')) :
            while (have_rows('xuong_rieng')) : the_row();
        ?>
                <div class="content">
                    <h2 class="mb-5"><?php echo get_sub_field('content') ?></h2>
                    <div id="owl-atilier" class="owl-carousel owl-theme">
                        <?php
                        $images = get_sub_field('gallery');
                        // $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($images) : ?>
                            <?php foreach ($images as $image) :
                            ?>
                                <div class="item">
                                    <img data-fancybox="gallery" src="<?php echo esc_url($image['url']); ?>" />
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <img class="mb-5" src="<?php echo get_sub_field('image') ?>" alt="ATELIER PRIVE">
                </div>
        <?php
            endwhile;
        else :
        // Do something...
        endif;
        ?>
    </div>
    <div class="contactez-bottom auto-padding">
        <div class="container">
            <div class="row justify-content-center flex-md-row flex-column-reverse">
                <div class="col-md-5 col-12 flex-md-row">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="77789d1" title="Form atelier prive"]') ?>
                    </div>
                </div>
                <div class="col-md-5 col-12 d-flex align-items-center">
                    <?php
                    if (have_rows('contact_bottom', 383)) :
                        while (have_rows('contact_bottom', 383)) : the_row();
                    ?>
                            <div class="content">
                                <h3><?php echo get_sub_field('title_form') ?></h3>
                                <p><?php echo get_sub_field('desc_form') ?>
                                </p>
                                <div class="logo">
                                    <?php
                                    if (have_rows('logo_social_1')) :
                                        while (have_rows('logo_social_1')) : the_row();
                                    ?>
                                            <span class="logo-fb">
                                                <a href="<?php echo get_sub_field('url') ?>" target="_blank">
                                                    <?php echo get_sub_field('icon_logo') ?>
                                                </a>
                                            </span>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('logo_social_2')) :
                                        while (have_rows('logo_social_2')) : the_row();
                                    ?>
                                            <span class="logo-in">
                                                <a href="<?php echo get_sub_field('url') ?>" target="_blank">
                                                    <?php echo get_sub_field('icon_logo') ?>
                                                </a>
                                            </span>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('logo_social_3')) :
                                        while (have_rows('logo_social_3')) : the_row();
                                    ?>
                                            <span class="logo-insta">
                                                <a href="<?php echo get_sub_field('url') ?>" target="_blank">
                                                    <?php echo get_sub_field('icon_logo') ?>
                                                </a>
                                            </span>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                    // Do something...
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>