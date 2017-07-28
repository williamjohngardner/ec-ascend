<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ) | single_post_title() ?></title>

    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/7978a0b803.js"></script>
    <link rel="icon" href="<?php bloginfo( 'template_directory' ) ?>/images/faviocon.png" type="image/gif">
  </head>
  <body <?php body_class(); ?>>
    <section class="hero-section">
      <header>
        <div class="container">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="header-center">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('site_logo') ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="header-right">
              <h2><a href="tel:<?php the_field('tel_area_code') ?><?php the_field('tel_exchange') ?><?php the_field('tel_line_number') ?>">(<?php the_field('tel_area_code') ?>) <?php the_field('tel_exchange') ?>-<?php the_field('tel_line_number') ?></a></h2>
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
