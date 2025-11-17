
/**
 * Registers a event listener that will update the WP Consent API based on any consent
 * events in the CookieTractor dialog.
 */
export function registerListenerForWpConsentApi(){

    window.addEventListener('CookieConsent', (event) => {

        if(typeof window['wp_set_consent'] != 'function')
            return;

        const siteHasFunctional = window.cookieTractor.consent.available.includes(window.cookieTractor.category.functional);

        const isFunctionalAllowed = siteHasFunctional ? window.cookieTractor.consent.contains(window.cookieTractor.category.functional) : true;

        // Docs about WP Consent APIs categories:
        // https://wordpress.org/plugins/wp-consent-api/#what%20is%20the%20difference%20between%20the%20consent%20categories%3F

        window.wp_set_consent!('functional', 'allow');
        window.wp_set_consent!('preferences',isFunctionalAllowed ? 'allow' : 'deny');
        window.wp_set_consent!('marketing',event.detail.current.includes('marketing') ? 'allow' : 'deny');
        window.wp_set_consent!('statistics',event.detail.current.includes('statistical') ? 'allow' : 'deny');
        window.wp_set_consent!('statistics-anonymous',event.detail.current.includes('statistical') ? 'allow' : 'deny');

    });

}
