<?php $postClass = ($i%2 == 0) ? '' : ' alt'; ?>
<div <?php post_class('container grid-4 row-lg'.$postClass); ?>>
	<div class="container-img col-2">
	    <figure>
		    <a href="<?php the_permalink(); ?>">
		        <img src="<?php the_post_thumbnail_url( 'large' ) ?>">
		    </a>
	        <div class="square"></div>
	        <div class="square-shadow"></div>
	    </figure>
	</div>
	<article class="col-2 content">
		<?php get_template_part('templates/corsi', 'meta'); ?>
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <h3 class="title title-date">
			<?php data_corsi(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?>
			<span class="place"><?php the_field('luogo'); ?></span>
		</h3>
		<a class="btn" href="<?php the_permalink(); ?>"><?php _e('Scopri e partecipa', 'jurgita') ?></a>
	</article>
</div>