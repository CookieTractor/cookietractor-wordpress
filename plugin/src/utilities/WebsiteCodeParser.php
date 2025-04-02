<?php

class WebsiteCodeParser {

    public string $websiteKey;
    public string $src;
    public string $cdnHost;
    public string $culture;

    public function __construct(string $websiteCode) {

        try
        {
            $dom = new DOMDocument();
            libxml_use_internal_errors(true); // suppress warnings for malformed HTML
            $dom->loadHTML($websiteCode);
            libxml_clear_errors();
            $script = $dom->getElementsByTagName('script')->item(0);

            $this->src = $script->getAttribute('src');
            $this->websiteKey = $script->getAttribute('data-id');
            $this->culture = $script->getAttribute('data-lang');

            $scriptUrl = wp_parse_url($script->getAttribute('src'));
            $this->cdnHost = $scriptUrl['host'] ?? '';

        }
        catch(Throwable $e){

            $this->websiteKey='';
            $this->src='';
            $this->cdnHost = '';

        }

    }

    public function getCulture() {
        $useWebsiteLanguage = get_option('cookietractor_use_site_language') == 'on';
        if($useWebsiteLanguage)
        {
            return str_replace('_','-',get_locale());
        }

        return $this->culture;
    }

}

?>
