<!-- 404.php -->
<!-- Written by, Sohail Qayum Malik -->


<?php get_header(); ?> 

<!--
<script type='type/javascript' src='<?php echo plugin_dir_path( __FILE__); ?>search_box_focus.js'></script>
-->

<h1 id="no-entry"><?php _e( 'Not Found', 'Cyberi@n' ); ?></h1>

<p id="no-entry-message"><?php _e( 'Apologies, but the page you requested could not be found. Perhapes searching would help.', 'Cyberi@n' ); ?></p>

<div id="no-entry-search-form"><?php get_search_form(); ?></div>

<script type='text/javascript' src='<?php echo get_bloginfo( 'template_directory' ); ?>/search_box_focus.js'></script>


<?php get_footer(); ?>
