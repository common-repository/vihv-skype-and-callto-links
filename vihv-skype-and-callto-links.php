<?php
/**
@package Vihv Menu

Plugin Name: Vihv Skype and Callto menu links
Plugin URI: http://vihv.org/store/v/our-plugins/vihv-skype-and-callto-links/
Description: Allow to use custom menu links like "skype:your_skype_name?call" and "callto:your_phone_number" in wordpress menu. By default this links won't work, because wp will replace em to links like http://skype:your_skype_name. 
Version: 1.6
Author: Vigorous Hive
Author URI: http://vihv.org
License: MIT
*/

function vihv_skype_callto_links($protocols) {
	if(!empty($protocols)) {
		$protocols[] = 'skype';
		$protocols[] = 'callto';
		$protocols[] = 'tel';
	}
	return $protocols;
}

add_filter('kses_allowed_protocols', 'vihv_skype_callto_links');
