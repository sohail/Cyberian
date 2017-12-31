 <!-- loop.php -->
 <!-- Written by, Sohail Qayum Malik[sqm@hackers.pk] -->

<?php if ( ! have_posts() ) : ?>

   <h1 id="no-entry"><?php _e( 'Not Found', 'Cyberi@n' ); ?></h1>

   <p id="no-entry-message"><?php _e( 'Apologies, but the page you requested could not be found. Perhapes searching would help.', 'Cyberi@n' ); ?></p>

   <div id="no-entry-search-form"><?php get_search_form(); ?></div>

   <script type='text/javascript' src='<?php echo get_bloginfo( 'template_directory' ); ?>/search_box_focus.js'></script>

<?php elseif ( is_page() ) : ?>

   <div id='page'>
      <?php while ( have_posts() ) : the_post(); ?>
         <!-- Display the Title as a link to the Post's          permalink. -->
         <div class="posttitle"> 
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         </div>
         <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
         <div class="postdateandauthor">
            <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
         </div>
         <!-- Display the Post's Content in a div box. -->
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; ?>            
   </div> <!-- id='page' ends here -->   
          
<?php else: ?> <!-- posts are rendered here -->

   <div id='containerOuter'>
      <div id='containerInner'>
         <div id='posts'>
            <?php while ( have_posts() ) : the_post(); ?>
               <!-- Display the Title as a link to the Post's permalink. -->
               <div class='posttitle'>
                  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>                                      
               </div> <!-- ends class posttitle --> 

                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                <div class="postdateandauthor">
                   <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                </div> <!-- ends class postdateandauthor -->

                 <!-- Display the Post's Content in a div box. -->
                 <div class="entry">
                    <?php the_content(); ?>
                 </div> <!-- ends class entry -->

                  <!-- Display a comma separated list of the Post's Categories. -->
                  <div class="postmetadata">Posted in <?php the_category(', '); ?>
                  </div> <!-- ends class postmetadata -->            
            <?php endwhile; ?>
         </div> <!-- ends posts -->
         <?php get_sidebar(); ?>
      </div> <!-- ends containerInner-->
   </div> <!-- ends containerOuter -->    
   <div style='clear:both;'></div>
<? endif; ?>

