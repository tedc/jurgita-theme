<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">
        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                <?php while ( have_rows('argomenti', 'livelli_'.$term->term_id ) ) : the_row();

                // display a sub field value
                the_sub_field('argomento');
                the_sub_field('check');


                endwhile;
                ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
