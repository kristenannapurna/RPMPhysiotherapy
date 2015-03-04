<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="home">
      <section class="hero clearfix">
        <div class="left">
          <img src="<?php the_field('hero_image') ?>" alt="rpm physiotherapy">
          <h2><?php the_field('hero_image_text') ?></h2>
        </div>
        <div class="right">

          <div class="about">
            <a href="http://localhost:8888/rpmphysiotherapy/about/">
              <img src="<?php the_field('about_image') ?> " alt="about our physiotherapists">
              <h3><?php the_field('about_label') ?></h3>
            </a>
          </div>
          <div class="services">
            <a href="http://localhost:8888/rpmphysiotherapy/services/">
              <img src="<?php the_field('services_image') ?> " alt="rpm physiotherapy services">
              <h3><?php the_field('services_label') ?></h3>
            </a>
            
          </div>
        </div>
      </section> <!-- /.hero -->
    </div> <!-- /.home -->
  </div> <!-- /.container -->
  <section class="mailchimp">
  <?php the_field('mailchimp_shortcode'); ?>
</section>

<div class="container">

  <section class="features clearfix">
    <a href="<?php the_field('feature_one_link') ?>" class="feature featureOne"><?php the_field('feature_button_one') ?></a>
    <a href="<?php the_field('feature_two_link') ?>" class="feature featureTwo"><?php the_field('feature_button_two') ?></a>
    <a href="<?php the_field('feature_three_link') ?>" class="feature featureThree"><?php the_field('feature_button_three') ?></a>
  </section>
  <section class="more clearfix">
    <div class="shop">
      <a href="http://localhost:8888/rpmphysiotherapy/shop/">
       <img src="<?php the_field('shop_link') ?>" alt="">
       <h2><?php the_field('shop_label') ?></h2>  
     </a>
   </div>


   <div class="flexslider">
    <h2>What Clients Are Saying</h2>
    <ul class="slides">
      <?php 
      $rows = get_field('testimonial');
      if($rows):
        foreach($rows as $row):?>
      <li>
        <div class="slide">
          <img src="<?=$row['image']?>">
          <p><?=$row['quote']?></p>
        </div>
      </li>
      <?endforeach?>
      <?endif?>
    </ul>
  </div>
</section>  

<section class="latestPosts clearfix">
  <h2>Latest Blog Posts</h2>

  <ul>
   <?php 
   $latestQuery = new WP_Query (
    array(
      'posts_per_page'=>3,
      )
    );

    ?>

    <?php if ($latestQuery->have_posts() ): ?>
      <?php while ($latestQuery->have_posts()): $latestQuery->the_post(); ?>
        <li>
         <a href=" <?php the_permalink(); ?>">
          <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
        </a>

      </li>
    <?php endwhile ?>
    <?php wp_reset_postdata(); ?>

  <?php endif ?>

</ul>


</section>



</div> <!-- /.container -->


</div> <!-- /.main -->

<?php get_footer(); ?>