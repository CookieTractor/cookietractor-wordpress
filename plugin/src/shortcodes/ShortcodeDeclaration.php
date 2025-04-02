<?
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

        return '
        <div class="is-layout-constrained">
            <script src="https://'.$parser->cdnHost.'/cookietractor-declaration.js" data-lang="'.$parser->getCulture().'" data-id="'.$parser->websiteKey.'" defer></script>
            <div id="CookieDeclaration"></div>
        </div>
        ';

    }

}

?>
