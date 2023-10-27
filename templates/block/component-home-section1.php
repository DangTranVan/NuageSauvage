<section class="home_section1">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-12">
                <div class="images">
                    <?php
                    if (have_rows('section1_home', 2)) {
                        while (have_rows('section1_home', 2)) {
                            the_row();
                            $image = get_sub_field('image');
                            $image2 = get_sub_field('image2');
                            $image3 = get_sub_field('image3');
                            $title = get_sub_field('title');
                            $title2 = get_sub_field('title2');
                            $content = get_sub_field('content');
                            $button = get_sub_field('button');

                            // Display images within the loop
                            echo '<div class="bg-item"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></div>';
                            echo '<div class="image-top"><img src="' . $image2['url'] . '" alt="Image absolute" /></div>';
                            echo '<div class="image-bottom"><img src="' . $image3['url'] . '" alt="Image absolute" /></div>';
                        }
                    } else {
                    }
                    ?>
                </div>
            </div>
            <div class="col-xl-4 col-12 backg-white">
                <div class="content">
                    <div class="title-text-box d-block text-start">
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
                    <a class="btn-cus-nvt btn__effect--3" href="<?php echo get_home_url() ?>/tra-identi-cua-chung-toi" data-text="<?php echo $button ?>">

                        <span class="seemore">
                            <?php echo $button ?>
                        </span>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>