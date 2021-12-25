<?php

define('fs_ADMIN', get_bloginfo('template_url') .'/lib/admin/');


/*	##################################
	TS ADMIN HEAD
	################################## */

if($_REQUEST['page']=='fors-options' || $_REQUEST['page']=='fors-themes' || $_REQUEST['page']=='fors-news') :

	add_action( 'admin_init', 'fs_admin_head' );
	
	function fs_admin_head() {
	
		wp_enqueue_script('media-upload');
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_style( 'thickbox' );
		wp_register_script('fors-upload', fs_ADMIN .'admin-upload.js', array('jquery'));
		wp_enqueue_script('fors-upload');
		wp_register_script('fors-cookie', fs_ADMIN .'admin-cookie.js', array('jquery'));
		wp_enqueue_script('fors-cookie');
		wp_register_script('fors-toggle', fs_ADMIN .'admin-toggle.js', array('jquery'));
		wp_enqueue_script('fors-toggle');	
		wp_enqueue_style('fors-options', fs_ADMIN .'admin-style.css', false, "1.0", "all");
	
	}

endif;


/*	##################################
	TS ADMIN MENU
	################################## */

add_action('admin_menu', 'fs_create_menu');

function fs_create_menu() {

	global $fs_theme, $fs_short, $fs_options;
	add_menu_page($fs_theme.' Theme Settings', $fs_theme, 'administrator', 'fors-options', 'fs_settings_page', fs_ADMIN .'img/fs-admin-icon.png', 61);
	add_submenu_page('fors-options', $fs_theme.' Theme Settings', 'Theme Options', 'administrator', 'fors-options', 'fs_settings_page');
	
}


/*	##################################
	TS ADMIN DASHBOARD
	################################## */

function fs_dashboard() {

	include_once(ABSPATH . WPINC . '/feed.php');
	$rss = fetch_feed('http://themeshift.com/feed/');
	$maxitems = $rss->get_item_quantity(5); 
	$items = $rss->get_items(0, $maxitems);			
	$i=1; foreach ( $items as $item ) :	
		echo '<p><a href="'.$item->get_permalink().'" class="rsswidget" title="'.$item->get_description().'">'.$item->get_title().'</a></p>';
	$i++; endforeach;

}

function fs_dashboard_setup() {
    wp_add_dashboard_widget( 'fs_dashboard', 'ThemeShift News', 'fs_dashboard' );
}
add_action('wp_dashboard_setup', 'fs_dashboard_setup');

?>