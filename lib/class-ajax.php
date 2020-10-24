<?php


namespace WalmartWeather;


class Ajax extends Init {


	/**
	 * Ajax constructor.
	 */
	public function __construct() {
		parent::__construct();
		add_action( 'wp_ajax_getWeatherArray', array($this, 'getWeatherArray') );
		add_action( 'wp_ajax_nopriv_getWeatherArray', array($this, 'getWeatherArray') );
	}

	public function getWeatherArray() {
	 	require_once $this->plugin_path . '/lib/class-open-weather-api.php';

	 	echo Open_Weather_API::getJSONArray( $_POST['city'] );

		wp_die();
	}
}

new Ajax();