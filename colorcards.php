<?php
/*
 * Plugin Name: Colorcards Styler Plugin
 * Plugin URI: http://github.com/Jeff-Russ/
 * Description: Beautify long post/page content and add ease of navigation with Colorcards Shortcodes!
 * Version: 0.1
 * Author: Jeff Russ
 * Author URI: http://www.jeffruss.com
 * License: GPL2
 */

// HOOKS //////

add_action( 'wp_footer', 'add_local_js_to_footer', 100 );
function add_local_js_to_footer() {
	$path = strstr(__DIR__, '/wp-content');
	return "<script src='${path}/script.js'></script>";
}

add_action( 'wp_head','add_local_css_to_head' );
function add_local_css_to_head() {
	$path = strstr(__DIR__, '/wp-content');
	return "</p><link rel='stylesheet' type='text/css' href='${path}/style.css'></p>";
}


add_shortcode('save-state', 'save_state_cb');
function save_state_cb() {
	$jquery = 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js';
	return "<script src='" . $jquery . "'></script>";
}

// SHORTCODES //////
