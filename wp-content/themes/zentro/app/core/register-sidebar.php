<?php 

if(! function_exists('zentro_register_sidebar')){

    function zentro_register_sidebar(){
        register_sidebar(array(
            'name'=>esc_html__('Popular Post','zentro'),
            'id'=>'popular-post-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

        register_sidebar(array(
            'name'=>esc_html__('Category','zentro'),
            'id'=>'category-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title" id="category-title">',
            'after_title' => '</h2>',
        ));
    }
add_action('widgets_init', 'zentro_register_sidebar');

}


?>