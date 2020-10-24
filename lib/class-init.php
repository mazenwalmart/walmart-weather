<?php


namespace WalmartWeather;


class Init {
	/**
	 * @var string
	 */
	public $prefix;
	/**
	 * @var string
	 */
	public $plugin_url;
	/**
	 * @var string
	 */
	public $plugin_path;


	/**
	 * Init constructor.
	 */
	public function __construct() {
		$this->prefix       = 'wwp';
		$this->plugin_url   = dirname( plugin_dir_url(__FILE__) );
		$this->plugin_path  = dirname( plugin_dir_path( __FILE__ ) );

		$this->includes();
	}

	public function includes () {

		require_once $this->plugin_path . '/lib/class-ajax.php';
		require_once $this->plugin_path . '/lib/class-shortcodes.php';
		require_once $this->plugin_path . '/lib/class-enqueues.php';
	}
}