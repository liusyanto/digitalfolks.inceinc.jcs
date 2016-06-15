<?php
	
// Header

get_header ();


// Navigation.

get_template_part ( 'assets/php/navigation', 'top' );


// Page Template Header.

get_template_part ( 'assets/php/page', 'top' );


// Insert content.

if ( have_posts () ):
	
	while ( have_posts () ):
	
		the_post ();
		
		the_content ();
		
	endwhile;
	
endif;


// Page Template Footer.

get_template_part ( 'assets/php/page', 'bottom' );


// Footer.

get_footer ();

?>