<?php
/*
Plugin Name: WP Float Admin Box
Version: 1.0.0
Description: This plugin help you to float the post box. The post box will auto fly to your viewport when you scroll the admin edit post page.
Author: Nguyen Van Duoc
Author URI: http://senviet.org
Plugin URI: http://senviet.org
*/

// Creating settings page objects
if ( is_admin()) {
	$screen = get_current_screen();
	if( "post" == $screen->parent_base)
	{
		add_action( 'admin_enqueue_scripts', "fab_enqueue_script");
	}
}

function fab_enqueue_script()
{
	wp_enqueue_script('fas-script-hcsticky',plugin_dir_url( __FILE__ ) . '/script/jquery.hcsticky-min.js',array( 'jquery' ), "1.0.0", true);
		wp_enqueue_script('fas-script-floatAdminBox',plugin_dir_url( __FILE__ ) . '/script/floatAdminBox.js',array( 'jquery' ), "1.0.0", true);
}

