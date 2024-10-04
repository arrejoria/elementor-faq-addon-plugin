<?php





class Plugin
{

    /**
     * Initialize
     *
     * Load the addons functionality only after Elementor is initialized.
     *
     * Fired by `elementor/init` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function init()
    {

        add_action('elementor/frontend/after_enqueue_styles', [$this, 'frontend_styles']);
        add_action('elementor/frontend/after_register_scripts', [$this, 'frontend_scripts']);
    }

    public function frontend_styles()
    {

        wp_register_style('frontend-style-1', plugins_url('assets/css/frontend-style-1.css', __FILE__));
        wp_register_style('frontend-style-2', plugins_url('assets/css/frontend-style-2.css', __FILE__), ['external-framework']);

        wp_enqueue_style('frontend-style-1');
        wp_enqueue_style('frontend-style-2');
    }

    public function frontend_scripts()
    {

        wp_register_script('frontend-script-1', plugins_url('assets/js/frontend-script-1.js', __FILE__));
        wp_register_script('external-library', plugins_url('assets/js/libs/external-library.js', __FILE__));

        wp_enqueue_script('frontend-script-1');
        wp_enqueue_script('frontend-script-2');
    }
}