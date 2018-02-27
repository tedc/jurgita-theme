<section class="body-container row-lg" id="row_<?php echo $row; ?>">
	<div class="row-content content text-block">
	<?php if( get_sub_field('titolo') ) : ?>
	<h2 class="title"<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"x": -50, "opacity" : 0}, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.5, "triggerElement": "#row_<?php echo $row; ?>", "duration" : 0}'<?php endif; ?>><?php the_sub_field('titolo'); ?></h2>
	<?php endif; ?>
	<div<?php if(!is_handheld()) : ?> data-scrollmagic='{"tween":[{"x": 50, "opacity" : 0 }, {"x" : 0, "opacity" : 1}], "triggerHook" : 0.7, "triggerElement": "#row_<?php echo $row; ?>", "duration" : 0}'<?php endif; ?>>
		<?php the_sub_field('contenuto'); ?>
	</div>
	</div>
</section>