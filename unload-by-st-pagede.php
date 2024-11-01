<?php
/*
 Plugin Name: Unload & Remove (Emojis, Embed, Head Details)
 Plugin URI: http://st-page.de/plugins/stpage-unload/
 Description: Unload & Remove Wordpress Functions (Emojis, Emded and Meta Details in Headarea)
 Version: 1.0
 Text Domain: unload-by-st-pagede
 Author: ST-Page.de
 Author URI: http://st-page.de/
 Update Server: http://update.st-page.de/stpage-unload/
 Min WP Version: 1.5
 */
function unload_emojicons() {

	// all actions related to emojis
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

}

add_action('init', 'unload_emojicons');

function unload_embed() {
	wp_deregister_script('wp-embed');
}

add_action('wp_footer', 'unload_embed' );

function unload_head() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	/* Activate if dont like 
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');
	 */
}

add_action('init', 'unload_head');
