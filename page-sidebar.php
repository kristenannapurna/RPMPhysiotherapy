<?php

/*
	Template Name: Page, With Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container clearfix">
  	<div class="sidebarTemplate">
	<?php  ?>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  		
  	</div>
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>