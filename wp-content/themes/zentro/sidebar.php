<div class="sidebar">
<?php if(is_active_sidebar('popular-post-sidebar')) : ?>
<?php dynamic_sidebar('popular-post-sidebar'); ?>
<?php endif; ?>

    <div id="" class="widget">
        <h2 class="widget-title" id="add-image-title"><?php echo get_theme_mod('add-image-title'); ?></h2>
        <div class="banner-spot clearfix">
            <div class="banner-img" id="ads-image">
                <?php if(get_theme_mod('add-image-setting')==''): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/upload/banner_03.jpg" alt=""
                    class="img-fluid">
                <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_mod('add-image-setting'))?>" alt=""
                    class="img-fluid">
                <?php endif; ?>
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end widget -->
    
    <!-- category sidebar  -->
    <?php if(is_active_sidebar('category-sidebar')): ?>
    
    <?php dynamic_sidebar('category-sidebar'); ?>
    
    <?php endif; ?>
    
    </div><!-- end widget -->
</div><!-- end sidebar -->