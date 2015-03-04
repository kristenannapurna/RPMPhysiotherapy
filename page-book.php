<?php

/*
	Template Name: Contact Page, No sidebar
*/

	get_header();  ?>

	<div class="bookPage">
		<div class="container clearfix">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			  <h1><?php the_title(); ?></h1>
			  <?php the_content(); ?>

			<?php endwhile; // end the loop?>

			<div class="map clearfix">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.158082434839!2d-79.46826899999999!3d43.665682000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3420381b0467%3A0xf14bf37b3dc4e8a9!2sRPM+Physiotherapy!5e0!3m2!1sen!2sca!4v1425419027506" width="400" height="300" frameborder="0" style="border:0"></iframe>
				<p><?php the_field('location') ?></p>
			</div>

			<div class="directions">
				<h4><?php the_field('driving_label') ?></h4>
				<p><?php the_field('driving_directions') ?></p>
				<h4><?php the_field('ttc_label') ?></h4>
				<p><?php the_field('ttc_directions') ?></p>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.main -->

	<?php get_footer(); ?>