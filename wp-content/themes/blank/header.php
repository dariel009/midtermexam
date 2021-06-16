<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- site metas -->
	<title>pcoint</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="http://localhost/darielshop/wp-content/themes/blank/template/css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="http://localhost/darielshop/wp-content/themes/blank/template/css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="http://localhost/darielshop/wp-content/themes/blank/template/css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="http://localhost/darielshop/wp-content/themes/blank/template/css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/jquery.min.js"></script>
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/popper.min.js"></script>
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/bootstrap.bundle.min.js"></script>
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/jquery-3.0.0.min.js"></script>
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/plugin.js"></script>
	<!-- sidebar -->
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="http://localhost/darielshop/wp-content/themes/blank/template/js/custom.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<header>
		 <!-- header inner -->
		 <div  class="head_top">
				<div class="header">
					 <div class="container">
							<div class="row">
								 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
										<div class="full">
											 <div class="center-desk">
													<div class="logo">
														 <a href=""><img src="http://localhost/darielshop/wp-content/uploads/2021/06/logo.png" alt="#" /></a>
													</div>
											 </div>
										</div>
								 </div>
								 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
										<nav class="navigation navbar navbar-expand-md navbar-dark ">
											 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
											 <span class="navbar-toggler-icon"></span>
											 </button>
											 <div class="collapse navbar-collapse" id="navbarsExample04">
													<ul class="navbar-nav mr-auto">
														 <li class="nav-item">
																<a class="nav-link" href="http://localhost/darielshop/home"> Home  </a>
														 </li>
													</ul>
													<div class="sign_btn"><a href="http://localhost/darielshop/shop">SHOP</a></div>
											 </div>
										</nav>
								 </div>
							</div>
					 </div>
				</div>
				<!-- end header inner -->
				<!-- end header -->
				<!-- banner -->
				<section class="banner_main">
					 <div class="container-fluid">
							<div class="row d_flex">
								 <div class="col-md-5">
										<div class="text-bg">
											 <h1>Computer and <br>laptop shop</h1>
											 <strong>Free Multipurpose Responsive</strong>
											 <span>Landing Page 2019</span>
											 <a href="#">Buy Now</a>
										</div>
								 </div>
								 <div class="col-md-7 padding_right1">
										<div class="text-img">
											 <figure><img src="http://localhost/darielshop/wp-content/uploads/2021/06/top_img.png" alt="#"/></figure>
											 <h3>01</h3>
										</div>
								 </div>
							</div>
					 </div>
				</section>
		 </div>
	</header>

	<br>
	<br>
	<br>
