<section class="home-banner">
    <div id="banner-carousel" class="owl-carousel owl-theme">
        <?php
        $images = get_field('image_banner', 2);
        $size = 'full';
        if ($images) : ?>
            <?php foreach ($images as $image) :
            ?>
                <div class="item">
                    <?php echo wp_get_attachment_image($image, $size); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- <div class="item">
            <img src="https://nuagesauvage.fr/wp-content/uploads/2023/09/popup-web-2.jpg" alt="">
        </div>
        <div class="item">
            <img src="https://nuagesauvage.fr/wp-content/uploads/2023/09/popup-web-3.jpg" alt="">
        </div> -->
    </div>
    <div class="nvt-banner-content">
        <?php
        // Check if the repeater field has rows.
        if (have_rows('content_banner', 2)) {
            // Loop through the rows.
            while (have_rows('content_banner', 2)) {
                // Set up the current row.
                the_row();
                // Get the 'img' sub-field value.
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $button = get_sub_field('button');

                // // Do something with the $img value, e.g., display it.
                // echo '<img src="' . $img['url'] . '" alt="' . $img['alt'] . '" />';
            }
        } else {
        }
        ?>
        <h2 class="title user-select-none">
            <?php echo $title ?>
        </h2>
        <p class="desc user-select-none">
            <?php echo $content ?>
        </p>
        <a class="btn btn__effect--2" data-text="Découvre la boutique" href="<?php echo get_home_url() ?>/danh-muc-san-pham/dieu-tri/">
            <span><?php echo $button ?></span>
        </a>
    </div>
</section>