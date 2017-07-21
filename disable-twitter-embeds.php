<?php

/*
Plugin Name: Disable Twitter Embeds
Description: Disables the Twitter embeds introduced in WordPress 3.4
Version: 1.0
Author: Matt Wiebe
Author URI: http://mattwiebe.wordpress.com/
*/

add_action( 'init', 'mw_remove_twitter_embeds' );
function mw_remove_twitter_embeds() {
	wp_embed_unregister_handler( '#https?://(www\.)?twitter.com/.+?/status(es)?/.*#i' );
}