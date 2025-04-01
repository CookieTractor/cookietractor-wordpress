<?php

require_once __DIR__ . '/settings/Settings.php';
require_once __DIR__ . '/frontend/Frontend.php';
require_once __DIR__ . '/utilities/CookieReader.php';

class CookieTractor {

    /** Inits the CookieTractor Wordpress Plugin */
    public function init() {

        //TODO: We should register other "stuff" here, like admin-extensions
        //      and "other plugins-extensions" like PixelMySite
        //      we should PROBABLY have settings for these as well.

        $settings = new Settings();
        $settings->add_menu();

        $frontend = new Frontend();
        $frontend->init();

        $reader = new CookieReader();
        $cookie = $reader->readCookie();

        if($cookie != null){
            //print_r($cookie);
        }

        //echo "Init!" . $this->readCookie();

    }

   


}

?>