<?php

if(!class_exists('popular_post_widget')){

   class popular_post_widget extends WP_Widget {
    public function __construct(){
        parent::__construct(
            'popular-post_widget',
            esc_html__('Custom Popular Post','zentro'),
            array('description' => esc_html__('Custom Popular Post Widget','zentro'))
        );
    }

    public function widget($args,$instance){
        echo $args['before_widget'];

        if(!empty($instance['title'])){
            echo $args['before_title'] . esc_html($instance['title']) .$args['after_title'];
        }
        echo '<div class="blog-list-widget">';
        echo '<div class="list-group">';
        ?>
        <?php

            $popular_post=new WP_Query([
                'post_type'=>'post',
                'posts_per_page'=>!empty($instance['post_count']) ? absint($instance['post_count']) : 3,
            ]);

            if($popular_post->have_posts()) : while ($popular_post->have_posts()) : $popular_post->the_post();
        ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="w-100 justify-content-between">
                    <img src="<?php
                    $photo=get_the_post_thumbnail_url();
                    $photo=$photo ? esc_url($photo) : esc_url(get_template_directory_uri().'/assets/upload/small_08.jpg'); 

                     echo $photo;
                     ?>" alt="blog"
                        class="img-fluid float-left">
                    <h5 class="mb-1"><?php the_title()  ?></h5>
                    <small><?php echo  esc_html(get_the_date('d F, Y'));  ?></small>
                </div>
            </a>
        <?php endwhile; wp_reset_postdata(); endif;  ?>

        <?php
        echo '</div>';
        echo '</div>';

        echo $args['after_widget'];
    }

    public function form($instance){
            $title=!empty($instance['title']) ? esc_attr($instance['title']):'';
            $post_count=!empty($instance['post_count']) ? absint($instance['post_count']):3;

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Title:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" placeholder="Title" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_count')); ?>">Post Count:</label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('post_count')); ?>" name="<?php echo esc_attr($this->get_field_name('post_count')) ?>" type="number" value="<?php echo esc_attr($post_count); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['post_count'] = (!empty($new_instance['post_count'])) ? absint($new_instance['post_count']) : 3;
    
        return $instance;
    }
   }

   function register_popular_post_widget(){
    register_widget('popular_post_widget');
   }

   add_action('widgets_init','register_popular_post_widget');

}


?>