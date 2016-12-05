<article class="col-2" <?php post_class(); ?>>
  <div class="container-img">
    <figure>
      <?php the_post_thumbnail( 'post-size' ) ?>
    </figure>
  </div>

  <header>
    <?php get_template_part('templates/entry-meta'); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Leggi tutto', 'jurgita') ?></a>
</article>
