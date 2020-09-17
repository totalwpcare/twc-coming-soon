<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit 

/**
 * TotalWPCare Functions to Handle Admin Panel
 * @author Amit Kumar
 */

function TotalWPCare_CS_ShowWarningMsg()
{
	$twc_maintenance_mode_active = get_option('totalwpcare_maintenance_mode');
	// ob_start();
	if($twc_maintenance_mode_active == 1)
	{
		?><div class="error">
            <p><strong><?php _e('WARNING', 'TotalWPCare_CS'); ?></strong>: <?php _e('Your site is in Maintenance Mode. To customise the Themes & Settings, <a href="'.get_dashboard_url().'admin.php?page=totalwpcare_cs-maintenance-mode">visit the plugin settings page.</a>', 'TotalWPCare_CS'); ?></p>
        </div><?php
	}
        // ob_get_clean();
}
add_action('admin_notices', 'TotalWPCare_CS_ShowWarningMsg');

function TotalWPCare_CS_AdminBarButton()
{		
	global $wp_admin_bar;
	$twc_maintenance_mode_active = get_option('totalwpcare_maintenance_mode');
	if($twc_maintenance_mode_active=='0') return;
	$msg = __('Maintenance Mode Active','');
	
	// Add Parent Menu
	$args = array(
		'id' => 'totalwpcare_maintenance_mode_menu',
		'title' => $msg,
		'parent' => 'top-secondary',
		'href' => '/wp-admin/admin.php?page=totalwpcare_cs-maintenance-mode',
		'meta'   => array( 'class' => 'totalwpcare_maintenance_button' ),
	);
	$wp_admin_bar->add_menu($args);  
}
add_action('admin_bar_menu', 'TotalWPCare_CS_AdminBarButton', 1000);

function TotalWPCare_CS_AddAdminNavigation()
{
    $menu = add_menu_page('TWC Maintenance Mode', 'TWC Maintenance','administrator', 'totalwpcare_cs-maintenance-mode','TotalWPCare_CS_MaintenanceSettingsContent','dashicons-hammer');
    add_submenu_page('totalwpcare_cs-maintenance-mode', 'General TWC Comming Soon Settings', 'General', 'administrator', 'totalwpcare_cs-maintenance-mode', 'TotalWPCare_CS_MaintenanceSettingsContent');
    add_submenu_page('totalwpcare_cs-maintenance-mode', 'Themes', 'Themes', 'administrator', 'totalwpcare_cs-themes', 'TotalWPCare_CS_MaintenanceThemes');
   /* add_submenu_page('totalwpcare_cs-maintenance-mode', 'Marketplace', 'Marketplace', 'administrator', 'totalwpcare_cs-marketplace', 'TotalWPCare_CS_MaintenanceSupport');
   add_submenu_page('totalwpcare_cs-maintenance-mode', 'Premium Support', 'Premium Support', 'administrator', 'totalwpcare_cs-premium-support', 'TotalWPCare_CS_MaintenanceSupport'); */

    add_action( 'admin_print_styles-' . $menu, 'TotalWPCare_CS_AddAdminScriptsAndStyles' );
}
add_action('admin_menu','TotalWPCare_CS_AddAdminNavigation');

function TotalWPCare_CS_MaintenanceSettingsContent()
{
	include(TOTALWPCARE_CS_PLUGIN_DIR."admin/settings.php");
}

function TotalWPCare_CS_MaintenanceThemes()
{
	include(TOTALWPCARE_CS_PLUGIN_DIR."admin/themes.php");
}

function TotalWPCare_CS_MaintenanceSupport()
{
	include(TOTALWPCARE_CS_PLUGIN_DIR."admin/premium-support.php");
}