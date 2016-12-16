<div class="grid-4 grid-cols">
<?php while(have_rows('colonne')) : the_row(); ?>
<div class="col-2">
<?php if(get_row_layout() == 'testo') : ?>
	<div class="row-lg container content <?php echo (get_sub_field('testo_centrato')) ? ' aligncenter' : ''; ?>">
		<?php the_sub_field('contenuto'); ?>
	</div>
<?php elseif (get_row_layout() == 'immagine') : ?>
	<?php
		$img = get_sub_field('immagine');
		$colClass = (get_sub_field("full")) ? "full" : "container row-lg";
	?>
	<figure class="figure <?php echo $colClass ?>"<?php if(get_sub_field("full")) : ?> style="padding-top: <?php echo ( $img['height'] * 100 ) / $img['width']; ?>%"<?php endif ?>>
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
			<a href="<?php bloginfo('url'); ?>" class="logo">
				<span class="j">J</span>
				<span class="j">J</span>
			</a>
		</div>
	</div>
<?php elseif (get_row_layout() == 'switcher') : 
			$front = get_sub_field('immagine_destra');
			$back = get_sub_field('immagine_sinistra');
		?>
	<div class="switcher" style="padding-top:<?php echo ( $front['height'] * 100 ) / $front['width']; ?>%">		
		<div class="face-wrapper front">
			<img src="<?php echo $back['url']; ?>">
		</div>
		<div class="face-wrapper back">
			<img src="<?php echo $front['url']; ?>">
		</div>
		<span class="dragger">
			<i class="icon-drag"></i>
		</span>
	</div>
<?php endif; ?>
</div>
<?php endwhile; ?>
</div>