<?php
/**
* Plugin Name: CookieTractor
* Plugin URI: https://www.cookietractor.com/
* Description: CookieTractor plugin for Wordpress
* Version: 1.1.0
* Author: cookietractor
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
**/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

define('COOKIETRACTOR_MAIN_FILE', __FILE__);
define('COOKIETRACTOR_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once __DIR__ . '/src/startup.php';

$ct = new CookieTractor\CookieTractor();
$ct->init();

?>
