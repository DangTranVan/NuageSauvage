<?php get_header(); ?>

<main id="site-content">
    <div class="section-avatar-inner">


        <?php
        if (!is_user_logged_in()) {

            echo 'Bạn chưa đăng nhập. Vui lòng <a href="/dang-nhap">đăng nhập</a>.';
        } else {

            $current_user = wp_get_current_user();

        ?>
            <h1 class="text-center mb-4 mt-4">Changez votre avatar</h1>
            <hr>
            <div class="container">
                <form id="hk-change-avatar">
                    <?php wp_nonce_field('form_change_avatar'); ?>


                    <p class="avatar_update">
                        <?php
                        $user = wp_get_current_user();
                        $custom_avatar = get_user_meta($user->ID, 'custom_avatar', true);
                        if ($custom_avatar) {
                            echo '<img src="' . $custom_avatar . '" class="custom_avatar" />';
                        } else {
                            echo '<img src="' . get_avatar_url($user->ID) . '" class="custom_avatar" />';
                        }
                        ?>
                    </p>
                    <div class="button-for-avatar">
                        <p>
                        <div class="form-input">
                            <div class="preview">
                                <?php
                                $user = wp_get_current_user();
                                $custom_avatar = get_user_meta($user->ID, 'custom_avatar', true);
                                if ($custom_avatar) {
                                    echo '<img id="img-preview" src="' . $custom_avatar . '" />';
                                } else {
                                    echo '<img id="img-preview" src="' . get_avatar_url($user->ID) . '"/>';
                                }
                                ?>
                                <label for="upload_avatar" class="custom-file-upload" id="upload_avatar-label">
                                    <i class="far fa-file-import"></i> Télécharger une Image
                                </label>
                                <input name="uploadDocument" type="file" id="upload_avatar" accept="image/*" style="display: none;" onchange="showPreview(event);" />
                            </div>
                        </div>
                        </p>
                        <p class="text-center">
                            <button class="btn-submit notranslate" type="submit">Confirmer</button>
                        </p>
                        <p id="hk-success" style="display:none">Update successful</p>
                    </div>
                </form>
            </div>


        <?php } ?>
    </div>
    <div class="back-dashboard text-center fw-bold fs-5">
        <a href="<?php echo get_home_url() ?>/user-account/"><i class="fas fa-caret-circle-left"></i>&nbsp;Retour</a>
    </div>
</main>

<?php get_footer(); ?>