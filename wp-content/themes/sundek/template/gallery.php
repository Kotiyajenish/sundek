<?php

/**
 * Template Name: gallery
 */
get_header();
$gallery_banner_image = get_field('gallery_banner_image');
?>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $gallery_banner_image['url'];?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Gallery</h2>
            <ul>
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!-- Gallery area -->
<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid">
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