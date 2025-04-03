<?php
/**
* Plugin Name: CookieTractor
* Plugin URI: https://www.cookietractor.com/
* Description: CookieTractor plugin for Wordpress
* Version: 1.0.0
* Author: cookietractor
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
**/

define('COOKIETRACTOR_MAIN_FILE', __FILE__);
define('COOKIETRACTOR_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once __DIR__ . '/src/startup.php';

$ct = new CookieTractor\CookieTractor();
$ct->init();

?>
