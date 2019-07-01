<?php

// Add CSS
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add JS
function load_js() {
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_template_directory_uri().'/assets/js/jquery.js', false, '3.4.1', true);
    wp_deregister_script('jquery-migrate');
    wp_register_script('jquery-migrate', get_template_directory_uri().'/assets/js/jquery-migrate.js', false, '3.4.1', true);
    wp_enqueue_script('jquery-core', get_template_directory_uri().'/assets/js/jquery.js', false, '3.4.1', true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/assets/js/jquery-migrate.js', false, '3.4.1', true);
    wp_enqueue_script('skills', get_template_directory_uri().'/assets/js/skills.js', false, '1.0', true);
    wp_localize_script('skills', 'ajaxurl', [admin_url( 'admin-ajax.php' )]);
}
add_action('wp_enqueue_scripts', 'load_js');

// Add Menu control on apparence
add_theme_support('menus');
// Add image mise en avant
add_theme_support('post-thumbnails');

// Can choose the location in menu
register_nav_menus([
    'navbar' => __('Navbar', 'theme'),
    'weblink' => __('Web-link', 'theme')
]);

// Ajax skills section
add_action( 'wp_ajax_get_skills_data', 'get_skills_data' );
add_action( 'wp_ajax_nopriv_get_skills_data', 'get_skills_data' );

function get_skills_data() {
    $page = get_page_by_title('Skills');

    $args = get_post_meta($page->ID);
    $data = [];
    foreach ($args as $key => $value) {
        if (preg_match('#^[a-zA-Z]#', $key)) {
            $data[] = [$key => $value[0]];
        }
    }
    wp_send_json_success($data);
}
