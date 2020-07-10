<?php
/**
 * Template Name: HomePage
 */
use HasinHayder\WPHelper\Modules\Metabox;
use HasinHayder\WPHelper\Modules\Posts;
use HasinHayder\WPHelper\Modules\SinglePost;

get_header();
?>
<!--mid content start-->


<div class="container">
    <div class="row">
        <!--left sidebar start-->
        <div class="<?php lwhh_container_class();?>">
            <?php
            $lwhh_featured_posts = array_column( get_theme_mod( 'featured_posts', array() ), 'posts' );
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
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_fp ) ); ?>"
                                   class="cat"><?php echo SinglePost::get_single_category( $lwhh_fp ); ?></a>
                                <h2>
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_fp ) ); ?>"><?php echo get_the_title( $lwhh_fp ); ?></a>
                                </h2>
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

            <?php
            $lwhh_trending_posts = array_column( get_theme_mod( 'trending_posts', array() ), 'posts' );
            if ( count( $lwhh_trending_posts ) > 0 ) {
                ?>
                <!--post block start-->
                <div class="row">
                    <?php
                    foreach ( $lwhh_trending_posts as $lwhh_tp ) {
                        ?>
                        <div class="col-md-6">
                            <div class="post-block">
                                <div class="post-thumb">
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>">
                                        <?php
                                        echo get_the_post_thumbnail( $lwhh_tp, 'lwhh-post-thumb', array( 'class' => 'img-fluid' ) );
                                        ?>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>"><?php echo get_the_title( $lwhh_tp ); ?></a>
                                    </h2>
                                    <?php
                                    echo apply_filters( 'the_content', get_the_excerpt( $lwhh_tp ) );
                                    ?>
                                    <div class="post-cat">
                                        <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>" class="auth">
                                            <?php echo ucfirst( SinglePost::get_author_name( $lwhh_tp ) ); ?>
                                        </a>
                                        <span>|</span>
                                        <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>"
                                           class=""><?php echo get_the_date( 'M d, Y', $lwhh_tp ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <hr class="ub-divider">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>

            <?php

            $lwhh_trending_category   = get_theme_mod( 'trending_category', '' );
            $lwhh_trending_post_count = get_theme_mod( 'trending_post_count', 6 );
            if ( $lwhh_trending_category ) {
                $lwhh_trending_posts = Posts::get_posts_by_category_id( $lwhh_trending_category, $lwhh_trending_post_count );
                if ( count( $lwhh_trending_posts ) > 0 ) {
                    ?>
                    <div class="row">
                        <?php
                        foreach ( $lwhh_trending_posts as $lwhh_tp ) {
                            ?>
                            <div class="col-md-6">
                                <div class="similar-post">
                                    <div class="post-full">
                                        <div class="post-block post-list">
                                            <div class="post-thumb">
                                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>">
                                                    <?php
                                                    echo get_the_post_thumbnail( $lwhh_tp, 'thumbnail', array( 'class' => 'img-fluid' ) );
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h2 class="post-title title-xs">
                                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>"><?php echo get_the_title( $lwhh_tp ); ?></a>
                                                </h2>
                                                <div class="post-cat">
                                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_tp ) ); ?>"
                                                       class=""><?php echo get_the_date( 'M d, Y', $lwhh_tp ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="ub-divider">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!--post block end-->
                    <?php
                }
            }
            ?>

            <!--post block title start-->
            <h2 class="post-block-title txt-danger">
                Latest News
            </h2>
            <!--post block title end-->
            <?php
            $lwhh_latest_posts = Posts::get_latest_posts( get_option( 'posts_per_page' ) );
            foreach ( $lwhh_latest_posts as $lwhh_lp ) {
                $lwhh_extra = '';
                if ( get_post_format( $lwhh_lp ) == 'video' ) {
                    $lwhh_extra = 'post-video';
                }
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-block post-list <?php echo esc_attr( $lwhh_extra ); ?>">
                            <?php
                            if ( has_post_thumbnail( $lwhh_lp ) ) {
                                ?>
                                <div class="post-thumb">
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>">
                                        <?php echo get_the_post_thumbnail( $lwhh_lp, 'lwhh-post-thumb', array( 'class' => 'img-fluid' ) );; ?>
                                    </a>
                                    <?php
                                    if ( get_post_format( $lwhh_lp ) == 'video' ) {
                                        $lwhh_video_url = Metabox::get_meta_value( $lwhh_lp->ID, 'video_url' );
                                        echo '<a href="' . esc_url( $lwhh_video_url ) . '" class="video-btn popup-youtube"><i class="fa fa-play"></i></a>';
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="post-content">
                                <h2 class="post-title title-md">
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>"><?php echo get_the_title( $lwhh_lp ); ?></a>
                                </h2>
                                <?php echo apply_filters( 'the_content', get_the_excerpt( $lwhh_lp ) );; ?>
                                <div class="post-cat">
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>" class="auth">
                                        <?php echo ucfirst( SinglePost::get_author_name( $lwhh_lp ) ); ?>
                                    </a>
                                    <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>"
                                       class=""><?php echo get_the_date( 'M d, Y', $lwhh_lp ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ub-divider">
                <?php
            }
            ?>


            <!--post block title start-->
            <h2 class="post-block-title txt-danger">
                <?php echo esc_html(get_theme_mod('bottom_heading')); ;?>
            </h2>
            <!--post block title end-->
            <?php 
            $bottom_featured_post = get_theme_mod('bottom_featured_post');
            if($bottom_featured_post){
                $lwhh_bp = get_post($bottom_featured_post);
            ?>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="post-block">
                        <div class="post-thumb">
                            <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>">
                                <?php echo get_the_post_thumbnail( $lwhh_bp, 'lwhh-featured-post', array( 'class' => 'img-fluid' ) );; ?>
                            </a>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title title-sm">
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>">
                                    <?php echo get_the_title($lwhh_bp) ;?>
                                </a>
                            </h2>
                            <?php echo apply_filters( 'the_content', get_the_excerpt( $lwhh_bp ) );; ?>
                            <div class="post-cat">
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>"
                                    class="auth">
                                    <?php echo ucfirst( SinglePost::get_author_name( $lwhh_bp ) ); ?>
                                </a>
                                <span>|</span>
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>" class="">
                                    <?php echo get_the_date( 'M d, Y', $lwhh_bp ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            }
            ?>
            <?php

            $lwhh_bottom_category   = get_theme_mod( 'bottom_category', '' );
            $lwhh_bottom_post_count = get_theme_mod( 'bottom_post_count', 6 );
            if ( $lwhh_bottom_category ) {
                $lwhh_bottom_posts = Posts::get_posts_by_category_id( $lwhh_bottom_category, $lwhh_bottom_post_count );
                if ( count( $lwhh_bottom_posts ) > 0 ) {
                    ?>
                    <div class="row">
                        <?php
                        foreach ( $lwhh_bottom_posts as $lwhh_bp ) {
                            ?>
                            <div class="col-md-6">
                                <div class="post-block">
                                    <div class="post-thumb">
                                        <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>">
                                            <?php echo get_the_post_thumbnail( $lwhh_bp, 'lwhh-post-thumb', array( 'class' => 'img-fluid' ) );; ?>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>">
                                                <?php echo get_the_title($lwhh_bp) ;?>
                                            </a>
                                        </h2>
                                        <?php echo apply_filters( 'the_content', get_the_excerpt( $lwhh_bp ) );; ?>
                                        <div class="post-cat">
                                            <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>"
                                               class="auth">
                                                <?php echo ucfirst( SinglePost::get_author_name( $lwhh_bp ) ); ?>
                                            </a>
                                            <span>|</span>
                                            <a href="<?php echo esc_url( get_the_permalink( $lwhh_bp ) ); ?>" class="">
                                                <?php echo get_the_date( 'M d, Y', $lwhh_bp ); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="ub-divider">
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                }
            }
            ?>
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
        <?php 
        $lwhh_sidebar_display = get_theme_mod('sidebar_display','on');
        if('on'==$lwhh_sidebar_display){
            ?>
        <div class="col-md-4">
            <div class="ads-place widget">
                <a href="#"><img class="img-fluid"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/w-ads.jpg" alt=""></a>
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
                                <a href="#"><img class="img-fluid"
                                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs1.jpg"
                                                 alt=""></a>
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
                                <a href="#"><img class="img-fluid"
                                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs2.jpg"
                                                 alt=""></a>
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
                                <a href="#"><img class="img-fluid"
                                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xs3.jpg"
                                                 alt=""></a>
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
        <?php
        }
        ?>
        <!--right sidebar end-->
    </div>
</div>
<!--mid content end-->
<?php
get_footer();
?>

