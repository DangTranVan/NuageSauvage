<div class="hot-news mb-4 w-100">
    <div class="title">Catégorie</div>
    <div class="content">
        <?php
        $current_term = get_queried_object();
        $current_term_slug = $current_term->slug;
        $args = array(
            'type'      => 'post',
            'number'    => 10,
            'parent'    => 0
        );
        $categories = get_categories($args);
        foreach ($categories as $category) { ?>
            <a href="<?php echo get_home_url(); ?><?php echo  "/" . 'category' . "/" . $category->slug; ?>">
                <div class="item-category mb-2 <?php echo ($current_term_slug == $category->slug) ? "active-bg" : ""; ?>">
                    <p class=" mb-0 line-1 fs-5 <?php echo ($current_term_slug == $category->slug) ? "active" : ""; ?>"><span><?php echo $category->name; ?></span></p>
                </div>
            </a>
        <?php } ?>
    </div>
</div>