<?php
/**
 * developr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package developr
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'developr_setup' ) ) :

	function developr_setup() {

		load_theme_textdomain( 'developr', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'developr' ),
			)
		);
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
		add_theme_support(
			'custom-background',
			apply_filters(
				'developr_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'developr_setup' );
function developr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'developr_content_width', 640 );
}
add_action( 'after_setup_theme', 'developr_content_width', 0 );
function developr_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'developr' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'developr' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'developr_widgets_init' );
function developr_scripts() {
	wp_enqueue_style( 'developr-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'developr-style', 'rtl', 'replace' );

	wp_enqueue_script( 'developr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'developr_scripts' );
require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* shortcodes*/
require_once('shortcodes/boxed-posts.php');
require_once('shortcodes/email-short.php');
require_once('shortcodes/past-projects.php');
require_once('shortcodes/phone-number-short.php');
require_once('shortcodes/boxed-posts-sub.php');
require_once('shortcodes/boxed-posts-alt.php');