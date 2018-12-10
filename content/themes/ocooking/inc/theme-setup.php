<?php
if ( !function_exists('ocooking_setup')){
	function ocooking_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'ocooking_setup');
 ?>
