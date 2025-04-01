<?php
class Settings {

    /**
     * entry point that uses WordPress hooks to register admin extensions.
     */
    public function add_menu() {

        add_action('admin_menu', array( $this, 'add_settings_page' ));
        add_action('admin_init', array( $this, 'add_settings' ));

        add_filter('plugin_action_links_' . plugin_basename(COOKIETRACTOR_MAIN_FILE), array($this,'add_settings_link'));
    }

    /**
     * Adds CookieTractor to Settings-popover in admin
     */
    public function add_settings_page() {
        add_options_page('Custom Plugin', 'CookieTractor', 'manage_options', 'cookietractor-settings', array($this,'cookietractor_settings_form'));
    }

    /**
     * Adds settings to what we can store them in WordPress
     */
    public function add_settings() {       
        register_setting('cookietractor', 'cookietractor_website_key');
    }

    /**
     * Hook-function that adds a "Settings"-link next to the plugin in the plugin list
     */
    public function add_settings_link($links) {
        $settings_link = '<a href="options-general.php?page=cookietractor-settings">Settings</a>';
        array_unshift($links, $settings_link); // put it first
        return $links;
    }

    /**
     * Renders the "Settings Forms" (registered in $this->add_settings_page)
     */
    public function cookietractor_settings_form() {

        $websiteKey = get_option('cookietractor_website_key');   
        ?>
            
            <div class="wrap">
                <h2>CookieTractor Settings</h2>
                <form method="post" action="options.php">
                    <?php settings_fields('cookietractor'); ?>
                    <?if($websiteKey == ''){?>
                        <p>Create your account at <a href="https://www.cookietractor.com" target="_blank">cookietractor.com</a></p>
                    <?}?>
                    <table class="form-table">
        
                    <tr>
                        <th>
                            <label for="websitekey">Website Key:</label>
                        </th>
                        <td>
                            <input type = 'text' class="regular-text" id="websitekey" name="cookietractor_website_key" value="<?php echo get_option('cookietractor_website_key'); ?>">
                        </td>
                    </tr>
        
                    </table>

                    <?if($websiteKey != ''){?>
                    <a href="https://app.cookietractor.com/Tool#!/website/<?=$websiteKey?>/overview" target="_blank">Go to website settings</a>
                    <?}?>
                    <?php submit_button(); ?>
                </from>
            </div>
        <?

    }

}
?>