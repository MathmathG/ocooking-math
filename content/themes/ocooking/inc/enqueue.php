<?php

	function ocooking_scripts() {


		wp_enqueue_style(
			'ocooking-style',
			get_theme_file_uri( '/public/css/app.css' ),
			[ 'ocooking-style-vendor' ]
		);
		wp_enqueue_style(
			'ocooking-style-vendor',
			get_theme_file_uri( '/public/css/vendor.css' )
		);
		wp_enqueue_script(
			'ocooking-script',
			get_theme_file_uri( '/public/js/app.js' ),
			[ 'ocooking-script-vendor' ],
			null,
			true
		);
		wp_enqueue_script(
			'ocooking-script-vendor',
			get_theme_file_uri( '/public/js/vendor.js' ),
			[],
			null,
			true
		);

	}

add_action( 'wp_enqueue_scripts', 'ocooking_scripts' );
