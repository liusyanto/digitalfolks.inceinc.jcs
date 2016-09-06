<?php
	
	
// Set output headers to JavaScript file.
	
header ( 'Content-type: application/javascript; charset=utf8' );


// Fetch all files and display after sorting.

$files   = array ();
$handler = opendir ( __DIR__ );

while ( ( $file = readdir ( $handler ) ) !== false ) if ( substr ( $file, -3 ) == '.js' ) $files[] = $file;

asort ( $files );

foreach ( $files as $file ) echo file_get_contents ( __DIR__ . '/' . $file ) . "\n\n";
	
?>