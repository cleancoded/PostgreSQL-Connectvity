<?php
/*
Plugin Name: PostgreSQL Connectivity
Plugin URI: https://github.com/cleancoded/PostgreSQL-Connectvity
Description: PostgreSQL Connectivity is a special 'plugin' enabling WordPress to use a PostgreSQL database.
Version: 1.0
Author: Cleancoded
Author URI: https://cleancoded.com/
*/

if( !defined('PostgreSQLConnectivity_ROOT'))
{
// You can choose the driver to load here
define('DB_DRIVER', 'pgsql'); // 'pgsql' or 'mysql' are supported for now

// Set this to 'true' and check that `PostgreSQLConnectivity` is writable if you want debug logs to be written
define( 'PostgreSQLConnectivity_DEBUG', false);
// If you just want to log queries that generate errors, leave PostgreSQLConnectivity_DEBUG to "false"
// and set this to true
define( 'PostgreSQLConnectivity_LOG_ERRORS', true);

// If you want to allow insecure configuration (from the author point of view) to work with PostgreSQLConnectivity,
// change this to true
define( 'PostgreSQLConnectivity_INSECURE', false);

// This defines the directory where PostgreSQLConnectivity files are loaded from
//   3 places checked : wp-content, wp-content/plugins and the base directory
if( file_exists( ABSPATH.'/wp-content/PostgreSQLConnectivity'))
	define( 'PostgreSQLConnectivity_ROOT', ABSPATH.'/wp-content/PostgreSQLConnectivity');
else if( file_exists( ABSPATH.'/wp-content/plugins/PostgreSQLConnectivity'))
	define( 'PostgreSQLConnectivity_ROOT', ABSPATH.'/wp-content/plugins/PostgreSQLConnectivity');
else if( file_exists( ABSPATH.'/PostgreSQLConnectivity'))
	define( 'PostgreSQLConnectivity_ROOT', ABSPATH.'/PostgreSQLConnectivity');
else
	die('PostgreSQLConnectivity file directory not found');

// Here happens all the magic
require_once( PostgreSQLConnectivity_ROOT.'/core.php');
} // Protection against multiple loading
