<?php
/*
Plugin Name: WP Plugin Test
Plugin URI: http://example.com
Description: WP Plugin Test Des
Version: 1.0
Author: Vasi
Author URI: http://w3guy.com
*/

function html_form_code() {
	echo '<h1>VASI HTML</h1>';
}

function cf_shortcode() {
	ob_start();
	html_form_code();
	return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );

?>
