<?php
/*
 * Plugin Name:       WP Admin Notice
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
        add_action('admin_notices', [$this, 'gazi_notice']);
    }

    function init(){

    }

    function gazi_notice(){
        global $pagenow;
        $admin_pages = [ 'index.php', 'edit.php', 'plugins.php' ];
        if ( in_array( $pagenow, $admin_pages ) ) {
            if ( date( 'j, F' ) === '30, April' ) { 
                ?>
                <div class="notice notice-warning is-dismissible">
                    <p>Happy Independence Day, Nigeria...</p>
                </div>
                <?
            }
        }

    }
}

New Admin_Notice();
