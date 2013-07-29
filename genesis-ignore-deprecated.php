<?php
/**
 * Genesis Ignore Deprecated
 *
 * @package   GenesisIgnoreDeprecated
 * @author    Gary Jones <gary@garyjones.co.uk>
 * @license   GPL-2.0+
 * @link      http://gamajo.com/
 * @copyright 2013 Gary Jones, Gamajo Tech
 *
 * @wordpress-plugin
 * Plugin Name: Genesis Ignore Deprecated
 * Plugin URI:  http://gamajo.com/
 * Description: Stops the Genesis deprecated functions file from loading on every request, giving a small performance benefit
 * Version:     1.0.0
 * Author:      Gary Jones
 * Author URI:  http://gamajo.com/
 * Text Domain: genesis-ignore-deprecated
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'genesis_load_deprecated', '__return_false' );
