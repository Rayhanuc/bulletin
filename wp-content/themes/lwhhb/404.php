<?php
get_header();
?>



<!--mid content start-->
<div class="container">
    <div class="row justify-content-center text-center mt-5 mb-5">
        <div class="col-md-8">
            <h1 class="title-404"><?php _e('404','lwhhb'); ?></h1>
            <h2 class="font-weight-light"><?php _e('Oops! That page can’t be found.','lwhhb'); ?></h2>
            <a href="<?php echo home_url(); ?>" class="btn btn-danger mt-5"><?php _e('Back to Home','lwhhb'); ?></a>
        </div>
    </div>
</div>
<!--mid content end-->

<?php
get_footer();
?>