<?php
/**
 * Get/Define theme settings
 *
 */

$theme_version = '';
$pgbo_output = '';
	
if( is_child_theme() ) {
  $temp_obj = wp_get_theme();
  $theme_obj = wp_get_theme( $temp_obj->get('Template') );
} else {
  $theme_obj = wp_get_theme();    
}

$theme_version = $theme_obj->get('Version');
$theme_name = $theme_obj->get('Name');
$theme_uri = $theme_obj->get('ThemeURI');
$author_uri = $theme_obj->get('AuthorURI');

if( !defined('ADMIN_PATH') )
	define( 'ADMIN_PATH', get_template_directory() . '/includes/' );

if( !defined('ADMIN_DIR') )
	define( 'ADMIN_DIR', get_template_directory_uri() . '/includes/' );

define( 'ADMIN_IMAGES', ADMIN_DIR . 'admin/images/' );

define( 'THEMENAME', $theme_name );

/* Theme version, uri, and the author uri are not completely necessary, but may be helpful in adding functionality */
define( 'THEMEVERSION', $theme_version );
define( 'THEMEURI', $theme_uri );
define( 'THEMEAUTHORURI', $author_uri );

require_once( ADMIN_PATH . 'admin/class.pgb_customizer.php' ); // Theme Customizer
//require_once( ADMIN_PATH . 'admin/class.post_formats.php' ); // Post Formats Meta Boxes
require_once( ADMIN_PATH . 'admin/pgb-filters.php' ); // Theme Filters
require_once( ADMIN_PATH . 'admin/pgb-functions.php' ); // Theme Functions

//add_action('wp_ajax_pgb_ajax_post_action', 'pgb_ajax_callback');