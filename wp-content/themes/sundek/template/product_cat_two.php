<?php

/**
 * Template Name: product cat two
 */
get_header();
$product_category_banner_image_two = get_field('product_category_banner_image_two');
?>
<!-- breadcrumb area -->
<div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(<?php echo $product_category_banner_image_two['url'];?>)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Products</h2>
            <ul>
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>
<!-- Project area -->
<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">

            <?php
            $category_slug = 'category_two'; // Replace 'your-category-slug' with the actual category slug
            // Query products based on the category
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

            // Check if there are any products
            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
                    // Display product information as needed
            ?>
            <div class="col mb-6">
                <div class="blog-wrap">
                    <div class="blog-img mb-4">
                        <a href="<?php echo get_the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
                    </div>
                    <div class="blog-content" style="text-align: center;">
                        <h4 class="clsTitle" style="color: #151B54;"><?php the_title();?></h3>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                // Restore original post data
                wp_reset_postdata();
            else :
                echo 'No products found.';
            endif;
            ?>

        </div>
    </div>
</div>
<?php
get_footer();
?>