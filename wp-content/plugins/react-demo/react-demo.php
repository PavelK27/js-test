<?php
/**
 * @package React_Demo
 * @version 0.0.1
 */
/*
Plugin Name: React Demo
Plugin URI: http://wordpress.org/
Description: React Demo Component.
Author: Pavel Korotenko
Version: 0.0.1
Author URI: 
*/
add_action( 'wp_enqueue_scripts','js_init' );

function js_init() {
  wp_register_script( 'react-demo-js', plugins_url( 'ReactDemo.js', __FILE__ ) );
  wp_enqueue_script( 'react-demo-js', plugins_url( 'ReactDemo.js', __FILE__ ), array(), mt_rand( 0,10000 ), true );
}