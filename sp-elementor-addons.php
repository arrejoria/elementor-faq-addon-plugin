<?php

/**
 * Plugin Name: SP Elementor Addons
 * Description: Un plugin que implementa custom addons para starpay en elementor
 * Version: 1.0
 * Author: Lucas E. Arrejoria
 * Text Domain: sp-elementor-addons
 * Author URI:  https://developers.elementor.com/
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.24.0
 * Elementor Pro tested up to: 3.24.0
 */


if (! defined('ABSPATH')) {
    exit; // Salir si se accede directamente.
}


function register_hello_world_widget($widgets_manager)
{

    require_once(__DIR__ . '/widgets/hello-world-widget-1.php');

    $widgets_manager->register(new \Elementor_Hello_World_Widget_1());
}
add_action('elementor/widgets/register', 'register_hello_world_widget');


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sp_elementor_addons()
{

    // $plugin = new Spsm_Plugin();
    // $plugin->run();
}
run_sp_elementor_addons();
