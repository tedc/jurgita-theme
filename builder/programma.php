<h2 class="title"><?php the_sub_field('titolo')?></h2>
<?php if( have_rows('giorni') ): ?>
<div class="grid-4 container programma-corsi">
    <?php while ( have_rows('giorni') ) : the_row(); ?>
        <h2 class="title title-corso"><?php the_sub_field('titolo'); ?></h2>
        <div class="col-2">

        </div>
    <?php endwhile ?>
</div>
<?php endif ?>