<?php get_header(); ?>

<main class="tintuc tintuc-detail" style="margin-bottom: 2rem;">

    <section class="tintuc-banner position-relative">
        <h1 class="text-white text-center text-uppercase position-absolute fw-bold"><?php the_title(); ?></h1>
    </section>
    <h1 style="    text-align: center;
    padding: 50px 0;">PAIEMENT</h1>
    <section class="tintuc-main position-relative">
        <div class="tintuc-breadcrumb">
            <div class="container">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="tintuc-main-wrap bg-white">
                <div class="tintuc-content">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tintuc-main-detail mb-0">
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>