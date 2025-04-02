<?php
/**
* Plugin Name: CookieTractor | Cookie banner
* Plugin URI: https://www.cookietractor.com/
* Description: CookieTractor plugin for Wordpress
* Version: 1.0.0
* Author: cookietractor
* Author URI: https://www.cookietractor.com/
* License: GPL-2.0+
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
**/

define('COOKIETRACTOR_MAIN_FILE', __FILE__);

require_once __DIR__ . '/src/startup.php';

$ct = new CookieTractor();
$ct->init();

?>
