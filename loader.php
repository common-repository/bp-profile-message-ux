<?php
/*
Plugin Name: BP Profile Message UX Free
Description: A BuddyPress plugin. Replaces the functionality for Public and Private buttons so that you stay on a profile page when sending.  
Author: PhiloPress
License: GPLv2 
Author URI: https://philopress.com/
Version: 1.8
Text Domain: bp-profile-message-ux
Domain Path: /languages/
*/

if ( !defined( 'ABSPATH' ) ) exit;  

define( 'BP_PROFILE_MESSAGE_UX', '1.7' );

function bp_profile_message_ux_init() {
	if ( bp_is_user() ) {
	    require( dirname( __FILE__ ) . '/bp-profile-message-ux.php' );
		load_plugin_textdomain( 'bp-profile-message-ux', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );	
	}
}
add_action( 'bp_init', 'bp_profile_message_ux_init' );

