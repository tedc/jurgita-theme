<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/'. get_post_type(), 'header'); ?>
<?php $flags = get_field('lingue'); $partners = get_field('credit'); if($flasg || $partners) : ?>
<div class="course-meta row-md container">
	<figure class="flag"><?php  foreach ($flags as $flag) { echo '<img src="'.$flag['url'].'" alt="'.$flag['alt'].'" class="flag" />'; } ?></figure>
	<figure class="partners"><?php foreach ($partners as $partner) { echo '<img src="'.$partner['url'].'" alt="'.$partner['alt'].'" class="partner" />'; } ?></figure>
</div>
<?php endif; ?>
<div class="container body-container content">
	<?php 
		$start = new DateTime(
            get_field('data_inizio', false, false)
        );
        // make date object
        $end = new DateTime(
            get_field('data_fine', false, false)
        ); ?>
	<h2 class="title">
	<span class="days"><?php echo $start->format('d'); ?> <span class="sep">/</span> <?php echo $end->format('d'); ?></span>
	<span class="right">
		<span class="month"><?php echo $start->format('F'); ?></span>
		<span class="place"><?php the_field('luogo'); ?></span>
	</span>
	</h2>
	<div class="row-lg">
		<?php the_field('descrizione_corso'); ?>
	</div>
</div>
<?php get_template_part('templates/page', 'layout')); ?>
<?php endwhile; ?>