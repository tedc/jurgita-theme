<section class="body-container row-lg">
	<div class="row-content content text-block">
	<?php if( get_sub_field('titolo') ) : ?>
	<h2 class="title"><?php the_sub_field('titolo'); ?></h2>
	<?php endif; ?>
	<?php the_sub_field('contenuto'); ?>
	</div>
</section>