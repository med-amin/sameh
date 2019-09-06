<?php
/**
 * @package Import products
 * @version 1.7.2
 */
/*
Plugin Name: Import products
Plugin URI: #
Description: desc
Author: Sameh
Version: 1.0.0
Author URI: #
*/

add_action( 'wp_loaded','runImportScript' );
function runImportScript() {
    
	if(isset($_GET['something'])) {
        require dirname(__FILE__).'/script.php';
        exit();
    } else {
        $test = '';
    }
}

