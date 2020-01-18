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

        // Header
        register_sidebar(
            [
                'name'          => 'Header',
                'id'            => 'bb-header',
                'before_widget' => '<div class="header-widget-area">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ]
        );

        // Header Mobile
        register_sidebar(
            [
                'name'          => 'Header Mobile',
                'id'            => 'bb-header-mobile',
                'before_widget' => '<div class="header-mobile-widget-area">',
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
