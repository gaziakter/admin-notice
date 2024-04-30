<?php
/*
 * Plugin Name:       Admin Notice
 * Plugin URI:        https://gaziakter.com/plugins/admin-notice/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       admin-notice
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class Admin_Notice{

    function __construct(){
        add_action( 'init', [$this, 'init'] );
    }

    function init(){

    }
}

New Admin_Notice();
