<div class="awards row-lg" id="awards_<?php echo $row; ?>">
<h2 class="title aligncenter" data-scrollmagic='{"tween": [{"y": 20, "opacity" : 0}, {"y" : 0, "opacity" : 1}], "triggerHook" : 0.75, "duration" : 0, "triggerElement" : "#awards_<?php echo $row; ?>"}'><?php _e('I miei attestati', 'jurgita') ?></h2>
<div class="carousel_list" data-scrollmagic='{"tween": [{"y": 20, "opacity" : 0}, {"y" : 0, "opacity" : 1}], "triggerHook" : 0.65, "duration" : 0, "triggerElement" : "#awards_<?php echo $row; ?>"}'>
    <?php $query = new WP_Query(array(
        "post_type" => "attestati",
    )); ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="carousel-item">
            <figure class="carousel_figure container">
                <img src="<?php the_post_thumbnail_url("small"); ?>">
            </figure>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<div class="container-nav">
    <div class="container-arrow prev">
        <span class="icon-arrow-left"></span>
    </div>



    <div class="carousel_content">
        <?php $query = new WP_Query(array(
        "post_type" => "attestati",
        ));  ?>
    <?php while ($query->have_posts()) :
        $query->the_post();  ?>
        <div class="carousel_item">
            <h5 class="title"><?php the_title()  ?></h5>
            <div class="description-attestati">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile;  ?>
    <?php wp_reset_query();  ?>
    </div>


    <div class="container-arrow next">
        <span class="icon-arrow-right"></span>
    </div>
</div>
</div>