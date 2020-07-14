<?php
if(!is_active_sidebar('blog-sidebar')){
    return;
}
         $bottom_featured_post = get_theme_mod('bottom_featured_post');
         if($bottom_featured_post){
            $lwhh_bp = get_post($bottom_featured_post);
         
         ?>
        <!--right sidebar start-->
        <div class="col-md-4">
            <?php 
            dynamic_sidebar( 'blog-sidebar' );
             ?>
            <!-- <div class="ads-place widget">
                <a href="#"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri();?>/assets/img/w-ads.jpg" alt=""></a>
            </div>
            <div class="widget">
                <h2 class="post-block-title txt-danger">
                    Category
                </h2>
                <ul>
                    <li><a href="#">Art</a> 12</li>
                    <li><a href="#">Food</a> 8</li>
                    <li><a href="#">Lifestyle</a> 10</li>
                    <li><a href="#">Movie</a> 6</li>
                    <li><a href="#">Music</a> 9</li>
                    <li><a href="#">Top</a> 13</li>
                    <li><a href="#">Travel</a> 5</li>
                </ul>
            </div>
            <div class="widget">
                <h2 class="post-block-title txt-danger">
                    Top Post
                </h2>

                <div class="similar-post">
                    <div class="post-full">
                        <div class="post-block post-list">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri();?>/assets/img/xs1.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-xs">
                                    <a href="#">Jessica Simpson Launches Sweet New Collection with Fun Show</a>
                                </h2>
                                <div class="post-cat">
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <div class="similar-post">
                    <div class="post-full">
                        <div class="post-block post-list">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri();?>/assets/img/xs2.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-xs">
                                    <a href="#">Jessica Simpson Launches Sweet New Collection with Fun Show</a>
                                </h2>
                                <div class="post-cat">
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <div class="similar-post">
                    <div class="post-full">
                        <div class="post-block post-list">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri();?>/assets/img/xs3.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-xs">
                                    <a href="#">Jessica Simpson Launches Sweet New Collection with Fun Show</a>
                                </h2>
                                <div class="post-cat">
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget widget-subscribe">
                <h6 class="">
                    Subscribe
                </h6>
                <p class="text-muted">Sign up and receive our newsletters</p>
                <form action="">
                    <input type="text" class="form-control mb-3">
                    <button class="btn btn-default btn-block">Subscribe</button>
                </form>
            </div>

            <div class="widget">
                <h2 class="post-block-title txt-danger">
                    Follow
                </h2>
                <div class="widget-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div> -->

        </div>
        <!--right sidebar end-->
        <?php 
        }
         ?>