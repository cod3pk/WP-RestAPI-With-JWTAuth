<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/cod3pk
 * @since             1.0.0
 * @package           Wp_Restapi_Auth
 *
 * @wordpress-plugin
 * Plugin Name:       WP Rest API with JWT Auth
 * Plugin URI:        https://github.com/cod3pk/WP-RestAPI-With-JWTAuth.git
 * Description:       Enhance your WordPress site's functionality and security with our cutting-edge REST API plugin, featuring seamless JWT Authentication. Simplify content management and ensure secure data access, providing a robust foundation for developers and site administrators alike.
 * Version:           1.0.0
 * Author:            cod3pk
 * Author URI:        https://github.com/cod3pk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-rest-auth
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_REST_AUTH_VERSION', '1.0.0' );


require plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-auth.php';

function run_wp_rest_auth() {
	$plugin = new WP_Rest_Auth();
}

run_wp_rest_auth();
