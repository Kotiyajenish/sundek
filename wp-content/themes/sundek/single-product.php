<?php
get_header();
// Banner section
$product_banner_image = get_field('product_banner_image');

//Product Overview
$product_details_overview_text = get_field('product_details_overview_text');
$product_details_overview_content = get_field('product_details_overview_content');

//Additional Information
$additional_information_text = get_field('additional_information_text');

//Benifits
$benifits_text = get_field('benifits_text');
$benifits_content = get_field('benifits_content');


//Image Gallery
$image_gallery_text = get_field('image_gallery_text');

?>
<style type="text/css">
    html {
        scroll-behavior: smooth;
    }

    html {
        scroll-behavior: smooth;
    }

    .section-padding {
        padding: 30px 0px 0px 0px !important;
    }

    .project-details-content .title span {
        color: #151B54;
    }

    .project-menu-style .btn-project {
        font-size: 20px;
        font-weight: bold;
        margin-right: 10px;
        background-color: #151B54;
        color: white;
        padding: 10px 40px;
    }

    .project-details-content p {
        width: 100%;
    }

    tr td:first-child {
        background-color: #151B54;
        color: white !important;
        border-bottom: 1px solid #ffffff !important;
        font-weight: 600;
    }

    table {
        border: 2px solid #151B54;
        border-color: #151B54 !important;
    }

    .service-details-content .title span {
        color: #151B54;
    }

    .service-details-content .service-details-list-wrap {
        margin: 0;
    }

    .service-details-content .service-details-list-wrap .service-details-list-content-wrap .service-details-list .single-service-details-list .service-details-list-degit .number {
        font-size: 25px;
    }

    .service-details-content .service-details-list-wrap .service-details-list-content-wrap .service-details-list .single-service-details-list .service-details-list-degit {
        margin-right: 10px;
    }

    .project-menu-style .btn-project.active,
    .project-menu-style .btn-project:hover {
        color: #ffffff;
    }

    /*
    .sticky-div {
        background-color: white;
        position: sticky;
        top: 50px;
        padding: 10px 0px;
    }

    .start {
        height: 100px;
    }

    .end {
        height: 5000px;
    }
    */
    .fixedElement {
        background-color: #ffffff;
        position: static;
        top: 50px;
        width: 100%;
        z-index: 100;
    }
</style>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $product_banner_image['url']; ?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Product Details</h2>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</div>

<div class="section fixedElement" style="padding-top: 60px;">
    <div class="container">
        <div class="project-menu-style mb-5" style="border-bottom: 2px solid #151B54;padding-bottom: 15px;">
            <a class="btn-project" href="#overview">Overview</a>
            <a class="btn-project" href="#additionalinformation">Additional Information</a>
            <a class="btn-project" href="#benifits">Benifits</a>
            <a class="btn-project" href="#gallery">Gallery</a>
        </div>
    </div>
</div>

<!-- Product Details area -->
<div class="section section-padding" id="overview">
    <div class="container">
        <div class="project-details-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="project-details-content mb-md-8">
                        <h1 class="title mb-md-6" style="text-align: center;"><?php echo $product_details_overview_text; ?></h1>
                        <?php echo $product_details_overview_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details area -->
<div class="section section-padding" id="additionalinformation">
    <div class="container">
        <div class="project-details-wrap">
            <div class="project-details-content mb-4 mb-md-8">
                <h1 class="title" style="text-align: center;"><?php echo $additional_information_text; ?></h1>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 col-xs-12">
                    <table class="table">
                        <tbody>
                            <?php
                            if (have_rows('additional_information_section')) :

                                while (have_rows('additional_information_section')) : the_row();
                                    $additional_text = get_sub_field('additional_text');
                                    $additional_count = get_sub_field('additional_count');
                            ?>
                                    <tr>
                                        <td width="50%"><?php echo $additional_text; ?></td>
                                        <td><?php echo $additional_count; ?></td>
                                    </tr>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service details area -->
<div class="section section-padding" id="benifits">
    <div class="container">
        <div class="service-details-content">
            <div class="service-details-list-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-list-content-wrap">
                            <h1 class="title" style="text-align: center;"><span><?php echo $benifits_text; ?></span></h1>
                            <p><?php echo $benifits_content; ?></p>
                            <div class="service-details-list">
                                <?php
                                if (have_rows('benifits_section_text')) :
                                    while (have_rows('benifits_section_text')) : the_row();
                                        $benifits_count = get_sub_field('benifits_count');
                                        $benifits_printer = get_sub_field('benifits_printer');
                                ?>
                                        <div class="single-service-details-list">
                                            <div class="service-details-list-degit">
                                                <h3 class="number"><?php echo $benifits_count; ?></h3>
                                            </div>
                                            <div class="service-details-list-content">
                                                <p><?php echo $benifits_printer; ?></p>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery area -->
<div class="section section-padding mb-15" id="gallery">
    <div class="container">
        <div class="project-details-content mb-4 mb-md-8">
            <h1 class="title" style="text-align: center;"><?php echo $image_gallery_text; ?></h1>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid">
            <?php
            if (have_rows('image_gallery_section')) :
                while (have_rows('image_gallery_section')) : the_row();
                    $product_banner_details_image = get_sub_field('product_banner_details_image');
            ?>
                    <div class="col-lg-3 col-md-6 mb-6 grid-item">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="img-zoom" href="<?php echo $product_banner_details_image['url']; ?>"><i class="dlicon arrows-1_zoom-88"></i></a>
                                <a class="thumbnail" href="javascript:void(0);">
                                    <img src="<?php echo $product_banner_details_image['url']; ?>" alt="Blog Image">
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
<script type="text/javascript">
    jQuery(window).scroll(function(e) {
        var $el = jQuery('.fixedElement');
        var isPositionFixed = ($el.css('position') == 'fixed');
        if (jQuery(this).scrollTop() > 200 && !isPositionFixed) {
            $el.css({
                'position': 'fixed',
                'top': '50px'
            });
        }
        if (jQuery(this).scrollTop() < 200 && isPositionFixed) {
            $el.css({
                'position': 'static',
                'top': '0px'
            });
        }
    });

    jQuery(function() {
        jQuery('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top - 160
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>