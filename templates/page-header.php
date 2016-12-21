<?php use Roots\Sage\Titles; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<header class="page-header">
	<?php if(!is_home() || !is_archive() || !is_post_type_archive()) : get_template_part( 'templates/header', 'video' ); endif; ?>
	<?php if(!is_front_page()) : ?>
	<h1 class="title"><?= Titles\title(); ?></h1>
	<?php if(get_field('sottotitolo')) : ?>
	<h2 class="subtitle"><?php the_field('sottotitolo'); ?></h2>
	<?php endif; ?>
	<?php else : ?>
	<?php 
		$name = explode(' ', get_bloginfo('name'));
		$description = explode('&', get_bloginfo( 'description') );
		$about = get_field('about');
		$i = 1;
		$h1 = '<h1 class="title">';
		foreach ($name as $n) {
			$h1 .= ($n < count($name)) ? $n . '<br>' : $n . '</h1>';
			$i++;
		}
		echo '<div class="page-header-top">'.$h1;
		echo '<h2 class="subtitle">' .$description[0].'<br/>&'.$description[1].'</h2></div>';
		if($about) :
			echo '<div class="page-header-bottom"><a class="btn-reverse" href="'.get_permalink($about).'">'.get_the_title( $about ).'</a><a href="#site" class="icon-scroll"></a></div>';
		endif;
	?>
	<?php the_post_thumbnail( 'full' ); ?>

	<?php endif; ?>
</header>
