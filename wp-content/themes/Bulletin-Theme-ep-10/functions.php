<?php

use HasinHayder\WPHelper\Modules\NavMenu;

require_once "inc/wphelper/vendor/autoload.php";
require_once "inc/customizer/kirki_installer.php";
require_once "inc/customizer/config.php";

function lwhhb_theme_init() {
    load_theme_textdomain( 'lwhhb', get_template_directory() . '/languages' );
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
            'primary'  => __( 'Primary', 'lwhhb' ),
            'top'      => __( 'Top Menu', 'lwhhb' ),
            'footer-1' => __( 'Footer Menu 1', 'lwhhb' ),
            'footer-2' => __( 'Footer Menu 2', 'lwhhb' ),
            'footer-3' => __( 'Footer Menu 3', 'lwhhb' ),
        )
    );

    add_image_size( 'lwhh-featured-post', 1220, 664, true );

}
add_action( 'after_setup_theme', 'lwhhb_theme_init' );

function lwhhb_scripts() {

    wp_enqueue_style( 'lwhhb-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Nunito&display=swap" rel="stylesheet' );
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( 'assets/vendor/bootstrap/css/bootstrap.min.css' ) );
    wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( 'assets/vendor/font-awesome/css/font-awesome.min.css' ) );
    wp_enqueue_style( 'owlcarousel-css', get_theme_file_uri( 'assets/vendor/owl/assets/owl.carousel.min.css' ) );
    wp_enqueue_style( 'owlcarousel-assets-css', get_theme_file_uri( 'assets/vendor/owl/assets/owl.theme.default.min.css' ) );
    wp_enqueue_style( 'magnific-css', get_theme_file_uri( 'assets/vendor/magnific-popup/magnific-popup.css' ) );
    wp_enqueue_style( 'lwhh-css', get_theme_file_uri( 'assets/css/main.css' ) );
    wp_enqueue_style( 'lwhhb-main-css', get_stylesheet() );

    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ), array('jquery'), '1.0', true );
    wp_enqueue_script( 'owlcarousel-js', get_theme_file_uri( 'assets/vendor/owl/owl.carousel.min.js' ), array('jquery'), '1.0', true );
    wp_enqueue_script( 'magnific-js', get_theme_file_uri( 'assets/vendor/magnific-popup/jquery.magnific-popup.min.js' ), array('jquery'), '1.0', true );
    wp_enqueue_script( 'lwhh-js', get_theme_file_uri( 'assets/js/scripts.js' ), array('jquery'), time(), true );

}
add_action( 'wp_enqueue_scripts', 'lwhhb_scripts' );

function lwhhb_search_form() {
    $home_url = esc_url( get_home_url( '/' ) );
    $search_value = esc_attr( get_search_query() );
    $label = __( 'Search', 'lwhhb' );
    $form = <<<FORM
    <form action='{$home_url}' method='GET' class="form-inline header-search float-lg-right">
        <i class="fa fa-search"></i>
        <input name='s' class="form-control" value='{$search_value}' type="text" placeholder="{$label}" aria-label="{$label}">
    </form>
FORM;
    return $form;
}
add_filter( 'get_search_form', 'lwhhb_search_form' );

NavMenu::set_li_class( 'nav-item' );
NavMenu::set_anchor_class( 'nav-link' );
