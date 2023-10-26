<section class="home_section5">
    <div class="title-top">
        <span class="title-item">
            <h1 style="vertical-align: inherit;">Nos clients parlent de nous</h1>
        </span>
        <span class="top-item">
            <h1 style="vertical-align: inherit;">Nos client</h1>
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
            <!-- <div class="feedback_item2">
                <div class="feedback_top">
                    <div class="feedback_bottom">
                        <div class="feedback_bottom_left">
                            <div class="feedback_bottom_img">
                                <img class="bottom_img" src="https://s3-alpha-sig.figma.com/img/0c6b/1c84/f0be088246900c93bfb7d820108ffe93?Expires=1697414400&Signature=UPBmGSLTJZuaBG93yHBHKTqLdFh3gY8vgca0P-fdXI3QEF00g1eiWSCCW53t4sa1nIfrtlsmrAWWy-zNCzhmzr1Cj-wACteehU5aU04RsE8WHMUBHVu-Hj69p0Jnj1di8UX5B0VOndx3QruhOrQ4oQ-8UXk40slVulHH-2S2aMtz1u49crfM-CmW9FDWRYSqBbwY~S4cP9qItsPPR-UPGBUWVfZo1da1z2tkbMTvZTjsbmD4iAQUbDVnpckXWON0y-W9FQNf0jjcGloiO59LQ6C3aXQCgATyQVHvxv~HnBMcDs9fKn8I4ttr7x05471d-V2Hip84HBm~3DQj-rVaWA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
                            </div>
                            <div class="feedback_bottom_detail">
                                <h5>Mr Tony</h5>
                                <h6>CTO Biti Hightech</h6>
                            </div>
                        </div>
                    </div>
                    <img class="icon" src="https://nuagesauvage.fr/wp-content/themes/NUAGE-SAUVAGE/assets/images/nvt/quote.png" alt="quote" class="quote">
                </div>
                <div class="feedback_center">
                    <p>
                        “A conseiller à tout amateur de thé noir y compris aux débutants ou à ceux ayant eu de mauvaises expériences avec des thés vietnamiens.”
                    </p>
                </div>
            </div>
            <div class="feedback_item2">
                <div class="feedback_top">
                    <div class="feedback_bottom">
                        <div class="feedback_bottom_left">
                            <div class="feedback_bottom_img">
                                <img class="bottom_img" src="https://s3-alpha-sig.figma.com/img/806c/1733/fefcbb93d0f0e840bfb51006411230c2?Expires=1697414400&Signature=IlllXbqQ1gCibetNjuZG5L9e99za~ZXvleOU9~8jITmzlL~KKy~AGySI0O0dDvs7rYK-69XsaCnb3JHoWyiMjwiQTz95mW93nm2nZc7tLKswc8p~zuZ03iAueUCtPL7hdQQXf2l9To~3u0JSWIOSH-CEoEXxYQqRpEB-3pPeYsy1MJiPSt3crPoaon8UDj1w61GHwSTgkHmSxDghKbbLRGkQ2ObubCTPHisUmj2fgVxpr11JoToz4Z4DFjBPqZKIR08grwDqBCUKNDS-YXt~oMlhDK0VuHQF~aPTReOJOdTAa-~24WPTJXafwfQbJ4OV9P6~RQXxQ24r5MTeaBaIpw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
                            </div>
                            <div class="feedback_bottom_detail">
                                <h5>Mr Lucas</h5>
                                <h6>PM Biti Hightech</h6>
                            </div>
                        </div>
                    </div>
                    <img class="icon" src="https://nuagesauvage.fr/wp-content/themes/NUAGE-SAUVAGE/assets/images/nvt/quote.png" alt="quote" class="quote">
                </div>
                <div class="feedback_center">
                    <p>
                        “Grand succès le thé jaune. j'en ai serva une
                        cliente après son massage ce week-end elle
                        est repartie avec la carte de Nuage Sauvage.”
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</section>

