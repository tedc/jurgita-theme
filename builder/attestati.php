<h2 class="title aligncenter"><?php _e('I miei attestati', 'jurgita') ?></h2>


<?php $query = new WP_Query(array(
    "post_type" => "attestati",
)); ?>
<div class="carousell_attestati">

    <div class="carousel_item">
    <?php while ($query->have_posts()) : $query->the_post();
        $post = get_post(); ?>


        <?php the_post_thumbnail("large"); ?>


    <?php endwhile; ?>
    </div>
</div>

<?php wp_reset_query(); ?>
