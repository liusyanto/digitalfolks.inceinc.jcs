<?php
	
	
// Determine if this is a blog page so that we can tell the navigation to set active state.

if ( is_front_page () && is_home () ) {}
elseif ( is_front_page () ) {}
elseif ( is_home () ) { define ( 'BLOGPAGE', true ); }
else { define ( 'BLOGPAGE', true ); }


// Header.

get_header ();

?>


<!-- START BODY CONTAINER:-. -->

<div class="container">
	<div class="row">
		
		
		<!-- START LEFT SIDEBAR:-. -->
		
		<div class="col-sm-2">
			<?php get_sidebar (); ?>
		</div>
		
		<!-- END LEFT SIDEBAR:-. -->





		<!-- START POSTS COLUMN:-. -->
		
		<div class="col-sm-8">
			<ol class="posts">
				
				<!-- START POSTS:-. -->
			
				<?php
					
				if ( have_posts () ):
					
					while ( have_posts () ):
					
						the_post ();
						
						?>
						
						<li>
							<h2 class="title"><a rel="bookmark" href="<?php the_permalink (); ?>" ><?php the_title (); ?></a></h2>
							<small class="postmeta">Post by <?php the_author (); ?> in <?php the_category ( ', ' ); ?></small>
							<div class="contents">
								<?php the_content ( '' ); ?>
							</div>
							<?php if ( ! is_single () ): ?><div class="read-more"><a href="<?php the_permalink (); ?>" rel="bookmark">Continue reading</a></div><?php endif; ?>
						</li>
						
						<?php
							
					endwhile;
					
				endif;
				
				?>
				
				<!-- END POSTS:-. -->
			
			</ol>




	
			<!-- START BLOG NAV:-. -->
			
			<div class="posts-nav">
				<?php if ( is_single () ): ?>
					<span class="right"><?php next_post_link ( '%link', 'Next post' ); ?></span>
					<span class="left"><?php previous_post_link ( '%link', 'Previous post' ); ?></span>
				<?php else: ?>
					<span class="left"><?php previous_posts_link ( 'Newer posts' ); ?></span>
					<span class="right"><?php next_posts_link ( 'Older posts' ); ?></span>
				<?php endif; ?>
				<div class="clearfix"></div>
			</div>
			
			<!-- END BLOG NAV:-. -->
			
		</div>

		<!-- START POSTS COLUMN:-. -->
		




		<!-- START RIGHT SIDEBAR:-. -->
		
		<div class="col-sm-2"></div>
		
		<!-- END RIGHT SIDEBAR:-. -->

	</div>
</div>

<!-- END BODY CONTAINER:-. -->

<?php


// Footer.

get_footer ();

?>