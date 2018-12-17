<?php
if ( !function_exists('ocooking_setup')){
	function ocooking_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
        add_theme_support( 'author' );

        register_nav_menus([
			'header-menu' => __( 'Menu dans l\'en-tête' ),
			'main-menu'   => __( 'Menu principal' ),
            'header-link' =>   ( 'Retour vers notre front-page' )
		]);
	}
}
add_action('after_setup_theme', 'ocooking_setup');
 ?>
