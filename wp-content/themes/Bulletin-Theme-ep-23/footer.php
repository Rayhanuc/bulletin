<!--footer start-->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="footer-info">
                        <div class="f-logo">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" srcset="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo@2x.png 2x" alt="">
                        </div>
                        <p>High school classmates of the gunman who killed nine people</p>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/play-store.jpg" srcset="<?php echo get_stylesheet_directory_uri();?>/assets/img/play-store@2x.jpg 2x" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <h3>Quick Links</h3>
                    <?php
                        wp_nav_menu( array(
                            'container'      => '',
                            'theme_location' => 'footer-1',
                        ) );
                    ?>
                </div>
                <div class="col-md-2 col-6">
                    <h3>Features</h3>
                    <?php
                        wp_nav_menu( array(
                            'container'      => '',
                            'theme_location' => 'footer-3',
                        ) );
                    ?>
                </div>
                <div class="col-md-2 col-6">
                    <h3>More</h3>
                    <?php
                        wp_nav_menu( array(
                            'container'      => '',
                            'theme_location' => 'footer-3',
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <?php 
    wp_footer();
    ?>
</body>
</html>