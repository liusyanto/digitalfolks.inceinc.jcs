<?php
	
if ( get_field ( 'page_type' ) != 'fullscreen_bg' ):

	?>
	<div class="top-container">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="top-line"></div>
				</div>
			</div>
		</div>
	</div>
	<?php

endif;

?>

<div class="container content-container">
	<div class="row">
		<div class="col-md-<?php echo get_field ( 'page_type' ) != 'fullscreen_bg' || get_field ( 'center_content' ) == 'no' ? '8 col-md-offset-4' : '12'; ?>">
			<div class="row">
				<div class="main-content"<?php if ( get_field ( 'center_content' ) == 'yes' ) echo ' style="width: 100%;"'; ?>>
					
					<?php
	
					if ( get_field ( 'page_type' ) != 'fullscreen_bg' ):
					
						?>
						<h1 class="content-title centralize"><?php the_title (); ?></h1>
						<?php
					
					endif;
					
					?>