<?

class ShortcodeDeclaration {

    public function init(){
        add_shortcode('cookietractor_declaration', array($this,'cookietractor_shortcode'));
    }

    public function cookietractor_shortcode()
    {
        $website_key = get_option('cookietractor_website_key');
        $locale = str_replace('_','-',get_locale());

        return '
         <script src="https://cdn.cookietractor.com/cookietractor-declaration.js" data-lang="'.$locale.'" data-id="'.$website_key.'" defer></script>
         <div id="CookieDeclaration"></div>
        ';

    }

}

?>
