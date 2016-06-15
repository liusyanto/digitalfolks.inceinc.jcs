<?php
	
	
// Remove the annoying admin bar.
	
add_filter ( 'show_admin_bar', '__return_false' );


// Remove the also annoying EMOJI stuff.

remove_action ( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action ( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action ( 'wp_print_styles', 'print_emoji_styles' );
remove_action ( 'admin_print_styles', 'print_emoji_styles' );


// Register menus.

register_nav_menu ( 'site', 'Site Navigation' );


// Enable custom options for ACF Pro.

if ( function_exists ( 'acf_add_options_page' ) ) acf_add_options_page ();


// Allow featured images for posts.

add_theme_support ( 'post-thumbnails' ); 
add_image_size ( 'Full Width', 920, 400, true );
add_image_size ( 'Float Side', 240, 160, true );

?>