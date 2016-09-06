<!DOCTYPE HTML>
<html <?php language_attributes (); ?>>
	
	<head>
		
		
		<!-- START CUSTOM META:-. -->
		
		<title><?php echo get_the_title (); ?> | <?php echo get_bloginfo ( 'name' ); ?></title>
		<meta charset="<?php bloginfo ( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<!-- END CUSTOM META:-. -->





		
		<!-- START FAVICONS:-. -->
		
		<link rel="icon" href="<?php echo get_template_directory_uri (); ?>/assets/logo/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri (); ?>/assets/logo/favicon.ico">
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri (); ?>/assets/logo/favicon.ico"><![endif]-->
		
		<!-- START FAVICONS:-. -->




		
		<!-- START CSS + FONTS:-. -->
		
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/editor-style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/assets/css/">

		<!-- END CSS + FONTS:-. -->




		
		<!-- START WORDPRESS HEADERS:- Output using wp_head (); -->
		
		<?php wp_head (); ?>
		
		<!-- ED WORDPRESS HEADERS:-. -->		
		
	</head>
	
	<body class="<?php
		if ( defined ( 'BODYCLASS' ) ) echo BODYCLASS . ' ';
		if ( get_field ( 'page_type' ) == 'fullscreen_bg' && ! isset ( $_GET['s'] ) ) echo 'fullscreen-bg ';
		if ( is_front_page () ) echo 'frontpage ';
	?>"<?php
		
		if ( defined ( 'SCROLLSPY_NAV' ) ) echo ' data-spy="scroll" data-target="#navigation-' . SCROLLSPY_NAV . '"';
	?> style="<?php
		if ( get_field ( 'page_type' ) == 'fullscreen_bg' && ! isset ( $_GET['s'] ) ) echo 'background-image: url(' . get_field ( 'featured_image' ) . ');';
		if ( get_field ( 'fix_navigation_position' ) != 'yes' ) echo ' padding-top: 210px;';
	?>"">