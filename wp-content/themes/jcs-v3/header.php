<?php
	
/*
 * Template Name: Expandable Image
 */
 
 ?><!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <title><?php echo get_the_title (); ?> | <?php echo get_bloginfo ( 'name' ); ?></title>

    <!-- Fontawesome CSS -->
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/font-awesome-min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Prototyper -->
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/milestones.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/_prototyper.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri (); ?>/assets/css/aftermath.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php echo defined ( 'HEAD_CLASS' ) ? ( ' class="' . HEAD_CLASS . '"' ) : ''; ?>>
    <div class="wrapper">
        <header>
	        <?php
		       
		    // Navigation.
		    
			get_template_part ( 'navigation' );
			
			?>
        </header>
        <section>