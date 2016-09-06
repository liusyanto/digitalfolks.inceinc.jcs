<?php
	
	
// Set output headers to CSS file.
	
header ( 'Content-type: text/css; charset=utf8' );


// Fetch all files and display after sorting.

$files   = array ();
$handler = opendir ( __DIR__ );

while ( ( $file = readdir ( $handler ) ) !== false ) if ( substr ( $file, -4 ) == '.css' ) $files[] = $file;

asort ( $files );

foreach ( $files as $file ) echo file_get_contents ( __DIR__ . '/' . $file );
	
?>