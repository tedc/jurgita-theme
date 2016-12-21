<?php

$terms = get_sub_field('tipologie');
if ($terms): ?>

    <div class="grid-4 container">
        <?php foreach ($terms as $term): ?>
            <div class="col-2">
                <h2 class="title title-corso"><?php echo $term->name; ?></h2>
                <ul>
                    <?php while (have_rows('argomenti', 'livelli_' . $term->term_id)) : the_row();
                        if (the_sub_field('check')) {
                            echo '<li class="argomento">';
                            echo '<span class="icon icon-check">';
                            echo '<span class="argomento-text">' . the_sub_field('argomento') . '</span>';
                            echo '</li>';
                        } else {
                            echo '<li class="argomento">';
                            echo '<span class="icon">';
                            echo '</li>';
                        }
                    endwhile; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
