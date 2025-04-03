<?php
namespace CookieTractor\Utilities;

class CookieReader {

    /**
     * Reads the CookieTractor-cookie from the request (if any) and returns an object.
     */
    public function readCookie() {

        if(!isset($_COOKIE['_cc_cookieConsent'])) {
            return null;
        }

        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
        $cookieValue = wp_unslash($_COOKIE['_cc_cookieConsent']);

        $value = $cookieValue;
        $jsonObj = json_decode($value);

        return $jsonObj;

    }

}

?>
