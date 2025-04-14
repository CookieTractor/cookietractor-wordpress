<?php
namespace CookieTractor\Shortcodes;

use CookieTractor\Utilities\WebsiteCodeParser;

require_once __DIR__ . './../utilities/WebsiteCodeParser.php';

class ShortcodeDeclaration {

    public function init(){
        add_shortcode('cookietractor_declaration', array($this,'cookietractor_shortcode'));
    }

    public function cookietractor_shortcode()
    {
        $website_code = get_option('cookietractor_website_code');

        if($website_code == '')
            return 'No website code configured.';

        $parser = new WebsiteCodeParser($website_code);

        $scriptTag = wp_get_script_tag(array(
            'src'      => 'https://' . $parser->cdnHost . '/cookietractor-declaration.js',
            'data-id' => $parser->websiteKey,
            'data-lang' => $parser->culture,
            'defer' => true
        ));

        $html = '<div class="is-layout-constrained">';
        $html .=   '<div id="CookieDeclaration"></div>';
        $html .= '</div>';
        $html .= $scriptTag;
        return $html;

    }

}

?>
