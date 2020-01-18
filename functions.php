<?php

// Exit if accessed directly

if (!defined('ABSPATH')) {exit;}

final class BB_Child_OCEANWP_Theme_Class {

    /** ========================================================================
     * PROPERTIES
     */

    /** ========================================================================
     * METHODS
     */

    /** ------------------------------------------------------------------------
     * Constructor
     *
     * @since   1.0.0
     */
    public function __construct() {
        // register sidebar widget areas
        add_action('widgets_init', [__CLASS__, 'register_sidebars']);
    }

    /** ------------------------------------------------------------------------
     * Registers Sidebars
     *
     * @since   1.0.0
     */
    public static function register_sidebars() {

        // Header: Desktop
        register_sidebar(
            [
                'name'          => 'Header: Desktop',
                'id'            => 'bb-header-desktop',
                'before_widget' => '<div class="bb-widget-area-header-desktop">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ]
        );

        // Header: Mobile (Logged In)
        register_sidebar(
            [
                'name'          => 'Header: Mobile (Logged In)',
                'id'            => 'bb-header-mobile-logged-in',
                'before_widget' => '<div class="bb-widget-area-header-mobile  bb-widget-area-header-mobile-logged-in">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ]
        );

        // Header: Mobile (Logged Out)
        register_sidebar(
            [
                'name'          => 'Header: Mobile (Logged Out)',
                'id'            => 'bb-header-mobile-logged-out',
                'before_widget' => '<div class="bb-widget-area-header-mobile  bb-widget-area-header-mobile-logged-out">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ]
        );
    }

    /** ========================================================================
     * End of Class
     */
}

new BB_Child_OCEANWP_Theme_Class;
