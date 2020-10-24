<?php
/*
Plugin Name: Walmart Weather
Plugin URI: #
Description: Walmart Weather Wordpress Plugin
Version: 1.0
Author: Mazen
Author URI: #
License: GPL2
Text Domain: wwp
*/

namespace WalmartWeather;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Init the plugin.
require_once 'lib/class-init.php';
$walmart_weather = new Init();
