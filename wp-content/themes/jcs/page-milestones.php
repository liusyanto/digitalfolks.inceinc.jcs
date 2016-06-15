<?php
	
/*
 * Template Name: Milestones
 */
	
// Header

get_header ();


// Navigation.

get_template_part ( 'assets/php/navigation', 'top' );


?>

<div class="top-container">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="top-line"></div>
			</div>
		</div>
	</div>
</div>

<div class="container content-container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="content-title centralize padding-bottom0"><?php the_title (); ?></h1>
			<?php


			// Insert content.
			
			if ( have_posts () ):
				
				while ( have_posts () ):
				
					the_post ();
					
					//the_content ();
					
				endwhile;
				
			endif;
			
			?>
			<ul class="milestones">
				<li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
					<div class="top-side left-side">
						<div class="date">1996</div>
						<h3>JCS is Established</h3>
						<p>JCS is established in Singapore with a 500-pallet capacity in a single-storey warehouse</p>
					</div>
				</li><li>
				
				</li><li>
				
				</li><li>
					<div class="bottom-side left-side">
						<div class="date">1999</div>
						<h3>Four-fold Growth</h3>
						<p>JCS expands four-folds to contain 2,000 pallets in the warehouse and advances into automation</p>
					</div>				
				</li><li>
				
				</li><li>
					<div class="top-side right-side">
						<div class="date">2001</div>
						<h3>Big on Shrimp</h3>
						<p>Venturing into the aquaculture industry with integrated shrimp farming</p>
					</div>	
					<div class="bottom-side right-side image">
						<img class="milestones-image" src="http://jcs.digitalfolks.sg/wp-content/uploads/2016/06/milestones-bg.jpg">
						<div class="image-instructions">ROLL OVER TO EXPAND IMAGE</div>
						<a class="image-close"></a>
					</div>			
				</li><li>
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
				
				</li><li>
					<div class="bottom-side left-side">
						<div class="date">2016</div>
						<h3>A New Era</h3>
						<p>Further growth for JCS as it expands over seven-fold, into a 77,000m3 facility for 15,000 pallets</p>
					</div>
				</li><li>
				
				</li>
			</ul>
		</div>
	</div>
</div>
					
<?php


// Footer.

get_footer ();

?>