
declare global {

    interface Window {
        cookieTractor : ICookieTractorSdk;

        /* WP Consent API method to set consent for a certain contentType */
        wp_set_consent? : (consentType:string, value : WpConsentApiConsentValue) => void;

        /* WP Consent API method to get consent for a certain contentType */
        wp_has_consent? : (consentType:string) => boolean;

        wp_consent_type? : WpConsentApiConsentType
    }

    interface WindowEventMap {
        CookieConsent: MySpecialType;
    }
}

/**
 * Defines the content type for a region.
 * E.g.
 * optin = consent needs to be granted BEFORE cookies are set.  When this is used wp_has_consent() will return false by default.
 * optout = cookies can be set but optout can remove them. When this is used wp_has_consent() will return true by default.
 */
type WpConsentApiConsentType = 'optin' | 'optout';

type WpConsentApiConsentValue = 'allow' | 'deny';

export interface ICookieTractorEventDetails {
    added : string[];
    current : string[];
    removed : string[];
}

export type Foo = Event & {
    detail : ICookieTractorEventDetails
}

export type MySpecialType = CustomEvent<ICookieTractorEventDetails>;

export interface MySpecialTypeAgain extends Event {
  someProperty: string;
}

export interface ICookieTractorSdk {
    consent : ICookieTractorSdkConsent;
    category : ICookieTractorSdkCategory;
}

export interface ICookieTractorSdkConsent {
    available : string[];
    current : string[];
    key : string;
    contains : (category : string)=> boolean;
}

export interface ICookieTractorSdkCategory {
    functional : string;
    marketing : string;
    necessary : string;
    statistical : string;
    undefined : string;
}
