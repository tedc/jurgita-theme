<div class="grid-4 grid-cols">
<?php while(have_rows('colonne')) : the_row(); ?>
<div class="col-2">
<?php if(get_row_layout() == 'testo') : ?>
	<div class="col-content container<?php echo (get_sub_field('testo_centrato')) ? ' aligncenter' : ''; ?>">
		<?php the_sub_field('contenuto'); ?>
	</div>
<?php elseif (get_row_layout() == 'immagine') : ?>
	<?php $img = get_sub_field('immagine'); ?>
	<figure class="col-image" style="padding-top: <?php echo ( $img['height'] * 100 ) / $img['width']; ?>%">
		<img src="<?php echo $img['url']; ?>" />
	</figure>
<?php elseif (get_row_layout() == 'video') : ?>
	<?php $file = preg_replace('/\\.[^.\\s]{3,4}$/', '', get_sub_field('file')); ?>
<div class="video-cover" style="background-image:url(<?php echo $file; ?>.jpg)">
    <video class="video-item" ng-video loop poster="<?php echo $file; ?>.jpg">
        <source src="<?php echo $file; ?>.mp4" type="video/mp4" />
        <source src="<?php echo $file; ?>.ogv" type="video/ogv" />
        <source src="<?php echo $file; ?>.webm" type="video/webm" />
    </video>
    <div class="video-overlay">
    	<h3 class="title"><?php the_sub_field('titolo_video'); ?></h3>
    	<a href="#" class="icon-play"></a>
    </div>
</div>
<?php elseif (get_row_layout() == 'master') : ?>
	<div class="container master">
		<span class="pattern"></span>
		<span class="square"></span>
		<div class="master-content">
			<?php the_sub_field('testo_master'); ?>
		</div>
		<a href="<?php bloginfo('url'); ?>" class="logo">
			<span class="j"></span>
			<span class="j"></span>
		</a>
	</div>
<?php elseif (get_row_layout() == 'switcher') : ?>
	<figure class="face-swticher">
		<img src="<?php the_sub_field('immagine_destra'); ?>" class="back">
		<img src="<?php the_sub_field('immagine_sinistra'); ?>" class="front">
		<span class="dragger"></span>
	</figure>
<?php endif; ?>
</div>
<?php endwhile; ?>
</div>