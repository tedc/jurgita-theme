<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4">

        <?php foreach ($terms as $term): ?>
            <div class="col-1">
                <h2><?php echo $term->name; ?></h2>
                <?php var_dump($term->taxonomy.'_'.$term->term_id) ?>
                <?php var_dump(the_sub_field('argomento', $term->taxonomy.'_'.$term->term_id));?>

                </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
