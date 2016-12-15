<h2 class="title aligncenter"><?php _e('I miei attestati', 'jurgita') ?></h2>
<div class="carousel_list">
    <?php $query = new WP_Query(array(
        "post_type" => "attestati",
    )); ?>
    <?php while ($query->have_posts()) : $query->the_post();
       /* $post = get_post();*/ ?>
        <div class="carousel_item">
            <figure class="carousel_figure">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php the_post_thumbnail_url("large"); ?>"></a>
            </figure>
            <h5><a class="m_button" href="<?php  the_permalink() ?>"><?php the_title() ?></a></h5>
        </div>
    <?php endwhile; ?>
</div>

<?php wp_reset_query(); ?>
