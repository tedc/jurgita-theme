<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/'. get_post_type(), 'header'); ?>
<article <?php post_class('container'); ?>>
<?php get_template_part('templates/corsi', 'meta'); ?>
<div class="body-container">
	<h2 class="title title-date">
		<?php data_corsi(get_field('data_inizio', false, false), get_field('data_fine', false, false)); ?>
		<span class="place"><?php the_field('luogo'); ?></span>
	</h2>
	<div class="row-md">
		<?php the_field('descrizione_corso'); ?>
	</div>
</div>
</article>
<?php get_template_part('templates/page', 'layout'); ?>
<?php endwhile; ?>