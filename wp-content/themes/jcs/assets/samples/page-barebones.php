<?php
	
/* Template Name: Barebones */


// Set a body class.

define ( 'BODYCLASS', 'barebones' );


// Define this as an scrollspy page.
// Set the value to the affix of the navigation.
// E.g. for #navigation-sample, use a value of 'sample'.

define ( 'SCROLLSPY_NAV', 'barebones' );


// Header.

get_header ();


// Navigation.

get_template_part ( 'assets/php/navigation', 'top' );


// WordPress Loop.

if ( have_posts () ):
	
	while ( have_posts () ):
	
		the_post ();
		
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1><?php the_title (); ?></h1>
					<div class="contents">
						<?php the_content (); ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			
	endwhile;
	
endif;


// Footer.

get_footer ();

?>