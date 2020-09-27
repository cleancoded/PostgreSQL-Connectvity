<?php
// Logs are put in the PostgreSQLConnectivity directory
define( 'PostgreSQLConnectivity_LOG', PostgreSQLConnectivity_ROOT.'/logs/');
// Check if the logs directory is needed and exists or create it if possible
if( (PostgreSQLConnectivity_DEBUG || PostgreSQLConnectivity_LOG_ERRORS) &&
	!file_exists( PostgreSQLConnectivity_LOG) &&
	is_writable(dirname( PostgreSQLConnectivity_LOG)))
	mkdir( PostgreSQLConnectivity_LOG);

// Load the driver defined in 'db.php'
require_once( PostgreSQLConnectivity_ROOT.'/driver_'.DB_DRIVER.'.php');

// This loads up the wpdb class applying appropriate changes to it
$replaces = array(
	'define( '	=> '// define( ',
	'class wpdb'	=> 'class wpdb2',
	'new wpdb'	=> 'new wpdb2',
	'mysql_'	=> 'wpsql_',
	'<?php'		=> '',
	'?>'		=> '',
);
// Ensure class uses the replaced mysql_ functions rather than mysqli_
define( 'WP_USE_EXT_MYSQL', true);
eval( str_replace( array_keys($replaces), array_values($replaces), file_get_contents(ABSPATH.'/wp-includes/wp-db.php')));

// Create wpdb object if not already done
if (! isset($wpdb) && defined('DB_USER'))
	$wpdb = new wpdb2( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );
