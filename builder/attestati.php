<h2 class="title aligncenter"><?php _e('I miei attestati', 'jurgita') ?></h2>


<?php $query = new WP_Query(array(
    "post_type" => "attestati",
)); ?>
<div class="carousel_attestati">

    <?php while ($query->have_posts()) : $query->the_post();
        $post = get_post(); ?>
        <div class="carousel_item">

        <?php the_post_thumbnail("large"); ?>

        </div>
    <?php endwhile; ?>
</div>

<?php wp_reset_query(); ?>
