<?php
// If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_filter('widget_text', 'do_shortcode');
