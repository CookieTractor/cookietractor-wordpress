<?php

class CookieReader {

    /**
     * Reads the CookieTractor-cookie from the request (if any) and returns an object.
     */
    public function readCookie() {
        
        if(!isset($_COOKIE['_cc_cookieConsent'])) {
            return null;
        }
        
        $value = $_COOKIE['_cc_cookieConsent'];
        $jsonObj = json_decode($value);

        return $jsonObj;

    }

}

?>