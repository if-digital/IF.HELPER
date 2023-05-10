<?php

/**
 *
 * @link              https://www.if.digital/
 * @since             1.0.0
 * @package           If_Helper
 *
 * @wordpress-plugin
 * Plugin Name:       IF.HELPER
 * Plugin URI:        https://www.if.digital/
 * Description:       Fügt einige CSS-Regeln für den Backend-Editor hinzu. Dies soll die Bearbeitung im Gutenberg Editor erleichtern. Usefull Content Editors = Happy Editors!
 * Version:           1.0.0
 * Author:            IF.DIGITAL GmbH
 * Author URI:        https://www.if.digital/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       if-helper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// add custom gutenberg css
function ifhelper_css() {
    wp_enqueue_style(
        'if-helper-gutenberg-css', 
        plugin_dir_url( __FILE__ ) . 'gutenberg.css', 
        array( 'wp-edit-blocks' ), 
        '1.0.0',
        'all'
    );
}
add_action( 'enqueue_block_editor_assets', 'ifhelper_css' );