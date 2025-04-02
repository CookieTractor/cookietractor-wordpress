<?php

class CookieReader {

    /**
     * Reads the CookieTractor-cookie from the request (if any) and returns an object.
     */
    public function readCookie() {

        $cookieValue = wp_unslash($_COOKIE['_cc_cookieConsent']);

        if(!isset($cookieValue)) {
            return null;
        }

        $value = $cookieValue;
        $jsonObj = json_decode($value);

        return $jsonObj;

    }

}

?>
