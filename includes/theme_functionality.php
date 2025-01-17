<?php

function register_custom_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Venue Primary Menu'),
        'secondary-menu' => __('Venue Secondary Menu'),
    ));
}
add_action('after_setup_theme', 'register_custom_menus');


function venue_register_widget()
{
    // footer - 1
    register_sidebar(array(
        'name' => __('Footer Widget 1', 'venue'),
        'id' => 'footer_widget_1',
        'description' => __('Footer widget area', 'venue'),
        'before_widget' => '<div id="%1$s" class="about-veno %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    // footer - 2
    register_sidebar(array(
        'name' => __('Footer Widget 2', 'venue'),
        'id' => 'footer_widget_2',
        'description' => __('Footer widget area', 'venue'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    // footer - 3
    register_sidebar(array(
        'name' => __('Footer Widget 3', 'venue'),
        'id' => 'footer_widget_3',
        'description' => __('Footer widget area', 'venue'),
        'before_widget' => '<div id="%1$s" class="col-md-4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'venue_register_widget');