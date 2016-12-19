<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                <?php if( have_rows('repeater_field_name') ):
                while (have_rows('repeater_field_name') ) : the_row();

                    // display a sub field value
                    $term -> the_sub_field('argomento');

                endwhile;?>
                <?php endif; ?>
                </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
