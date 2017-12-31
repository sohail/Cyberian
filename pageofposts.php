<?php
/**
 *Template Name: Page of Posts 
**/

/*
Notes,....
To get the permalink
get_page_link( $aPage->ID )  

*/
   /*  */
/*
   if ( ! function_exists( 'get_query_var' ) )
      include( '/home/cyberian/www/CMS-WordPress/wp-includes/query.php' );
*/ 


   get_header();

/*
   $pages = get_pages();

   foreach ( $pages as $aPage ) {

      if ( $aPage->post_title == trim( $_SERVER["REQUEST_URI"], '/') ) {

         echo '<div id="page">';

            echo '<div class="posttitle">';
               echo '<h2><a href="';
*/
               /* echo $_SERVER["SERVER_NAME"]; */
/*
               echo '" rel="bookmark" title="Permanent link to, ';
               echo $aPage->post_title;
               echo '">';  
               echo $aPage->post_title;
               echo '</a></h2>';
            echo '</div>';

            if ( $aPage->post_content ) {
            
                echo '<div class="entry"></br>';
                   echo $aPage->post_content;
                echo '</div>';
            }
         echo '</div>';
 
*/
/*
        echo $aPage->post_title;
        echo $aPage->post_content;
*/

/*
      }
   }
*/ 

  echo '<!-- Put page here -->';
  $temp_wp_query = $wp_query;
  $temp_posts = $posts;
  $wp_query = null;
  $posts = null;
  $wp_query = new WP_Query();  
   

  $wp_query = $temp_wp_query;
  $posts = $temp_posts; 
  $temp_wp_query = null;
  $temp_posts = null; 
  echo '<!-- Page ends here -->';  

   echo '<!-- Put posts here -->';

   $args = array( 'category_name' => trim( $_SERVER["REQUEST_URI"], '/') ); 
   /* http://return-true.com/2008/12/using-wp_query-to-make-custom-queries-within-wordpress-templates/ */
   $temp_wp_query = $wp_query;
   $temp_posts = $posts;
   $wp_query = null;
   $posts = null;
   $wp_query = new WP_Query();  
   /* $wp_query->query( 'category_name=Project' ); */
   $wp_query->query( $args );  
   $posts = $wp_query->posts;

   get_template_part( 'loop', 'pageofposts' );

   wp_reset_query();
   
   $wp_query = $temp_wp_query;
   $posts = $temp_posts;  
             
   echo '<!-- Posts end here -->';

   get_footer(); 
?>