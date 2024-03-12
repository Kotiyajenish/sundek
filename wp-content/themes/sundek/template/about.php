<?php

/**
 * Template Name: about
 */
get_header();

//about section
$about_banner_image = get_field('about_banner_image');
$about_title = get_field('about_title');
$about_content = get_field('about_content');

// Project section
$project_section_image = get_field('project_section_image');
$project_worked_count = get_field('project_worked_count');
$project_worked_text = get_field('project_worked_text');
$expert_count = get_field('expert_count');
$expert_text = get_field('expert_text');
$happy_count = get_field('happy_count');
$happy_text = get_field('happy_text');
$upcomming_count = get_field('upcomming_count');
$upcomming_text = get_field('upcomming_text');

//OUR CERTIFICATES
$certificate_title  = get_field('certificate_title');
$certificate_description = get_field('certificate_description');

?>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $about_banner_image['url']; ?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>About Us</h2>
            <ul>
                <li><a href="<?php echo home_url(); ?>/index">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- About area -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="about-content">
                    <h2 class="title"><?php echo $about_title; ?></h2>
                    <?php echo $about_content; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact area -->
<div class="section section-padding bg-img overly-style-1 opacity-point-7" style="background-image:url(<?php echo $project_section_image['url']; ?>)">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon travel_bag"></i>
                    <span class="odometer count-style-2" data-count-to="<?php echo $project_worked_count; ?>"></span>
                    <h4 class="title"><?php echo $project_worked_text; ?></h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon users_man-23"></i>
                    <span class="odometer count-style-2" data-count-to="<?php echo $expert_count; ?>"></span>
                    <h4 class="title"><?php echo $expert_text; ?></h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon emoticons_smile"></i>
                    <span class="odometer count-style-2" data-count-to="<?php echo $happy_count; ?>"></span>
                    <h4 class="title"><?php echo $happy_text; ?></h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon tech-2_firewall"></i>
                    <span class="odometer count-style-2" data-count-to="<?php echo $upcomming_count; ?>"></span>
                    <h4 class="title"><?php echo $upcomming_text; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team  area -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title"><?php echo $certificate_title; ?></h2>
            <p><?php echo $certificate_description; ?></p>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid hello-manage">
            <?php
            if (have_rows('image_main_section')) :
                while (have_rows('image_main_section')) : the_row();
                    $our_image = get_sub_field('our_image');
            ?>
            <div class="col mb-6 grid-item">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="<?php echo $our_image['url']; ?>"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="javascript:void(0);">
                            <img src="<?php echo $our_image['url']; ?>" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <h3 class="title">Living Room Interior Design</h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>