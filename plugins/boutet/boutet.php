<?php
/**
 * Plugin Name: Seguros boutet Plugin
 * Plugin URI: https://github.com/sebaspastudio
 * Description: Seguros boutet plugin.
 * Version: 1.0
 * Author: Sebaspa
 * Author URI: https://github.com/sebaspastudio
 * Domain Path: /languages
 * Text Domain: bluetide
 */

defined('ABSPATH') || die('No script kites please.');

/**
 * Import CMB2
 */

require_once WP_PLUGIN_DIR . '/' . dirname(plugin_basename(__FILE__)) . '/libs/cmb2/init.php';


/**
 * Custom Widgets.
 */

require_once dirname(__FILE__) . '/widgets/index.php';
