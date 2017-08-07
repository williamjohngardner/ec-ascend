<?php get_header() ?>
  <div class="interior_page_header_image">
    <img src="<?php the_field('interior_hero_image') ?>" alt="<?php bloginfo( 'name' ) ?>">
  </div>

  <div class="interior_page_header">
    <h1><?php the_title() ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-8">
          <br>
          <br>
          <p class="blog_page_subtext">Posted by: <?php the_author() ?> | on <?php echo get_the_date() ?></p>
          <br>
          <?php the_post_thumbnail( 'medium_large' ) ?>
          <br>
          <br>
          <p><?php the_content() ?></p>
          <br>
          <p class="blog_page_subtext">Filed Under: <?php the_category(', ') ?></p>
          <br>
        </div>
      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
        <div class="sidebar">
          <?php get_sidebar( 'blog' ); ?>
        </div>
      </div>
    </div>
<?php get_footer() ?>
