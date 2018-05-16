<?php
/**
 * Plugin Name: Unit Test Example
 * Description: This plugin is just used to solely test Travis-CI and WordPress.
 * Plugin URI: https://somelink.com
 * Author: An Author's Name
 * Author URI: https://somelink.com
 * Version: 1.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: Text Domain
 * Domain Path: Domain Path
 * Network: false
 */

defined( 'ABSPATH' ) or exit;

function my_shortcode() {
	echo 'Some shortcode output.';a
}
add_shortcode( 'my_shortcode', 'my_shortcode' );
