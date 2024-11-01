<?php
// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
exit;
}

/* Function that creates the shortcode [wp-ano-atual] */
function wp_anox($atts){

extract(shortcode_atts(array('inicio' => '',), $atts));

	/*It receives the array from the start date, and returns it along with the current date. Start Date - Current Date*/
	$inicio = isset($inicio) ? $inicio : '';
	echo $copyright.''.$inicio.'-'.date('Y');
	
	/* apply style */
	wp_enqueue_style(
			'sfcd_welcome_style',
			dirname( plugin_dir_url( __FILE__ ) )  . '/assets/admin/css/welcome.css',
			array(),
			'',
			'all'
		);
	
	  
}
add_shortcode('wp-ano-atual', 'wp_anox');

