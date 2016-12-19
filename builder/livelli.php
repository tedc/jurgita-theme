<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>



                    <?php the_sub_field('argomento'); ?>


                </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
