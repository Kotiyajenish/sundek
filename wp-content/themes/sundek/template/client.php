<?php

/**
 * Template Name: client
 */
get_header();

$client_banner_image = get_field('client_banner_image');
?>
<style type="text/css">
	.single-sidebar-blog {
        margin: 0 0 15px !important;
        padding: 0 0 15px !important;
        border-bottom: 2px solid #dee0e4 !important;
    }
    .single-sidebar-blog .sidebar-blog-content {
        margin: 0 !important;
    }
</style>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $client_banner_image['url'];?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Our Clients</h2>
            <ul>
                <li><a href="<?php echo home_url(); ?>/index">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Our Clients</li>
            </ul>
        </div>
    </div>
</div>
<!-- Project area -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('client_name_section')) :
                while (have_rows('client_name_section')) : the_row();
                    $client_name = get_sub_field('client_name');
                    $client_city = get_sub_field('client_city');
            ?>
            <div class="col-lg-3">
                <div class="single-sidebar-blog">
                    <div class="sidebar-blog-content">
                        <h4 class="title"><?php echo $client_name;?></h4>
                        <span class="category"><?php echo $client_city;?></span>
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