<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                <?php

                // check if the repeater field has rows of data
                if (have_rows('argomenti')):

                    // loop through the rows of data
                    while (have_rows('argomenti')) : the_row();

                        // display a sub field value
                        the_sub_field('argomento');
                        the_sub_field('check');

                    endwhile; ?>
                <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
