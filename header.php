<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('mb-0'); ?>>
    <div id="wrapper">
        <!-- Begin Header -->
        <!-- <header class="header">
            <div class="header_top">
                <div class="container">
                    <div class="header_top-wrap">
                        <div class="company">
                            <a href="">
                                <span>
                                    <i class="fas fa-envelope pe-2"></i>
                                    <h4 style="vertical-align: inherit;">BẠN LÀ CHUYÊN NGHIỆP?</h4>
                                </span>
                            </a>
                        </div>
                        <div class="contact">
                            <ul class="social list-unstyled mb-0 d-flex">
                                <li>
                                    <a href="">
                                        <img src="https://nuagesauvage.fr/wp-content/plugins/gtranslate/flags/svg/fr.svg" alt="Chinese" style="width: 27px; height: 20px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="https://bitishop.site/yensao/wp-content/plugins/gtranslate/flags/svg/en.svg" alt="English" style="width: 27px; height: 20px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="https://nuagesauvage.fr/wp-content/plugins/gtranslate/flags/svg/de.svg" alt="VietNamese" style="width: 27px; height: 20px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container">
                    <div class="header_bottom-wrap">
                        <div class="logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <img class="logo-img" src="<?php echo esc_html(get_theme_mod('html_logo_header')); ?>" alt="logo">
                            </a>
                        </div>
                        <div class="menu_mobile">
                            <div class="search_bar">
                                <div class="d-flex gap-3">
                                    <form class="form" action="<?php echo get_home_url(); ?>">
                                        <label for="is-search-input-1017">
                                            <input type="text" class="input_search" name="s" placeholder="Tìm kiếm sản phẩm...">
                                            <button class="btn-search" type="submit"><i class="fas fa-search" style=""></i></button>
                                        </label>
                                    </form>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary " style="background: #f4faed !important;" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="far fa-user" style="color: #35461f !important;"></i>
                                        </button>
                                        <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenu2">
                                            <li class="login">
                                                <span class="dropdown-item">
                                                    <ul id="my-custom-menu" class="list-unstyled mb-0">
                                                        <li class="xoo-el-login-tgr menu-item menu-item-type-custom menu-item-object-custom menu-item-769">
                                                            <a onclick="openSearchHero()" title="Connection">Connection
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </li>

                                        </ul>
                                        <div class="header__top-search">
                                            <div id="FullScreenOverlay" class="overlay" style="display: block;">
                                                <div id="outer__content" style="display: block;"></div>
                                                <div class="xoo-el-modal">
                                                    <div class="xoo-el-inmodal">
                                                        <span class="xoo-el-close xoo-el-icon-cancel-circle"></span>
                                                        <div class="xoo-el-wrap">
                                                            <div class="xoo-el-sidebar"></div>
                                                            <div class="xoo-el-srcont" data-scrollbar="true" tabindex="1" style="overflow: hidden; outline: none;">
                                                                <div class="scroll-content">
                                                                    <div class="xoo-el-main">
                                                                        
                                                                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                                                            <li class="nav-item" role="presentation">
                                                                                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                                                                <div data-section="login" class="xoo-el-section xoo-el-active">
                                                                                    <div class="xoo-el-fields">
                                                                                        <div class="xoo-el-notice" style="display: none;"></div>
                                                                                        <form class="xoo-el-action-form xoo-el-form-login">
                                                                                            <div class="xoo-aff-group xoo-el-username_cont">
                                                                                                <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon far fa-user"></span><input type="text" class="xoo-aff-required xoo-aff-text" name="xoo-el-username" placeholder="Nom d'utilisateur / E-mail" value="" autocomplete="email" required="	"></div>
                                                                                            </div>
                                                                                            <div class="xoo-aff-group xoo-el-password_cont">
                                                                                                <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon fas fa-key"></span><input type="password" class="xoo-aff-required xoo-aff-password" name="xoo-el-password" placeholder="Mot de passe" value="" required="	"></div>
                                                                                            </div>
                                                                                            <div class="xoo-aff-group xoo-el-login-btm-fields">
                                                                                                <label class="xoo-el-form-label">
                                                                                                    <input type="checkbox" name="xoo-el-rememberme" value="forever">
                                                                                                    <span>Souviens-toi de moi</span>
                                                                                                </label>
                                                                                                <a class="xoo-el-lostpw-tgr">Mot de passe oublié?</a>
                                                                                            </div>
                                                                                            <input type="hidden" name="_xoo_el_form" value="login">
                                                                                            <button type="submit" class="button xoo-el-action-btn xoo-el-login-btn">S'identifier</button>
                                                                                            <input type="hidden" name="xoo_el_redirect" value="/">
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                                                                                <div data-section="register" class="xoo-el-section">
                                                                                    <div class="xoo-el-fields">
                                                                                        <div class="xoo-el-notice"></div>
                                                                                        <form class="xoo-el-action-form xoo-el-form-register">
                                                                                            <div class="xoo-aff-fields">
                                                                                                <div class="xoo-aff-group xoo-aff-cont-text one xoo-aff-cont-required xoo_el_reg_username_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon fas fa-user-plus"></span><input type="text" class="xoo-aff-required xoo-aff-text" name="xoo_el_reg_username" placeholder="Nom d'utilisateur" value="" maxlength="20" minlength="3" required="	"></div>
                                                                                                </div>
                                                                                                <div class="xoo-aff-group xoo-aff-cont-email one xoo-aff-cont-required xoo_el_reg_email_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon fas fa-at"></span><input type="email" class="xoo-aff-required xoo-aff-email" name="xoo_el_reg_email" placeholder="E-mail" value="" autocomplete="email" required="	"></div>
                                                                                                </div>
                                                                                                <div class="xoo-aff-group xoo-aff-cont-text onehalf xoo-aff-cont-required xoo_el_reg_fname_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon far fa-user"></span><input type="text" class="xoo-aff-required xoo-aff-text" name="xoo_el_reg_fname" placeholder="Prénom" value="" required="	"></div>
                                                                                                </div>
                                                                                                <div class="xoo-aff-group xoo-aff-cont-text onehalf xoo-aff-cont-required xoo_el_reg_lname_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon far fa-user"></span><input type="text" class="xoo-aff-required xoo-aff-text" name="xoo_el_reg_lname" placeholder="Nom de famille" value="" required="	"></div>
                                                                                                </div>
                                                                                                <div class="xoo-aff-group xoo-aff-cont-password one xoo-aff-cont-required xoo_el_reg_pass_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon fas fa-key"></span><input type="password" class="xoo-aff-required xoo-aff-password" name="xoo_el_reg_pass" placeholder="Mot de passe" value="" maxlength="20" minlength="6" autocomplete="new-password" required="	"></div>
                                                                                                </div>
                                                                                                <div class="xoo-aff-group xoo-aff-cont-password one xoo-aff-cont-required xoo_el_reg_pass_again_cont">
                                                                                                    <div class="xoo-aff-input-group"><span class="xoo-aff-input-icon fas fa-key"></span><input type="password" class="xoo-aff-required xoo-aff-password" name="xoo_el_reg_pass_again" placeholder="Confirmez le mot de passe" value="" autocomplete="new-password" required="	"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="hidden" name="_xoo_el_form" value="register">
                                                                                            <button type="submit" class="button btn xoo-el-action-btn xoo-el-register-btn">S'inscrire</button>
                                                                                            <input type="hidden" name="xoo_el_redirect" value="/">
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="scrollbar-track scrollbar-track-x" style="display: none;">
                                                                    <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 480px; transform: translate3d(0px, 0px, 0px);"></div>
                                                                </div>
                                                                <div class="scrollbar-track scrollbar-track-y" style="display: block;">
                                                                    <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 309.208px; transform: translate3d(0px, 0px, 0px);"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <script>
                                                function openSearchHero() {
                                                    document.getElementById("FullScreenOverlay").style.display = "block";
                                                    document.getElementById("outer__content").style.display = "block";
                                                }

                                                function closeSearchHero() {
                                                    document.getElementById("FullScreenOverlay").style.display = "none";
                                                }

                                                (function($) {
                                                    $(document).readyF(function() {
                                                        $("#outer__content").on("click", function(e) {
                                                            $(this).css("display", "none");
                                                            $("#FullScreenOverlay").css("display", "none");
                                                            e.key()
                                                        })
                                                    });
                                                })(jQuery);
                                            </script> 
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <?php global $woocommerce; ?>
                                        <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Voir le panier', 'woothemes'); ?>">
                                            <div class="content">
                                                <i class="fal fa-shopping-bag"></i>
                                                <span class="count-cart">
                                                    <?php
                                                    echo $woocommerce->cart->cart_contents_count;
                                                    ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-underbottom d-none d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <nav>
                                <?php
                                $primarymenu = array(
                                    'theme_location'  => 'primary',
                                    'menu'            => '',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'custom-menu',
                                    'menu_id'         => 'my-custom-menu',
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

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header> -->
        <!-- End Header -->

        <header class="header">
            <div class="header-top d-lg-flex  d-none">
                <div class="container">
                    <div class="header-top-wrap">
                        <div class="company">
                            <a href="<?php echo get_home_url(); ?>/vous-etes-pro">
                                <span><i class="fas fa-envelope pe-2"></i>VOUS ÊTES PRO?</span>
                            </a>
                        </div>
                        <div class="contact">
                            <ul class="social list-unstyled mb-0 d-flex">
                                <li>
                                    <?php echo do_shortcode('[gtranslate]'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-wrap">
                        <div class="logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <img class="logo-img" src="<?php echo esc_html(get_theme_mod('html_logo_header')); ?>" alt="logo">
                            </a>
                        </div>
                        <div class="menu-mobile">
                            <div class="dropdown header-user-mobile me-2">
                                <?php if (is_user_logged_in()) {
                                ?>
                                    <button class="btn btn-secondary " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                    </button>
                                <?php
                                } else {
                                ?>
                                    <button class="btn btn-secondary " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="far fa-user"></i>
                                    </button>
                                <?php
                                }
                                ?>
                                <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenu2">
                                    <?php
                                    if (!is_user_logged_in()) {
                                    ?>
                                        <li class="login">
                                            <span class="dropdown-item">
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
                                            </span>
                                        </li>
                                    <?php
                                    } else {
                                        $current_user = wp_get_current_user();
                                    ?>
                                        <li><a href="<?php echo get_home_url(); ?>/user-account"><span class="dropdown-item"><?php echo $current_user->display_name; ?></span></a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a href="<?php echo wp_logout_url(get_permalink()); ?>"><span class="dropdown-item text-capitalize">Déconnexion</span></a></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                            <div class="cart header-cart-mobile me-2">
                                <?php global $woocommerce; ?>
                                <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Voir le panier', 'woothemes'); ?>">
                                    <div class="content">
                                        <i class="fal fa-shopping-bag"></i>
                                        <span class="count-cart">
                                            <?php
                                            echo $woocommerce->cart->cart_contents_count;
                                            ?>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="search-bar d-xl-block d-none">
                                <div class="d-flex gap-3">
                                    <?php echo do_shortcode('[ivory-search id="421" title="AJAX Search Form"]'); ?>
                                    <div class="dropdown">
                                        <?php if (is_user_logged_in()) {
                                        ?>
                                            <button class="btn btn-secondary " id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="far fa-user" style="font-weight: 600 !important;"></i>
                                            </button>
                                        <?php
                                        } else {
                                        ?>
                                            <button class="btn btn-secondary " style="background: #f4faed !important;" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="far fa-user" style="color: #35461f !important;"></i>
                                            </button>
                                        <?php
                                        }
                                        ?>
                                        <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenu2">
                                            <?php
                                            if (!is_user_logged_in()) {
                                            ?>
                                                <li class="login">
                                                    <span class="dropdown-item">
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
                                                    </span>
                                                </li>
                                            <?php
                                            } else {
                                                $current_user = wp_get_current_user();
                                            ?>
                                                <li><a href="<?php echo get_home_url(); ?>/user-account"><span class="dropdown-item"><?php echo $current_user->display_name; ?></span></a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a href="<?php echo wp_logout_url(get_permalink()); ?>"><span class="dropdown-item">Déconnexion</span></a></li>
                                            <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>

                                    <div class="cart">
                                        <?php global $woocommerce; ?>
                                        <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Voir le panier', 'woothemes'); ?>">
                                            <div class="content">
                                                <i class="fal fa-shopping-bag"></i>
                                                <span class="count-cart">
                                                    <?php
                                                    echo $woocommerce->cart->cart_contents_count;
                                                    ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="headernav">
                                <div class="hbg-menu">
                                    <a id="mobile-menu-button" href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-mobile pb-3">
                        <?php echo do_shortcode('[ivory-search id="421" title="AJAX Search Form"]'); ?>
                    </div>
                </div>
                <div class="header-underbottom d-none d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <nav>
                                    <?php
                                    $primarymenu = array(
                                        'theme_location'  => 'primary',
                                        'menu'            => '',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => 'slimmenu',
                                        'menu_id'         => 'primary-menu',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                        'walker'          => new wp_bootstrap_navwalker(),
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul  id="%1$s" class="d-xl-flex d-none list-unstyled mb-0">%3$s</ul>',
                                        'depth'           => 0,
                                    );
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu($primarymenu);
                                    }
                                    ?>
                                </nav>
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <?php
                    $primary_menu = array(
                        'theme_location'  => 'secondary',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'slimmenu',
                        'menu_id'         => 'secondary-menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="main-nav list-unstyled d-flex d-xl-none m-0">%3$s</ul>',
                        'depth'           => 0,
                    );
                    if (has_nav_menu('secondary')) {
                        wp_nav_menu($primary_menu);
                    }
                    ?>
                </div>
                <div class="header-top d-block d-lg-none bottom-mobile" style="background-color: unset;">
                    <div class="container">
                        <div class="header-top-wrap">

                            <div class="company mb-md-0 mb-2">
                                <span>NUAGE SAUVAGE - Thé des cimes</span>
                            </div>
                            <div class="d-flex">
                                <a href="<?php echo get_home_url(); ?>/vous-etes-pro">
                                    <span class="text-white" style="font-size: 16px;"><i class="fas fa-envelope pe-2 mb-3"></i>VOUS ÊTES PRO?</span>
                                </a>
                                <div class="contact">
                                    <ul class="social list-unstyled mb-0 d-flex">
                                        <li>
                                            <a target="_blank" href="<?php echo esc_html(get_theme_mod('html_facebook')); ?>"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_html(get_theme_mod('html_instagram')); ?>"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_html(get_theme_mod('html_youtube')); ?>"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact">
                                <ul class="social list-unstyled mb-0 d-flex">
                                    <li>
                                        <?php echo do_shortcode('[gtranslate]'); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>