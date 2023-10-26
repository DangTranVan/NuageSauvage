<!-- Begin Footer -->
<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-logo">
                <img src="<?php echo esc_html(get_theme_mod('html_footer_header')); ?>" alt="">
            </div>

            <!-- <div class="row  gx-0">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h3>
                            <a href="">
                                Informations de contact
                            </a>
                        </h3>
                        <h4>
                            Abonnez-vous à notre newsletter pour être informé des dernières nouvelles de Nuage Sauvage.
                            <br>
                            <br>
                            Du lundi au samedi : 11h – 19h ; fermé le mercredi et dimanche
                        </h4>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="">
                                    Adresse: 34bis rue Bichat-75010 Paris, France
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Hotline: 01 73 70 05 55
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Email: info@green-bridge.fr
                                </a>
                            </li>
                        </ul>
                        <div class="icons">
                            <a href="" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="fal fa-envelope"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="fas fa-phone-alt"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 pl-lg-0">
                    <div class="footer-item h-100">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNuageSauvage&amp;tabs=timeline&amp;width=340&amp;height=271&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="271" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div> -->
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
                        <!-- <a href="<?php //echo get_field('link_avis', 5); 
                                        ?>" target="_blank" class="link-avis">
                                    <div class="avis-client h-100 d-flex flex-column justify-content-center align-items-center">
                                        <div class="avis-client-data">
                                            <p class="number-rate mb-0">9.8/10</p>
                                            <span class="star-footer">
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Very bad - 0.5 stars"></label>
                                                </fieldset>
                                            </span>
                                            <p class="clients mb-0">409 avis clients</p>
                                        </div>
                                    </div>
                                </a> -->
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
(function($){
	$(document).ready(function(){
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
				beforeSend: function () {},
				success: function (response) {
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