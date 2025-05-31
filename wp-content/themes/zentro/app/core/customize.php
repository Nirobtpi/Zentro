<?php
if(!function_exists('zentro_customize_register')) {
      

    function zentro_customize_register( $wp_customize ) {

        // logo chnage 
        $wp_customize->add_section('header',array(
            'title'=>__('Header Section','zentro'),
            'priority'=>10,
        ));

        $wp_customize->add_setting('header-logo-setting',array(
            'default'=> ZENTRO_THEME_URI.'assets/images/mylogo.png',
            'transport'=>'postMessage',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'header-logo-control',array(
            'label'=> __('Upload Logo','zentro'),
            'section'=>'header',
            'settings'=>'header-logo-setting',

        )));
        $wp_customize->selective_refresh->add_partial('header-logo-selective',array(
            'selector'=>'#logo',
            'section'=>'header',
            'settings'=> array('header-logo-setting'),
           'render_callback' => function() {
            return '<img src="' . esc_url(get_theme_mod('header-logo-setting')) . '" alt="Image">';
            }
        ));
        // logo end 

        // search form option 
        $wp_customize->add_setting('search-btn-text-setting',array(
            'default'=> __('Search','zentro'),
            'transport'=>'postMessage',
        ));
        $wp_customize->add_control('search-btn-text-control',array(
            'type'=>'text',
            'label'=> __('Add Search Button Text','zentro'),
            'section'=>'header',
            'settings'=> 'search-btn-text-setting',
        ));
        $wp_customize->selective_refresh->add_partial('search-btn-text-selective',array(
            'selector'=>'.btn-text',
            'section'=>'header',
            'settings'=> array('search-btn-text-setting'),
            'render_callback' => function() {
                return esc_html( get_theme_mod('search-btn-text-setting'));
            }
        ));

        $wp_customize->add_setting('placeholder-text-setting',array(
            'default'=> __('Search...','zentro'),
            'transport'=>'postMessage',
        ));
        $wp_customize->add_control('search-placeholder-control', array(
            'type' => 'text',
            'label' => __('Search Input Placeholder', 'zentro'),
            'section' => 'header',
            'settings' => 'placeholder-text-setting',
        ));
        // end form settings 


        // sidebar settings 
        $wp_customize->add_section('add-image',array(
            'title'=> __('Sidebar Settings','zentro'),
            'description'=>__('Add Advertise Image','zentro'),
            'priority'=>10,

        ));

        // advatise title change 
        $wp_customize->add_setting('add-image-title',array(
            'default'=> __('Advertising','zentro'),
            'transport'=>'postMessage',
        ));
        $wp_customize->add_control('title-setting-control', array(
            'type'=> 'text',
            'label'=> __('Advertising Title','zentro'),
            'section'=>'add-image',
            'settings'=>'add-image-title',
        ));

        $wp_customize->selective_refresh->add_partial('add-image-title-selective',array(
            'selector'=>'#add-image-title',
            'section'=>'add-image',
            'settings'=>array('add-image-title'),
            'render_callback'=>function(){
                return get_theme_mod('add-image-title');
            }
        ));

        // add add iamge setting 
        $wp_customize->add_setting('add-image-setting',array(
            'default'=>esc_url(ZENTRO_THEME_URI.'/assets/upload/banner_03.jpg'),
            'transport'=>'postMessage',
        ));
        // add image control 
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'add-image-control', array(
            'label'=> __('Add Advertise Image','Zentro'),
            'section'=>'add-image',
            'settings'=>'add-image-setting',
        )));
        // add live chnage 
        $wp_customize->selective_refresh->add_partial('add-image-selective',array(
           'selector'=>'#ads-image',
            'section'=> 'add-image',
            'settings'=>array('add-image-setting'),
            'render_callback'=>function(){
                return '<img src="' . esc_url(get_theme_mod('add-image-setting')) . '" alt="Advertise Image">';
            },
        ));
    }

    add_action( 'customize_register', 'zentro_customize_register' );


    // enquee js file 
    function zentro_customize_preview_js() {
        wp_enqueue_script('zentro-customizer', ZENTRO_THEME_URI . 'assets/js/customize-preview.js', array('customize-preview'), null, true);
    }
    add_action('customize_preview_init', 'zentro_customize_preview_js');
}


?>