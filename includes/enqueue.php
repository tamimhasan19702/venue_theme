<?php

if (!defined('ABSPATH')) {
    exit;
}


if (!function_exists('enqueue_scripts')) {


    function enqueue_scripts()
    {

        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('fontAwesome'));
        wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array('bootstrap'));
        wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/fontAwesome.css');
        wp_enqueue_style('hero-slider', get_template_directory_uri() . '/css/hero-slider.css', array('bootstrap'));
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl-carousel.css', array('bootstrap'));
        wp_enqueue_style('datepicker', get_template_directory_uri() . '/css/datepicker.css', array('bootstrap'));
        wp_enqueue_style('templatemo-style', get_template_directory_uri() . '/css/templatemo-style.css', array('bootstrap'));
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900');


        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), null, false);
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('datepicker', get_template_directory_uri() . '/js/datepicker.js', array('jquery'), null, true);
        wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), null, true);
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);

    }

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

}


function venue_theme_support()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on exdos, use a find and replace
     * to change 'exdos' to the name of your theme in all the template files
     */
    load_theme_textdomain('exdos', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded  tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support('post-thumbnails');

    // set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'exdos'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'image',
        'video',
        'quote',
        'gallery',
        'audio'
    ));

    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true
    ));

    remove_theme_support('widgets-block-editor');

}

add_action('after_setup_theme', 'venue_theme_support');

add_filter('use_block_editor_for_post', '__return_false');