<?php

function lwhhb_theme_init() {
	load_theme_textdomain( 'lwhhb', get_template_directory().'/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'editor-styles' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 133,
			'width'       => 443,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	register_nav_menus(
		array(
			'menu-1' => __( 'Primary', 'lwhhb' ),
		)
	);
}

add_action('after_setup_theme','lwhhb_theme_init');




// Assets of this theme files
function lwhhb_scripts() {
	// Css assets stat
	wp_enqueue_style('lwhhb-google-fonts','//fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Nunito&display=swap');
	wp_enqueue_style('bootstrap-css',get_theme_file_uri( 'assets/vendor/bootstrap/css/bootstrap.min.css' ));
	wp_enqueue_style('fontawesome-css',get_theme_file_uri( 'assets/vendor/font-awesome/css/font-awesome.min.css' ));
	wp_enqueue_style('owlcarousel-css',get_theme_file_uri( 'assets/vendor/owl/assets/owl.carousel.min.css' ));
	wp_enqueue_style('owlcarousel-assets-css',get_theme_file_uri( 'assets/vendor/owl/assets/owl.theme.default.min.css' ));
	wp_enqueue_style('magnific-css',get_theme_file_uri( 'assets/vendor/magnific-popup/magnific-popup.css' ));
	wp_enqueue_style('lwhhb-css',get_theme_file_uri( 'assets/css/main.css' ));
	wp_enqueue_style('lwhhb-main-css',get_style_sheet());
	// Css assets end

	// JS assets start
	wp_enqueue_script( 'bootstrap-js', get_thme_file_uri('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'owlcarousel-js', get_thme_file_uri('assets/vendor/owl/owl.carousel.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'magnific-js', get_thme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'lwhhb-js', get_thme_file_uri('assets/js/scripts.min.js'), array('jquery'), time(), true );
	// JS assets end

}
add_action('wp_enqueue_scripts','lwhhb_scripts');


/*

<!--init scripts-->
<script src="assets/js/scripts.min.js"></script>*/