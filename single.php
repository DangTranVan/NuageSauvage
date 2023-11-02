<?php get_header(); ?>
<?php get_template_part('templates/block/introduce', 'banner'); ?>
<?php get_template_part('templates/block/breadcrumb', ''); ?>
<section class="news-single">
    <div class="container">
        <div class="news">
            <div class="row flex-md-row  flex-column-reverse">
                <div class="col-md-3 col-12">
                    <div class="hot-news mb-4 w-100">
                        <div class="title">NOUVEAUX ARTICLES</div>
                        <div class="content">
                            <?php
                            $args = array(
                                'post_type'              => 'post',
                                'nopaging'               => false,
                                'posts_per_page'         => '5',
                                'order'                  => 'DESC',
                                'orderby'                => 'ID',
                            );

                            $query = new WP_Query($args);
                            ?>
                            <!-- Get post mặt định -->
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="<?php echo $image; ?>" alt="Image hot news" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
                                            </div>
                                            <div class="col-9 d-flex align-items-center">
                                                <a href="<?php the_permalink() ?>">
                                                    <p class="line-2">
                                                        <?php the_title(); ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            else : ?>
                                <p>Không có</p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                            <!-- Get post mặt định -->

                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    <div class="container-news">
                        <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="item">
                            <?php updatePostViews(get_the_ID()); ?>
                            <img src="<?php echo $image; ?>" alt="">


                            <!-- <div class="meta-data">
                                <div class="left">
                                    <div class="date">
                                        <i class="fas fa-calendar-alt"></i> <?php echo get_the_date("d/m/Y") ?>
                                    </div>
                                </div>
                            </div> -->


                            <div class="date mt-4 mb-3">
                                <i class="fal fa-clock"></i>
                                <?php echo get_the_date() ?>
                            </div>
                            <span class="time mt-3 mb-3 d-none">
                                <p class="timeago">
                                    <?php get_template_part('templates/block/get', 'time'); ?></p>
                                <p class="view">
                                    <?php echo getPostViews(get_the_ID()); ?> lượt xem </p>
                            </span>
                            <h3 class="entry-title">
                                <?php the_title(); ?>
                            </h3>
                            <p><?php the_content(); ?></p>


                            <!-- <div class="entry-content">
                                <?php the_content(); ?>
                            </div> -->
                            <!-- <?php
                                    $post_tags = get_the_tags();
                                    if ($post_tags) :
                                    ?>
                                <div class="tags d-flex flex-wrap align-items-center">
                                    <div class="label">
                                        <i class="fas fa-tags"></i> TAGS:
                                    </div>
                                    <div class="tag-list">
                                        <?php foreach ($post_tags as $post_tag) : ?>
                                            <a class="tag" href="<?php echo get_tag_link($post_tag->term_id); ?>"><?php echo $post_tag->name; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?> -->


                        </div>
                        <div class="content_related">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type'      => 'post',
                                // 'cat'            => 1,
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

