<div class="container-img">
    <figure>
        <img src="<?php the_post_thumbnail_url() ?>">
    </figure>
    <div class="square"></div>
    <div class="square-shadow"></div>
</div>
<article <?php post_class(); ?>>
    <header>
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
