<?php get_header(); ?>
<?php if (is_user_logged_in()) {
?>
    <main class="user auto-padding">
        <div class="container">
            <h1 class="text-center pb-5">Votre compte</h1>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="menu-account">
                        <div class="col-12">
                            <div class="picture-avt">
                                <div class="row">
                                    <figure class="avatar-menu">
                                        <?php
                                        // Ensure user is logged in
                                        if (is_user_logged_in()) {
                                            // Display current logged in user's avatar (includes <img> tag)
                                            echo get_avatar(get_current_user_id(), 96);
                                        }
                                        ?>
                                        <a class="fw-light fst-italic" href="<?php echo get_home_url() ?>/avatar/"><i class="far fa-edit"></i>Éditer</a>
                                    </figure>
                                    <h4 class="text-center notranslate">
                                        <?php global $current_user;
                                        wp_get_current_user(); ?>
                                        <?php if (is_user_logged_in()) {
                                            // echo  "<span class=\"fs-13 ms-2\">$current_user->user_firstname</span>";
                                            print_r($current_user->display_name);
                                        } else {
                                            echo "<span>Vous n'êtes pas connecté!</span>";
                                        } ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_home_url() ?>/user-account/" class="the-button call-to-button">
                                    <i class="fas fa-home"></i><span class="button-text">Tableau de bord</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>orders/" class="the-button call-to-button">
                                    <i class="fas fa-shopping-basket"></i><span class="button-text">Ordres</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_home_url() ?>/coupon/" class="the-button call-to-button">
                                    <i class="fas fa-ticket"></i><span class="button-text">Coupon</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <?php global $woocommerce; ?>
                                <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="the-button call-to-button">
                                    <i class="fas fa-shopping-cart"></i><span class="button-text">Chariot</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>edit-account/" class="the-button call-to-button">
                                    <i class="fas fa-user-edit"></i><span class="button-text">Modifier le compte</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>edit-address/" class="the-button call-to-button">
                                    <i class="fas fa-address-card"></i><span class="button-text">Modifier l'adresse</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>payment-methods/" class="the-button call-to-button">
                                    <i class="fas fa-money-check"></i><span class="button-text">méthodes de payement</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="button">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>customer-logout/" class="the-button call-to-button">
                                    <i class="fas fa-sign-out"></i><span class="button-text">se déconnecter</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8 mx-5 form-contol-cus hidden__mobile" style="box-shadow: 0 0 8px 0 #00000036;border-radius: 25px; margin-left: 2rem !important;">
                    <div class="title_profil">
                        <h3>Mon profil</h3>
                        <h4>Gérer les informations de profil pour la sécurité du compte</h4>
                    </div>
                    <div class="form_boder">
                        <?php
                        defined('ABSPATH') || exit;

                        do_action('woocommerce_before_edit_account_form'); ?>


                        <!-- avatar_update -->
                        <main id="site-content" class="col-12 col-lg-5">
                            <div class="section-inner ">

                                <?php
                                if (!is_user_logged_in()) {

                                    echo 'Bạn chưa đăng nhập. Vui lòng <a href="/dang-nhap">đăng nhập</a>.';
                                } else {

                                    $current_user = wp_get_current_user();

                                ?>
                                    <hr>
                                    <form id="hk-change-avatar">
                                        <?php wp_nonce_field('form_change_avatar'); ?>

                                        <p id="hk-success" style="display:none">Cập nhập thành công</p>
                                        <!-- <div class="form_img_bt">
                                            <p class="border_img">
                                                <?php
                                                $user = wp_get_current_user();
                                                $custom_avatar = get_user_meta($user->ID, 'custom_avatar', true);
                                                if ($custom_avatar) {
                                                    echo '<img id ="blah" src="' . $custom_avatar . '" class="custom_avatar"/>';
                                                } else {
                                                    echo '<img id ="blah" src="' . get_avatar_url($user->ID) . '" class="custom_avatar />';
                                                }
                                                ?>
                                            </p>
                                            <div class="submit_update_avatar">
                                                <p>
                                                    <input type="file" id="upload_avatar " accept="image/*" required>
                                                </p>
                                                <p>
                                                    <button type="submit" class="btn-submit notranslate">Submit</button>
                                                </p>
                                            </div>
                                        </div> -->
                                        <div class="form_img_bt">
                                            <p class="border_img">
                                                <?php
                                                $user = wp_get_current_user();
                                                $custom_avatar = get_user_meta($user->ID, 'custom_avatar', true);
                                                if ($custom_avatar) {
                                                    echo '<img id="blah" src="' . $custom_avatar . '" class="custom_avatar"/>';
                                                } else {
                                                    echo '<img id="blah" src="' . get_avatar_url($user->ID) . '" class="custom_avatar" />';
                                                }
                                                ?>
                                            </p>
                                            <div class="submit_update_avatar">
                                                <p>
                                                    <input type="file" id="upload_avatar" accept="image/*" required>
                                                </p>
                                                <p>
                                                    <button type="submit" class="btn-submit notranslate">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>

                                <?php } ?>

                            </div>
                        </main>

                        <form class="woocommerce-EditAccountForm edit-account col-12 col-lg-7" action="" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>

                            <?php do_action('woocommerce_edit_account_form_start'); ?>


                            <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                            <div class="row align-items-center">
                                <div class="col-4"><label style="color: #000;font-weight: 600;" for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?>&nbsp;<span class="required form-label">*</span></label></div>
                                <div class="col-8"><input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control-lg" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr($current_user->first_name); ?>" /></div>
                            </div>
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <label style="color: #000;font-weight: 600;" for="account_last_name"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span class="required form-label">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control-lg" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr($current_user->last_name); ?>" />
                                </div>
                            </div>
                            </p>
                            <div class="clear"></div>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <label style="color: #000;font-weight: 600;" for="account_display_name"><?php esc_html_e('Display name', 'woocommerce'); ?>&nbsp;<span class="required form-label">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control-lg" name="account_display_name" id="account_display_name" value="<?php echo esc_attr($current_user->display_name); ?>" />
                                </div>
                            </div>
                            </p>
                            <div class="clear"></div>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <label style="color: #000;font-weight: 600;" for="account_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required form-label">*</span></label>
                                </div>
                                <div class="col-8">
                                    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text form-control-lg" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr($current_user->user_email); ?>" />
                                </div>
                            </div>
                            </p>

                            <fieldset>
                                <legend><?php esc_html_e('Password change', 'woocommerce'); ?></legend>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <label style="color: #000;font-weight: 600;" for="password_current"><?php esc_html_e('Current password ', 'woocommerce'); ?></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control-lg" name="password_current" id="password_current" autocomplete="off" />
                                    </div>
                                </div>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <label style="color: #000;font-weight: 600;" for="password_1"><?php esc_html_e('New password ', 'woocommerce'); ?></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control-lg" name="password_1" id="password_1" autocomplete="off" />
                                    </div>
                                </div>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <label style="color: #000;font-weight: 600;" for="password_2"><?php esc_html_e('Confirm new password', 'woocommerce'); ?></label>
                                    </div>
                                    <div class="col-8">
                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control-lg" name="password_2" id="password_2" autocomplete="off" />
                                    </div>
                                </div>
                                </p>
                            </fieldset>
                            <div class="clear"></div>

                            <?php do_action('woocommerce_edit_account_form'); ?>

                            <p class="right_button">
                                <?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>
                                <button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>"><?php esc_html_e('Save changes', 'woocommerce'); ?></button>
                                <input type="hidden" name="action" value="save_account_details" />
                            </p>

                            <?php do_action('woocommerce_edit_account_form_end'); ?>
                        </form>

                        <?php do_action('woocommerce_after_edit_account_form'); ?>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </main>
<?php
} else {
?>
    <div class="container text-center my-5" style="padding-top: 3%;">
        <div class="mb-3" style="color: #134d09; font-weight: 600; font-size: 24px;">Vous n'êtes pas connecté!</div>
        <div class="btnss" style="border: 2px solid;">
            <?php
            $primarymenu = array(
                'theme_location'  => 'max_mega_menu_1',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'custom-menu',
                'menu_id'         => 'max_mega_menu_1',
                'echo'            => true,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker(),
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul  id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                'depth'           => 0,
            );
            if (has_nav_menu('primary')) {
                wp_nav_menu($primarymenu);
            }
            ?>
        </div>
    </div>
<?php
} ?>

<?php get_footer(); ?>

<script>
    // Get the file input element by its ID
    const upload_avatar = document.getElementById("upload_avatar");
    const blah = document.getElementById("blah");

    // Add an event listener to the file input
    upload_avatar.addEventListener("change", function(evt) {
        const file = this.files[0]; // Get the selected file

        if (file) {
            // Create a URL for the selected file and set it as the image source
            blah.src = URL.createObjectURL(file);
        }
    });

    var elements = document.querySelectorAll('.active');
    elements.forEach(function(element) {
        element.classList.remove('active');
    });
    document.getElementById("user").classList.add('active');
</script>