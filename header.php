<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="application-name" content="<?php bloginfo('name'); ?>" />
<title><?php
    if( ! is_home() ):
      wp_title( '&bull;', true, 'right' );
    endif;
    bloginfo( 'name' );
?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/img/favicon.png">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <section class="topnav">
    <div class="container">
      <span class="menu-icon"><span class="hidden">Menu</span> <i class="picon-plus trigger-picon-plus"></i></span>
      <a href="<?php bloginfo('home') ?>" class="main-logo">Plain Paper</a>
    </div>
    <div id="navigation">
      <div class="main-wrap">
        <header class="title">
          <h3 class="main-title title-with-search">Navigate</h3>
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s">
            <input type="submit" class="search-submit" value="Search">
          </form>
        </header>
        <nav>
        <?php wp_nav_menu( array( 'menu' => 'Main' ) ); ?>
        </nav>
      </div>
    </div>
  </section>