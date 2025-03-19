<?php
/**
 * Plugin Name: WP Dating Extension
 * Description: A simple plugin to test Git workflow.
 * Version: 1.2
 * Author: Glenn Escrimadora
 * GitHub Plugin URI: https://github.com/NnelgG/wp-dating-extension
 * Primary Branch: main 
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

// Add the plugin settings menu
function wp_dating_extension_add_menu() {
  add_menu_page('WP Dating Extension', 'WP Dating Extension', 'manage_options', 'wp-dating-extension', 'wp_dating_extension_settings_page');
}
add_action('admin_menu', 'wp_dating_extension_add_menu');

// Create settings page
function wp_dating_extension_settings_page() {
  echo '<div class="wrap"><h1>Hello world 2</h1></div>';
}
