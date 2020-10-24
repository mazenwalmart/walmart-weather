<?php


namespace WalmartWeather;


class Shortcodes extends Init {


	/**
	 * Shortcodes constructor.
	 */
	public function __construct() {
		parent::__construct();

		add_shortcode( 'walmart-weather', array( $this, 'walmart_weather' ) );
	}

	public function walmart_weather () {
		ob_start();
		include_once $this->plugin_path . '/views/shortcodes/walmart-weather/walmart-weather.php';
		return ob_get_clean();
	}
}

new Shortcodes();
