<?php

require get_template_directory() . '/inc/init.php';

function add_favicon()
{
    echo '<link rel="shortcut icon" type="image/png" href="' . get_theme_mod('html_favicon_icon') . '" />';
}
add_action('wp_head', 'add_favicon');

function the_breadcrumb()
{

    $sep = ' &rsaquo; ';

    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        //   bloginfo('name');
        echo $home = 'Accueil';
        echo '</a>' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single()) {
            the_category(' &nbsp;&nbsp;|&nbsp;&nbsp;');
        } elseif (is_archive() || is_single()) {
            if (is_day()) {
                printf(__('%s', 'text_domain'), get_the_date());
            } elseif (is_month()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
            } elseif (is_year()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
            } elseif (is_tax()) {
                $get = get_queried_object();
                $taxonomy = $get->taxonomy;
                $temp;

                if ($taxonomy == 'danh-muc-dich-vu') {
                    $temp = 'Dịch vụ / ';
                    echo '<a href="#" rel="nofollow">' . $temp . '</a>';
                    echo '<a href="#" rel="nofollow">' . ucfirst(strtolower($get->name)) . '</a>';
                } else if ($taxonomy == 'danh-muc-du-an') {
                    $temp = 'Dự án / ';
                    echo '<a href="#" rel="nofollow">' . $temp . '</a>';
                    echo '<a href="#" rel="nofollow">' . ucfirst(strtolower($get->name)) . '</a>';
                } else if ($taxonomy == 'danh-muc-tin-tuc') {
                    $temp = 'Tin tức ';
                    echo '<a href="#" rel="nofollow">' . ucfirst(strtolower($temp)) . '</a>';
                } else if ($taxonomy == 'product_cat') {
                    if ($get->parent > 0) {
                        $tax_parent = get_term($get->parent);
                        $term_parent_link = get_term_link($get->parent);
                        echo '<a href="' . $term_parent_link . '" rel="nofollow">' . ucfirst(strtolower($tax_parent->name)) . '</a>';
                        echo $sep;
                    }
                    echo '<a href="#" rel="nofollow">' . ucfirst(strtolower($get->name)) . '</a>';
                }
            } else {
                // _e('Blog Archives', 'text_domain');
                echo '<a href="#" rel="nofollow">Sản phẩm</a>';
            }
        }
        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            $flag = 0;
            $taxonomy_name;
            $current = get_queried_object();
            $array;
            if ($current->post_type == 'gioi-thieu') {
                $term =  wp_get_post_terms(get_the_ID(), 'danh-muc-gioi-thieu');
                $flag = 0;
                echo '<a href="#" rel="nofollow">Giới thiệu</a>';
            } elseif ($current->post_type == 'du-an') {
                $term =  wp_get_post_terms(get_the_ID(), 'danh-muc-du-an');
                $flag = 0;
                echo '<a href="#" rel="nofollow">Dự án</a>';
            }
            // elseif (wp_get_post_terms(get_the_ID(), 'danh-muc-tin-tuc') != null) {
            //     $term =  wp_get_post_terms(get_the_ID(), 'danh-muc-tin-tuc');
            //     $flag = 1;
            //     $taxonomy_name = "";
            //     echo '<a href="#" rel="nofollow">Tin tức / </a>';
            // } 
            elseif ($current->post_type == 'dich-vu') {
                $term =  wp_get_post_terms(get_the_ID(), 'danh-muc-dich-vu');
                $flag = 0;
                echo '<a href="#" rel="nofollow">Dịch vụ</a>';
            } elseif (wp_get_post_terms(get_the_ID(), 'product_cat') != null) {
                $term =  wp_get_post_terms(get_the_ID(), 'product_cat');
                $array = array_shift($term);


                $flag = 1;
                $taxonomy_name = 'product';
            }

            if ($flag) {
                // $array = array_shift($term);
                $term_link = get_term_link($array->term_id);

                $term_parent_id = $array->parent;
                $tax_parent = get_term($term_parent_id);
                $term_parent_link = get_term_link($term_parent_id);

                $string = $taxonomy_name . $array->name;
                $string = strtolower($string);

                if ($taxonomy_name == 'product') {
                    // echo '<a href="'. site_url('/cua-hang').'">Sản phẩm</a>';  
                    echo '<a href="' . $term_parent_link . '">' . ucfirst(strtolower($tax_parent->name)) . '</a>';
                } else echo '<a href="' . $term_link . '">' . ucfirst(strtolower($string)) . '</a>';
            }
            echo $sep;
            echo '<a href="#" rel="nofollow">' . ucfirst(get_the_title()) . '</a>';
        }

        // If the current page is a static page, show its title.
        if (is_page()) {
            echo '<a href="#" rel="nofollow">' . ucfirst(get_the_title()) . '</a>';
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        if (is_search()) {
            echo '<a href="#" rel="nofollow">' . 'Tìm kiếm' . '</a>';
        }

        echo '</div>';
    }
}


function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        update_post_meta($postID, $count_key, $count);
    }
    return $count;
}

function updatePostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
    return $count;
}
// function getPostViews($postID)
// { // hàm này dùng để lấy số người đã xem qua bài viết
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if ($count == '') { // Nếu như lượt xem không có
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '10');
//         return "10"; // giá trị trả về bằng 0
//     }
//     return $count; // Trả về giá trị lượt xem
// }
// function setPostViews($postID)
// { // hàm này dùng để set và update số lượt người xem bài viết.
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if ($count == '') {
//         $count = 0;
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//     } else {
//         $count++; // cộng đồn view
//         update_post_meta($postID, $count_key, $count); // update count
//     }
// }


function toFriendlyTime($timeDifference)
{
    $seconds = $timeDifference;
    $minutes = floor($seconds / 60);
    $hours = floor($minutes / 60);
    $days = floor($hours / 24);
    $months = floor($days / 30);
    $years = floor($months / 12);

    if ($years > 0) {
        return $years . ' years ago';
    } elseif ($months > 0) {
        return $months . ' months ago';
    } elseif ($days > 0) {
        return $days . ' days ago';
    } elseif ($hours > 0) {
        return $hours . ' hours ago';
    } elseif ($minutes > 0) {
        return $minutes . ' minutes ago';
    } else {
        return $seconds . ' seconds ago';
    }
}
// New menu
function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu');



/////upload-image
function hk_user_upload_image($file = array())
{
    require_once(ABSPATH . 'wp-admin/includes/admin.php');
    $file_return = wp_handle_upload($file, array('test_form' => false));

    if (isset($file_return['error']) || isset($file_return['upload_error_handler'])) {
        return false;
    } else {
        $filename = $file_return['file'];
        $attachment = array(
            'post_mime_type' => $file_return['type'],
            'post_title'     => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content'   => '',
            'post_status'    => 'inherit',
            'guid'           => $file_return['url']
        );
        $attachment_id = wp_insert_attachment($attachment, $file_return['url']);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
        wp_update_attachment_metadata($attachment_id, $attachment_data);
        if (0 < intval($attachment_id)) {
            return array(
                'url' => $file_return['url'],
                'id'  => $attachment_id
            );
        }
    }
    return false;
}


add_action('wp_ajax_change_user_avatar', 'hk_change_user_avatar');
function hk_change_user_avatar()
{
    $file_upload = $_FILES['upload_avatar'];
    $user_id     = get_current_user_id();
    $avatar_data = array();

    if (isset($file_upload) && $file_upload) {
        $avatar_data = hk_user_upload_image($file_upload);

        if ($avatar_data) {

            $custom_avatar = get_user_meta($user_id, 'custom_avatar', true);
            if ($custom_avatar) {
                update_user_meta($user_id, 'custom_avatar', $avatar_data['url']);
            } else {
                add_user_meta($user_id, 'custom_avatar', $avatar_data['url']);
            }

            wp_send_json_success($avatar_data['url'], 200);
        }
    }

    die();
}
add_filter("get_avatar", "hk_custom_user_avatar", 1, 5);
function hk_custom_user_avatar($avatar, $id_or_email, $size, $alt, $args)
{
    $user       = false;
    $user_id    = '';
    $avatar_url = '';

    if (is_numeric($id_or_email)) {

        $id   = (int) $id_or_email;
        $user = get_user_by('id', $id);
    } elseif (is_object($id_or_email)) {

        if (!empty($id_or_email->user_id)) {
            $id   = (int) $id_or_email->user_id;
            $user = get_user_by('id', $id);
        }
    } else {
        $user = get_user_by('email', $id_or_email);
    }

    if ($user && is_object($user)) {
        $user_id     = $user->data->ID;
        $avatar_url  = get_user_meta($user_id, 'custom_avatar', true);
        $replace_img = get_avatar_url($user_id);
        $output_img  = '';

        if (isset($avatar_url) && $avatar_url) {
            $output_img = $avatar_url;
        } else {
            $output_img = $replace_img;
        }

        $avatar = '<img class="avatar" src="' . $output_img . '" width="' . $size . '" height="' . $size . '" />';
    }

    return $avatar;
}
