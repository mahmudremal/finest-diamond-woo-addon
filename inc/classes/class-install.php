<?php
/**
 * Bootstraps the Theme.
 *
 * @package FinestDiamond
 */
namespace FINEST_DIAMOND_WOO_ADDON\inc;
use FINEST_DIAMOND_WOO_ADDON\inc\Traits\Singleton;

class Install {
	use Singleton;
	protected function __construct() {
		$this->setup_hooks();
	}
	protected function setup_hooks() {
		add_action('init', [ $this, 'load_plugin_textdomain' ], 1, 0);
		
		register_activation_hook(FINEST_DIAMOND_WOO_ADDON__FILE__, [ $this, 'register_activation_hook' ]);
		register_deactivation_hook(FINEST_DIAMOND_WOO_ADDON__FILE__, [ $this, 'register_deactivation_hook' ]);
	}
	public function load_plugin_textdomain() {
		load_plugin_textdomain('domain', false, dirname(plugin_basename(FINEST_DIAMOND_WOO_ADDON__FILE__)) . '/languages');
	}
	public function register_activation_hook() {
		global $wpdb;$prefix = $wpdb->prefix . 'fwp_';
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		$tables = [];$charset_collate = $wpdb->get_charset_collate();
		foreach($tables as $table ) {dbDelta($table);}
		$options = [ 'fwp_google_auth_code', 'fwp_google_afterauth_redirect' ];
		foreach($options as $option ) {
			if(!get_option($option,false)) {add_option($option, []);}
		}
	}
	public function register_deactivation_hook() {
		global $wpdb;$prefix = $wpdb->prefix . 'fwp_';
		$tables = []; // [ 'stripe_payments', 'stripe_subscriptions', 'googledrive' ];
		foreach($tables as $table ) {
			// $wpdb->query("DROP TABLE IF EXISTS {$prefix}{$table};");
		}
	}
}
