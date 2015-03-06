<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/flexslider.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body <?php body_class(); ?>>

    <div class="mobileNav">
        <div class="navClose">
          <svg x="0px" y="0px" width="40px" height="40px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
                          <polygon points="24.899,7.929 22.071,5.101 15,12.172 7.929,5.101 5.101,7.929 12.172,15 5.101,22.071 7.929,24.899 15,17.828
                            22.071,24.899 24.899,22.071 17.828,15 "></polygon>
                          </svg>
        </div>
        <?php wp_nav_menu( array(
           'theme_location' => 'primary',
        )); ?> 
    </div> 
    <div class="mobileBanner">
    <i class="fa fa-phone"></i><a title="416-572-0479" href="tel:+1-416-572-0479">416-572-0479</a>
    <i class="fa fa-bars"></i>
    </div>


<header>
  <div class="container">
    <nav class="clearfix">
      <?php wp_nav_menu( array(
         'theme_location' => 'primary',
      )); ?>
    </nav>   

  </div> <!-- /.container -->
</header><!--/.header-->
  <div class="container">
    <h1 class="logo"><img src="<?php bloginfo('template_directory');?>/assets/images/rpmlogo.png" alt="RPM Physiotherapy"></h1>
    
  </div>


