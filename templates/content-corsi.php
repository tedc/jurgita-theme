<?php $postClass = ($i%2 == 0) ? '' : ' alt'; ?>
<div <?php post_class('container grid-4'.$postClass); ?>>
	<div class="container-img col-2">
	    <figure>
	        <img src="<?php the_post_thumbnail_url() ?>">
	        <div class="square"></div>
	        <div class="square-shadow"></div>
	    </figure>
	</div>
	<article class="col-2 content">
		<?php get_template_part('templates/corsi', 'meta'); ?>
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <h3 class="title title-date">
	    	<span class="place"><?php the_field('luogo'); ?></span>
			<?php data_corsi(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?>
		</h3>
	</article>
</div>