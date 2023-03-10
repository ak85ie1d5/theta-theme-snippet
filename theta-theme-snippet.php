<?php
/**
 * Theta Theme Snippet
 *
 * @package           Theta\ThemeSnippet
 * @author            Jeremy SPAETH
 * @copyright         2023 Theta
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Theta Theme Snippet
 * Plugin URI:        https://github.com/ak85ie1d5/theta-theme-snippet
 * Description:       Large set of code snippet to extends and enhanced Agence Theta website.
 * Version:           0.2
 * Requires at least: 6.1.0
 * Requires PHP:      8.0
 * Author:            Jeremy SPAETH
 * Author URI:        https://github.com/ak85ie1d5
 * Domain Path:       /i18n
 * Text Domain:       theta-theme-snippet
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Plugin dependent classes.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if (is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
	include plugin_dir_path( __FILE__ ) . "src/contactForm7.php";
	$contactForm7 = new Theta\ThemeSnippet\ContactForm7();
}
