<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri (); ?>/assets/img/logo.png" alt="JCS Website"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse pull-right">
        <ul class="nav navbar-nav">
            <li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us' ) !== false ) echo ' active keep-open open'; ?>">
                <a href="/about-us/"<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us' ) !== false ) echo ' class="active"'; ?>><i class="fa fa-angle-<?php echo strpos ( $_SERVER['REQUEST_URI'], '/about-us' ) !== false ? 'down' : 'right' ?>" aria-hidden="true"></i>About Us</a>
                <ul class="dropdown-content">
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/our-founders' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/our-founders/">Our Founders</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/history' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/history/">History</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/our-promise' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/our-promise/">Our Promise</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/about-us/milestones' ) !== false ) echo ' class="active"'; ?>><a href="/about-us/milestones/">Milestones</a></li>
                </ul>
            </li>
            <li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities' ) !== false ) echo ' active keep-open open'; ?>">
                <a href="/capabilities/"<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities' ) !== false ) echo ' class="active"'; ?>><i class="fa fa-angle-<?php echo strpos ( $_SERVER['REQUEST_URI'], '/capabilities' ) !== false ? 'down' : 'right' ?>" aria-hidden="true"></i>Capabilities</a>
                <ul class="dropdown-content">
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/technology' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/technology/">Technology</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/logistics' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/logistics/">Logistics</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/warehousing' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/warehousing/">Warehousing</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/storage' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/storage/">Storage</a></li>
					<li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/capabilities/transportation' ) !== false ) echo ' class="active"'; ?>><a href="/capabilities/transportation/">Transportation</a></li>
                </ul>
            </li>
            <li class="dropdown<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/related-company' ) !== false ) echo ' active keep-open open'; ?>">
                <a href="/related-company/"<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/related-company' ) !== false ) echo ' class="active"'; ?>><i class="fa fa-angle-<?php echo strpos ( $_SERVER['REQUEST_URI'], '/related-company' ) !== false ? 'down' : 'right' ?>" aria-hidden="true"></i>Related Company</a>
                <ul class="dropdown-content">
                    <li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/related-company/jcs-shrimps' ) !== false ) echo ' class="active"'; ?>><a href="/related-company/jcs-shrimps/">JCS Shrimps</a></li>
                </ul>
            </li>
            <li<?php if ( strpos ( $_SERVER['REQUEST_URI'], '/contact' ) !== false ) echo ' class="active"'; ?>><a href="/contact/"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
            <li>
                <form action="/">
                	<input type="text" name="s"> Search
					<input type="submit" style="position: absolute; top: -9000px; left: -9000px; opacity: 0;">
				</form>
            </li>
            <li>
            	<a href="http://jcs.dyndns-server.com:8000/G8CLSR1V9PORTAL/Login.aspx" target="_blank" class="button order-btn" style="position: relative; display: block;">
	            	<span  style="background: #295b60; opacity: 0.7; padding: 1rem;">
	            		<b style="font-weight: normal; color: #fff;">Ordering Portal</b>
	            	</span>
	            </a>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
</nav>