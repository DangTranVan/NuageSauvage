<!-- Begin Footer -->
<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-logo">
                <img src="<?php echo esc_html(get_theme_mod('html_footer_header')); ?>" alt="">
            </div>
            <div class="row gx-5">
                <div class="col-lg-4">
                    <?php
                    if (have_rows('column_1', 2)) :
                        while (have_rows('column_1', 2)) : the_row();
                    ?>
                            <div class="footer-item">
                                <h3><a href="<?php echo get_home_url() ?>/contactez"><?php echo get_sub_field('name_column_1') ?></a></h3>
                                <h4><?php echo get_sub_field('info') ?></h4>
                                <ul class="list-unstyled mb-0">
                                    <li><a href="https://goo.gl/maps/rgAnrGRdUsSv9DB49"><?php echo get_sub_field('address') ?></a></li>
                                    <li><a href="tel:<?php echo get_sub_field('hotline') ?>">Hotline: <?php echo get_sub_field('hotline') ?></a></li>
                                    <li><a href="mailto:<?php echo get_sub_field('email') ?>">Email: <?php echo get_sub_field('email') ?></a>
                                    </li>
                                </ul>
                                <div class="icons">
                                    <?php
                                    if (have_rows('social_1')) :
                                        while (have_rows('social_1')) : the_row();
                                    ?>
                                            <a href="<?php echo get_sub_field('url') ?>" target="_blank"><?php echo get_sub_field('icon') ?></a>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('social_2')) :
                                        while (have_rows('social_2')) : the_row();
                                    ?>
                                            <a href="<?php echo get_sub_field('url') ?>" target="_blank"><?php echo get_sub_field('icon') ?></a>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('social_3')) :
                                        while (have_rows('social_3')) : the_row();
                                    ?>
                                            <a href="mailto:<?php echo get_sub_field('url') ?>"><?php echo get_sub_field('icon') ?></a>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('social_4')) :
                                        while (have_rows('social_4')) : the_row();
                                    ?>
                                            <a href="tel:<?php echo get_sub_field('url') ?>"><?php echo get_sub_field('icon') ?></a>
                                    <?php
                                        endwhile;
                                    else :
                                    // Do something...
                                    endif;
                                    ?>
                                    <?php
                                    if (have_rows('social_5')) :
                                        while (have_rows('social_5')) : the_row();
                                    ?>
                                            <a href="<?php echo get_sub_field('url') ?>" target="_blank"><?php echo get_sub_field('icon') ?></a>
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
                <div class="col-lg-2">
                    <?php
                    if (have_rows('column_2', 2)) :
                        while (have_rows('column_2', 2)) : the_row();
                    ?>
                            <div class="footer-item">
                                <h3><?php echo get_sub_field('name_column_2') ?></h3>
                                <ul class="list-unstyled mb-0">
                                    <?php
                                    $args = array(
                                        'type'      => 'post',
                                        'number'    => 10,
                                        'parent'    => 0
                                    );
                                    $categories = get_categories($args);
                                    foreach ($categories as $category) { ?>
                                        <li>
                                            <a class="line-1 text-capitalize" href="<?php echo get_home_url(); ?><?php echo  "/" . 'category' . "/" . $category->slug; ?>"><?php echo $category->name; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                    <?php
                        endwhile;
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
                <div class="col-lg-3">
                    <?php
                    if (have_rows('column_3', 2)) :
                        while (have_rows('column_3', 2)) : the_row();
                    ?>
                            <div class="footer-item">
                                <h3><?php echo get_sub_field('name_column_3') ?></h3>
                                <?php
                                $primarymenu = array(
                                    'theme_location'  => 'footer',
                                    'menu'            => '',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'slimmenu',
                                    'menu_id'         => 'footer-menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                    'walker'          => new wp_bootstrap_navwalker(),
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                                    'depth'           => 0,
                                );
                                if (has_nav_menu('primary')) {
                                    wp_nav_menu($primarymenu);
                                }
                                ?>
                            </div>
                    <?php
                        endwhile;
                    else :
                    // Do something...
                    endif;
                    ?>
                </div>
                <div class="col-lg-3 pl-lg-0">
                    <div class="footer-item h-100">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNuageSauvage&tabs=timeline&width=340&height=271&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="271" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="mb-0 text-center text-white">
                © Copyright Yensaohangdahaidao. All rights reserved | <span>Design by <a href="https://biti.vn/" target="_blank">BITI.VN</a></span>
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->
<a href="#" class="button-to-top">
    <div id="bottom_to_top">
        <i class="fal fa-chevron-up"></i>
    </div>
</a>
<script>
    var ajaxUrl = '<?php echo admin_url('admin-ajax.php') ?>'
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    (function($) {
        $(document).ready(function() {
            var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
            $('#hk-change-avatar').submit(function(e) {
                e.preventDefault();
                let fd = new FormData();
                fd.append("upload_avatar", $("#upload_avatar")[0].files[0]);
                fd.append("action", "change_user_avatar");

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: ajaxUrl,
                    data: fd,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {},
                    success: function(response) {
                        if (response.success) {
                            $("#hk-change-avatar")[0].reset();
                            $('#hk-success').show();
                            $('.custom_avatar').attr('src', response.data)
                        }
                    },
                });
            });
        });
    })(jQuery);
</script>
<?php wp_footer(); ?>
</div>
</body>

</html>