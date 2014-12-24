=== DM WP SLIDER ===
Contributors: Umakant_dataman, Dataman Computer Systems Pvt. Ltd.
Donate Link: http://dataman.in/
Tags: slider, image, responsive, simple slider,Bxslider
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

This is Responsive Simple WordPress Slider Plugin is written in Bxslider.js and with [wpideal_slider] shortcode. Which outputs a [slider] (http://bxslider.com/) from [stevenwanderski] (http://stevenwanderski.com/) using the shortcode '[wpideal_slider]'.


= Shortcode Options =
As of version 1.0, Please use '[wpideal_slider]' or `<?php echo do_shortcode('[wpideal_slider]'); ?>` shortcodes.

= Credits =

This plugin was written by Umakant Sonwani with help and suggestions from several others including Dataman Computer Systems Pvt. Ltd..

== Installation ==

= The easy way: =

1. Go to the Plugins Menu in WordPress
1. Search for "WP Simple Image Slider"
1. Click 'Install'
1. Activate the plugin

= Manual Installation =

1. Download the plugin file from this page and unzip the contents
1. Upload the `dmwpslider` folder to the `/wp-content/plugins/` directory
1. Activate the `dmwpslider` plugin through the 'Plugins' menu in WordPress

= Once Activated =

1. Place the `[wpideal_slider]` shortcode in a Page or Post
1. Create new items in the `ideal-slider` post type, uploading a Featured Image for each.
	1. *Optional:* You can hyperlink each image by entering the desired url `Image Link URL` admin metabox when adding a new slider image.


== Frequently Asked Questions ==

= The Slider Shortcode =

Place the `[wpideal_slider]` shortcode in a Page or Post

= Can I insert the carousel into a WordPress template instead of a page? =

Absolutely - you just need to use the [do_shortcode](http://codex.wordpress.org/Function_Reference/do_shortcode) WordPress function. For example:
`<?php echo do_shortcode('[wpideal_slider]'); ?>`


== Screenshots ==

1. Admin list interface showing Slider images and titles.
2. Admin image interface showing optional title, image and URL
3. Example output.(see documentation).

== Changelog ==

= 1.1 =
* Added shortcode attribute functionality for tweaking of slider options.


