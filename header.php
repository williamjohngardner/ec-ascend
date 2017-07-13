<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/7978a0b803.js"></script>
    <link rel="icon" href="images/faviocon.png" type="image/gif">
  </head>
  <body <?php body_class(); ?>>
    <section class="hero-section">
      <header>
        <div class="container">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="header-center">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ascend_logo_opt.png" alt="Ascend Disability Lawyers, LLC"></a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="header-right">
              <h2><a href="tel:8556312544">(855) 631-2544</a></h2>
              <button type="button" name="freeconsult">Free Consultation</button>
            </div>
          </div>
        </div>
      </header>
      <nav class="main-menu">

        <?php

          $defaults = array(
            'container' => false,
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu',
          );

          wp_nav_menu( $defaults );

         ?>
      </nav>
