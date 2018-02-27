
<?php $dataScrollMagic = ($col%2==0) ? 'data-scrollmagic=\'{"tween":[{"x" : -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}\'' : 'data-scrollmagic=\'{"tween":[{ "x" : 50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "duration" : 0}\''; ?>
<article class="col-2" <?php post_class(); echo $dataScrollMagic && !is_handheld(); ?>>
    <div class="container-img">
        <figure>
            <?php the_post_thumbnail('post-size') ?>
        </figure>
            <a class="blur" href="<?php the_permalink(); ?>">
                <i class="icon-lente"></i>
            </a>
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

