<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        wp_head();
    ?>
</head>
<body <?php body_class();?>>

    <!--pre header start-->
    <div class="pre-header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <!-- <ul class="ph-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Subscribe</a></li>
                    </ul> -->
                    <?php
                        wp_nav_menu( array(
                            'container'      => '',
                            'theme_location' => 'top',
                            'menu_class'     => 'ph-nav',
                        ) );
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="ph-social-link float-md-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--pre header end-->
    <!--header start-->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 ub-hamburger">
                    <div class="ub-hamburger-icon"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-7 order-lg-1 order-1 text-lg-left text-center">
                    <a href="#" class="logo ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo@2x.png 2x" alt="">
                    </a>
                </div>
                <div class="col-lg-8 order-lg-2 order-3">
                    <a href="#" class="top-bar-ad">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-ads.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!--main nav start-->
        <div class="main-nav-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light p-0 mb-lg-2 mt-lg-2">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php
                                    wp_nav_menu( array(
                                        'container'      => '',
                                        'theme_location' => 'primary',
                                        'menu_class'     => 'navbar-nav mr-auto',
                                    ) );
                                ?>

                                <?php
                                    get_search_form();
                                ?>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--main nav end-->

    </header>
    <!--header end-->