<section class="container row-lg">
	<div class="row-content content">
	<?php if( get_sub_field('titolo') ) : ?>
	<h2 class="title"><?php the_field('titolo'); ?></h2>
	<?php endif; ?>
	<?php the_field('contenuto'); ?>
	</div>
</section>