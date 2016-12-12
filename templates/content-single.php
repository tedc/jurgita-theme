<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/breadcrumbs'); ?>


  <?php if(has_post_thumbnail()){?>
    <div class="header_page_blog" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
  <?php } ?>

  <article <?php post_class('container'); ?>>
    <header>
      <?php get_template_part('templates/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
