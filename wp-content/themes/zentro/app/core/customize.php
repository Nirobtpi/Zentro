<?php
if(!function_exists('zentro_customize_register')) {
      

    function zentro_customize_register( $wp_customize ) {
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

    function zentro_customize_preview_js() {
        wp_enqueue_script('zentro-customizer', ZENTRO_THEME_URI . '/js/customize-preview.js', array('customize-preview'), null, true);
    }
    add_action('customize_preview_init', 'zentro_customize_preview_js');
}


?>