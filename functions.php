<?php

// Exit if accessed directly

if (!defined('ABSPATH')) {exit;}

final class BB_Child_OCEANWP_Theme_Class {

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
                'before_widget' => '<div class="header-widget-area">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            ]
        );
    }
}

new BB_Child_OCEANWP_Theme_Class;
