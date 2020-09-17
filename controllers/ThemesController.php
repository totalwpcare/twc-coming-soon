<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit 

/**
 * TotalWPCare Functions to manage themes
 * @author Amit Kumar
 */
 $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(empty($pageWasRefreshed)):
	if(!empty($_GET['twc_theme_activate'])):
		$twc_theme_activate = sanitize_text_field($_GET['twc_theme_activate']);
		if(update_option('totalwpcare_maintenance_active_theme', $twc_theme_activate)):
			?>
			<div class="notice notice-success is-dismissible"> 
				<p><strong>Maintenance theme updated successfully.</strong></p>
				<button type="button" class="notice-dismiss">
					<span class="screen-reader-text">Dismiss this notice.</span>
				</button>
			</div>
			<?php
		else:
			?>
			<div class="notice notice-error is-dismissible"> 
				<p><strong>Something is wrong! Please try again.</strong></p>
				<button type="button" class="notice-dismiss">
					<span class="screen-reader-text">Dismiss this notice.</span>
				</button>
			</div>
			<?php
		endif;
	endif;
endif;

function TotalWPCare_CS_DispayMaintenanceMode()
{
	$twc_maintenance_mode_active = get_option('totalwpcare_maintenance_mode');
	$totalwpcare_maintenance_active_theme = get_option('totalwpcare_maintenance_active_theme');
	$totalwpcare_maintenance_active_theme = !empty($totalwpcare_maintenance_active_theme) ? $totalwpcare_maintenance_active_theme : 'twc-2020';
	
	if($twc_maintenance_mode_active=="1")
	{
		if(!empty($_GET['twc_cs_live_preview']))
		{
			$twc_cs_live_preview = sanitize_text_field($_GET['twc_cs_live_preview']);
			$file = TOTALWPCARE_CS_PLUGIN_DIR."themes/".$twc_cs_live_preview."/index.php";
			include($file);
			exit();
		}	
		else if(preg_match("/login|admin|dashboard|account/i",$_SERVER['REQUEST_URI']) > 0 )
		{
			return false;
		}
		
		// Check if user is logged in.
		if (!is_user_logged_in()):
			$file = TOTALWPCARE_CS_PLUGIN_DIR."themes/".$totalwpcare_maintenance_active_theme."/index.php";
			include($file);
			exit();
		else:
			$wp_get_current_user =  wp_get_current_user();
			$LoggedInUserID = $wp_get_current_user->ID;
			$UserData = get_userdata( $LoggedInUserID );
			//if user role not 'administrator' then redirect page 
			if($UserData->roles[0] != "administrator")
			{
				$file = TOTALWPCARE_CS_PLUGIN_DIR."themes/".$totalwpcare_maintenance_active_theme."/index.php";
				include($file);
				exit();
			}
		endif;
	}
}
add_action( 'template_redirect', 'TotalWPCare_CS_DispayMaintenanceMode' );