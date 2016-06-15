/* DOMREADY:-. */

var theghostcoder;

$( function () {
	
	
	// Init TheGhostCoder.
	
	theghostcoder = new TheGhostCoder ();
	
	
	// Setup scrollspy for navigation.
	
	theghostcoder.initSmoothScrolls ();
	theghostcoder.initTabbedNav ();


	// Backgrounds.
	
	theghostcoder.applyBackgrounds ();
	
	
	// Normalize WordPress images.
	
	theghostcoder.normalisePostFullsizeImages ();


	// Events.
	
		// Navigation.
		
		// Tracking.
		
		// Forms.
	
	
	// Show/hide elements.
	
} );





/* ONE RIGN TO RULE THEM ALL:-. */

var TheGhostCoder = function () {
	
};





/* BACKGROUNDS:-. */

TheGhostCoder.prototype.applyBackgrounds = function () {

	
	// Looks for elements with custom backgrounds and applies them via CSS.
	
	$( '*[data-bg]' ).each ( function ( i, el ) { 
	
		var el       = $( el ),
			url      = el.attr ( 'data-bg' ),
			urlFinal = url ? $.trim ( url ) : false;
		
		if ( urlFinal ) el.css ( { 'background-image': 'url(' + urlFinal + ')' } );
	
	} );
	
};





/* POSTS:-. */

TheGhostCoder.prototype.normalisePostFullsizeImages = function () {
	
	
	// Looks for posts images set to full size and removes junk from surrounding elements.

	$( '.posts .contents img.size-full' ).each ( function ( i, imgEl ) {
		
		var imgEl = $( imgEl );
		
		// Remove sizes from caption element.
		imgEl.closest ( '.wp-caption').removeAttr ( 'style id' ).removeClass ( 'alignnone alignright alignleft aligncenter' );
		
		
		// Normalise the image element itself.
		imgEl.removeAttr ( 'class width height srcset sizes' ).addClass ( 'size-full' );
		
	} );
	
};





/* NAVIGATION:-. */

TheGhostCoder.prototype.toggleNavigation = function () {
	
	// Toggles the state of the navigation based on the page scroll.
	
};

TheGhostCoder.prototype.scrollToEl = function ( target, offset, duration, callback ) {

	var target   = target   == undefined || target.type ? $( 'body' ) : $( target ).eq ( 0 ),
		offset   = offset   == undefined ? 0 : offset,
		duration = duration == undefined ? 500 : duration;
	
	if  ( ! target.offset () ) return;
	
	$( 'body' ).animate ( { scrollTop: target.offset ().top - offset }, duration, callback );

};





/* SHOW/HIDE:-. */

TheGhostCoder.prototype.toggleShowHide = function () {
	
	// Toggles the visibility of elements managed with the data-show and data-hide attributes.
	
	
};



/* TRACKING:-. */

TheGhostCoder.prototype.track = function ( what, message, callback ) {
	

	// This method performs tracking on enabled analytics services.
	// Once done, it call the callback function.
	
};





/* FORMS:-. */

TheGhostCoder.prototype.submitForm = function () {
	
	// Validates a form for submission, showing any errors and halting the process where relevant.
	
};





/* SMOOTHSCROLL:-. */

TheGhostCoder.prototype.initSmoothScrolls = function () {
	
	
	// Scroll to current target.
	
	if ( location.hash.indexOf ( '#' ) != -1 ) theghostcoder.scrollToEl ( location.hash.substr ( location.hash.indexOf ( '#' ) ), $( 'nav:first-child' ).height () );
	
	
	// Setup navigation to use smooth scrolling whenever an anchor is clicked.

	$( 'a[href^="#"]' ).on ( 'click', function ( evt ) {
				
		var a    = $( evt.target ).closest ( 'a' ),
			href = a.prop ( 'href' );
			
		if ( href.indexOf ( '#' ) != -1 ) {
			
			var hash = href.substr ( href.indexOf ( '#' ) );
			
			// Ignore if the button is for navigating tabbed containers.
			
			if ( ! a.attr ( 'data-toggle' ) || a.attr ( 'data-toggle' ) != 'tab' ) {
			
				theghostcoder.scrollToEl ( hash, $( 'nav:first-child' ).height (), 500 );
			
				history.replaceState ( {}, '', hash );
		
				return false;
				
			}
		
		}
		
	} );
	
	
	// Set offset for scrollspy if exists.
	
	if ( $( 'body' ).attr ( 'data-spy' ) ) {
	
		$( 'body' ).attr ( 'data-offset', $( 'nav:first-child' ).height () + 10 );
	
	}
	
};






/* TABBED NAVIGATION:-. */

TheGhostCoder.prototype.initTabbedNav = function () {
	
	
	
};