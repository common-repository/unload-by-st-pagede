=== Plugin Name ===
Contributors: kronekranz
Donate link: http://st-page.de/donate/
Tags: header, head, emojicons, embed, 
Requires at least: 4.0
Tested up to: 4.5
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Unload & Remove Wordpress Functions (Emojis, Emded and Meta Details in Headarea)

== Description ==
If one do not need emojicons and embed artikel who can disable these. The Plugin have no admin page, because one need no config details. Activate the plugin and it works now.
Removes:

*	Emojicons in admin print styles, detection script, Emojicons print styles
* Emojicons in WP-Mail, content feed, comment rss feed (wp_staticize_emoji).
*	wp_head => rsd_link, wlwmanifest_link, wp_shortlink_wp_head, wp_generator & rest_output_link_wp_head (prority=10).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/st-page-unload/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Changelog ==

= 1.0 =
* First version of the plugin.