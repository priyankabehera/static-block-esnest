<?php
/*
* Plugin Name:  Static Block ESNext
*/

function gwg_block_assets() {
    wp_enqueue_style(
        'gwg-style-css',
        plugin_dir_url( __FILE__ ) . 'style.css'
    );
}
add_action( 'enqueue_block_assets', 'gwg_block_assets' );

function gwg_editor_assets() {
    wp_enqueue_script(
        'gwg-block-js',
        plugin_dir_url( __FILE__ ) . 'block.build.js',
        [],
        false,
        true // Enqueue script in the footer.
    );
    wp_enqueue_style(
        'gwg-editor-css',
        plugin_dir_url( __FILE__ ) . 'editor.css'
    );
}
add_action( 'enqueue_block_editor_assets', 'gwg_editor_assets' );
