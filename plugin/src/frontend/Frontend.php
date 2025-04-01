<?php

class Frontend {

    public function init() {
        add_filter('wp_head', array($this,'add_cookietractor_header'), -10000);
    }

    public function add_cookietractor_header() {

        $website_key = get_option('cookietractor_website_key');

        if(is_front_page() && !empty($website_key)) {
        ?>
          <script src="https://cdn.cookietractor.com/cookietractor.js" data-lang="<?= str_replace('_','-',get_locale())?>" data-id="<?=$website_key?>"></script>
        <?
        }

    }

}

?>
