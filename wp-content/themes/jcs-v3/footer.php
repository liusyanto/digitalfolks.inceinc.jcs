        </section>

    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri (); ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>


    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/image-expand.js"></script>
    <script src="<?php echo get_template_directory_uri (); ?>/assets/js/milestones.js"></script>
	<script type="text/javascript">
		
		
		// This event handler manages the header styles for full-background pages.
		
        $( window ).scroll ( function () {
	        
            if ( $( document ).scrollTop () > 50 ) {
	            
                $( 'header' ).addClass ( 'shrink' );
            }
            else {
	            
                $( 'header' ).removeClass ( 'shrink' );
                
            }
            
        } );
        
    </script>

</body>
</html>