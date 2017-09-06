<?php

/*
Plugin Name: Advanced Custom Fields: Relationship Multisite
Plugin URI: https://github.com/slejnej/acf-relationship-multisite
Description: Get post, pages and custom post types from another site of your WordPress Multisite installation. This plugin needs the installation/activation of Advanced Custom Fields V5.
Version: 1.1.02 (>= ACF 5.5.8)
Author: Thomas Meyer
Author URI: www.dreihochzwo.de
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

load_plugin_textdomain( 'acf-relationship-multisite', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

function include_field_types_relationship_multisite( $version ) {
	require_once __DIR__ . '/src/acf-relationship-multisite-v5.php';
}

add_action('acf/include_field_types', 'include_field_types_relationship_multisite');	

