<?php get_header() ?>
<?php get_template_part('templates/block/introduce', 'banner'); ?>
<?php get_template_part('templates/block/breadcrumb', ''); ?>
<section class="contactez">
    <div class="container">
        <div class="contactez-top auto-padding">
            <div class="row justify-content-center">
                <div class="col-md-3 col-12 text-center">
                    <img src="<?php echo esc_html(get_theme_mod('html_logo_header')); ?>" alt="Logo contact">
                </div>
                <div class="col-md-7 col-12 info">

                    <?php
                    if (have_rows('contact_top')) :
                        while (have_rows('contact_top')) : the_row();
                    ?>
                            <p>
                                <?php echo get_sub_field('info') ?>
                            </p>
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
                    if (have_rows('contact_bottom')) :
                        while (have_rows('contact_bottom')) : the_row();
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
    <div class="contactez-maps w-100">
        <?php echo the_field('contact_maps') ?>
    </div>
</section>

<?php get_footer() ?>