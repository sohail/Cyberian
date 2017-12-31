<?php
/**
 *Template Name: Side Bar 
**/
?>

<!-- sidebar.php -->
<!-- Written by, Sohail Qayum Malik[sqm@hackers.pk] -->

<?php /* This should be an option of the admin menu */ ?>
<?php $exclude_cats = '1,5,7,23'; ?>


<?php $args = array( 'order' => 'name',
                     'show_count' => 1,
                     'hide_empty' => 1,
                     'exclude' =>  $exclude_cats,
                     'title_li' => '',
                     'echo' => 0, 
                     'style' => 'list' ); ?>


<!-- This is your html document -->
<?php $html_code_to_parse = wp_list_categories( $args ); ?>


<div id="sidebar">
    
   <?php

      /* We are creating a root, which is a document */
      $DOM_html = new DOMDocument;
      
      if ( $DOM_html->loadHTML($html_code_to_parse) ) {
         echo '<b><u>Categories</u></b>';
         /* echo '<ul style="list-style: none; margin: 0 0 0 0;">'; */
         echo '<ul>'; 
         $DOM_a_html_tags = $DOM_html->getElementsByTagName( 'li' );

         for ($i = 0; $i < $DOM_a_html_tags->length; $i++) {
            $node = $DOM_a_html_tags->item($i);
            $string = $DOM_html->saveXML($node);
           /* echo $DOM_a_html_tags->item($i)->textContent . "<br/>"; */
            echo $string;
            $string = null;
            $node = null;
         }

         echo '</ul>';
      }
      
   ?>

</div>
