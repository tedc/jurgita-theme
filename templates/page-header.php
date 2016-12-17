<?php use Roots\Sage\Titles; ?>
<header class="page-header">
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
		echo $h1;
		echo '<h2 class="subtitle">' .$description[0].'<br/>&'.$description[1].'</h2>';
		if($about) :
			echo '<div class="page-header-bottom"><a class="btn-reverse" href="'.get_permalink($about).'">'.get_the_title( $about ).'</a><a href="#site" class="icon-scroll"></a></div>';
		endif;
	?>

	<?php endif; ?>
</header>
