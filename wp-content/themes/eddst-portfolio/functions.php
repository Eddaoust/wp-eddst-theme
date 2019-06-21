<?php

function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// https://stackoverflow.com/questions/26180688/how-to-add-class-to-link-in-wp-nav-menu
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link text-white"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');