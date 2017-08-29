<?php get_header() ?>
<div class="interior_page_header_image">
  <img src="<?php the_field('interior_hero_image') ?>" alt="<?php bloginfo( 'name' ) ?>">
</div>
<div class="interior_page_header_image_mobile">
  <img src="<?php the_field('interior_hero_image_mobile') ?>" alt="<?php bloginfo( 'name' ) ?>">
</div>

<div class="interior_page_header">
  <h1><?php the_title() ?></h1>
</div>
<div class="container">
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-sm-8 interior_page_content">
        <p><?php the_content() ?></p>
      </div>
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
  </div>
</div>
<?php get_footer() ?>
