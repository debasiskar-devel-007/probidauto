<?php
/**
 * Bilanti functions and definitions
 *
 * Sets up the theme and provides some helper functions. 
 *
 * @package WordPress
 * @subpackage Bilanti
 */

 
 /**
 * Breadcoumb Support
 */

include_once( 'includes/breadcoumb.php' ); 

 
/* WordPress 3.0 Menu Editor ********************************************/

	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'brightpage' ) );
		}
	}
/*
	function wpj_default_menu() {
		echo '<ul id="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
*/
	register_nav_menu( 'menu_footer', __( 'Footer Menu', 'bilanti' ) );

 
 
 /* Register sidebars and widgetized areas ********************************************/
	
	function bilanti_widget_areas() {

		
   	 register_sidebar( array(
			'name' => __( 'slider', 'bilanti' ),
			'id' => 'slider',
			'before_widget' => '',
	        'after_widget' => '',
	        'before_title' => '',
	        'after_title' => '',
	    ) );



	}
	add_action('widgets_init', 'bilanti_widget_areas');
 
 ?>