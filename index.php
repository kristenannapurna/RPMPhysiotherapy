<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main clearfix">
	<div class="container clearfix">
		<div class="blogArchive">
			<h2>Blog</h2>
			<?php if ( have_posts() ) : ?>
			    <!-- there IS content for this query -->
			    <?php /* Start the Loop */ ?>
			    <?php while ( have_posts() ) : the_post(); ?>

			        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			            <a href=" <?php the_permalink(); ?> ">
				            <header class="entry-header">
				                <h1><?php the_title(); ?></h1>
				            	<?php the_post_thumbnail('full'); ?>
				            </header><!-- .entry-header -->
			            </a>

			            <?php the_excerpt(); ?>

			        </article><!-- #post-<?php the_ID(); ?> -->

			    <?php endwhile; ?>

			    <?php get_template_part( 'inc/pagination' ); ?>

			<?php else : ?>

			    <?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
			
		</div><!-- /.blogArchive -->
	 <?php get_sidebar(); ?>
	</div> <!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>