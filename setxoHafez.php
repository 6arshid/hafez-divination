<?php
/*
Plugin Name: Hafez
Plugin URI: https://mrlast.com/project/hafez/
Description: فال حافظ شیرازی
Version: 1.0
Author: Mr last
Author URI: https://mrlast.com/
License: GPLv2 or later
Text Domain: hafez

* Plugin Name:          WP Fal Hafez
 * Plugin URI:          https://mrlast.com/project/hafez/
 * Description:          فال حافظ شیرازی
 * Version:             0.0.1
 * Author:              Mr last
 * Author URI:          https://mrlast.com/
 * Text Domain:         SEXTOHafez
 * Domain Path:         /languages


*/

/** Prevent this file from being accessed directly */
if (!defined('ABSPATH')) {
    die("Direct access of plugin files is not allowed.");
}
 
/** Define SEXTOHafez_PLUGIN_FILE */
if (!defined('SEXTOHafez_PLUGIN_FILE')) {
    define('SEXTOHafez_PLUGIN_FILE', __FILE__);
}

/** Constant pointing to the root directory path of the plugin */
if (!defined("SEXTOHafez_PLUGIN_DIRECTORY")) {
    define("SEXTOHafez_PLUGIN_DIRECTORY", plugin_dir_path(__FILE__));
}

/** Constant pointing to the root directory URL of the plugin */
if (!defined("SEXTOHafez_PLUGIN_URL")) {
    define("SEXTOHafez_PLUGIN_URL", plugin_dir_url(__FILE__));
}

/** Constant defining the textdomain for localization */
if (!defined("SEXTOHafez_PLUGIN_TEXTDOMAIN")) {
    define("SEXTOHafez_PLUGIN_TEXTDOMAIN", "SEXTOHafez");
}

/** Load main class */
require 'includes/class-SEXTOHafez.php';

/** Main instance of plugin */
$SEXTOHafez = new SEXTOHafez();