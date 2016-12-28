<h2 class="title aligncenter"><?php the_sub_field('titolo') ?></h2>
<?php if (have_rows('giorni')): ?>
    <div class="grid-4 container programma-corsi">
        <?php while (have_rows('giorni')) : the_row(); ?>
            <h2 class="title title-corso"><?php the_sub_field('titolo'); ?></h2>
                <ul class="argomenti grid-4">
                    <?php $i = 1; ?>
                    <?php while (have_rows('argomenti')) : the_row(); ?>
                        <li class="argomento col-2">
                            <span class="check"><i class="number"><?php echo $i; $i++;?></i></span>
                            <span class="argomento-text"> <?php the_sub_field('argomento'); ?></span>
                        </li>
                    <?php endwhile ?>
                </ul>
        <?php endwhile ?>
    </div>
<?php endif ?>