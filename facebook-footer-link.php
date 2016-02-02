<?php

/**
 * * Plugin Name:       Facebook Footer Link
 * * Plugin URI:        http://www.minijohn.me
 * * Description:       Show facebook in footer
 * * Version:           1.0.0
 * * Author:            The Mini John
 * * Author URI:        http://minijohn.me
 * * License:           GPL-2.0+
 * * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// global options variable
$ffl_options = get_option('ffl_settings');

require_once( dirname( __FILE__ ) . '/includes/facebook-footer-link-scripts.php' );
require_once( dirname( __FILE__ ) . '/includes/facebook-footer-link-content.php' );

if (is_admin()) {
  require_once( dirname( __FILE__ ) . '/includes/facebook-footer-link-settings.php' );
}

