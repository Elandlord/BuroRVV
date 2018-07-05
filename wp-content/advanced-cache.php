<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/www/htdocs/burorvv/wp-content/cache/wp-rocket/';
$rocket_config_path = '/www/htdocs/burorvv/wp-content/wp-rocket-config/';

if ( file_exists( '/www/htdocs/burorvv/wp-content/plugins/wp-rocket/inc/front/process.php' ) ) {
	include( '/www/htdocs/burorvv/wp-content/plugins/wp-rocket/inc/front/process.php' );
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}