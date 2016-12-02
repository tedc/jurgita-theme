<?php get_template_part('templates/page', 'header'); ?>

<?php
  wp_list_categories(  array(
      'show_option_all' => _e("Tutti gli articoli", "jurgita"),
  ) )
;?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
