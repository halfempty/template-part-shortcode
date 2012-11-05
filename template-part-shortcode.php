<?php
/*
Plugin Name: Template Part Shortcode
Plugin URI: https://github.com/halfempty/template-part-shortcode
Description: A (very) simple WordPress plugin for embedding template parts in your content.
Version: 0.1
Author: Marty Spellerberg
Author URI: http://martyspellerberg.com
License: GPLv2 or later
*/

function template_part_shortcode( $atts ) {

	extract( shortcode_atts( array(
		'part' => '',
	), $atts ) );

	$file = locate_template('parts/' . $part . '.php');

    ob_start();
    include $file;
    $template = ob_get_contents();
    ob_end_clean();
    return $template;

}
add_shortcode( 'template', 'template_part_shortcode' );

?>
