<?php

// Include the client library
require_once 'class-wc-api-client.php';
$consumer_key = 'ck_d86d01949dabece9dce2cb8460b40ac45c025c16'; // Add your own $
$consumer_secret = 'cs_634ff89ef41af0c04962aea6f3315ccb6c362a51'; // Add your o$
$store_url = 'http://localhost/'; // Add the home URL to the store you want to $
// Initialize the class
$wc_api = new WC_API_Client( $consumer_key, $consumer_secret, $store_url );
?>

