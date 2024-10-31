<?php
/**
 * Plugin Name: Optinopoli
 * Description: Integrates your Wordpress blog with optinopoli&trade; to capture leads through your website and multiple content channels across the web, with personalized on-site engagement to build relationships and convert leads into buyers. Once activated, go to <em>Settings &gt; Optinopoli</em>.
 * Author: optinopoli&trade;
 * Author URI: https://www.optinopoli.com
 * Version: 1.1.4
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
define('OPTINOPOLI_PLUGIN_DIR', str_replace('\\','/',dirname(__FILE__)));

if ( !class_exists( 'Optinopoli' ) ) {

	class Optinopoli {

		function __construct(){
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
			add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
			add_action( 'wp_footer', array( &$this, 'website_insert_script_output'), 10000);
		}

		
		/**
		 * Register settings for sitewide script
		 */
		function admin_init(){
			register_setting( 'install-optinopoli', 'optinopoli_insert_footer', 'trim' );
		}

        /**
         * Adds menu item to wordpress admin dashboard
         */
		function admin_menu(){
			$page = add_submenu_page( 'options-general.php', __('Install optinopoli™', 'install-optinopoli'), __('Optinopoli', 'install-optinopoli'), 'manage_options', __FILE__, array( &$this, 'optinopoli_options_panel' ) );
		}

        function website_insert_script_output(){
        	$meta = get_option( 'optinopoli_insert_footer', '' );
          	if ( $meta != '' ) {
				echo $meta, "\n";
			}
        }

        /**
         * Load options page
         */
		function optinopoli_options_panel() {
			require_once(OPTINOPOLI_PLUGIN_DIR . '/inc/options.php');
		}

	}

	$optinopoli_script = new Optinopoli();
}
