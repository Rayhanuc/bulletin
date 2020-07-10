<?php

use HasinHayder\WPHelper\Modules\NavMenu;
use HasinHayder\WPHelper\Modules\Metabox;
use HasinHayder\WPHelper\Modules\SinglePost;

require_once "inc/wphelper/vendor/autoload.php";
require_once get_theme_file_path( 'inc/customizer/kirki_installer.php' );
require_once get_theme_file_path( 'inc/customizer/config.php' );
// require get_template_directory() . 'inc/customizer/config.php';

function lwhhb_theme_init() {
	load_theme_textdomain( 'lwhhb', get_template_directory().'/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-formats', array('gallery','video','audio') );
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
			'primary' => __( 'Primary', 'lwhhb' ),
			'top' => __( 'Top Menu', 'lwhhb' ),
			'footer-1' => __( 'Footer Menu 1', 'lwhhb' ),
			'footer-2' => __( 'Footer Menu 2', 'lwhhb' ),
			'footer-3' => __( 'Footer Menu 3', 'lwhhb' ),
		)
	);

	add_image_size('lwhh-featured-post',1220,664,true);
	add_image_size('lwhh-post-thumb',768,504,true);
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
	wp_enqueue_style('lwhhb-main-css',get_stylesheet());
	// Css assets end

	// JS assets start
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'owlcarousel-js', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'magnific-js', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), array('jquery'), time(), true );
	wp_enqueue_script( 'lwhhb-js', get_theme_file_uri('assets/js/scripts.min.js'), array('jquery'), time(), true );
	// JS assets end

}
add_action('wp_enqueue_scripts','lwhhb_scripts');




NavMenu::set_li_class('nav-item');
NavMenu::set_anchor_class('nav-link');
Metabox::display_metabox('Video Settings','Add your video url',array('post'),[
	['type'=>'text','title'=>'Video Url','id'=>'video_url']
], function($post_id){
	return get_post_format( $post_id ) == 'video';
},'advanced','default','lwhhb');

/*Metabox::display_metabox( 'Video Settings', 'Add your video url', array('post'), array(
    array('type' => 'text', 'title' => 'Video Url', 'id' => 'video_url'),
), function ( $post_id ) {
    return get_post_format( $post_id ) == 'video';
}, 'advanced', 'default', 'lwhhb' );
*/

function lwhhb_search_form(){
	$home_url = esc_url(get_home_url('/'));
	$search_value = esc_attr(get_search_query());
	$label = __('Search','lwhhb');
	$form = <<<FORM

	<form action="{$home_url}" method="GET" class="form-inline header-search float-lg-right">
        <i class="fa fa-search"></i>
        <input name='s' class="form-control" value='{$search_value}' type="text" placeholder="{$label}" aria-label="{$label}">
    </form>

FORM;

return $form;
}
add_filter('get_search_form','lwhhb_search_form');

function lwhh_container_class() {
	$lwhh_sidebar_display = get_theme_mod('sidebar_diplay','on');
	if('on'==$lwhh_sidebar_display){
		echo 'col-md-8';
	}else {
		echo 'col-md-12';

	}
}

function lwhh_paginate_links($mid_size=3) {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	$links = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type' => 'array',
		'prev_nex' => true,
		'prev_text' => '<i class="fa fa-angle-double-left"></i> newer posts',
		'next_text' => 'older posts <i class="fa fa-angle-double-right"></i>',
		'mid_size' => $mid_size

	));

	if ($links) {
		foreach ($links as $link) {
			if (strpos($link, "current") !== false) {
				echo "<i class='page-item disabled active'><a class='page-link' href='#'>".$link."</a></i>";
			}else {
				$link = str_replace('page-numbers','page-link',$link);
				echo '<li class="page-item">'.$link."</li>\n";
			}
		}
	}

}

/*function lwhh_display_categories(){
	$categories = SinglePost::get_categories(null,0,WPHELPER_TEXONOMY_LIST_LINK);
	echo join('',$categories);
}

function lwhh_display_tags(){
	$tags = join('',SinglePost::get_tags(null,WPHELPER_TEXONOMY_LINK));
	$tags = str_replace('<a','<a class="tag-list"',$tags);
	echo $tags;
}*/


function lwhh_display_categories(){
    $categories = SinglePost::get_categories(null,0,WPHELPER_TAXONOMY_LIST_LINK);
    echo join('',$categories);
}
function lwhh_display_tags(){
    $tags = join('',SinglePost::get_tags(null,WPHELPER_TAXONOMY_LINK));
    $tags = str_replace('<a','<a class="tag-list"', $tags);
    echo $tags;
}


function lwhh_comment_fields($fields) {
	$comment_field = $fields['comment'];
	unset($fields);
	$fields['comment'] = $comment_field;

	return $fields;
}
add_filter('comment_form_fields','lwhh_comment_fields');