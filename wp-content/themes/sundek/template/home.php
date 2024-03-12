<?php

/**
 * Template Name: home
 */
get_header();


// About area
$about_h2 = get_field('about_h2');
$about_content = get_field('about_content');
$qualified_h3 = get_field('qualified_h3');
$qualified_content = get_field('qualified_content');
$professional_text = get_field('professional_text');
$professional_content = get_field('professional_content');
$about_link = get_field('about_link');
$about_right_image = get_field('about_right_image');

// Working on
$working_background_image = get_field('working_background_image');
$working_text = get_field('working_text');
$working_content = get_field('working_content');
$meet_the_client = get_field('meet_the_client');
$make_ideas = get_field('make_ideas');
$development = get_field('development');
$test_release = get_field('test_release');

//Latest product
$latest_text = get_field('latest_text');
$latest_content = get_field('latest_content');
$latest_post_btn = get_field('latest_post_btn');

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
?>
<style type="text/css">
    .service .service-content-wrap {
        position: initial;
        border: 1px solid #999999;
    }

    .service .service-content-wrap .service-content {
        padding: 40px 20px;
        height: 370px;
    }

    .service:hover .service-content-wrap {
        background: #000000db;
    }

    .service .service-content-wrap .service-content p {
        text-align: justify;
    }

    .clsTitle {
        font-size: 28px;
        color: #000000;
        margin: 0 0 2px;
    }
</style>
<!-- slider area -->
<div class="hero-area">
    <div class="hero-slider-active swiper">
        <div class="swiper-wrapper">
            <?php
            if (have_rows('home_slider')) :
                while (have_rows('home_slider')) : the_row();
                    $banner_home_image = get_sub_field('banner_home_image');
                    $banner_h1_text = get_sub_field('banner_h1_text');
                    $banner_content = get_sub_field('banner_content');
                    $banner_btn = get_sub_field('banner_btn');
            ?>
                    <div class="swiper-slide">
                        <div class="intro-section height-100vh slider-content-center bg-img single-animation-wrap slider-bg-color-1 overly-style-1 opacity-point-4" style="background-image:url(<?php echo $banner_home_image['url']; ?>)">
                            <div class="container">
                                <div class="hero-content-1 slider-animated-1 text-center">
                                    <h1 class="title animated"><?php echo $banner_h1_text; ?></h1>
                                    <p class="animated"><?php echo $banner_content; ?></p>
                                    <a href="<?php echo $banner_btn['url']; ?>" class="btn btn-primary btn-hover-dark animated"><?php echo $banner_btn['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="home-slider-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
        <div class="home-slider-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
    </div>
</div>
<!-- About area -->
<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 mb-n6">
            <div class="col align-self-center mb-6">
                <div class="about-content">
                    <h2 class="title"><?php echo $about_h2; ?></h2>
                    <p><?php echo $about_content; ?></p>
                </div>
                <div class="working-away-wrap">
                    <div class="working-away">
                        <div class="working-away-icon">
                            <i class="dlicon ui-1_home-51"></i>
                        </div>
                        <div class="working-content">
                            <h3 class="title"><?php echo $qualified_h3; ?></h3>
                            <p><?php echo $qualified_content; ?></p>
                        </div>
                    </div>
                    <div class="working-away">
                        <div class="working-away-icon">
                            <i class="dlicon design_measure-big"></i>
                        </div>
                        <div class="working-content">
                            <h3 class="title"><?php echo $professional_text; ?></h3>
                            <p><?php echo $professional_content; ?></p>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $about_link['url']; ?>" class="btn btn-primary btn-hover-dark"><?php echo $about_link['title']; ?></a>
            </div>
            <div class="col mb-6">
                <div class="about-banner">
                    <img src="<?php echo $about_right_image['url']; ?>" alt="banner">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service area -->
<div class="section section-padding" style="padding-top: 0px;">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
            <?php
            if (have_rows('service_section')) :
                while (have_rows('service_section')) : the_row();
                    $service_h3_text = get_sub_field('service_h3_text');
                    $service_content = get_sub_field('service_content');
            ?>
                    <div class="col mb-6">
                        <div class="service text-center">
                            <div class="service-content-wrap">
                                <div class="service-content">
                                    <div class="service-icon">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <h3 class="title"><?php echo $service_h3_text; ?></h3>
                                    <p><?php echo $service_content; ?></p>
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
<!-- Working Process area -->
<div class="section section-padding bg-img overly-style-1 opacity-point-7" style="background-image:url(<?php echo $working_background_image['url']; ?>)">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title white"><?php echo $working_text; ?></h2>
            <p class="white"><?php echo $working_content; ?></p>
        </div>
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
            <div class="col mb-6">
                <div class="working-process text-center">
                    <i class="dlicon users-2_b-meeting"></i>
                    <h4 class="title"><?php echo $meet_the_client; ?></h4>
                </div>
            </div>
            <div class="col mb-6">
                <div class="working-process text-center">
                    <i class="dlicon business_bulb-62"></i>
                    <h4 class="title"><?php echo $make_ideas; ?></h4>
                </div>
            </div>
            <div class="col mb-6">
                <div class="working-process text-center">
                    <i class="dlicon business_hierarchy-54"></i>
                    <h4 class="title"><?php echo $development; ?></h4>
                </div>
            </div>
            <div class="col mb-6">
                <div class="working-process text-center">
                    <i class="dlicon business_building"></i>
                    <h4 class="title"><?php echo $test_release; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product area -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title"><?php echo $latest_text; ?></h2>
            <p><?php echo $latest_content; ?></p>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
            <?php
            $category_slug = 'equipment_category';
            $args = array(
                'post_type'      => 'product', // Custom post type name
                'posts_per_page' => -1, // Retrieve all posts
                'order' => 'ASC',
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category', // Taxonomy name
                        'field'    => 'slug', // Use 'slug' or 'id' depending on how you're defining the category
                        'terms'    => $category_slug, // Category slug or ID
                    ),
                ),
            );
            $products_query = new WP_Query($args);
            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
            ?>
            <div class="col mb-6">
                <div class="blog-wrap">
                    <div class="blog-img mb-4">
                        <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                    </div>
                    <div class="blog-content" style="text-align: center;">
                        <h4 class="clsTitle" style="color: #151B54;"><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="text-center mt-15">
            <a href="<?php echo $latest_post_btn['url']; ?>" class="btn btn-primary btn-hover-dark animated latest-btn"><?php echo $latest_post_btn['title']; ?></a>
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

<?php
get_footer();
?>