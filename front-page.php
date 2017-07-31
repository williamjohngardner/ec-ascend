<?php get_header(); ?>
  <div class="homepage_header_image">
    <img src="<?php the_field( 'hero_image' ) ?>" alt=" <?php bloginfo( 'name' ) ?> ">
  </div>
      <div class="hero-title">
        <h1><?php the_field( 'tagline' ) ?></h1>
      </div>
      <div class="container hero-link-section">
        <div class="col-sm-3 hero-link">
          <ul>
            <li><i class="fa fa-pagelines fa-3x"></i></li>
            <li><h3><?php the_field( 'hero_link_1' ) ?></h3></li>
            <li><button type="button" name="herobutton1"><?php the_field( 'hero_link_button' ) ?></button></li>
          </ul>
        </div>
        <div class="col-sm-3 hero-link">
          <ul>
            <li><i class="fa fa-question fa-3x" aria-hidden="true"></i></li>
            <li><h3><?php the_field( 'hero_link_2' ) ?></h3></li>
            <li><button type="button" name="herobutton1"><?php the_field( 'hero_link_button' ) ?></button></li>
          </ul>
        </div>
        <div class="col-sm-3 hero-link">
          <ul>
            <li><i class="fa fa-university fa-3x" aria-hidden="true"></i></li>
            <li><h3><?php the_field( 'hero_link_3' ) ?></h3></li>
            <li><button type="button" name="herobutton1"><?php the_field( 'hero_link_button' ) ?></button></li>
          </ul>
        </div>
        <div class="col-sm-3 hero-link">
          <ul>
            <li><i class="fa fa-gavel fa-3x" aria-hidden="true"></i></li>
            <li><h3><?php the_field( 'hero_link_4' ) ?></h3></li>
            <li><button type="button" name="herobutton1"><?php the_field( 'hero_link_button' ) ?></button></li>
          </ul>
        </div>
      </div>
      <br>
    </section>
    <section class="calltoaction">
      <div class="container">
          <h3><?php the_field( 'cta_title' ) ?></h3>
          <h4><?php the_field( 'cta_tagline' ) ?></h4>
      </div>
    </section>
    <section>
      <div class="attorney-section">
        <div class="attorney-desc">
          <h2 id="attorney-title" class="section-title"><?php the_field( 'attorney_title' ) ?></h2>
          <p id="attorney-text" class="section-text"><?php the_field( 'attorney_text' ) ?></p>
          <a href="<?php the_field( 'attorney_button_url' ) ?>"><h3 id="attorney-button" class="calltoaction-button"><?php the_field( 'attorney_button_text' ) ?></h3></a>
        </div>
        <div class="attorney-pic">
          <img src="<?php the_field( 'attorney_pic' ) ?>" alt="<?php the_field( 'attorney_title' ) ?>">
        </div>
      </div>
    </section>
    <section class="results-section">
      <div class="results-pic">
        <img src="<?php the_field('results_pic'); ?>" alt="<?php the_field( 'attorney_title' ) ?>">
      </div>
      <div class="results-desc">
        <h2 id="results-title" class="section-title"><?php the_field( 'results_title_white_1' ) ?> <span class="orange"><?php the_field( 'results_title_orange' ) ?> </span><?php the_field( 'results_title_white_2' ) ?></h2>
        <p id="results-text" class="section-text"><?php the_field( 'results_description' ) ?></p>
      </div>
    </section>
    <section class="team-section">
        <div class="team-desc">
          <h2 id="team-title" class="section-title"><?php the_field( 'team_title_white_1' ) ?> <span class="orange"><?php the_field( 'team_title_orange' ) ?></span> <?php the_field( 'team_title_white_2' ) ?></h2>
          <p id="team-text" class="section-text"><?php the_field( 'team_description' ) ?> </p>
          <a href="<?php the_field( 'team_cta_button_url' ) ?>"><h3 id="team-button" class="calltoaction-button"><?php the_field( 'team_cta_button' ) ?></h3></a>
        </div>
        <div class="team-pic">
          <img src="<?php the_field('team_pic'); ?>" alt="<?php the_field( 'attorney_title' ) ?>">
        </div>
    </section>
    <section class="vets-section">
      <div class="vets-pic">
        <img src="<?php the_field('vet_pic'); ?>" alt="<?php the_field( 'attorney_title' ) ?>">
      </div>
      <div class="vets-desc">
        <h2 id="vets-title" class="section-title"><?php the_field( 'vet_title_white_1' ) ?> <span class="orange"><?php the_field( 'vet_title_orange' ) ?></span> <?php the_field( 'vet_title_white_2' ) ?></h2>
        <p id="vets-text" class="section-text"><?php the_field( 'vet_description' ) ?></p>
      </div>
    </section>
    <section class="calltoaction">
      <div class="container">
        <div id="calltoaction2">
            <h3><?php the_field( 'cta_white_1' ) ?> <span class="orange"><?php the_field( 'cta_orange_1' ) ?></span> <?php the_field( 'cta_white_2' ) ?> <span class="orange"><?php the_field( 'cta_orange_2' ) ?></span></h3>

              <!-- <button id="gethelpbutton" type="button" name="gethelpnow"><?php the_field( 'cta_button_text' ) ?></button> -->
              <a id="gethelpbutton" class="calltoaction-button" href="<?php the_field( 'cta_button_url' ) ?>"><?php the_field( 'cta_button_text' ) ?></a>
        </div>
      </div>
    </section>
    <section>
      <div class="success-bkgrnd-img">
        <img src="<?php the_field( 'success_bkgnd_img' ) ?>" alt="<?php bloginfo( 'name' )?>">
      </div>
      <div class="success">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="success-wrapper" class="container">
          <h2 id="success-title" class="section-title"><?php the_field( 'success_title_white' ) ?> <span class="orange"><?php the_field( 'success_title_orange' ) ?></span></h2>
          <hr>
          <p id="success-text" class="section-text"><?php the_field( 'success_description' ) ?></p>
          <h3 id="success-button" class="calltoaction-button">Learn More</h3>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
