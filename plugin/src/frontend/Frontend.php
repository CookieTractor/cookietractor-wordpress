<?php
namespace CookieTractor\Frontend;

use CookieTractor\Utilities\WebsiteCodeParser;

require_once __DIR__ . './../utilities/WebsiteCodeParser.php';

class Frontend {

    public function init() {
        add_filter('wp_head', array($this,'add_cookietractor_header'), -2147483648);

    }

    public function add_cookietractor_header() {

        $website_code = get_option('cookietractor_website_code');

        if(is_front_page() && !empty($website_code)) {
            $parser = new WebsiteCodeParser($website_code);

            if($parser->websiteKey != '') {

                wp_print_script_tag( array(
                    'src'      => 'https://' . $parser->cdnHost . '/cookietractor.js',
                    'data-id' => $parser->websiteKey,
                    'data-lang' => $parser->culture
                ));

            }
        }

    }

}

?>
