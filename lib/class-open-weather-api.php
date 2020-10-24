<?php


namespace WalmartWeather;


class Open_Weather_API {

	public static $api_key = '0aa4e9e30db02aa0efa57788752d2fda';


	public static function getJSONArray( $city ) {
		$weather_array  = self::getArray( $city );
		$modified_array = array(
			'city'      => $weather_array->name,
			'humidity'  => $weather_array->main->humidity,
			'temp'      => self::kelvin_to_celsius( $weather_array->main->temp ),
			'tempMax'   => self::kelvin_to_celsius( $weather_array->main->temp_max ),
			'tempMin'   => self::kelvin_to_celsius( $weather_array->main->temp_min ),
			'feelsLike' => self::kelvin_to_celsius( $weather_array->main->feels_like ),

		);
		return json_encode( $modified_array );
	}
	public static function getArray ( $city ) {

		$api_key = self::$api_key;

		$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";

		return json_decode( trim( file_get_contents( $url ) ) );
	}

	public function kelvin_to_celsius ( $kelvin ) {
		return (int) $kelvin - 273;
	}

}