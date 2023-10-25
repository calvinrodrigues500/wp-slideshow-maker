<?php

/*
 * Plugin Name:       WP SlideShow Maker
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Helps in crafting beautiful image carousels.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Calvin Rodrigues
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-slideshow-maker
 * Domain Path:       /languages
 */

defined('ABSPATH') || exit;

defined('WP_SLIDESHOW_PLUGIN_DIR_PATH') || define('WP_SLIDESHOW_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));

defined('WP_SLIDESHOW_PLUGIN_BASE_NAME') || define('WP_SLIDESHOW_PLUGIN_BASE_NAME', plugin_basename(__FILE__));

class WP_Slideshow_Maker
{
}
