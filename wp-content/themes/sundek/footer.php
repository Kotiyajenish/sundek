<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sundek
 */

 $footer_logo  = get_field('footer_logo', 'option');
 $footer_content = get_field('footer_content', 'option');
 $footer_menu_text = get_field('footer_menu_text', 'option');
 $footer_contact = get_field('footer_contact', 'option');
 $footer_contact_text = get_field('footer_contact_text', 'option');
 $footer_address =  get_field('footer_address', 'option');
 $footer_phone_num = get_field('footer_phone_num', 'option');
 $footer_email = get_field('footer_email', 'option');
 $footer_facebook_social_media = get_field('footer_facebook_social_media', 'option');
 $footer_twitter_social_media = get_field('footer_twitter_social_media', 'option');
 $footer_google_social_media = get_field('footer_google_social_media', 'option');
 $copyright_text = get_field('copyright_text', 'option');
 $copyright_link = get_field('copyright_link', 'option');
?>
<footer class="section bg-black site-footer" id="colophon">
<div class="footer-top" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb">
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo $footer_logo['url'];?>" alt="logo" style="height:100px;"></a>
                            </div>
                            <p style="width: 95%;text-align: justify;"><?php echo $footer_content;?></p>
                            <div class="social-icon-style">
                                <a class="facebook" href="<?php echo $footer_facebook_social_media;?>"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="<?php echo $footer_twitter_social_media;?>"><i class="fa fa-twitter"></i></a>
                                <a class="google-plus" href="<?php echo $footer_google_social_media;?>"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb">
                        <div class="footer-widget footer-list">
                            <h3 class="footer-title"><?php echo $footer_menu_text;?></h3>
                                <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 mb">
                        <div class="footer-widget footer-list">
                            <h3 class="footer-title"><?php echo $footer_contact_text;?></h3>
                            <ul>
                                <li>
                                    <span class="title"><i class="fa fa-home"></i></span>
                                    <span class="desc">
                                        <?php echo $footer_address;?>
                                    </span>
                                </li>
                                <li>
                                    <span class="title"><i class="fa fa-phone"></i></span>
                                    <span class="desc"><a href="tel:<?php echo $footer_contact;?>"><?php echo $footer_contact;?></a></span>
                                </li>
                                <li>
                                    <span class="title"><i class="fa fa-envelope"></i></span>
                                    <span class="desc"><a href="mailto:<?php echo $footer_email;?>"><?php echo $footer_email;?></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>
                        Copyright ©<?php echo date("Y"); ?> <?php echo $copyright_text;?> <i class="fa fa-heart"></i> by <a href="<?php echo $copyright_link['url'];?>" style="color: white;text-decoration: underline;"> <?php echo $copyright_link['title'];?></a>
                    </p>
                </div>
            </div>
        </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>