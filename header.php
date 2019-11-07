<!-- header.php -->
<!-- Written by, Sohail Qayum Malik -->

<?php 

/**
* The header of cyberian theme
* Display all of the <head> </head> section and the partial <body> </body> section
**/
?> 

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

   <meta charset=<?php bloginfo( 'charset' ); ?> />

   <title> 
      <?php 

         // Add blog name
         bloginfo( 'name' );

         // Add the blog description for the home/front page
         $site_description = get_bloginfo( 'description', 'display' );
            
         if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

      ?> 
   </title>
   
   <link rel="profile" href="http://gmpg.org/xfn/11" />
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
 
   <?php

      /**
       * We add some JavaScript to pages with the comment form to support sites with threaded comments (when on use)
       **/
      if ( is_singular() && get_option( 'thread_comments' ) )
         wp_enqueue_script( 'comment-reply' );

      echo '<!-- javascript files which make up the jquery frame work are included here -->'; 
      wp_enqueue_script( 'jquery' );
      echo '<!-- javascript files which make up the jquery frame work see their inclusion get done here -->';  
         

      /**
      * Always have wp_head() just before the closing </head> tag of your theme, or you'll break many plugins, which
      * generally use this hook to add elements to <head> such as styles, scripts, and meta tags
      **/   
      wp_head();
   ?> 
</head>

<body <?php body_class(); ?>>

   <div id="header">
      <h1> 
         <a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a> 
      </h1> 
    
     <div id="description"> 
        <?php bloginfo( 'description' ); ?>
     </div> 
   </div> <!-- Header ends here --> 

<!--   <div class="primary_menu" role="navigation"> -->

      <?php

         /* This would enable the Menu widget in the dashboard of the Cyberian. The user has to define a menu by the name of cyberian_primary_menu(slug). As fallback_cb is null it'll not fallback upon wp_page_menu(which is default, in my case it is about page */
         /* When theme location cyberian_primary_menu is selected then has_nav_menu() returns true */
         if (has_nav_menu("cyberian_primary_menu")) {
         
            echo '<div class="primary_menu" rol="navigation">';
 
            wp_nav_menu( array( 'container' => 'false',  'theme_location' => 'cyberian_primary_menu', 'menu_class' => 'primary_menu_ul_class', 'menu_id' => 'primary_menu_ul', 'fallback_cb' => '' ) );

            echo '</div>';
         }
  
      ?>
<!--   </div> -->

      <!-- container conatins the loop.php and the sidebar.php, respectively. It begins here and ends in the footer.php  --> 
      <!-- <div id='container'> -->  
 
