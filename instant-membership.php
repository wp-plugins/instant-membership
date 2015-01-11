<?php

/*
  Plugin Name: Instant Membership
  Plugin URI: http://www.ninjapress.net/instant-membership/
  Description: Show hidden contents to members
  Version: 1.1
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
         wp_enqueue_script('script', plugins_url('js/im.js', __FILE__), array('jquery'), time(), true);

         ob_start();
         include(sprintf("%s/templates/form.php", dirname(__FILE__)));
         $string = ob_get_clean();
         
         $string .= "<script>im_code = '{$atts['code']}'</script>";

         $string .= '<div id="im-content" style="display: none;">';
         $string .= $content;
         $string .= '</div>';

         return $string;
      }

      add_shortcode('inmember', 'coupon');
   }
}   