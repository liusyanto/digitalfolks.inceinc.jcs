<?php
	
/*
 * Template Name: Homepage
 */
 

// Define body classes.

define ( 'HEAD_CLASS', 'page-full-bg page-home' );


// Include header.

get_header ();
 
?>
<div class="tagline-container">
    <!--
	<h1><span>The</span> Freshness <span>Keepers</span></h1>
	-->
	<img src="<?php echo get_template_directory_uri (); ?>/assets/img/brandline.png" style="width: 100%;">
    <a href="/capabilities/" class="tagline-trigger transition"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Learn more about our capabilities</a>
</div>
<?php

get_footer ();

?>