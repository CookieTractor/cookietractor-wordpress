<?php

namespace CookieTractor;

use CookieTractor\Frontend\Frontend;
use CookieTractor\Settings\Settings;
use CookieTractor\Shortcodes\ShortcodeDeclaration;
use CookieTractor\Shortcodes\ShortcodeOpenPopup;

require_once __DIR__ . '/settings/Settings.php';
require_once __DIR__ . '/frontend/Frontend.php';
require_once __DIR__ . '/shortcodes/ShortcodeOpenPopup.php';
require_once __DIR__ . '/shortcodes/ShortcodeDeclaration.php';
require_once __DIR__ . '/utilities/CookieReader.php';

class CookieTractor {

    /** Inits the CookieTractor Wordpress Plugin */
    public function init() {

        $settings = new Settings();
        $settings->init();

        $frontend = new Frontend();
        $frontend->init();

        $shortcodePopup = new ShortcodeOpenPopup();
        $shortcodePopup->init();

        $shortcodePopup = new ShortcodeDeclaration();
        $shortcodePopup->init();
    }
}

?>
