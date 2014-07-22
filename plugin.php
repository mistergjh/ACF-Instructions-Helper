<?php

/*
Plugin Name: ACF Description Helpers
Plugin URI:
Description: This plugin will help you organise and alter Advanced Custom Field Instructions or Descriptions. This can be done from the back end of wordpress or from within the theme files using filters.
Version: 1.0
Author: Callum Hardy
Author URI: http://www.callumhardy.com.au
License: GPL
*/

//	Initialise the plugin after all plugins are loaded
//	Need to be sure ACF is loaded before we use Elliots sweet sweet functions now don't we!?
add_action( 'plugins_loaded', function(){
	include('Descriptions.php');
});

$plugin_file = 'acf-descriptions/plugin.php';
 
//	Adding a 'Settings" link o the WP Plugin page for this plugin'
function acf_descriptions_plugin_links( $links, $file ) {
	$settings_link = '<a href="' . admin_url( 'admin.php/options-general.php?page=acf-options-acf-helpers' ) . '">' . __( 'Settings', 'content-split-pro' ) . '</a>';
	array_unshift( $links, $settings_link );
 
	return $links;
}

add_filter( "plugin_action_links_{$plugin_file}", 'acf_descriptions_plugin_links', 10, 2 );