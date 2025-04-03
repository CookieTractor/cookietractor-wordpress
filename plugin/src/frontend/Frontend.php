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
                // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript
                ?><script src="https://<?php echo esc_html($parser->cdnHost)?>/cookietractor.js" data-lang="<?php echo esc_html($parser->getCulture())?>" data-id="<?php echo esc_html($parser->websiteKey)?>"></script>
<?php
            }
        }

    }

}

?>
