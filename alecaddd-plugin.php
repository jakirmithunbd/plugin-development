<?php
/**
 * AlecadePlugin
*/ 

/*
 * Plugin Name:       Alecaddd Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       This is my first plugin development
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jakir
 * Author URI:        https://wpwebdevs.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       alecad
 * Domain Path:       /languages
*/

// if (! define('ABSPATH')) {
//     die();
// }

// define( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

if ( file_exists(dirname( __FILE__ ) . '/vendor/autoload.php') ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
	Inc\Base\Activate::activate();
}

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
	Inc\Base\Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}