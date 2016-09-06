<?php
	
// Define body classes.

# define ( 'HEAD_CLASS', '' );


// Include header.

get_header ();
 
 ?>
<div class="content-container search-container">
	<h1 class="content-title padding-bottom40 size24">Search Results for “<?php echo $_GET['s']; ?>”</h1>
	<?php
		
	if ( have_posts () ):
	
		while ( have_posts () ):
		
			the_post ();
			
			$excerpt = get_the_excerpt ();
			$excerpt = str_replace ( '[&hellip;]', '...', str_replace ( '—', '', str_replace ( '[…]', '...', str_replace ( ' — ', ', ', $excerpt ) ) ) );
			//$excerpt = preg_replace ( "/(^\s+)|(\s+$)/us", "", $excerpt ); 
			
			?>
			<h4 class="padding-bottom4"><a class="green" href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h4>
			<p class="size16 margin-bottom24 padding-bottom24" style="border-bottom: 1px solid #ccc;"><?php echo trim ( $excerpt ); ?></p>
			<?php
				
		endwhile;
	
	endif;
	
	?>
</div>
<?php

get_footer ();

?>