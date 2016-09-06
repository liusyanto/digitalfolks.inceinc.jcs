$( window ).load ( function () {
	
	
	// Setup events for milestone image rollover effect.
	
	if ( $( '.milestones-image' ) ) {
		
		$( '.milestones-image' ).on ( 'mouseover', showMilestonesImage );
		$( '.milestones-image' ).on ( 'mouseout', hideMilestonesImage );
		// $( '.milestones .image-close' ).on ( 'click', hideMilestonesImage );
		
	}
	
	
	// Milestones resize.
	
	if ( $( '.milestones' ) ) {
		
		$( window ).on ( 'resize', resizeMilestonesInterval );
		
		resizeMilestonesInterval ();
		
	}

} );


function resizeMilestonesInterval () {
		
	var milestonesWidth = $( '.content-container' ).width (),
		intervalWidth   = Math.floor ( ( milestonesWidth - 7 ) / ( $( '.milestones > li' ).length - 1 ) );
		
	$( '.milestones > li' ).css ( { width: intervalWidth } );
		
}


function showMilestonesImage () {
	
	var closestRow    = $( '.milestones-image' ).closest ( '.content-container' ),
		parentOffset  = closestRow.offset (),
		currentOffset = $( '.milestones-image' ).offset ();
		
	$( '.milestones-image' ).attr ( { 'data-width': $( this ).width (), 'data-height': $( this ).height () } );
		
	$( '.milestones-image' ).off ( 'mouseover', showMilestonesImage );
	
	//$( '.milestones .image-close' ).css ( { top: parentOffset.top - currentOffset.top + 20, left: parentOffset.left - currentOffset.left + 30 } ).animate ( { opacity: 1 } );
	
	var finalWidth  = closestRow.width (),
		finalHeight = ( closestRow.width () ) / $( this ).width () * $( this ).height (),
		finalTop    = parentOffset.top - currentOffset.top,
		finalLeft   = parentOffset.left - currentOffset.left;
	
	$( '.milestones-image' )
	.data ( { width: finalWidth, height: finalHeight, top: finalTop, left: finalLeft } )
	.animate (
		
		{ top: finalTop, left: finalLeft, width: finalWidth, height: finalHeight },
		{
			complete: function () {
				
				$( '.milestones-image' ).on ( 'mousemove', moveMilestonesImage );
			
			}
			
		}
	
	);
	
}

function hideMilestonesImage () {
				
	$( '.milestones-image' ).off ( 'mousemove', moveMilestonesImage );
	
	$( '.milestones .image-close' ).animate ( { opacity: 0 } );
	
	$( '.milestones-image' ).animate (
	
		{ top: 10, left: 0, width: $( '.milestones-image' ).attr ( 'data-width' ), height: $( '.milestones-image' ).attr ( 'data-height' ) },
		{ complete: function () { $( '.milestones-image' ).on ( 'mouseover', showMilestonesImage ); } }
	
	);
	
}


// This event handler uses scroll the milestone image up and down within the viewport.

function moveMilestonesImage ( e ) {
	
	var image     = $( this ).eq ( 0 ),
		h         = image.height (),
		vptHeight = $( '.milestones' ).outerHeight (),
		y         = $( this ).data ( 'top' ) - ( ( h - vptHeight ) / vptHeight ) * ( e.pageY + $( this ).data ( 'top' ) );

    if ( y > $( this ).data ( 'top' ) ) y = $( this ).data ( 'top' );
    if ( y < $( this ).data ( 'top' ) + ( vptHeight - h ) ) y = $( this ).data ( 'top' ) + ( vptHeight - h );
    
    image.animate ( { top: y }, { queue: false, easing: 'linear', duration: 200 } );
    
}