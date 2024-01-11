<?php
/**
 * This plugin ordered by a client and done by Remal Mahmud (fiverr.com/mahmud_remal). Authority dedicated to that cient.
 *
 * @wordpress-plugin
 * Plugin Name:       Finest Diamond Woo Addon
 * Plugin URI:        https://github.com/mahmudremal/finest-diamond-woo-addon/
 * Description:       Customize teddy bear's apearence before making order.
 * Version:           1.0.1
 * Requires at least: 6.2
 * Requires PHP:      7.4
 * Author:            Remal Mahmud
 * Author URI:        https://github.com/mahmudremal/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       domain
 * Domain Path:       /languages
 * 
 * @package FinestDiamond
 * @author  Remal Mahmud (https://github.com/mahmudremal)
 * @version 1.0.2
 * @link https://github.com/mahmudremal/finest-diamond-woo-addon/
 * @category	WooComerce Plugin
 * @copyright	Copyright (c) 2023-25
 * 
 */

/**
 * Bootstrap the plugin.
 */



defined('FINEST_DIAMOND_WOO_ADDON__FILE__') || define('FINEST_DIAMOND_WOO_ADDON__FILE__', untrailingslashit(__FILE__));
defined('FINEST_DIAMOND_WOO_ADDON_DIR_PATH') || define('FINEST_DIAMOND_WOO_ADDON_DIR_PATH', untrailingslashit(plugin_dir_path(FINEST_DIAMOND_WOO_ADDON__FILE__)));
defined('FINEST_DIAMOND_WOO_ADDON_DIR_URI') || define('FINEST_DIAMOND_WOO_ADDON_DIR_URI', untrailingslashit(plugin_dir_url(FINEST_DIAMOND_WOO_ADDON__FILE__)));
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_URI') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_URI', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_URI ) . '/assets/build');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_PATH') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_PATH', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_PATH ) . '/assets/build');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_JS_URI') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_JS_URI', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_URI ) . '/assets/build/js');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_JS_DIR_PATH') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_JS_DIR_PATH', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_PATH ) . '/assets/build/js');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_IMG_URI') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_IMG_URI', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_URI ) . '/assets/build/src/img');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_CSS_URI') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_CSS_URI', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_URI ) . '/assets/build/css');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_CSS_DIR_PATH') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_CSS_DIR_PATH', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_PATH ) . '/assets/build/css');
defined('FINEST_DIAMOND_WOO_ADDON_BUILD_LIB_URI') || define('FINEST_DIAMOND_WOO_ADDON_BUILD_LIB_URI', untrailingslashit(FINEST_DIAMOND_WOO_ADDON_DIR_URI ) . '/assets/build/library');
defined('FINEST_DIAMOND_WOO_ADDON_ARCHIVE_POST_PER_PAGE') || define('FINEST_DIAMOND_WOO_ADDON_ARCHIVE_POST_PER_PAGE', 9);
defined('FINEST_DIAMOND_WOO_ADDON_SEARCH_RESULTS_POST_PER_PAGE') || define('FINEST_DIAMOND_WOO_ADDON_SEARCH_RESULTS_POST_PER_PAGE', 9);
defined('FINEST_DIAMOND_WOO_ADDON_OPTIONS') || define('FINEST_DIAMOND_WOO_ADDON_OPTIONS', get_option('finestdiamondopts'));
defined('FINEST_DIAMOND_WOO_ADDON_UPLOAD_DIR') || define('FINEST_DIAMOND_WOO_ADDON_UPLOAD_DIR', wp_upload_dir()['basedir'].'/custom_popup/');
defined('FINEST_DIAMOND_WOO_ADDON_AUDIO_DURATION') || define('FINEST_DIAMOND_WOO_ADDON_AUDIO_DURATION', 20);

require_once FINEST_DIAMOND_WOO_ADDON_DIR_PATH . '/inc/helpers/autoloader.php';
// require_once FINEST_DIAMOND_WOO_ADDON_DIR_PATH . '/inc/helpers/template-tags.php';

if(!function_exists('finestdiamondwooaddon_get_theme_instance')) {
	function finestdiamondwooaddon_get_theme_instance() {\FINEST_DIAMOND_WOO_ADDON\inc\Project::get_instance();}
	finestdiamondwooaddon_get_theme_instance();
}




