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


