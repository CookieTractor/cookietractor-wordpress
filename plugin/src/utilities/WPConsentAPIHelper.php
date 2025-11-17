<?php
namespace CookieTractor\Utilities;

class WPConsentAPIHelper {

    public function register_hooks(){

        if(!$this->is_wp_consent_api_active())
            return;

        add_action( 'wp_enqueue_scripts', array( $this, 'cookietractor_enqueue_consent_api_scripts' ) );
        add_filter( 'wp_get_consent_type', array( $this, 'wp_consent_api_get_consent_type' ) );

    }

    public function wp_consent_api_get_consent_type() {
		return 'optin';
	}

    /**
     * Checks if the WP Consent API plugin is active.
     * @return bool
     */
    public function is_wp_consent_api_active() {

        if ( ! function_exists( 'is_plugin_active' ) ) {
			require_once ABSPATH . '/wp-admin/includes/plugin.php';
		}

        return is_plugin_active( 'wp-consent-api/wp-consent-api.php' );
	}

    public function cookietractor_enqueue_consent_api_scripts() {

		wp_register_script(
			'cookietractor-wp-consent-level-api-integration',
            plugin_dir_url(COOKIETRACTOR_MAIN_FILE) . 'assets/bundles/cookie-tractor.js',
			array( 'wp-consent-api' ),
			'1.0.0', //TODO: Use some kind of constant here!
			false
		);
		wp_enqueue_script( 'cookietractor-wp-consent-level-api-integration' );

	}

}

?>
