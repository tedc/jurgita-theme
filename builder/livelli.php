<?php

$term = get_sub_field('tipologie');

if( $term ): ?>

    <h2><?php echo $term->name; ?></h2>
    <p><?php echo $term->description; ?></p>

<?php endif; ?>