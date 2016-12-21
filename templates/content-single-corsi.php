<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/'. get_post_type(), 'header'); ?>
<article <?php post_class('container'); ?>>
<?php $flags = get_field('lingue'); $partners = get_field('credit'); if($flags || $partners) : ?>
<div class="corsi-meta row-md">
	<figure class="flag"><?php  foreach ($flags as $flag) { echo '<img src="'.$flag['url'].'" alt="'.$flag['alt'].'" class="flag" />'; } ?></figure>
	<figure class="partners"><?php foreach ($partners as $partner) { echo '<img src="'.$partner['url'].'" alt="'.$partner['alt'].'" class="partner" />'; } ?></figure>
</div>
<?php endif; ?>
<div class="body-container">
	<?php 
		$start = new DateTime(
            get_field('data_inizio', false, false)
        );
        // make date object
        $end = new DateTime(
            get_field('data_fine', false, false)
        ); ?>
	<h2 class="title">
		<?php data_corsi($start, $end); ?>
		<span class="place"><?php the_field('luogo'); ?></span>
	</h2>
	<div class="row-md">
		<?php the_field('descrizione_corso'); ?>
	</div>
</div>
</article>
<?php get_template_part('templates/page', 'layout'); ?>
<?php endwhile; ?>