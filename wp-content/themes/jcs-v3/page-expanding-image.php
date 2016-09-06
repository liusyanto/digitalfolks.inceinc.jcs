<?php
	
/*
 * Template Name: Expandable Image
 */
 

// Define body classes.

# define ( 'HEAD_CLASS', '' );


// Include header.

get_header ();
 
 ?>
 <div class="content-container">
	<div class="image-expand-viewport">
	    <div class="image-expand">
	       <img src='' />
	    </div>
	    <a style="position: absolute; top: 0; left: 0; z-index: 999;"><img src="<?php echo get_template_directory_uri (); ?>/assets/img/image-close.png" alt="" class="margin24"></a>
	</div>
    <div class="product-wrapper-viewport">
    <div class="product-wrapper expandable-img image-1">
        <a><img src="<?php the_field ( 'featured_image' ); ?>" alt="JCS Website"></a>
        <img src="<?php echo get_template_directory_uri (); ?>/assets/img/image-arrow.png" alt="Show" class="hidden-xs hidden-sm" style="position: absolute; top: 50%; right: 40px;">
    </div>
    <?php
						
	if ( get_field ( 'featured_image_2' ) != '' ):
	
		?>
	    <div class="product-wrapper expandable-img image-2">
	        <a><img src="<?php the_field ( 'featured_image_2' ); ?>" alt="JCS Website"></a>
			
	    </div>
		<?php
		
	endif;
	
	?>
    </div>
    <div class="rollover"><i class="fa fa-external-link" aria-hidden="true"></i>ROLL OVER TO EXPAND IMAGE</div>
    <div class="page-content">
	    <div class="scrolled-zone">
	        <?php
	        
	        the_post ();
	        the_content ();
	          
	        ?>
	    </div>
    </div>
</div>
<div class="image-zoom-viewport">
    <div class="image-zoom">
       <img src='' />
    </div>
    <a><img src="<?php echo get_template_directory_uri (); ?>/assets/img/image-close.png" alt="" class="margin24"></a>
</div>
<?php

get_footer ();

?>