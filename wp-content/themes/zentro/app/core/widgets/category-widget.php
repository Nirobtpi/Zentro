<?php 

if(!class_exists('Zentro_Category_Widget')) {

    class Zentro_Category_Widget extends WP_Widget {
        // construct function 
        public function __construct(){
            parent::__construct('zentro_category_widget',
            __('Zentro Category Widget','zentro'),
            
            array(
                'description'=> __('Display Category','zentro'),
            ));
        }

        // widget function 
        public function widget($args,$instance){
            echo $args['before_widget'];
            if (!empty($instance['title'])) {
                echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
            }

            ?>
            <div class="link-widget">
                <ul>
                <?php
                    $categories=get_categories(get_the_ID());
                    if ( !empty($categories) && !is_wp_error($categories) ) {
                        foreach ( $categories as $category ) {
                            echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">'
                                . esc_html($category->name) . ' <span>(' . esc_html($category->count) . ')</span></a></li>';
                        }
                    }
                ?>
                </ul>
            </div><!-- end link-widget -->

            <?php

            echo $args['after_widget'];
        }

        
        public function form($instance){
            $title=!empty($instance['title'])? $instance['title'] : __('Popular Categories','zentro');

            ?>
                <p>
                    <label for="<?php echo esc_attr($this->get_field_id('title')) ?>">Title</label>
                    <input type="text" id="<?php echo esc_attr($this->get_field_id('title')) ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')) ?>" value="<?php echo esc_attr($title) ?>">
                </p>

            <?php
        }

        public function update($new_instance, $old_instance){
            $instance=$old_instance;
            $instance['title']=sanitize_text_field($new_instance['title']);
            return $instance;
        }
    }

    function register_category_widget(){
        register_widget('Zentro_Category_Widget');
    }
    add_action('widgets_init','register_category_widget');

}

?>