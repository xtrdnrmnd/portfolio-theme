<?php
// Load stylesheets
function load_css() 
{
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    
    wp_enqueue_style('bootstrap');
    
    wp_register_style('960', get_template_directory_uri() . '/assets/css/960.css', array(), false, 'all');
    
    wp_enqueue_style('960');
    
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
    
    wp_enqueue_style('main');
    
    wp_register_style('375', get_template_directory_uri() . '/assets/css/375.css', array(), false, 'all');
    
    wp_enqueue_style('375');
    
}

add_action('wp_enqueue_scripts', 'load_css');

// Load js
function load_js() 
{
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu'
    )
);

// Custom Image Sizes
add_image_size('size-1', 345, false);
add_image_size('size-2', 466, false);
add_image_size('size-3', 588, false);
add_image_size('size-4', 710, false);
add_image_size('size-5', 1196, false);
add_image_size('size-6', 1440, false);

// Adding sidebars
function add_sidebars() {
    
    register_sidebar(
    
        array(
        
                'name' => 'Footer',
                'id' => 'footer', 
                'before_title' => '<div class="container">',
                'after_class' => '</div>'
        
        )
    
    ); 
    
    register_sidebar(
    
        array(
        
                'name' => 'About',
                'id' => 'about', 
                'before_title' => '<div class="container">',
                'after_class' => '</div>'
        
        )
    
    ); 
    
}
add_action('widgets_init', 'add_sidebars');

// Projects set as the certain post type
function projects_type() {
    
    $args = array(
    
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-desktop',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
    );
    
    register_post_type('projects', $args);
    
}
add_action('init', 'projects_type');

// Certificates set as the certain post type
function certificates_type() {
    
    $args = array(
    
        'labels' => array(
            'name' => 'Certificates',
            'singular_name' => 'Certificate',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-desktop',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
    );
    
    register_post_type('certificates', $args);
    
}
add_action('init', 'certificates_type');
?>