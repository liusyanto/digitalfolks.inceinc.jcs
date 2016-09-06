<?php
	
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
			<h1 class="content-title centralize padding-bottom40">Search Results for “<?php echo $_GET['s']; ?>”</h1>
			<?php
					
			if ( have_posts () ):
				
				while ( have_posts () ):
				
					the_post ();
					
					$excerpt = get_the_excerpt ();
					$excerpt = str_replace ( '—', '', str_replace ( '[…]', '...', str_replace ( ' — ', ', ', $excerpt ) ) );
					$excerpt = $excerpt . '';
					
					?>
					<h3><a class="green" href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h3>
					<p><?php echo trim ( $excerpt ); ?></p>
					<?php
						
				endwhile;
				
			endif;
				
			?>
			
		</div>
	</div>
</div>
					
<?php


// Footer.

get_footer ();

?>