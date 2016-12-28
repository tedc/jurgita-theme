<h2 class="title"><?php get_sub_field('titolo')?></h2>
<?php if( have_rows('giorni') ): ?>
<div class="grid-4 container programma-corsi">
    <?php while ( have_rows('giorni') ) : the_row(); ?>
    <?php the_sub_field('titolo'); ?>
    <?php endwhile ?>
</div>
<?php endif ?>