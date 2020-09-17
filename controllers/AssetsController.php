<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit 

/**
 * TotalWPCare Functions to manage assets
 * @author Amit Kumar
 */

function TotalWPCare_CS_AddAdminBarStyles()
{
	wp_register_style('totalwpcare_admin_bar_style', plugins_url('../assets/css/admin-style.css', __FILE__));
	wp_enqueue_style('totalwpcare_admin_bar_style');
}
add_action( 'admin_enqueue_scripts', 'TotalWPCare_CS_AddAdminBarStyles' );
add_action( 'wp_enqueue_scripts', 'TotalWPCare_CS_AddAdminBarStyles' );

function TotalWPCare_CS_AddAdminScriptsAndStyles()
{

}