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

        $html = '<div class="is-layout-constrained">';
        // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript
        $html .=   '<script src="https://'.esc_attr($parser->cdnHost).'/cookietractor-declaration.js" data-lang="'.esc_attr($parser->getCulture()).'" data-id="'.esc_attr($parser->websiteKey).'" defer></script>';
        $html .=   '<div id="CookieDeclaration"></div>';
        $html .= '</div>';
        return $html;

    }

}

?>
