<?php
/**
 * Plugin Name: TWC Coming Soon Page, Under Construction & Maintenance Mode
 * Plugin URI: http://totalwpcare.com/
 * Description:  Best Coming Soon Page, Under Construction & Maintenance Mode plugin for WordPress.
 * Version: 1.0.0
 * Author: the TotalWPCare Team
 * Author URI: http://totalwpcare.com
 * License: GPLv2 or later
 * Text Domain: totalwpcare
 * Requires at least: 5.2
 * Requires PHP: 7.0
**/

defined( 'ABSPATH' ) || exit;

function TotalWPCare_CS_installer(){
    include(plugin_dir_path( __FILE__ ).'admin/twc-installer.php');
}
register_activation_hook( __file__, 'TotalWPCare_CS_installer' );

function TotalWPCare_CS_scripts() {
    wp_enqueue_script('jquery');
}
add_action('wp_footer', 'TotalWPCare_CS_scripts');

if ( ! class_exists( 'TotalWPCare_CS_coming_soon' ) ) :
class TotalWPCare_CS_coming_soon {
  /**
  * Construct the plugin.
  */
  public function __construct() {
    add_action( 'plugins_loaded', array( $this, 'init' ) );
  }
  /**
  * Initialize the plugin.
  */
  public function init() {
  	global $wp;
    define( 'TOTALWPCARE_CS_VERSION', '1.0.0' ); // Version of Plugin
		define( 'TOTALWPCARE_CS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
		define( 'TOTALWPCARE_CS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
		include(TOTALWPCARE_CS_PLUGIN_DIR . 'controllers/AssetsController.php');
    include(TOTALWPCARE_CS_PLUGIN_DIR . 'controllers/ThemesController.php');
		include(TOTALWPCARE_CS_PLUGIN_DIR . 'controllers/AdminController.php');
  	}
}
$TotalWPCare_CS_coming_soon = new TotalWPCare_CS_coming_soon( __FILE__ );
endif;
