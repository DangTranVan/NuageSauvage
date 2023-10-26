<?php get_header(); ?>
<?php get_template_part('templates/block/introduce', 'banner'); ?>
<?php get_template_part('templates/block/breadcrumb', ''); ?>
<section class="blog">
    <div class="container">
        <div class="blog_top">
            <div class="row">
                <div class="col-md-3 col-12">
                    <?php get_template_part('templates/block/search', ''); ?>
                    <?php get_template_part('templates/block/sidebar', 'categoryBlog'); ?>
                </div>
                <div class="col-md-9 col-12">
                    <div id="sliderBlog" class="slider owl-carousel owl-theme">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                                <div class="item">
                                    <img src="<?php echo $image; ?>" alt="">
                                    <div class="desc">
                                        <a href="<?php the_permalink() ?>">
                                            <h3 class="line-2"><?php the_title() ?></h3>
                                        </a>
                                        <span class="time">
                                            <p class="timeago">
                                                <?php get_template_part('templates/block/get', 'time'); ?></p>
                                            <p class="view">
                                                <?php echo getPostViews(get_the_ID()); ?> lượt xem </p>
                                        </span>
                                    </div>
                                </div>
                            <?php endwhile;
                        else : ?>
                            <p>Không có</p>
                        <?php endif; ?>
                        <!-- Get post mặc định -->

                    </div>
                </div>
            </div>
        </div>
        <div class="blog_bottom auto-padding">
            <div class="title">Actualités</div>
            <div class="row gx-md-4 gy-md-4 gx-2 gy-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mb-5">
                <!-- Get post mặc định -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="col">
                            <div class="item">
                                <div class="item-top">
                                    <div class="thumbnail-wrap">
                                        <a href="<?php the_permalink() ?>">
                                            <img src="<?php echo $image; ?>" alt="image news" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
                                        </a>
                                    </div>
                                </div>
                                <div class="item-bottom">
                                    <a href="<?php the_permalink() ?>">
                                        <h4 class="line-2 mb-3"><?php the_title() ?></h4>
                                    </a>
                                    <p class="line-4"><?php echo strip_tags(get_the_content()) ?></p>
                                    <span class="time">
                                        <p class="timeago">
                                            <?php get_template_part('templates/block/get', 'time'); ?></p>
                                        <p class="view">
                                            <?php echo getPostViews(get_the_ID()); ?> lượt xem </p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p>Indisponible</p>
                <?php endif; ?>
                <!-- Get post mặc định -->
            </div>
            <?php get_template_part('templates/block/pagination', '') ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>