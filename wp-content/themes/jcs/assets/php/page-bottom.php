				</div>
			</div>
		</div>
	</div>
</div>

<?php
	
if ( get_field ( 'page_type' ) != 'fullscreen_bg' ):

	?>
	<div class="bottom-container">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5">
					<div class="top-line"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="image-container">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div id="main-image" data-offset="<?php the_field ( 'default_image_offset' ); ?>">
						<?php
							
						if ( get_field ( 'page_type' ) == 'image_slider' ):
						
							?>
							<div class="image" style="background-image: url(<?php the_field ( 'featured_image' ); ?>);"></div>
							<a class="image-arrow"></a>
							<a class="image-close"></a>
							<?php
								
						elseif ( get_field ( 'page_type' ) == 'multi_image' ):
						
							if ( have_rows ( 'images' ) ):

								while ( have_rows ( 'images' ) ) :
								
									the_row ();

									?>
									<img src="<?php the_sub_field ( 'image' ); ?>" class="thumb full margin-bottom20">
									<?php

								endwhile;
							
							endif;
								
						endif;
						
						?>
					</div>
					<?php if ( get_field ( 'page_type' ) == 'image_slider' ): ?><div class="image-instructions">ROLL OVER TO EXPAND IMAGE</div><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php

endif;

?>