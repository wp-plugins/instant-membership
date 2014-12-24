<?php

/*
  Plugin Name: Instant Membership
  Plugin URI: http://www.ninjapress.net/instant-membership/
  Description: Show hidden contents to members
  Version: 1.0
  Author: Ninja Press
  Author URI: http://www.ninjapress.net
  License: GPL2
 * 
 */

if (!class_exists('WP_Instant_membership')) {

   class WP_Instant_membership {

      /**
       * Construct the plugin object
       */
      public function __construct() {
         
      }

   }

}

if (class_exists('WP_Instant_membership')) {

   // instantiate the plugin class
   $wp_instant_membership = new WP_Instant_membership();

   if (isset($wp_instant_membership)) {


      function coupon($atts, $content = null) {
         
         if (array_key_exists('coupon', $_GET) and array_key_exists('code', $atts) and ($_GET['coupon'] == $atts['code'])) {
            return $content;
         } else {

            ob_start();
            include(sprintf("%s/templates/form.php", dirname(__FILE__)));
            $string = ob_get_clean();

            return $string;
         }
      }

      add_shortcode('coupon', 'coupon');
   }
}   