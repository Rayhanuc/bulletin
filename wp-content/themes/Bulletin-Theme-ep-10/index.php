<?php
    use HasinHayder\WPHelper\Modules\SinglePost;
    get_header();
?>
    <!--mid content start-->


    <div class="container">
        <div class="row">
            <!--left sidebar start-->
            <div class="col-md-8">
                <?php
                    $lwhh_featured_posts = array_column( get_theme_mod( 'featured_posts', array() ), 'posts' );
                    print_r($lwhh_featured_posts);
                    if ( count( $lwhh_featured_posts ) > 0 ) {
                    ?>
                <!--news slider start-->
                <div class="owl-carousel owl-theme ha-slider ha-nav-regular">
                    <?php
                        foreach ( $lwhh_featured_posts as $lwhh_fp ) {
                            ?>
                    <div class="item">
                        <?php
                            echo get_the_post_thumbnail( $lwhh_fp, 'lwhh-featured-post' );
                                ?>
                        <div class="ha-carousel-content">
                            <a href="#" class="cat"><?php echo SinglePost::get_single_category($lwhh_fp) ;?></a>
                            <h2><a href="<?php echo esc_url( get_the_permalink( $lwhh_fp ) ); ?>"><?php echo get_the_title( $lwhh_fp ); ?></a></h2>
                        </div>
                    </div>
                        <?php
                            }
                            ?>

                </div>
                <!--news slider end-->
                <?php
                    }
                ?>

                <!--post block title start-->
                <h2 class="post-block-title txt-danger">
                    Trending
                </h2>
                <!--post block title end-->

                <!--post block start-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-thumb-sm.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Hiker found dead at Circle X Ranch in Santa</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                    </div>
                    <div class="col-md-6">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-thumb-sm2.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Remembering Flagstaff neighbors: Recent</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs1.jpg" alt=""></a>
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
                    </div>
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs2.jpg" alt=""></a>
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
                    </div>
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs3.jpg" alt=""></a>
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
                    </div>
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs4.jpg" alt=""></a>
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
                    </div>
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs5.jpg" alt=""></a>
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
                    </div>
                    <div class="col-md-6">
                        <div class="similar-post">
                            <div class="post-full">
                                <div class="post-block post-list">
                                    <div class="post-thumb">
                                        <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs6.jpg" alt=""></a>
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
                    </div>
                </div>
                <!--post block end-->

                <!--post block title start-->
                <h2 class="post-block-title txt-danger">
                    Latest News
                </h2>
                <!--post block title end-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-thumb-md.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="#">Beauty must-have: A luxurious body perfume from Milan city</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <a href="#" class="">Oct 2, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-thumb-md2.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="#">Beauty must-have: A luxurious body perfume from Milan city</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <a href="#" class="">Oct 2, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list post-video">
                            <div class="post-thumb">
                                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-thumb-md-b.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=I6-bvYNFdUA" class="video-btn popup-youtube"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="#">Beauty must-have: A luxurious body perfume from Milan city</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <a href="#" class="">Oct 2, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">

                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list">
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="#">Bipartisan ‘red flag’ gun laws plan has support in Congress</a>
                                </h2>
                                <p>High school classmates of the gunman who killed nine people in Dayton, Ohio, say he was suspended years ago for compiling Ohio, say he was suspended years ago for compiling</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <a href="#" class="">Oct 2, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list">
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="#">He went to jail as a fake doctor. Now he’s a real one: The saga of Adam Litwin, MD</a>
                                </h2>
                                <p>High school classmates of the gunman who killed nine people in Dayton, Ohio, say he was suspended years ago for compiling Ohio, say he was suspended years ago for compiling</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <a href="#" class="">Oct 2, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">

                <!--post block title start-->
                <h2 class="post-block-title txt-danger">
                    Travel News
                </h2>
                <!--post block title end-->

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-big3.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Hiker found dead at Circle X Ranch in Santa</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sm1.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Hiker found dead at Circle X Ranch in Santa</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sm2.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Hiker found dead at Circle X Ranch in Santa</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                    </div>
                    <div class="col-md-6">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sm3.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Remembering Flagstaff neighbors: Recent</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                        <div class="post-block">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sm4.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="#">Hiker found dead at Circle X Ranch in Santa</a>
                                </h2>
                                <p>Aenean sollicitudin, lorehis ale bibendum auctor, nisise elit consequat ipsum, necos sagittis sem nibh id elit. Duis seodo lgor amet nibh vulputate cursus a sit amet auris accum</p>
                                <div class="post-cat">
                                    <a href="#" class="auth">Scott Green</a>
                                    <span>|</span>
                                    <a href="#" class="">Oct 12, 2019</a>
                                </div>
                            </div>
                        </div>
                        <hr class="ub-divider">
                    </div>
                </div>

                <!--<a href="#!" class="more-news-btn">Load More News ...</a>-->

                <!--pagination start-->
                <nav class="my-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!--pagination end-->

            </div>
            <!--left sidebar end-->

            <!--right sidebar start-->
            <div class="col-md-4">
                <div class="ads-place widget">
                    <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/w-ads.jpg" alt=""></a>
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
                                    <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs1.jpg" alt=""></a>
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
                                    <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs2.jpg" alt=""></a>
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
                                    <a href="#"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs3.jpg" alt=""></a>
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
            <!--right sidebar end-->
        </div>
    </div>
    <!--mid content end-->
<?php
    get_footer();
?>

