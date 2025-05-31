<?php 

if(! defined('ABSPATH')){
    exit;
} 

if(!function_exists('zentro_theme_support')){

    function zentro_theme_support(){

        // support thumbnails 
        add_theme_support('post-thumbnails');

        // support title tag
        add_theme_support('title-tag');

        // support load text domain
        load_textdomain('zentro', get_template_directory_uri() . '/languages');

        // support automatic feed
        add_theme_support('automatic-feed-links');

        // support block editor
        add_theme_support('block-editors');

        // support custom logo
        add_theme_support('custom-logo',[
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
        // support html
        add_theme_support('html5',[
            'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
        ]);

        // custom background

        add_theme_support('custom-background',[
            'default-color' => 'ffffff',
            'default-image' => '',
        ]);

        //add custom header
        add_theme_support('custom-header', [
            'width'         => 1200,
            'height'        => 400,
            'flex-height'   => true,
            'flex-width'    => true,
        ]);

        // enable selective refresh for widgets in customizer
        add_theme_support('customize-selective-refresh-widgets');

        register_nav_menus([
            'primary-menu'=>__('Primary Menu','zentro'),
        ]);

    }

    add_action('after_setup_theme', 'zentro_theme_support');
}


?>