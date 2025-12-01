<?php

namespace CookieTractor;

use CookieTractor\Frontend\Frontend;
use CookieTractor\Settings\Settings;
use CookieTractor\Utilities\WPConsentAPIHelper;
use CookieTractor\Shortcodes\ShortcodeDeclaration;
use CookieTractor\Shortcodes\ShortcodeOpenPopup;
use CookieTractor\Shortcodes\ShortcodeWpConsentApi;

require_once __DIR__ . '/settings/Settings.php';
require_once __DIR__ . '/frontend/Frontend.php';
require_once __DIR__ . '/utilities/WPConsentAPIHelper.php';
require_once __DIR__ . '/shortcodes/ShortcodeOpenPopup.php';
require_once __DIR__ . '/shortcodes/ShortcodeDeclaration.php';
require_once __DIR__ . '/shortcodes/ShortcodeWpConsentApi.php';

class CookieTractor {

    const COOKIETRACTOR_PLUGIN_VERSION = "1.1.4";

    /** Inits the CookieTractor Wordpress Plugin */
    public function init() {

        $settings = new Settings();
        $settings->init();

        $frontend = new Frontend();
        $frontend->init();

        $wpConsentApi = new WPConsentAPIHelper();
        $wpConsentApi->register_hooks();

        $shortcodePopup = new ShortcodeOpenPopup();
        $shortcodePopup->init();

        $shortcodePopup = new ShortcodeDeclaration();
        $shortcodePopup->init();

        $shortcodeConsentApi = new ShortcodeWpConsentApi();
        $shortcodeConsentApi->init();
    }
}

?>
