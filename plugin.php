<?php
/**
 * Plugin Name:       PLUGIN TEMPLATE
 * Description:       Your description here.
 * Requires at least: 6.5
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Dave Smith
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       getdave-plugin-template
 *
 * @package getdave
 */


namespace GetDave\PLUGIN_TEMPLATE;



add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );

/**
 * Enqueue the editor assets.
 */
function enqueue_block_editor_assets() {
    $asset_file = plugin_dir_path( __FILE__ ) . '/build/index.asset.php';

    if ( file_exists( $asset_file ) ) {
        $assets = include $asset_file;
        wp_enqueue_script(
            'index-format',
            plugin_dir_url( __FILE__ ) . 'build/index.js',
            $assets['dependencies'],
            $assets['version'],
            true
        );

        wp_enqueue_style(
            'index-format-styles',
            plugin_dir_url( __FILE__ ) . 'build/index.css',
            array(),
            $assets['version']
        );
    }
}