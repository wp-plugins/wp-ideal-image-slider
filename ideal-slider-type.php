<?php
define('CPT_NAME', "Slider Images");
define('CPT_SINGLE', "Slider Image");
define('CPT_TYPE', "ideal-slider");

add_action('init', 'wpideal_register');

function wpideal_register() {  
    $args = array(  
        'label' => __(CPT_NAME),  
        'singular_label' => __(CPT_SINGLE),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'thumbnail')  
       );  
   
    register_post_type(CPT_TYPE , $args );  
}  


// Add column in admin list view to show featured image
// http://wp.tutsplus.com/tutorials/creative-coding/add-a-custom-column-in-posts-and-custom-post-types-admin-screen/
add_image_size('featured_preview', 100, 55, true);

// GET FEATURED IMAGE
function wpideal_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}

// ADD NEW COLUMN
function wpideal_columns_head($defaults) {
    $defaults['featured_image'] = 'Slider Image';
    return $defaults;
}
 
// SHOW THE FEATURED IMAGE
function wpideal_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = wpideal_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
    }
}

add_filter('manage_posts_columns', 'wpideal_columns_head');
add_action('manage_posts_custom_column', 'wpideal_columns_content', 10, 2);
 
?>
