<?php get_template_part('templates/content-single', get_post_type()); ?>
<div class="social row-lg">
    <p class="label-social"><?php _e('Condividi', 'jurgita') ?></p>
    <div class="container-loghi">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="icon-facebook" target="_blank"></a>
        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="icon-google" target="_blank"></a>
        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" class="icon-twitter" target="_blank"></a>
    </div>
</div>

<div class="navigation"><p>
       </p></div>

<?php get_template_part('builder/facebook') ?>