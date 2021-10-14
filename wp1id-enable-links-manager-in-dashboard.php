<?php
/**
 * Plugin Name:  1id. Enable Links Manager in the Dashboard
 * Plugin URI:   https://github.com/1idweb/wp1id-enable-links-manager-in-dashboard
 * Description:  Enable the Links Manager menu to be available for site admins..
 * Author:       1idweb
 * Author URI:   https://1idweb.com
 */

add_filter( 'pre_option_link_manager_enabled', '__return_true' );
