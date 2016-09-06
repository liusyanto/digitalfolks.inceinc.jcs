<?php
	
/*
 * Template Name: Dual Image
 */
 

// Define body classes.

# define ( 'HEAD_CLASS', '' );


// Include header.

get_header ();
 
 ?>
 <div class="content-container">
    <div class="product-wrapper non-expandable-img">
	    <?php
		    
	   if ( have_rows ( 'images' ) ):
	   
	   		$classes = array ( 'top', 'bottom' );
	   		
	   		$i = 0;

			while ( have_rows ( 'images' ) ) :
			
				the_row ();
	
				?>
				<img src="<?php the_sub_field ( 'image' ); ?>" class="image-<?php echo $classes[$i]; ?>" alt="JCS Website">
				<?php
					
				$i ++;
	
			endwhile;
		
		endif;
		
		?>
    </div>
    <div class="page-content">
        <?php
        
        the_post ();
        the_content ();
          
        ?>
    </div>
</div>
<?php

get_footer ();

?>