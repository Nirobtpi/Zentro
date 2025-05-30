<?php get_header(); ?>
        <section id="cta" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <h2>A digital marketing blog</h2>
                        <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus rhoncus rutrum. Integer et ornare mauris.</p>
                        <a href="#" class="btn btn-primary">Try for free</a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter-widget text-center align-self-center">
                            <h3>Subscribe Today!</h3>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <form class="form-inline" method="post">
                                <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                            </form>         
                        </div><!-- end newsletter -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php
                                    if(have_posts()) : while(have_posts()) : the_post();
                                ?>
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="marketing-single.html" title="">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog image" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <h4><a href="<?php echo esc_url(the_permalink()) ?>" title=""><?php the_title() ?></a></h4>
                                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>

                                        <?php if(has_category()):
                                            $categories=get_the_category();
                                            foreach($categories as $index=>$category):
                                        ?>
                                        <small>
                                            <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>" title=""><?php echo $category->name  ?>  </a>
                                            </small>
                                        <?php endforeach; endif; ?>
                                        
                                        <small><a href="javascript:void(0);" title=""><?php echo date('d F, Y',strtotime(get_the_date())) ?> </a></small>
                                        <small><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" title="">by <?php the_author()  ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                <?php endwhile; wp_reset_postdata(); endif;  ?>
                            </div>
                        </div>

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                 <?php the_posts_pagination() ?>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                      <?php get_sidebar() ?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
<?php get_footer(); ?>