<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <!-- Basic -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?> 

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mylogo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                         wp_nav_menu([
                            'theme_location'=> 'primary-menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav mr-auto',
                            'walker'=> new WP_Bootstrap_Navwalker(),
                         ])
                        ?>
                        <?php get_search_form()  ?>
                        
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
