=== PostgreSQL Connectivity ===

Contributors: https://cleancoded.com/

Tags: database, postgresql, PostgreSQL, postgres, mysql

Requires at least: 2.9.2

Tested up to: 5.6

Stable tag: 1.0


PostgreSQL for WordPress is a special 'plugin' enabling WordPress to be used with a PostgreSQL database.

== Description ==

PostgreSQL for WordPress (PostgreSQLConnectivity) gives you the possibility to install and use WordPress with a PostgreSQL database as a backend.

It works by replacing calls to MySQL specific functions with generic calls that maps them 

== Installation ==

You have to install PostgreSQLConnectivity *before* configuring your WordPress installation for things to work properly.

This is because the database needs to be up and running before any plugin can be loaded.

1.  Place your WordPress files in the right place on your web server.

1.	Unzip the files from PostgreSQLConnectivity and put the `PostgreSQLConnectivity` directory in your `/wp-content` directory.

1.	Copy the `db.php` from the `PostgreSQLConnectivity` directory to `wp-content`
	
	You can modify this file to configure the database driver you wish to use
	Currently you can set 'DB_DRIVER' to 'pgsql' or 'mysql'
	
	You can also activate DEBUG and/or ERROR logs

1.	Create `wp-config.php` from `wp-config-sample.php` if it does not already exist (PostgreSQLConnectivity does not currently intercept database connection setup).

1.	Point your Web Browser to your WordPress installation and go through the traditional WordPress installation routine.


== Changelog ==

= 1.0 =

Initial release