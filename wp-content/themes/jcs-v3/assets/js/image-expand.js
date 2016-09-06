$( function () {
	
	
	// Setup image expansion.
    
    $( '.product-wrapper a' ).one ( 'mouseover', expandImage );
    
    $( '.image-expand' ).css ( { opacity: 1, width: '100%' } ).show ();
	
	
	// Track scroll event for breakpoint.
	
	if ( $( '.breakpoint' ).length > 0 && $( 'div.image-2' ) ) {
		
		$( '.content-container' ).bind ( 'mousewheel', checkBreakpointPosition );
		
	}
	
	swapImage ( 1 );
    
} );


// This event handler uses scroll the expanded image up and down within the viewport.

function moveMainImage ( e ) {
	
	var image     = $( this ).find ( 'img' ).eq ( 0 ),
		h         = image.height (),
		vptHeight = $( '.content-container' ).height (),
		y         = - ( ( h - vptHeight ) / vptHeight ) * e.pageY;
    
    if ( y > 0 ) y = 0;
    if ( y < vptHeight - h ) y = vptHeight - h;
    
    image.animate ( { top: y }, { queue: false, easing: 'linear', duration: 200 } );
    
}


// This event handler creates the image expanding animation effect.

function expandImage () {
	
	// Disable the mouseover event handler so that it does not interfere with animations.
    
    $( '.product-wrapper a' ).off ( 'mouseover', expandImage );
    
    
    // Get the current width and height of image.
        
    var currentImage       = $( this ).find ( 'img' ),
    	currentImageWidth  = currentImage.width ();
    	currentImageHeight = currentImage.height (),
    	expandedImage      = $( '.image-expand img' ).eq ( 0 );
    	
    
    // Show the the expand viewport so that the image will take on the width and expose a new height.
    	
    $( '.image-expand-viewport' ).css ( { opacity: 0 } ).show ();
    
    
    // Show the expanded image.
    
    expandedImage.attr ( { src: currentImage.attr ( 'src' ) } );
    
    
    // Get target width and height of the image.
    
    var imageTargetWidth  = $( '.content-container' ).width (),
    	imageTargetHeight = imageTargetWidth / currentImageWidth * currentImageHeight;
    
    
    // Reset the image dimensions and animate to the new dimensions
	
	expandedImage
	.data ( { originalWidth: currentImageWidth , originalHeight: currentImageHeight } )
	.css ( { width: currentImageWidth, height: currentImageHeight } )
	.animate (
	
		{ width: imageTargetWidth, height: imageTargetHeight },
		{
			complete: function () { 
				
				console.log ( 1 );
				
				//$( '.image-expand img' ).eq ( 0 ).css ( { width: '100%', height: '' } );
    
			}
		
		}
	
	);
	
	
	// Animate the viewport to show the sliding effect.	
    
	$( '.image-expand-viewport' ).animate (
	
		{ opacity: 1, width: '100%' },
		{
			complete: function () {
		
				console.log ( 2 );
		
				$( '.image-expand' ).on ( 'mousemove', moveMainImage );
				$( '.image-expand' ).on ( 'mouseleave', contractImage );
		
			}
		
		}
		
	);
    
}


// This event handler contracts the image back to the original display.

function contractImage () {
	
	// Disable the mousemove and mouseleave events so that they do not interfere with animations. 
	// Anyway we don't need them anymore.
        
    $( '.image-expand' ).off ( 'mousemove', moveMainImage );
    $( '.image-expand' ).off ( 'mouseleave', contractImage );
    
    
    // Contract the image back to it's original width.
    
    var image = $( '.image-expand img' ).eq ( 0 );
    
    image.animate (
    
    	{ top: 0, width: image.data ( 'originalWidth' ), height: image.data ( 'originalHeight' )  },
    	{ queue: false }
    
    );
    
	
	
	// Contract the viewport and start listening to mouseover events again.
	
    $( '.image-expand-viewport' ).animate (
    
    	{ width: '25%' },
    	{
	    	queue    : false,
	    	complete : function () {
        
				$( '.image-expand-viewport' ).hide ();
				$( '.product-wrapper a' ).one ( 'mouseover', expandImage ); 
       
    		}
    	
    	}
    	
    );

}


// This method swaps the featured image.

function swapImage ( index ) {

	var index = index ? index : 1;
	
	if ( index == 2 ) {
		
		$( 'div.image-2' ).css ( { marginTop: '0px' } );
		
	}
	else {
		
		$( 'div.image-2' ).css ( { marginTop: '100%' } );
		
	}
	
	return;
	
}


// This event handler watches for the entry of the content scroll view to a breakpoint.

function checkBreakpointPosition ( evt ) {
	
	var difference = $( '.content-container .page-content .breakpoint' ).position ().top - $( '.content-container .page-content' ).outerHeight ();
	
	swapImage ( difference < 0 ? 2 : 1 );
	
}



        
        
/* EXPERIMENTAL FULL SCREEN EXPANSION METHOD:-. */
/*
$( function () {
    
    $( '.product-wrapper a' ).on ( 'click', function () {
        
        $( '.image-zoom-viewport' )
        .css ( { opacity: 0, backgroundImage: 'url(' + $( this ).closest ( '.product-wrapper' ).find ( 'img' ).attr ( 'src' ) + ')' } )
        .show ()
        .animate ( { opacity: 1 } );
        
        
        
    } );
    
    $( '.image-zoom-viewport' ).on ( 'click', function () {
        
        $( '.image-zoom-viewport' )
        .animate ( { opacity: 0 }, { complete: function () { $( '.image-zoom-viewport' ).hide (); } } );
        
    } );
    
} );
*/