<?php
function register_nav(){
    register_nav_menus (array(
        'header' => 'Header',
        'footer' => 'Footer',
        '404' => '404'
        ));
}


if (! function_exists('setup')):
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('team', 475, 475, array('center','center'));
        add_image_size('full-car', '60vh', 'auto', array('center','center'));
        add_image_size('preview', 150, 150, array('center','center'));
    }
endif;

function scripts_header(){
    wp_enqueue_style('init', get_stylesheet_uri());
}

function scripts_footer(){

}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
//add_action('wp_footer', 'scripts_footer');

/* shortcodes*/
require_once('shortcodes/boxed-posts.php');
require_once('shortcodes/email-short.php');
require_once('shortcodes/past-projects.php');
require_once('shortcodes/phone-number-short.php');
require_once('shortcodes/boxed-posts-sub.php');
require_once('shortcodes/boxed-posts-alt.php');
