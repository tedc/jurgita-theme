<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                <?php

                if ($term->have_rows('argomenti')):

                    while ($term->have_rows('argomenti')) : $term->the_row();

                        $term->the_sub_field('argomento');
                        $term->the_sub_field('check');

                    endwhile; ?>
                <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
