<?php
/**
* Plugin Name: WP Simple Plugin Starter
* Description: A simple plugin starter.
* Version: 1.0.0
* Author: Yassine Abouzia
* License: GPL v2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/** Upon activation */
register_activation_hook( __FILE__, 'my_plugin_activation' );

function my_plugin_activation() {
    
}

/** Upon deactivation */
register_deactivation_hook( __FILE__, 'my_plugin_deactivation' );

function my_plugin_deactivation() {
    
}