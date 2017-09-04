<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo( 'name' ) | single_post_title() ?></title>

    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/7978a0b803.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=<?php the_field( 'google_maps_api_key' ) ?>"></script>
    <link rel="icon" href="<?php the_field( 'favicon' ) ?>" type="image/gif">
  </head>
  <body <?php body_class(); ?>>
    <section class="hero-section">
      <header class="site-header">
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
              <button  class="shiftnav-toggle shiftnav-toggle-button" data-shiftnav-target="contact_flyout" type="button" name="freeconsult">Free Consultation</button>
            </div>
          </div>
        </div>
      </header>
      <nav class="main-menu">

        <?php

          $defaults = array(
            // 'container' => true,
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu',
            'menu' => 'Main Menu',
            'container_id' => 'cssmenu',
            'walker' => new CSS_Menu_Walker()
          );

          wp_nav_menu( $defaults );

         ?>
      </nav>
