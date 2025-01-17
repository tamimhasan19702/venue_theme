<?php

function register_custom_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Venue Primary Menu'),
        'secondary-menu' => __('Venue Secondary Menu'),
    ));
}
add_action('after_setup_theme', 'register_custom_menus');