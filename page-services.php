<?php

/*
	Template Name: Services Page, Sidebar
*/

	get_header();  ?>

	<div class="main">
		<div class="container clearfix">
			<div class="leftServices">
				<div class="services">
					<h1>Services</h1>
						<div class="serviceButtons clearfix">
							<?php while( has_sub_field('services') ): ?>
								<a href="#<?php the_sub_field('anchor')  ?>" class="service"><?php the_sub_field('service_name') ?></a>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="details">
					<?php while( has_sub_field('services') ): ?>
					<div id="<?php the_sub_field('anchor') ?>">
						<h2><?php the_sub_field('service_name') ?></h2>
						<p><?php the_sub_field('service_description') ?></p>
						<a href="http://localhost:8888/rpmphysiotherapy/book/" class="button">Book</a>
					</div>
				<?php endwhile ?>
			</div>
				
		</div>

			
		<?php get_sidebar(); ?>
		</div> <!-- /.container -->
	</div> <!-- /.main -->

	<?php get_footer(); ?>