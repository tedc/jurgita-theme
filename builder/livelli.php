<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                    <?var_dump(have_rows('argomenti')) ?>


                    <?php the_sub_field('argomento'); ?>


                </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
