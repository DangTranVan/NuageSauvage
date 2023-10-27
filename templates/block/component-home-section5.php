<section class="home_section5">
    <div class="title-top">
        <span class="title-item">Nos clients parlent de nous
        </span>
        <span class="top-item">Nos client
        </span>
    </div>
    <div class="container">
        <div id="feedback_owl_tow" class="owl-carousel owl-theme">
            <?php if (have_rows('section5_home', 2)) : ?>
                <?php while (have_rows('section5_home', 2)) : the_row();
                    $image_user  = get_sub_field('image');
                    $name = get_sub_field('name');
                    $chuc_vu = get_sub_field('chuc_vu');
                    $icon = get_sub_field('images');
                    $content = get_sub_field('content');
                ?>
                    <div class="feedback_item2">
                        <div class="feedback_top">
                            <div class="feedback_bottom">
                                <div class="feedback_bottom_left">
                                    <div class="feedback_bottom_img">
                                        <img class="bottom_img" src="<?php echo $image_user['url']; ?>" alt="">
                                    </div>
                                    <div class="feedback_bottom_detail">
                                        <h5><?php echo $name; ?></h5>
                                        <h6><?php echo $chuc_vu; ?></h6>
                                    </div>
                                </div>
                            </div>
                            <img class="icon" src="<?php echo $icon['url']; ?>" alt="quote" class="quote">
                        </div>
                        <div class="feedback_center">
                            <p>
                                <?php echo $content; ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

