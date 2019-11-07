<!-- index.php -->
<!-- Written by, Sohail Qayum Malik -->  

<?php
 
   /* Tag to import the header.php file */
   get_header();
   /* get_sidebar(); */    

   /**
   * Run the loop to output the posts. If you want to overload this in a child theme then include the file called loop-index.php
   * and that will be used instead.
   **/
   get_template_part( 'loop', 'index' );
 
   /* Tag to import footer.php. The footer.php at the moment is small, it'll not remain as such for long */

   echo '<!-- You may see lot of space after the footer, this is not a design related problem, it is just that, there is no matter/content to display above the footer. Just put enough content above the footer and empty space below footer will go away  -->';  
   get_footer();
?>
