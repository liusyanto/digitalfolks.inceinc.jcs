<nav class="navbar navbar-fixed-top"<?php if ( get_field ( 'page_type' ) == 'fullscreen_bg' ) echo ' style="background: none;"'; ?>>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
				<i class="fa fa-bars light"></i>
			</button>
			<a class="navbar-brand" href="/">
				<img alt="<?php echo get_bloginfo ( 'name' ); ?>" src="<?php echo get_template_directory_uri (); ?>/assets/logo/logo.png" width="120" height="75">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="nav-collapse">
			<ul class="nav navbar-nav navbar-right xs-centralize">
				<li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us' ) !== false ) echo ' active keep-open open'; ?>">
					<a class="dropdown-toggle disabled" href="/about-us/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/our-founders' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/our-founders/">Our Founders</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/history' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/history/">History</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/our-promise' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/our-promise/">Our Promise</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/milestones' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/milestones/">Milestones</a></li>
					</ul>
				</li>
				<li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities' ) !== false ) echo ' active keep-open open'; ?>">
					<a class="dropdown-toggle disabled" href="/capabilities/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Capabilities</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/technology' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/technology/">Technology</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/logistics' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/logistics/">Logistics</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/warehousing' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/warehousing/">Warehousing</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/storage' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/storage/">Storage</a></li>
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/transportation' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/transportation/">Transportation</a></li>
					</ul>
				</li>
				<li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/subsidiaries' ) !== false ) echo ' active keep-open open'; ?>">
					<a class="dropdown-toggle disabled" href="/subsidiaries/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Subsidiaries</a>
					<ul class="dropdown-menu dropdown-menu-left">
						<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/subsidiaries/jcs-shrimp' ) !== false ) echo ' class="active"'; ?>><a href="/subsidiaries/jcs-shrimps/">JCS Shrimps</a></li>
					</ul>
				</li>
				<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/contact' ) !== false ) echo ' class="active"'; ?>><a href="/contact/">Contact</a></li>
				<li class="no-bg no-padding padding-right15 search-form">
					<input type="text">
					<span>Search</span>
				</li>
			</ul>
		</div>
	</div>
</nav>