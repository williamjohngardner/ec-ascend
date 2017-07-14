<?php get_header() ?>
  <div class="interior_page_header_image">
    <img src="<?php bloginfo('template_directory') ?>/images/bridge2_header.jpg" alt="">
  </div>

  <div class="interior_page_header">
    <h1><?php bloginfo( 'name' ) ?>'s Blog Posts</h1>
  </div>
  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-8">
          <h1><?php the_title() ?></h1>
          <?php the_post_thumbnail( 'medium_large' ) ?>
          <p><?php the_content() ?></p>
        </div>
      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
        <?php get_sidebar( 'blog' ); ?>
      </div>
    </div>
<?php get_footer() ?>
