<?php
/**
 * Block Patterns
 *
 * @package FinestDiamond
 */

namespace FINEST_DIAMOND_WOO_ADDON\inc;

use FINEST_DIAMOND_WOO_ADDON\inc\Traits\Singleton;

class Ajax {
	use Singleton;
	protected function __construct() {
		$this->setup_hooks();
	}
	protected function setup_hooks() {
		// add_action('wp_ajax_futurewordpress/project/teddybearpopupaddon/action/get_autocomplete', [$this, 'get_autocomplete'], 10, 0);
		// add_action('wp_ajax_nopriv_futurewordpress/project/teddybearpopupaddon/action/get_autocomplete', [$this, 'get_autocomplete'], 10, 0);

	}
	public function get_autocomplete() {
	}

}
