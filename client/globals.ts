
declare global {

    interface Window {
        wp_set_consent? : (consentType:string,value : string) => void;
        cookieTractor : ICookieTractorSdk;
    }

    interface WindowEventMap {
        CookieConsent: MySpecialType;
    }
}



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
