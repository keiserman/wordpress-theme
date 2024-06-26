<?php

function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');
