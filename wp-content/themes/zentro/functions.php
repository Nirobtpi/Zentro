<?php


// define theme dir 
if(!defined('ZENTRO_THEME_URI')){
    define('ZENTRO_THEME_URI', get_template_directory_uri().'/');   
};
if(!defined('ZENTRO_VERSION')){
    define('ZENTRO_VERSION', '1.0.0');   
};
if(!defined('ZENTRO_THEME_DIR')){
    define('ZENTRO_THEME_DIR', get_template_directory().'/');   
};

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );

    // Remove classic-themes CSS for backwards compatibility for button blocks.
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );


//add css and js file
require_once ZENTRO_THEME_DIR .'/app/core/zentro-enqueue-scripts.php';

// add theme support
require_once ZENTRO_THEME_DIR .'/app/core/zentro-theme-support.php';

//nav walker
require_once ZENTRO_THEME_DIR .'/inc/class-wp-bootstrap-navwalker.php';

//register sidebar
require_once ZENTRO_THEME_DIR .'/app/core/register-sidebar.php';

// popular post widget
require_once ZENTRO_THEME_DIR .'/app/core/widgets/popular-post-widget.php';
?>