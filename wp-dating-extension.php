<?php
/**
 * Plugin Name: WP Dating Extension 2
 * Description: A simple plugin to test Git workflow.
 * Version: 1.2
 * Author: Glenn Escrimadora
 * GitHub Plugin URI: https://github.com/glenn-swi/wp-dating-extension-2/
 * Primary Branch: main 
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

// Add the plugin settings menu
function wp_dating_extension_add_menu_2() {
  add_menu_page('WP Dating Extension 2', 'WP Dating Extension 2', 'manage_options', 'wp-dating-extension-2', 'wp_dating_extension_settings_page_2');
}
add_action('admin_menu', 'wp_dating_extension_add_menu_2');

// Create settings page
function wp_dating_extension_settings_page() {
  echo '<div class="wrap"><h1>Hello world 1</h1></div>';
}
