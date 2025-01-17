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