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
                <h3 class="search-title">
                    <?php 
                    if (is_search()) {
                        echo esc_html(get_search_query(  ));
                    } else {
                        echo get_bloginfo('name');
                    }
                    ?>                        
                </h3>
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
            /*$lwhh_latest_posts = Posts::get_latest_posts(get_option('posts_per_page'));
            foreach($lwhh_latest_posts as $lwhh_lp) {*/
            while(have_posts()) {
                the_post();
                $lwhh_lp = $post;
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
                    <?php
                    lwhh_paginate_links();
                    ?>
                </ul>
            </nav>
            <!--pagination end-->

        </div>
        <!--left sidebar end-->

        <?php
        get_sidebar();
        ?>
    </div>
</div>
<!--mid content end-->

<?php 
get_footer();
?>

