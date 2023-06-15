<?php
/**
 * Plugin Name:       PLN Custom Block
 * Description:       the extension for poolenoBlog - DONT DIACTIVATE IT
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            morisfa
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pln-custom-block
 *
 * @package           create-block
 */

function create_block_awesome_button_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_awesome_button_block_block_init' );


    function PLN_customize_block( $block_content, $block ) {
        if ( $block['blockName'] === 'create-block/awesome-button-block' ) {
            $content = '<div class="PLN_cus_bold_wp">';
            $content .= $block_content;
            $content .= '</div>';
            return $content;
        } 
        return $block_content;
    }

    add_filter( 'render_block', 'PLN_customize_block', 10, 2 );
