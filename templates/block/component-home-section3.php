<section class="home_section3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12">
                <div class="content">
                    <div class="title-text-box d-block text-start">
                        <?php
                        if (have_rows('section3_home', 2)) {
                            while (have_rows('section3_home', 2)) {
                                the_row();
                                $title = get_sub_field('title');
                                $title2 = get_sub_field('title2');
                                $content = get_sub_field('content');
                                $button = get_sub_field('button');
                            }
                        } else {
                        }
                        ?>
                        <span class="text padding-text-0 padding-txt-49"><?php echo $title ?>
                        </span>
                        <span class="absolute-text padding-txt-70 top-50"><?php echo $title2 ?>
                        </span>
                    </div>
                    <span class="p-2">
                        <p>
                            <?php echo $content ?>
                        </p>
                    </span>
                    <a class="btn-cus-nvt btn__effect--3 d-sm-block d-none" href="<?php echo get_home_url() ?>/danh-muc-san-pham/qua/" data-text="<?php echo $button ?>">
                        <span class="seemore">
                            <?php echo $button ?>
                        </span>

                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="images">
                    <?php
                    if (have_rows('section3_home', 2)) {
                        while (have_rows('section3_home', 2)) {
                            the_row();
                            $image = get_sub_field('image');


                            // Display images within the loop
                            echo '<div class="image-top"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></div>';
                        }
                    } else {
                    }
                    ?>
                    <a class="btn-cus-nvt btn__effect--3 d-block d-sm-none" href="<?php echo get_home_url() ?>/danh-muc-san-pham/qua/" data-text="<?php echo $button ?>">
                        <span class="seemore">
                            <?php echo $button ?>
                        </span>

                    </a>
                    <!-- <div class="image-top">
                        <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/trangchu1-scaled-1.jpeg" alt="Image absolute">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>