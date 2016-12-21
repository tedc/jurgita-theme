<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container">
        <?php foreach ($terms as $term): ?>
            <div class="col-2">
                <h2><?php echo $term->name; ?></h2>
                <ul>
                <?php while ( have_rows('argomenti', 'livelli_'.$term->term_id ) ) : the_row();
                    echo '<li>';

                    the_sub_field('argomento');
                    the_sub_field('check');
                    echo '</li>';
                endwhile;?>

            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
