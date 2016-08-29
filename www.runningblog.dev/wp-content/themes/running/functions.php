<?php

// Adding stylesheets and running scripts
add_action('wp_enqueue_scripts', 'running_theme_files');

function running_theme_files() {
	// FONTS
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=BenchNine:400,700|Alegreya:400,700,900' );

	// CSS
	wp_enqueue_style( 'main-css-file', get_template_directory_uri() . '/css/style.css');	
	wp_enqueue_style( 'bootstrap-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	// JS
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/f7342ace56.js');
	wp_enqueue_script( 'main-js-file', get_template_directory_uri() . '/js/main.js');
}

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'training' ) );

	return $query;
}

?>