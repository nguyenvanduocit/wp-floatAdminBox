<?php

/**
* 
*/
class FloatAdminBoxScript
{
	
	static function Init($hook_suffix)
	{
		wp_enqueue_script('fas-script-hcsticky',plugin_dir_url( __FILE__ ) . '/script/jquery.hcsticky-min.js',array( 'jquery' ), "1.0.0", true);
		wp_enqueue_script('fas-script-floatAdminBox',plugin_dir_url( __FILE__ ) . '/script/floatAdminBox.js',array( 'jquery' ), "1.0.0", true);			
	}
}
?>