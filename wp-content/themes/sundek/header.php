<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sundek
 */


//include("connection.php");

function SetActiveMenuClass($arrPage)
{
	$CurrentPage = strtolower(basename($_SERVER['PHP_SELF']));
	if (array_search($CurrentPage, $arrPage) > -1) {
		return "active";
	}
	return "";
}
$protocol = 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '');
//$CurrentURL = $protocol."://www.technopixinfotech.com/sundek";
$CurrentURL = $protocol . "://localhost/Sundek(PratikWebSolution)";

$header_logo = get_field('header_logo', 'option');
$header_mobile_logo = get_field('header_mobile_logo', 'option');
$email_address = get_field('email_address', 'option');
$phone_num = get_field('phone_num', 'option');
$address_text = get_field('address_text', 'option');

// Social media 
$social_media_facebook = get_field('social_media_facebook', 'option');
$social_media_twitter = get_field('social_media_twitter', 'option');
$social_media_google = get_field('social_media_google', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&amp;display=swap" rel="stylesheet">

<style type="text/css">
	.main-menu>nav>ul li>a {
		text-transform: uppercase;
	}

	.active>a {
		color: #151B54 !important;
	}

	.btn-primary {
		text-transform: uppercase;
	}

	.footer-widget.footer-list ul li .desc {
		margin-left: 10px;
		width: 100%;
	}

	.fa-icon {
		font-size: 18px;
		margin-right: 5px;
	}

	.footer-widget .footer-title {
		margin: 0 0 18px;
	}

	.main-menu>nav>ul li>a {
		font-size: 17px;
	}

	.sticky-bar.stick .main-menu>nav>ul>li>a {
		font-size: 17px;
	}

	.btn-primary {
		background-color: #151B54 !important;
	}

	.footer-widget.footer-list ul li .title {
		color: white;
	}

	@media only screen and (max-width: 767px) {
		.header-area.stick {
			padding: 5px 0;
		}

		.black-logo {
			height: 50px !important;
		}

		.footer-top .mb {
			margin-bottom: 30px !important;
		}

		.footer-widget .footer-title {
			margin: 0 0 10px;
		}
	}
</style>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sundek'); ?></a>
		<header class="site-header header-area header-transparent-bar sticky-bar" id="masthead">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6 col-4">
						<div class="logo">
							<a href="<?php echo home_url();?>">
								<img src="<?php echo $header_logo['url']; ?>" alt="logo" class="white-logo" style="height: 80px;">
								<img src="<?php echo $header_mobile_logo['url']; ?>" alt="logo" class="black-logo" style="height: 60px;">
							</a>
						</div>
					</div>
					<div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
						<div class="main-menu text-center header-menu">
							<nav>
								<?php wp_nav_menu(array('theme_location' => 'header')); ?>
							</nav>
						</div>
					</div>
					<div class="col-lg-1 col-md-6 col-8">
						<div class="header-action-wrap">
							<div class="header-action-style">
								<a class="header-aside-button" href="#"><i class="dlicon ui-3_menu-left"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- aside start -->
		<div class="header-aside-active">
			<div class="header-aside-wrap">
				<a class="aside-close"><i class="dlicon ui-1_simple-remove"></i></a>
				<div class="header-aside-content">
					<div class="mobile-menu-area">
						<div class="mobile-menu-wrap">
							<!-- mobile menu start -->
							<div class="mobile-navigation">
								<!-- mobile menu navigation start -->
								<nav>
									<?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
								</nav>
								<!-- mobile menu navigation end -->
							</div>
							<!-- mobile menu end -->
						</div>
					</div>
					<div class="aside-contact-info">
						<ul>
							<li>
								<i class="dlicon ui-1_email-84"></i>
								<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
							</li>
							<li>
								<i class="dlicon tech-2_rotate"></i>
								<a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
							</li>
							<li>
								<i class="dlicon ui-1_home-minimal"></i>
								<?php echo $address_text; ?>
							</li>
						</ul>
					</div>
					<div class="social-icon-style mb-5">
						<a class="facebook" href="<?php echo $social_media_facebook;?>"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="<?php echo $social_media_twitter;?>"><i class="fa fa-twitter"></i></a>
						<a class="google-plus" href="<?php echo $social_media_facebook;?>"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>