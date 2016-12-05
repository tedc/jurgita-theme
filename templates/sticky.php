<div class="container-img col-2">
    <figure>
        <img src="<?php the_post_thumbnail_url() ?>">
        <div class="square"></div>
        <div class="square-shadow"></div>
    </figure>
</div>
<article class="col-2" <?php post_class(); ?>>
    <div class="content-post">
        <header>
            <?php get_template_part('templates/entry-meta'); ?>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Leggi tutto', 'jurgita') ?></a>
    </div>
</article>
