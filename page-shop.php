<?php

/*
	Template Name: Shop Page, With Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container clearfix">
  	<div class="sidebarTemplate">
	<?php  ?>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>

      <?php while( has_sub_field('event') ): ?>
        <div class="event">
          <h2><?php the_sub_field('event_name') ?></h2>
          <h3><?php the_sub_field('date') ?></h3>
          <?php the_sub_field('event_description') ?>
        </div>
      <?php endwhile ?>

    <?php endwhile; // end the loop?>
    <?php while ( has_sub_field('product')): ?>
      <div class="product">
        <a href=" <?php the_sub_field('url') ?>" target="_blank">
          <img src=" <?php the_sub_field('product_image') ?>" alt=" <?php the_sub_field('product_name') ?>">
          <h4><?php the_sub_field('product_name') ?></h4>
        </a>


      </div>
    <?php endwhile  ?>
  		
  	</div>
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>