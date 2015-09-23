<?php
/**************************************************
title: Add Timestamp to Gravity form submissions
author: jthorn
source: 
**************************************************/
function gform_addtimestamp($form) {
	$tz = date_default_timezone_get();
	date_default_timezone_set('America/New_York');
	$_POST["input_11"] = date("m-d-Y h:i:s a");
	date_default_timezone_set($tz);
}
add_action("gform_pre_submission", "gform_addtimestamp");


add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

add_filter('gform_init_scripts_footer', '__return_true');