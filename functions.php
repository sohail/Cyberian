<?php

/* functions.php, a plugin code */
/* Written by, Sohail Qayum Malik */

   /* Tell WordPress to run cyberian_setup() when the 'after_setup_theme' hook is run */
   add_action( 'after_setup_theme', 'cyberian_setup' );

   /* Tell WordPres to run cyberian_administration_menus_and_screens() when the 'admin_menu' hook is run */
   add_action( 'admin_menu', 'cyberian_administration_menus_and_screens' );

   /* PHP core, define the functions only, if it is not already defined */
   if ( ! function_exists( 'cyberian_setup' ) ):

      function cyberian_setup() {

         /* This theme uses wp_nav_menus() in one or more locations
            @slug of the theme location 
            @theme location */
         register_nav_menu('cyberian_primary_menu', 'Cyberian Primary Menu');
         #register_nav_menus( array('primary' => __( 'Cyberian Primary Menu', 'Cyberian' ),
         #) );

      }

   endif;

   /* PHP core, define the function, if it is not already defined */
   if ( ! function_exists( 'cyberian_administration_menus_and_screens' ) ):

       function cyberian_administration_menus_and_screens() {

          /* An Appearance sub menu(panel tab aswell) */ 
          add_theme_page( 'Customize header', 'Header', 'manage_options', 'cyberian_header_customization_page', 'cyberian_header_customization_page_generator' );
       }
   endif;

   /* PHP core, define the function, if it is not already defined */
   if ( ! function_exists( 'cyberian_header_customization_page_generator' ) ):

      function cyberian_header_customization_page_generator() {

         echo '<script type=\'text/javascript\' src=\'';
         /* Explore the other possibillities with bloginfo() and get_bloginfo()  */
         echo get_bloginfo( 'template_directory' ); 
         echo '/customization_screens_dom_handler.js\'></script>'; 

         echo '<div class=\'wrap\'>';

            echo '<p><u><b>Header customization page</b></u></p>';

            echo '<p><u>Site title URL</u></p>';
            echo '<p><u>New Tagline</u></p>';
         echo '</div>';
      }
   endif;  

?>
