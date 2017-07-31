<section class="calltoaction">
  <div class="container">
    <div id="calltoaction2">
        <h3><?php the_field( 'cta_white_1' ) ?> <span class="orange"><?php the_field( 'cta_orange_1' ) ?></span> <?php the_field( 'cta_white_2' ) ?> <span class="orange"><?php the_field( 'cta_orange_2' ) ?></span></h3>
          <a id="gethelpbutton" class="calltoaction-button" href="<?php the_field( 'cta_button_url' ) ?>"><?php the_field( 'cta_button_text' ) ?></a>
    </div>
  </div>
</section>
<section class="pre-footer-columns">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="pre-footer-column-1">
          <h3><span class="orange"><?php the_field( 'company_title_orange_1' ) ?></span> <?php the_field( 'company_title_white' ) ?> <span class="orange"><?php the_field( 'company_title_orange_2' ) ?></span></h3>
          <br>
          <h5><?php the_field( 'tagline' ) ?></h5>
          <br>
          <ul>
            <li><?php the_field( 'street_address_1' ) ?></li>
            <li><?php the_field( 'city_state_zip' ) ?></li>
            <li>Toll Free:<a style="color: white;" href="tel:<?php the_field( 'toll_free_phone_raw' ) ?>"><?php the_field( 'toll_free_phone' ) ?></a></li>
            <li>Ph:<a href="tel:<?php the_field('tel_area_code') ?><?php the_field('tel_exchange') ?><?php the_field('tel_line_number') ?>">(<?php the_field('tel_area_code') ?>) <?php the_field('tel_exchange') ?>-<?php the_field('tel_line_number') ?></a></li>
          </ul>
          <ul>
            <li><a href="https://www.facebook.com/pages/Ascend-Disability-Lawyers-LLC/445889835504828" target="_blank" rel="noopener"><img src="https://ascenddis.wpengine.com/wp-content/uploads/2017/04/fb.png" alt="Facebook" /></a><a href="https://twitter.com/AscendLawyers" target="_blank" rel="noopener"><img src="https://ascenddis.wpengine.com/wp-content/uploads/2017/04/twt.png" alt="Twitter" /></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="pre-footer-column-2">
          <h3><span class="orange"><?php the_field( 'cfc_title_orange' ) ?></span> <?php the_field( 'cfc_title_white' ) ?></h3>
          <br>
          <?php the_field( 'cfc_shortcode' ) ?>
          <!-- <div class="footer-contact-form">
            <input type="text" name="yourname" value="" placeholder="Your Name">
            <input type="text" name="youremail" value="" placeholder="Your Email">
            <input type="text" name="yourphone" value="" placeholder="Your Phone">
            <input type="text" name="yourage" value="" placeholder="How Old are You?">
            <br>
            <h3 id="footer-contact-button" class="calltoaction-button">Free Consultation</h3>
          </div> -->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="pre-footer-column-3">
          <h3><span class="orange"><?php the_field( 'rfc_title_orange' ) ?></span> <?php the_field( 'rfc_title_white' ) ?></h3>
          <br>
          <div class="mapoverlay"></div>
          <?php the_field( 'rfc_map' ) ?>
          <!-- <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13829.36273190411!2d-90.1287505!3d29.9408778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x581a675b208a9dd3!2sAscend+Disability+Lawyers!5e0!3m2!1sen!2sus!4v1495819298398" width="300" height="338" frameborder="0" allowfullscreen=""></iframe> -->
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div id="disclaimer" class="container">
    <h4>Privacy Policy</h4>
    <hr>
    <p>This website is designed for general information only and should not be construed as legal advice. An attorney-client relationship should not be construed as having been formed by the use of this website, the submission of information to our firm, or otherwise contacting our firm. The choice of a lawyer is an important decision and should not be based solely on advertisements. Past results afford no guarantee of future results. Every case must be judged on its own merits.</p>
    <br>
    <hr>
    <h5>&copy;<?php echo date('Y'); ?> | Powered by <a href="http://www.everconvert.com">EverConvert</a></h5>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>
