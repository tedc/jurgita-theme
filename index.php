<?php get_template_part('templates/page', 'header'); ?>

$categories = get_categories( );


<?php if ( ! empty( $categories ) ) {
echo '<ul class="categories">';
  foreach( $categories as $category ) {
  echo '<li><a class="category" href="'.get_category_link($category->term_id).'">';
      echo $category->name;
      echo '</a></li>';
  }
  echo '</ul>';
} ;?>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
