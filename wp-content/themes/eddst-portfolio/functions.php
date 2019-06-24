<?php

function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add Menu control on apparence
add_theme_support('menus');
// Add image mise en avant
add_theme_support('post-thumbnails');

// Can choose the location in menu
register_nav_menus([
    'navbar' => __('Navbar', 'theme'),
    'weblink' => __('Web-link', 'theme')
]);