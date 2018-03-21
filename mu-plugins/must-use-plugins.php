<?php
/**
 * Plugin Name: Starter_Theme Functionality Plugin
 * Description: This plugin stores custom functionality for the Starter_Theme site.
 * Version: 1.0.0
 * Author: Allison Tarr
 * Author URI: http://www.allisontarr.com
 * Text Domain: starter-theme-functionality
 *
 * @package Starter Theme
 */

// Plugin Directory.
define( 'BE_DIR', dirname( __FILE__ ) );

require_once( BE_DIR . '/starter-theme-functionality/inc/general.php' ); // General.
require_once( BE_DIR . '/starter-theme-functionality/core-functionality.php' ); // General.
// require_once( BE_DIR . '/starter-theme-functionality/inc/cpt-portfolio.php' ); // CPT Example.
// require_once( BE_DIR . '/starter-theme-functionality/advanced-custom-fields-pro/acf.php' ); // Advanced Custom Fields.
