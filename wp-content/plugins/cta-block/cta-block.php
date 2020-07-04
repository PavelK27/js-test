<?php
/**
 * @package CTA_block
 * @version 0.0.1
 */
/*
Plugin Name: CTA block 
Plugin URI: http://wordpress.org/
Description: CTA block for editor.
Author: Pavel Korotenko
Version: 0.0.1
Author URI: 
*/
function register_cta_block() {
 
  wp_register_script(
      'js-test-cta-block',
      plugins_url( 'cta-block.js', __FILE__ ),
      array('wp-blocks','wp-editor'),
      true
  );

  register_block_type( 'js-test/cta-block', array(
      'editor_script' => 'js-test-cta-block',
  ) );

}
add_action( 'init', 'register_cta_block' );
