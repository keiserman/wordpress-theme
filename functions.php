<?php

function my_custom_theme_enqueue_styles()
{
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function theme_enqueue_scripts()
{
    wp_enqueue_script('nav-toggle', get_template_directory_uri() . '/javascript/nav-toggle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


function my_custom_theme_setup()
{
    // Register a primary menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');
