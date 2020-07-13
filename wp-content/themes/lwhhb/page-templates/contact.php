<?php 
/*
Template Name: Contact Page
*/


if (isset($_POST['submit'])) {
    if (wp_verify_nonce($_POST['lwhh-contact-nonce'],'lwhh-contact')) {
        $lwhh_sender_name = sanitize_text_field($_POST['contact_name']);
        $lwhh_sender_email = sanitize_text_field($_POST['contact_email']);
        $lwhh_sender_message = sanitize_text_field($_POST['contact_message']);
        $_lwhh_message = sprintf("Sender Name: %s\nSender Email: %s\n%s",$lwhh_sender_name,$lwhh_sender_email,$lwhh_sender_message);
        wp_mail(get_option('admin_email'),'Someone tried to contact you',$_lwhh_message);
        wp_redirect(get_the_permalink());
    }
}

the_post();
get_header();
 ?>

<!--page title start-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="search-title">
                    <?php the_title(); ?>
                </h3>
            </div>
        </div>
    </div>
</div>
<!--page title end-->


<!--mid content start-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="row mb-5">
                <div class="col-10">
                    <div class="contact-heading">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <form role="form" action="<?php the_permalink(); ?>" class="contact-form" method="POST">
                <?php
                wp_nonce_field( 'lwhh-contact','lwhh-contact-nonce' );
                ?>
                <div class="row">
                    <div class=" col-md-6">
                        <div class="form-group">
                            <input type="text" name="contact_name" class="form-control" placeholder="Name*" required="">
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="form-group ">
                            <input type="email" name="contact_email" class="form-control" placeholder="Email*" required="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <textarea id="message" name="contact_message" rows="5" placeholder="Write your message*" class="form-control" required=""></textarea>
                    </div>
                </div>
                <div class=" mt-md-3">
                    <button type="submit" name="submit" class="btn btn-black px-4">
                        <?php _e('Submit Message','lwhhb'); ?>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="contact-address text-center px-5 mb-5">
                <i class="fa fa-home"></i>
                <p>House# 404, Road# 007, Dhaka, Bangladesh</p>
            </div>
            <div class="contact-address text-center px-5 mb-5">
                <i class="fa fa-envelope"></i>
                <p>info@learnwithhasinhayder.com
                <br>contact@learnwithhasinhayder.com</br>
            </div>

        </div>
    </div>
</div>
<!--mid content end-->

<?php 
get_footer();
 ?>

