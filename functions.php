<?php
/**
 *	Chan Chan theme functions
 *
 * 	@link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * 	@package Chan_Chan
 * 
 */

if ( ! defined('C_VERSION') ) {

	define('C_VERSION', '1.0');

}

if ( ! function_exists( 'chanchan_theme_setup' ) ) {

	function chanchan_theme_setup() {

		/**
		 * Add theme support
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
		add_theme_support( 'post-formats', $post_formats);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__( 'Primary', 'chan-chan' ),
			)
		);

	}

}

add_action( 'after_setup_theme', 'chanchan_theme_setup' );

/**
 * 
 * Completely remove Gutenberg on the Front-end and Back-end
 *
 * @ Swtich back to default editor - TinyMCE
 * @ Remove Gutenberg stylesheet on the Frontend
 * 
 */
add_filter( 'use_block_editor_for_post', '__return_false' );

function chanchan_deregister_gutenber_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}

add_action( 'wp_print_styles', 'chanchan_deregister_gutenber_styles', 100 );

/**
 * Enqueue scripts and styles.
 */
function bao_chan_scripts() {

	wp_enqueue_style( 'chanchan-style', get_stylesheet_uri(), array(), C_VERSION );

	wp_enqueue_style( 'chanchan-main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), C_VERSION );

	// Bootstrap CSS
	wp_enqueue_style( 'chanchan-bstr-css', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), 'v4' );

	// Bootstrap JS
	wp_enqueue_script( 'chanchan-bstr-js', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), 'v4' , false );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bao_chan_scripts' );