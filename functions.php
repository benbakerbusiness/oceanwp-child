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

        $this->module_sticky_header();
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

    /** ------------------------------------------------------------------------
     * Module: Sticky Header
     *
     * @since   1.0.0
     */
    public static function module_sticky_header() {
        add_action(
            'wp_enqueue_scripts',
            function () {
                wp_enqueue_style(
                    'bb-ocean-wp-child-module-sticky-header',
                    get_stylesheet_directory_uri() . '/modules/sticky-header/css/styles.css',
                    [],
                    filemtime(__DIR__ . '/modules/sticky-header/css/styles.css'),
                    'all'
                );
            }
        );

        add_action(
            'wp_enqueue_scripts',
            function () {
                wp_enqueue_script(
                    'bb-ocean-wp-child-module-sticky-header',
                    get_stylesheet_directory_uri() . '/modules/sticky-header/js/scripts.js',
                    [],
                    filemtime(__DIR__ . '/modules/sticky-header/js/scripts.js'),
                    true
                );
            }
        );
    }

    /** ========================================================================
     * End of Class
     */
}

new BB_Child_OCEANWP_Theme_Class;
