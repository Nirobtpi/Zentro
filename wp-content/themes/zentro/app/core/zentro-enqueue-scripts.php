<?php 

if(! defined('ABSPATH')){ exit; };


if(!function_exists('zentro_enqueue_scripts')){

    function zentro_enqueue_scripts(){

    //    all css files
       wp_register_style('zentro-bootstrap',ZENTRO_THEME_URI.'assets/css/bootstrap.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-font-awesome',ZENTRO_THEME_URI.'assets/css/font-awesome.min.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-animate',ZENTRO_THEME_URI.'assets/css/animate.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-style', ZENTRO_THEME_URI . '/assets/css/style.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-colors-style', ZENTRO_THEME_URI . '/assets/css/colors.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-marketing-style', ZENTRO_THEME_URI . '/assets/css/version/marketing.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-responsive-style', ZENTRO_THEME_URI . '/assets/css/responsive.css',array(),ZENTRO_VERSION);
       wp_register_style('zentro-main-style',get_stylesheet_uri() ,array(),ZENTRO_VERSION);

       wp_enqueue_style('zentro-bootstrap');
       wp_enqueue_style('zentro-font-awesome');
       wp_enqueue_style('zentro-animate');
       wp_enqueue_style('zentro-style');
       wp_enqueue_style('zentro-colors-style');
       wp_enqueue_style('zentro-marketing-style');
       wp_enqueue_style('zentro-responsive-style');
       wp_enqueue_style('zentro-main-style');


    //    all js files
       wp_register_script('jquery',ZENTRO_THEME_URI.'assets/js/jquery.min.js',array(),ZENTRO_VERSION);
       wp_register_script('tether-js',ZENTRO_THEME_URI.'assets/js/tether.min.js',array('jquery'),ZENTRO_VERSION);
       wp_register_script('bootstrap',ZENTRO_THEME_URI.'assets/js/bootstrap.min.js',array('jquery'),ZENTRO_VERSION);
       wp_register_script('animate',ZENTRO_THEME_URI.'assets/js/animate.js',array('jquery'),ZENTRO_VERSION);
       wp_register_script('main-js',ZENTRO_THEME_URI.'assets/js/custom.js',array('jquery'),ZENTRO_VERSION);

       wp_enqueue_script('jquery');
       wp_enqueue_script('tether-js');
       wp_enqueue_script('bootstrap');
       wp_enqueue_script('animate');
       wp_enqueue_script('main-js');
    }
}


add_action('wp_enqueue_scripts', 'zentro_enqueue_scripts');



?>