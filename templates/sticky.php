<div class="container-img col-2">
    <figure>
        <img src="<?php the_post_thumbnail_url() ?>"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": 20, "x" : 0}, {"y" : -25, "x" : 0}], "triggerHook" : 0.5, "duration" : "100vh", "triggerElement": "#sticky-post"}'<?php endif; ?>>
        <div class="square"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": -25}, {"y" : 25}], "triggerHook" : 0.5, "duration" : "100vh", "triggerElement": "#sticky-post"}'<?php endif; ?>></div>
        <div class="square-shadow"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"y": 25, "x" : 0}, {"y" : -25, "x" : 0}], "triggerHook" : 0.5, "duration" : "100vh", "triggerElement": "#sticky-post"}'<?php endif; ?>></div>
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
