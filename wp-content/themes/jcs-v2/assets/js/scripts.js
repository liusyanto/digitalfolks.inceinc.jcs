var maxImageHeight        = 900,
	bottomContainerHeight = 40;

$( window ).load ( function () {
	
	
	
	// Setup events for resizing the layout.
	
	$( window ).on ( 'resize', resizeLayout );
	
	resizeLayout ();
	
	
	// Setup dropdowns.
	
	setupDropdowns ();
	
	
	// Setup events for reveal/hide of main image.
	
	if ( $( '#main-image div.image' ) ) {
	
		$( '#main-image div.image' ).on ( 'mouseover', showMainImage );
		$( '#main-image div.image' ).on ( 'mouseout', hideMainImage );
		
		hideMainImage ();
		
		swapImage ( 1 );
		
	}
	
	
	// Track scroll event for breakpoint.
	
	if ( $( '.breakpoint' ).length > 0 && $( '#main-image div.image-2' ) ) {
		
		$( window ).on ( 'scroll', checkBreakpointPosition );
	
		checkBreakpointPosition ();
		
	}
	
	
	// Setup events for milestone image rollover effect.
	
	if ( $( '.milestones-image' ) ) {
		
		$( '.milestones-image' ).on ( 'mouseover', showMilestonesImage );
		$( '.milestones-image' ).on ( 'mouseout', hideMilestonesImage );
		// $( '.milestones .image-close' ).on ( 'click', hideMilestonesImage );
		
	}
	
	
	// Show the contents.
	
	$( '.top-container, .bottom-container' ).css ( { opacity: 1 } );
	$( '.content-container, .image-container' ).animate ( { opacity: 1 }, { duration: 1000 } );
	
	
	// Adjust homepage title line.
	
	$( '.homepage-line' ).width ( $( '.homepage-title-2' ).width () );
	
} );


function setupDropdowns () {
	
	
	// Allow dropdowns to show on hover, but not affect the ones that are supposed to be open.
	
	$( 'nav.navbar .dropdown > a' ).on ( 'mouseover', function () {
		
		$( this ).parents ( 'nav.navbar' ).find ( '.dropdown:not(.keep-open)' ).removeClass ( 'open' );
		$( this ).parents ( '.dropdown' ).addClass ( 'open' );
			
	} );
	
	$( 'nav.navbar .dropdown' ).on ( 'mouseleave', function () {
		
		$( this ).parents ( 'nav.navbar' ).find ( '.dropdown:not(.keep-open)' ).removeClass ( 'open' );
			
	} );
	
	$( 'nav.navbar .dropdown.keep-open' ).on ( 'hide.bs.dropdown', function() {
		
		return false;
		
	} );
	
}

function resizeLayout () {
	
	var contentTopOffset      = $( '.content-container' ).offset ().top,
		windowHeight          = $( window ).height (),
		contentViewportHeight = windowHeight - contentTopOffset - bottomContainerHeight;
		contentHeight         = $( '.content-container' ).height (),
		hopefulImageHeight    = contentViewportHeight + 10,
		confirmedImageHeight  = maxImageHeight < hopefulImageHeight ? maxImageHeight : hopefulImageHeight;
	
	$( '#main-image' ).height ( confirmedImageHeight );
	
	
	// Set height of navigation bar.
	
	if ( $( '.top-container' ).length > 0 ) $( 'nav.navbar' ).height ( $( '.top-container' ).position ().top );
	
	
	// Get the height of the image now.
	
	var imageHeight = $( '#main-image' ).height ();
	
	
	// Adjust height of bottom container.
	
	$( '.bottom-container' ).height ( windowHeight - contentTopOffset - confirmedImageHeight + ( $( window ).width () > 1800 ? -30 : 11 ) );
	$( '.main-content' ).css ( { paddingBottom: windowHeight - contentTopOffset - confirmedImageHeight + 11 } );
	
	
	// This is a large screen and the content height is shorter than the viewport so adjust the bottom container.
	
	/*
	if ( contentViewportHeight > contentHeight ) {
		
		if ( contentHeight < imageHeight ) {
			
			$( '.bottom-container' ).height ( windowHeight - contentTopOffset - imageHeight + 11 );
			
		}
		else {
			
			$( '.bottom-container' ).height ( windowHeight - contentTopOffset - contentHeight + 1 );
			
		}
		
	}
	*/

	
	// Set the size of the images under the main image.
	
	var containerWidth = $( '.image-container .container' ).first ().width ();
	
	$( '#main-image .image' ).width ( containerWidth );
	
	
	// Multiple thumbnails resize.
	
	if ( $( '#main-image .thumb' ).length > 0 ) {
		
		var newImageHeight = -20;
		
		$( '#main-image .thumb' ).each ( function ( i, el ) {
			
			newImageHeight += $( el ).height () + 20;
			
		} );
		
		newImageHeight = newImageHeight > $( '#main-image' ).height () ? $( '#main-image' ).height () : newImageHeight;
		
		
		
		$( '.bottom-container' ).height ( windowHeight - contentTopOffset - newImageHeight + 11 );
		
	}
	
	
	// Milestones resize.
	
	if ( $( '.milestones' ) ) {
		
		var milestonesWidth = $( '.milestones' ).closest ( '.row' ).width () - 30,
			intervalWidth   = Math.floor ( milestonesWidth / ( $( '.milestones > li' ).length - 1 ) );

		$( '.milestones > li' ).css ( { width: intervalWidth } );
		
	}
		
}

function showMainImage () {
	
	var containerWidth = $( '.image-container .container' ).first ().width ();
	
	$( '#main-image .image' ).animate ( { left: 0 } );
	$( '#main-image' ).animate ( { width: containerWidth } );
	$( '#main-image .image-close' ).animate ( { opacity: 1 } );
	$( '#main-image .image-arrow' ).css ( { opacity: 0 } );
	
	disableScroll ();
	
}

function hideMainImage () {
	
	var originalWidth = $( '#main-image' ).parent ().width ();
	
	$( '#main-image div.image-1' ).animate ( { left: Number ( $( '#main-image' ).attr ( 'data-offset-1' ) ) } );
	$( '#main-image div.image-2' ).animate ( { left: Number ( $( '#main-image' ).attr ( 'data-offset-2' ) ) } );
	$( '#main-image' ).animate ( { width: $( window ).width () < 1800 ? ( $( window ).width () <= 1440 ? 300 : 400 ) : 500 } );
	
	$( '#main-image .image-close' ).animate ( { opacity: 0 } );
	$( '#main-image .image-arrow' ).css ( { opacity: 1 } );
	
	enableScroll ();
	
}

function swapImage ( index ) {
	
	var index = index ? index : 1;
	
	$( '#main-image div.image-' + ( index == 1 ? 2 : 1 ) ).css ( { opacity: 0 } );
	$( '#main-image div.image-' + ( index == 1 ? 1 : 2 ) ).css ( { opacity: 1 } );
	
}

function checkBreakpointPosition () {
	
	var contentTopOffset      = $( '.content-container' ).offset ().top,
		windowHeight          = $( window ).height (),
		contentViewportHeight = windowHeight - contentTopOffset - bottomContainerHeight;
		
		
	var breakpointOffset = $( '.breakpoint' ).position ().top - contentViewportHeight;
	
	swapImage ( $( document ).scrollTop () > breakpointOffset ? 2 : 1 );
	
}

function showMilestonesImage () {
			
	var closestRow    = $( '.milestones-image' ).closest ( '.row' ),
		parentOffset  = closestRow.offset (),
		currentOffset = $( '.milestones-image' ).offset ();
		
	$( '.milestones-image' ).attr ( { 'data-width': $( this ).width (), 'data-height': $( this ).height () } );
		
	$( '.milestones-image' ).off ( 'mouseover', showMilestonesImage );
	
	$( '.milestones .image-close' ).css ( { top: parentOffset.top - currentOffset.top + 20, left: parentOffset.left - currentOffset.left + 30 } ).animate ( { opacity: 1 } );
	
	$( '.milestones-image' ).animate ( { top: parentOffset.top - currentOffset.top, left: parentOffset.left - currentOffset.left, width: closestRow.width () -15, height: $( '.milestones' ).height () + 60 } );
	
}

function hideMilestonesImage () {
	
	$( '.milestones .image-close' ).animate ( { opacity: 0 } );
	
	$( '.milestones-image' ).animate (
	
		{ top: 10, left: 0, width: $( '.milestones-image' ).attr ( 'data-width' ), height: $( '.milestones-image' ).attr ( 'data-height' ) },
		{ complete: function () { $( '.milestones-image' ).on ( 'mouseover', showMilestonesImage ); } }
	
	);
	
}