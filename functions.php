<?php

/**
 * OysterShell Block Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage OysterShell_Block_Theme
 * @since OysterShell Block Theme 1.0
 */

if (! function_exists('oystershell_block_theme_remove_core_patterns')) :
    /**
     * Removes core block patterns.
     *
     * @since OysterShell Block Theme 1.0
     * @return void
     */
    add_action('after_setup_theme', 'oystershell_block_theme_remove_core_patterns');

    function oystershell_block_theme_remove_core_patterns()
    {
        remove_theme_support('core-block-patterns');
    }

endif;
