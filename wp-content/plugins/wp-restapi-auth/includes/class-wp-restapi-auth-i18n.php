<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/cod3pk
 * @since      1.0.0
 *
 * @package    Wp_Restapi_Auth
 * @subpackage Wp_Restapi_Auth/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Restapi_Auth
 * @subpackage Wp_Restapi_Auth/includes
 * @author     cod3pk <asfandkhan404@gmail.com>
 */
class Wp_Restapi_Auth_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-restapi-auth',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
