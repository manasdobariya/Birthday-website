<?php
// Enable theme support for featured images
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');


// Register the "Celebrities" Custom Post Type
function register_celebrities_cpt() {
    $labels = array(
        'name' => 'Celebrities',
        'singular_name' => 'Celebrity',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'celebrity'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );

    register_post_type('celebrity', $args);
}
add_action('init', 'register_celebrities_cpt');

// Show "Celebrity" posts on the homepage
function show_celebrities_on_homepage($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set( 'post_type', array( 'post', 'celebrity' ) );
    }
}
add_action('pre_get_posts', 'show_celebrities_on_homepage');

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'birthdays'  ),
            'footer-menu' => __( 'Secondary_Menu', 'birthdays' ), 
        )
    );
}
add_action( 'init', 'register_my_menus' );


function register_celebrity_taxonomy() {
    register_taxonomy('celebrity_type', 'celebrity', [
        'labels' => [
            'name' => 'Celebrity Types',
            'singular_name' => 'Celebrity Type',
            'menu_name' => 'Celebrity Types',
        ],
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'celebrity-type'],
    ]);
}
add_action('init', 'register_celebrity_taxonomy');
add_filter('show_admin_bar', '__return_false');




