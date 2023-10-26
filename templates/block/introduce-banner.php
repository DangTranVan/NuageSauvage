<?php
$term = get_queried_object();
$term_name = $term->post_title;

if ($term->parent > 0) {
    $tax_parent = get_term($term->parent);
    $term_name = $tax_parent->name;
} else {
    if ($term_name == null) {
        $term_name = $term->taxonomy;
        if ($term_name == 'danh-muc-tin-tuc') $term_name = 'tin tức';
        else if ($term_name == 'danh-muc-du-an') $term_name = 'dự án';
        else if ($term_name == 'danh-muc-dich-vu') $term_name = 'dịch vụ';
        else if ($term_name == 'category') $term_name = 'blog';
    } else {
        if ($term->post_type != 'page') {
            $term_name = $term->post_type;
            if ($term_name == 'tin-tuc') $term_name = 'tin tức';
            else if ($term_name == 'du-an') $term_name = 'dự án';
            else if ($term_name == 'dich-vu') $term_name = 'dịch vụ';
            else if ($term_name == 'post') $term_name = 'blog';
            else if ($term_name == 'product') $term_name = 'ATELIER';
        }
    }
}


?>

<section class="introduce__banner">
    <?php
    $image = get_field('banner',5)
    ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
    <div class="overlay"></div>
    <div class="path">
        <h2 class="breadcrumb"><span class="notranslate"> NUAGE SAUVAGE /</span> <span class="ms-2"><?php echo $term_name; ?></span></h2>
    </div>
</section>