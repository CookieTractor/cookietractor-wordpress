<?

class ShortcodeOpenPopup {

    public function init(){
        add_shortcode('cookietractor_popup', array($this,'cookietractor_shortcode'));
    }

    public function cookietractor_shortcode($atts)
    {
        $atts = shortcode_atts([
            'text' => 'Cookie settings',
        ], $atts);

        return '
         <a href="javascript:void(0)" class="cookie-consent-settings">'.esc_html($atts['text']).'</a>
        ';
    }
}

?>
