<div class="container-img col-2">
    <figure>
        <img src="<?php the_post_thumbnail_url() ?>" data-scrollmagic='{"tween":[{"y": -50, "x" : -50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : "50%", "triggerElement": "#sticky-post"}'>
        <div class="square" data-scrollmagic='{"tween":[{"y": 50}, {"y" : 0}], "triggerHook" : 0.5, "duration" : "50%", "triggerElement": "#sticky-post"}'></div>
        <div class="square-shadow" data-scrollmagic='{"tween":[{"y": -50, "x" : 50}, {"y" : 0, "x" : 0}], "triggerHook" : 0.5, "duration" : "50%", "triggerElement": "#sticky-post"}'></div>
    </figure>
</div>

<article <?php post_class("col-2"); ?>
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
