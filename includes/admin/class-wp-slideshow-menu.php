<?php

defined('ABSPATH') || exit;

class WP_Slideshow_Menu
{
    /**
     * WP_Slideshow_Admin_Menu constructor
     */
    public function __construct()
    {
        add_action(
            'admin_menu',
            [
                $this,
                'wp_slideshow_register_admin_menu'
            ]
        );
    }

    /**
     * Register plugin menu
     */
    public function wp_slideshow_register_admin_menu()
    {
        add_menu_page(
            __('WP SlideShow Maker', 'wp-slideshow-maker'),
            __('WP SlideShow Maker', 'wp-slideshow-maker'),
            'manage-options',
            'wp-slideshow-maker',
            [
                $this,
                'wp_slideshow_menu_content'
            ],
            'dashicons-clipboard',
            56
        );
    }
}
new WP_Slideshow_Menu;
