<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://#
 * @since             1.0.0
 * @package           custom_pluginy_
 *
 * @wordpress-plugin
 * Plugin Name:       Custom PluginY
 * Plugin URI:        https://#
 * Description:       Custom Plugin Test
 * Version:           1.0.0
 * Author:            Hiren
 * Author URI:        https://#
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-pluginy
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'custom_pluginy__VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-pluginy-activator.php
 */
function activate_custom_pluginy_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-pluginy-activator.php';
	custom_pluginy__Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-pluginy-deactivator.php
 */
function deactivate_custom_pluginy_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-pluginy-deactivator.php';
	custom_pluginy__Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_pluginy_' );
register_deactivation_hook( __FILE__, 'deactivate_custom_pluginy_' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-pluginy.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_pluginy_() {

	$plugin = new custom_pluginy_();
	$plugin->run();

}
run_custom_pluginy_();
