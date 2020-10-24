<?php


namespace WalmartWeather;


class Enqueues extends  Init {
	public function __construct() {
		parent::__construct();

		add_action( 'wp_enqueue_scripts', array( $this, 'front_scripts' ) );
	}

	public function front_scripts() {
		wp_enqueue_style( $this->prefix . '-front', $this->plugin_url . '/assets/front.css', [], time() );


		wp_enqueue_script( $this->prefix . '-front', $this->plugin_url . '/assets/front.js', ['jquery'], time(),
			true );
		wp_localize_script(
			$this->prefix . '-front',
			'wwp',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' )
			)
		);
	}
}
new Enqueues();
