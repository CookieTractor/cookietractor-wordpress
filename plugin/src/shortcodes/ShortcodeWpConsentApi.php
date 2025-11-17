<?php
namespace CookieTractor\Shortcodes;

class ShortcodeWpConsentApi {

    public function init(){
        add_shortcode('cookietractor_consent_api', array($this,'cookietractor_shortcode'));
    }

    public function cookietractor_shortcode($atts = [], $content = null, $tag = '')
    {

        $atts = array_change_key_case((array)$atts, CASE_LOWER);
	    ob_start();

        $html = '<p>Hello world from shortcode:</p>';

	    // override default attributes with user attributes
	    $atts = shortcode_atts(array('category' => 'marketing'), $atts, $tag);
        $category = 'marketing';
        if (function_exists('wp_validate_consent_category')){
            $html = $html . '<p>inside</p>';
            $category = wp_validate_consent_category($atts['category']);
        }

        $html = $html . 'Marketing: ' . $category;

        return $html;

    }

}

?>
