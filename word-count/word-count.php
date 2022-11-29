<?php
/**
 * Plugin Name:       Word Count
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rakib Hossain
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wordcount
 * Domain Path:       /languages
 */

/**
 *   Activation hook
 */

// function word_count_activation_hook(){

// }
// register_activation_hook(__FILE__,'wordcount_activation_hook');

// /**
//  *   Deactivation hook
//  */
// function word_count_deactivation_hook(){

// }
//  register_deactivation_hook( ___FILE__, 'wordcount_deactivation_hook');

 /**
  *  text domain load 
  */

  function wordcount_loaded_text_domain(){

     load_plugin_textdomain('word-count', false,dirname(__FILE__).'languages/');
  }

  add_action('plugins_loaded','wordcount_loaded_text_domain' );


  /**
   *   filte the content
   */
 
   function wordcount_word_count($content){
      $striped_content =  strip_tags($content);
      $str_word_count  = str_word_count($striped_content);
      $label= __('Total Number of word','wordcount');
      $content .= sprintf('<h2>%s:%s</h2>',$label,$str_word_count);
      return $content;
   }

   add_filter('the_content','wordcount_word_count')














?>