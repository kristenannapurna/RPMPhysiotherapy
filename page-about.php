<?php

/*
	Template Name: About Page, No Sidebar
*/

	get_header();  ?>

	<div class="main">
		<div class="container">

			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="aboutUs">
					<?php the_post_thumbnail('full') ?>
					<div class="aboutDesc">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<a href="http://localhost:8888/rpmphysiotherapy/book/" class="button">Contact Us</a>	
					</div>
				</div>
				<div class="aboutNav clearfix">
					<a data-scroll href="#team" class="box box1">Our Team</a>
					<a  data-scroll href="#facility" class="box box2">Our Facility</a>
					<a data-scroll href="#faq" class="box box3">FAQs</a>
					<a data-scroll href="#rates" class="box box4">Rates</a>
				</div>
				<div id="team">
					<h2>Our Team</h2>
					<?php while( has_sub_field('team_members') ): ?>
						<div class="teamMember clearfix">
							<img src="<?php the_sub_field('photo')  ?>" alt="">
							<div class="teamInfo">
								<h3> <?php the_sub_field('staff_name') ?> </h3>
								<h4><?php the_sub_field('staff_title') ?></h4>
								<p><?php the_sub_field('staff_bio') ?></p>	
								
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div id="facility">
					<h2>Our Facility</h2>
					<img src=" <?php the_field('facility_image') ?> " alt="">
					<p><?php the_field('facility_description') ?></p>

				</div>
				<div id="faq">
					<h2>FAQ's</h2>
					<?php while( has_sub_field('faq') ): ?>
						<div class="faq">
							<h3> <?php the_sub_field('question') ?> </h3>
							<p><?php the_sub_field('answer') ?></p>	
						</div>
					<?php endwhile; ?>
				</div>
				<div id="rates" class="clearfix">
					<h2>Rates</h2>
					<?php the_field('rates_description') ?>
						<img src="<?php bloginfo(template_directory) ?>/assets/images/rates.jpg" alt="">
					<?php while( has_sub_field('rates') ): ?>
						<div class="rates">
							<h3> <?php the_sub_field('service') ?> </h3>
							<p><?php the_sub_field('price') ?></p>	
						</div>
					<?php endwhile; ?>
					<a href="http://localhost:8888/rpmphysiotherapy/book/" class="button">Book An Appointment</a>
				</div>

			<?php endwhile; // end the loop?>
		</div> <!-- /.container -->
	</div> <!-- /.main -->

	<?php get_footer(); ?>