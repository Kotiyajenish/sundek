<?php

/**
 * Template Name: contact
 */
get_header();
$contact_banner_image = get_field('contact_banner_image');

// Address section
$address_text = get_field('address_text');
$address_content = get_field('address_content');

// Phone number section
$phone_text = get_field('phone_text');
$phone_number = get_field('phone_number');

// Email section
$email_text = get_field('email_text');
$email_address = get_field('email_address');

// Follow us section
$follow_us_text = get_field('follow_us_text');
$social_media_facebook  = get_field('social_media_facebook');
$social_media_twitter = get_field('social_media_twitter');
$social_media_google = get_field('social_media_google');
$social_media_behance = get_field('social_media_behance');

// Contact form section
$contact_form_text = get_field('contact_form_text');
$contact_form_content = get_field('contact_form_content');
$contact_form_shortcode = get_field('contact_form_shortcode');
?>
<style type="text/css">
    .contact-info-wrap {
        background-color: #efefef;
        padding: 50px 30px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
    .contact-from-wrap {
        /*box-shadow: 0 25px 25px 25px #efefef;*/
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 50px;
    }
    .single-contact-info-wrap .info-content p.width {
        width: 100%;
    }
    iframe {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
</style>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $contact_banner_image['url'];?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Project area -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="contact-info-wrap">
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title"><?php echo $address_text;?></h3>
                            <p class="width">
                                <?php echo $address_content;?>
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title"><?php echo $phone_text;?></h3>
                            <p><a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a></p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title"><?php echo $email_text;?></h3>
                            <p><a href="mailto:<?php echo $email_address;?>"><?php echo $email_address;?></a></p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title"><?php echo $follow_us_text;?></h3>
                            <div class="social-icon-style mt-4">
                                <a class="facebook" href="<?php echo $social_media_facebook;?>"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="<?php echo $social_media_twitter;?>"><i class="fa fa-twitter"></i></a>
                                <a class="google-plus" href="<?php echo $social_media_google;?>"><i class="fa fa-google-plus"></i></a>
                                <a class="behance" href="<?php echo $social_media_behance;?>"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14700.2758800327!2d72.4410607!3d22.9108268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bdd4924279e3%3A0x7e5454e5b6e342b9!2sSundek%20Sports%20%2F%20Sundek%20Interio%20Pvt%20Ltd%20-%20Works!5e0!3m2!1sen!2sin!4v1708674385026!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row" style="margin-top: 60px;">
            <div class="col-lg-12 col-md-6">
                <div class="contact-from-wrap">
                    <div class="about-content">
                        <h2 class="title"><?php echo $contact_form_text;?></h2>
                        <p style="width: 100%;margin: 10px 0 20px 0;"><?php echo $contact_form_content;?></p>
                    </div>
                    <?php echo do_shortcode($contact_form_shortcode); ?>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  get_footer();
?>