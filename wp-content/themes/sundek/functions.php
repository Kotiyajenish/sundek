<?php

/**
 * sundek functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sundek
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sundek_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sundek, use a find and replace
		* to change 'sundek' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sundek', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'sundek'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sundek_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'sundek_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sundek_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sundek_content_width', 640);
}
add_action('after_setup_theme', 'sundek_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sundek_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sundek'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sundek'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sundek_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sundek_scripts()
{
	wp_enqueue_style('sundek-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sundek-style', 'rtl', 'replace');

	wp_enqueue_script('sundek-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sundek_scripts');

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles()
{
	// Enqueue CSS files
	wp_enqueue_style('swiper-bundle-min-css', get_template_directory_uri() . '/assets/css/plugins/swiper-bundle.min.css', array(), '1.0', 'all');
	wp_enqueue_style('odometer-theme-default-min-css', get_template_directory_uri() . '/assets/css/plugins/odometer-theme-default.min.css', array(), '1.0', 'all');
	wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/plugins/magnific-popup.css', array(), '1.0', 'all');
	wp_enqueue_style('ddbeforeandafter-css', get_template_directory_uri() . '/assets/css/plugins/ddbeforeandafter.css', array(), '1.0', 'all');
	wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/plugins/aos.css', array(), '1.0', 'all');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/plugins/animate.css', array(), '1.0', 'all');
	wp_enqueue_style('font-awesome-min-css', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style('dlicon-css', get_template_directory_uri() . '/assets/css/vendor/dlicon.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('style-original-css', get_template_directory_uri() . '/assets/css/style_original.css', array(), '1.0', 'all');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

	// Enqueue JavaScript files
	wp_enqueue_script('swiper-bundle-min-js', get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('sticky-sidebar-js', get_template_directory_uri() . '/assets/js/plugins/sticky-sidebar.js', array('jquery'), '1.0', true);
	wp_enqueue_script('scrollup-js', get_template_directory_uri() . '/assets/js/plugins/scrollup.js', array('jquery'), '1.0', true);
	wp_enqueue_script('odometer-min-js', get_template_directory_uri() . '/assets/js/plugins/odometer.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/plugins/magnific-popup.js', array('jquery'), '1.0', true);
	wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/plugins/isotope.js', array('jquery'), '1.0', true);
	wp_enqueue_script('imagesloaded-js', get_template_directory_uri() . '/assets/js/plugins/imagesloaded.js', array('jquery'), '1.0', true);
	wp_enqueue_script('hoverparallax-min-js', get_template_directory_uri() . '/assets/js/plugins/hoverparallax.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('ddbeforeandafter-js', get_template_directory_uri() . '/assets/js/plugins/ddbeforeandafter.js', array('jquery'), '1.0', true);
	wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/plugins/aos.js', array('jquery'), '1.0', true);
	wp_enqueue_script('ajax-mail-js', get_template_directory_uri() . '/assets/js/plugins/ajax-mail.js', array('jquery'), '1.0', true);
	wp_enqueue_script('modernizr-3.11.7-min-js', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.7.min.js', array(), '1.0', true);
	wp_enqueue_script('jquery-migrate-3.3.2-min-js', get_template_directory_uri() . '/assets/js/vendor/jquery-migrate-3.3.2.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// wysing editor showing:
add_filter('use_block_editor_for_post', '__return_false');


// add options for header & footer
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}


register_nav_menus(
	array(
		'primary' => esc_html__('Primary menu', 'twentytwentyone'),
		'footer'  => esc_html__('Footer menu', 'twentytwentyone'),
		'main-menu' => esc_html__('Main menu', 'twentytwentyone'),
		'header' => esc_html__('Header menu', 'twentytwentyone'),
		'mobile' => esc_html__('Mobile menu', 'twentytwentyone'),

	)
);



// Register Custom Post Type
function custom_post_type_product()
{

	$labels = array(
		'name'                  => _x('Product', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Product', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Product', 'text_domain'),
		'name_admin_bar'        => __('Product', 'text_domain'),
		'archives'              => __('Product Archives', 'text_domain'),
		'attributes'            => __('Product Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Product:', 'text_domain'),
		'all_items'             => __('All Product', 'text_domain'),
		'add_new_item'          => __('Add New Product', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Product', 'text_domain'),
		'edit_item'             => __('Edit Product', 'text_domain'),
		'update_item'           => __('Update Product', 'text_domain'),
		'view_item'             => __('View Product', 'text_domain'),
		'view_items'            => __('View Product', 'text_domain'),
		'search_items'          => __('Search Product', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Product', 'text_domain'),
		'description'           => __('Post Type Description', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('product', $args);
}
add_action('init', 'custom_post_type_product', 0);

// Define a custom function to modify the output of the menu
function modify_menu_output($menu_html, $args) {
    // Remove the <div> container
    $menu_html = preg_replace('/<div[^>]*>/', '', $menu_html);
    $menu_html = str_replace('</div>', '', $menu_html);

    // Remove id and class attributes from <ul> element
    $menu_html = preg_replace('/<ul[^>]*id=\"[^"]*\"[^>]*>/', '<ul>', $menu_html);
    $menu_html = preg_replace('/<ul[^>]*class=\"[^"]*\"[^>]*>/', '<ul>', $menu_html);

    return $menu_html;
}

// Hook into wp_nav_menu to apply the custom function
add_filter('wp_nav_menu', 'modify_menu_output', 10, 2);



//menu active code
function add_active_class_to_menu($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class_to_menu', 10, 2);


