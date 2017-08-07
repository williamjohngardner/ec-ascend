<?php get_header() ?>
  <div class="interior_page_header_image">
    <img src="<?php the_field('interior_hero_image') ?>" alt="<?php bloginfo( 'name' ) ?>">
  </div>

  <div class="interior_page_header">
    <h1><?php bloginfo( 'name' ) ?> Law Blog</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <br>
              <a href=" <?php the_permalink() ?> "><h1 class="blog_page_header"><?php the_title() ?></h1></a>
              <?php the_post_thumbnail( 'thumbnail' ) ?>
              <p class="blog_page_subtext">Posted by: <?php the_author() ?> | on <?php echo get_the_date() ?></p>
              <br>
              <p><?php the_excerpt() ?></p>
              <br>
              <p class="blog_page_subtext">Filed Under: <?php the_category(', ') ?></p>
              <br>
      <?php endwhile; else : ?>
      	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      </div>
        <div class="sidebar">
          <?php get_sidebar( 'blog' ); ?>
        </div>
    </div>
  </div>
<?php get_footer() ?>
