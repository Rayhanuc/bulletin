<?php
/*
Plugin Name: lwhhb Theme Companion Plugin
Plugin URI:
Description: lwhhb Theme Companion Plugin
Version: 1.0
Author: LWHH
Author URI: https://hasin.me
License: GPLv2 or later
Text Domain: lwhhb-companion
Domain Path: /languages/
*/

require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-about-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-advertisement-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-mailchimp-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-recent-posts-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-social-widget.php";
// require_once plugin_dir_path(__FILE__)."/widgets/lwhhb-flickr-widget.php";

function lwhhbc_load_textdomain(){
	load_plugin_textdomain('lwhhb-companion',false,dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','lwhhbc_load_textdomain');

function lwhhb_plugin_init(){
	add_image_size('lwhhb-sidebar-thumbnail',90,75,true);
}
add_action('init','lwhhb_plugin_init');




