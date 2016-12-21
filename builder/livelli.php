<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container">
        <?php foreach ($terms as $term): ?>
            <div class="col-2">
                <h2 class="title title-corso"><?php echo $term->name; ?></h2>
                <ul>
                    <?php while (have_rows('argomenti', 'livelli_' . $term->term_id)) : the_row();
                        echo '<li class="argomento">';

                        echo '<span class="icon ';
                        if (the_sub_field('check')) {
                            echo 'icon-check';
                        }
                        echo '">';

                        echo '<span class="argomento-text">' . the_sub_field('argomento') . '</span>';
                        echo '</li>';
                    endwhile; ?>

            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
