<?php
	/**
	 * Plugin Name: Webcraftic Hide login page
	 * Plugin URI: https://wordpress.org/plugins/hide-login-page/
	 * Description: Hide wp-login.php login page and close wp-admin access to avoid hacker attacks and brute force.
	 * Author: Webcraftic <wordpress.webraftic@gmail.com>
	 * Version: 1.0.1
	 * Text Domain: hide-login-page
	 * Domain Path: /languages/
	 * Author URI: http://webcraftic.com
	 */

	// Exit if accessed directly
	if( !defined('ABSPATH') ) {
		exit;
	}

	if( defined('WHLP_PLUGIN_ACTIVE') || (defined('WCL_PLUGIN_ACTIVE') && !defined('LOADING_HIDE_LOGIN_PAGE_AS_ADDON')) ) {
		function wbcr_hlp_admin_notice_error()
		{
			?>
			<div class="notice notice-error">
				<p><?php _e('We found that you have the "Clearfy - disable unused features" plugin installed, this plugin already has disable comments functions, so you can deactivate plugin "Hide Login Page"!', 'hide-login-page'); ?></p>
			</div>
		<?php
		}

		add_action('admin_notices', 'wbcr_hlp_admin_notice_error');

		return;
	} else {

		define('WHLP_PLUGIN_ACTIVE', true);
		define('WHLP_PLUGIN_DIR', dirname(__FILE__));
		define('WHLP_PLUGIN_BASE', plugin_basename(__FILE__));
		define('WHLP_PLUGIN_URL', plugins_url(null, __FILE__));

		
		
		if( !defined('LOADING_HIDE_LOGIN_PAGE_AS_ADDON') ) {
			require_once(WHLP_PLUGIN_DIR . '/libs/factory/core/boot.php');
		}

		require_once(WHLP_PLUGIN_DIR . '/includes/class.plugin.php');

		if( !defined('LOADING_HIDE_LOGIN_PAGE_AS_ADDON') ) {

			new WHLP_Plugin(__FILE__, array(
				'prefix' => 'wbcr_hlp_',
				'plugin_name' => 'wbcr_hide_login_page',
				'plugin_title' => __('Webcraftic Hide login page', 'hide-login-page'),
				'plugin_version' => '1.0.1',
				'required_php_version' => '5.2',
				'required_wp_version' => '4.2',
				'plugin_build' => 'free',
				//'updates' => WHLP_PLUGIN_DIR . '/updates/'
			));
		}
	}