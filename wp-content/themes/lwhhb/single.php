<?php
the_post();
get_header();
?>

<!--mid content start-->
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    <div class="post-block post-single">
                        <div class="post-content">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail( 'lwhh-featured-post',['class'=>'img-fluid rounded mb-4'] );
                            }
                            ?>
                            <div class="post-meta">
                                <ul class="cat">
                                    <?php
                                    lwhh_display_categories();
                                    ?>
                                </ul>
                            </div>
                            <h1 class="post-title font-weight-bold">
                                <?php 
                                the_title();
                                 ?>

                            </h1>
                            <div class="post-cat mb-5 d-inline-block">
                                <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) ?>" class="auth"><?php the_author(); ?></a>
                                <a href="#" class=""><?php the_date(); ?></a>
                            </div>
                            <div class="social-share d-inline-block float-lg-right m-lg-0 mb-3 mt-0">
                                <a target="_blank" href="<?php echo esc_url(lwhh_facebook_share_url()); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="<?php echo esc_url(lwhh_twitter_share_url()); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#!" class="mail"><i class="fa fa-envelope"></i></a>
                                <a target="_blank" href="#!" onclick="javascript:window.print();" class="printer"><i class="fa fa-print"></i></a>
                                <a target="_blank" href="#!" onclick="javascript:window.print();" class="mail"><i class="fa fa-file-pdf-o"></i></a>
                            </div>

                            <?php
                            the_content();
                            ?>

                            <div class="mb-0 post-tags">
                                <h6 class="d-inline-block mb-0">Tags:</h6>
                                <?php
                                lwhh_display_tags();
                                ?>
                            </div>

                            <div class="social-share">
                                <a target="_blank" href="<?php echo esc_url(lwhh_facebook_share_url()); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="<?php echo esc_url(lwhh_twitter_share_url()); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="#!" class="mail"><i class="fa fa-envelope"></i></a>
                                <a target="_blank" href="#!" onclick="javascript:window.print();" class="printer"><i class="fa fa-print"></i></a>
                                <a target="_blank" href="#!" onclick="javascript:window.print();" class="mail"><i class="fa fa-file-pdf-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--comments start-->
                    
                    <?php 
                    comments_template();
                     ?>
                    <!--comments end-->

                    <!--comment form start-->
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">
                            Leave a Comment
                        </h3>

                        <form role="form" class="comment-form">
                            <div class="row">
                                <div class=" col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*" required="">
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-group ">
                                        <input type="email" class="form-control" placeholder="Email*" required="">
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" placeholder="Website" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <textarea id="message" rows="5" placeholder="Comments*" class="form-control"
                                              required=""></textarea>
                                </div>
                            </div>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="text-center mt-md-5">
                                <button type="submit" class="btn btn-black">Send</button>
                            </div>
                        </form>
                    </div>
                    <!--comment form end-->
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="ads-place widget">
                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/w-ads.jpg" alt=""></a>
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
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/xs1.jpg" alt=""></a>
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
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/xs2.jpg" alt=""></a>
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
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/xs3.jpg" alt=""></a>
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
            </div>

        </div>
    </div>
</div>
<!--mid content end-->

<?php
get_footer();
?>


