<?php
/*
    Plugin Name: WP Ideal Image Slider
    Description: Responsive Simple WordPress Slider Plugin of Ideal Image Slider is written in bxslider.js and has no dependancies.Thanks for <a href="http://bxslider.com/">Bxslider</a> to give extremely best Solution.
    Author: Umakant Sonwani
    Version: 1.0
    Author URI: http://dataman.in
	License: GPLv2
*/

define('WPIDEAL_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('WPIDEAL_NAME', 'WP Ideal Image Slider Plugin');
define ('WPIDEAL_VERSION', '1.0');

require_once('ideal-slider-type.php');

function wpideal_register_scripts() {
    // register  
    wp_register_script('idealimage_dmwpslider', plugins_url('/js/jquery.dmwpslider.min.js', __FILE__));
   
     // enqueue
     wp_enqueue_script('idealimage_dmwpslider');
}
 
function wpideal_register_styles() {
    // register
    wp_register_style('idealimage_dmwpslidercss', plugins_url('/lib/jquery.dmwpslider.css', __FILE__));
    // enqueue
    wp_enqueue_style('idealimage_dmwpslidercss');
}

add_action('wp_head', 'wpideal_register_scripts');
add_action('wp_head', 'wpideal_register_styles');

?>
<?php function wpideal_style(){ ?>
	<style>
		td.featured_image.column-featured_image img {
			width: 280px;
		}
	</style>
<?php } add_action('admin_print_styles', 'wpideal_style'); ?>

<?php function wpideal_script(){ ?>
	
		<script type='text/javascript'>
			
			jQuery(document).ready(function(){
				  jQuery('.bxslider').bxSlider({
					  mode: 'fade',
					  controls: true,
					  responsive: true,
					  captions: true
				});
			});
		</script> 
 
<?php } add_action('wp_footer', 'wpideal_script');?><?php

function wpideal_get_slider(){
	
$slider= '<div class="contain">
            <ul class="bxslider">';
    
    $wpideal_query = 'post_type=ideal-slider';
    
    query_posts($wpideal_query);
             
    if (have_posts()) : while (have_posts()) : the_post(); 
		
		$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
		//$slide_title = the_title();
        $slider.= "<li><img src='".$url."' title='Text'></li>";
	
	endwhile; 
	endif; 
	wp_reset_query();		
	$slider.= '
	</ul>
	</div>';
     
    return $slider;
 
}
 
/**add the shortcode for the slider- for use in editor**/
 
function wpideal_insert_slider($atts, $content=null){
 
$slider = wpideal_get_slider();
 
return $slider;
 
}
add_shortcode('wpideal_slider', 'wpideal_insert_slider');

/**add template tag- for use in themes**/
 
function wpideal_slider(){
 wpideal_get_slider();
}

?>
