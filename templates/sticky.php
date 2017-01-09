<div class="container-img col-2" data-scrollmagic='{"tween":[{"x": -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'>
    <figure>
        <img src="<?php the_post_thumbnail_url() ?>">
        <div class="square"></div>
        <div class="square-shadow"></div>
    </figure>
</div>

<article <?php post_class("col-2"); ?> data-scrollmagic='{"tween":[{"x": 50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}'>
    <div class="content-post">
        <header>
            <?php get_template_part('templates/entry-meta'); ?>
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
        <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Leggi tutto', 'jurgita') ?></a>
    </div>
</article>
