<?php 

use HasinHayder\WPHelper\Modules\Posts;
use HasinHayder\WPHelper\Modules\Metabox;
use HasinHayder\WPHelper\Modules\SinglePost;

get_header();

?>

<!--page title start-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="search-title"><?php echo get_bloginfo('name'); ?></h3>
            </div>
        </div>
    </div>
</div>
<!--page title end-->

<!--mid content start-->
<div class="container">
    <div class="row">
        <!--left sidebar start-->
        <div class="<?php lwhh_container_class(); ?>">

            <?php
            $lwhh_latest_posts = Posts::get_latest_posts(get_option('posts_per_page'));
            foreach($lwhh_latest_posts as $lwhh_lp) {
               $lwhh_extra = '';
               if (get_post_format($lwhh_lp) == 'video') {
                   $lwhh_extra = 'post-video';
               }
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="post-block post-list <?php echo esc_attr($lwhh_extra); ?> ">
                       <?php if (has_post_thumbnail(  )): ?>
                           <div class="post-thumb">

                           <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>">
                               <?php
                                echo get_the_post_thumbnail( $lwhh_lp, 'lwhh-post-thumb', ['class'=>'img-fluid'] );
                                    ?>
                           </a>
                           <?php
                           if (get_post_format($lwhh_lp) == 'video') {
                                   $lwhh_video_url = Metabox::get_meta_value($lwhh_lp->ID,'video_url');
                                   echo '<a href="'.esc_url($lwhh_video_url).'" class="video-btn popup-youtube"><i class="fa fa-play"></i></a>';
                               }
                           ?>
                           </div>
                           <?php endif ?>

                        <div class="post-content">
                            <h2 class="post-title title-md">
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>"><?php echo esc_html(get_the_title($lwhh_lp)); ?></a>
                            </h2>
                            <?php
                            echo apply_filters( 'the_content', get_the_excerpt( $lwhh_tp ) );
                             ?>
                            <div class="post-cat">
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>" class="auth">
                                   <?php echo ucfirst(SinglePost::get_author_name( $lwhh_lp)) ; ?>
                                </a>
                                <a href="<?php echo esc_url( get_the_permalink( $lwhh_lp ) ); ?>" class=""><?php echo esc_html(get_the_date('M d, Y',$lwhh_lp)); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="ub-divider">

            <?php 
            } 
            ?>

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

        <?php
         $bottom_featured_post = get_theme_mod('bottom_featured_post');
         if($bottom_featured_post){
            $lwhh_bp = get_post($bottom_featured_post);
         
         ?>
        <!--right sidebar start-->
        <div class="col-md-3">
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
        <!--right sidebar end-->
        <?php 
        }
         ?>
    </div>
</div>
<!--mid content end-->

<?php 
get_footer();
?>

