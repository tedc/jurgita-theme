<?php use Roots\Sage\Titles; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<header class="page-header<?php echo get_field('black_header') ? ' page-header--black' : ''; ?>">
	<?php if( is_page() && is_page_template('template-custom.php')) : if(!get_field('black_header')) : get_template_part( 'templates/header', 'video' );  endif; endif; ?>
	<?php if(!is_front_page()) : ?>
	<h1 class="title"><?php 
	if (is_post_type_archive('product')) {
    echo get_post_type_object( 'product' )->labels->name;
  } else{
  	Titles\title();} ?></h1>
	<?php if(get_field('sottotitolo')) : ?>
	<h2 class="subtitle"><?php the_field('sottotitolo'); ?></h2>
	<?php endif; ?>
	<?php else : ?>
	<?php 
		$name = explode(' ', get_bloginfo('name'));
		//$description = explode('&', get_bloginfo( 'description') );
		$description = preg_split('/(&|,)/', get_bloginfo( 'description') );
		$about = get_field('about');
		$i = 1;
		$h1 = '<h1 class="title">';
		foreach ($name as $n) {
			$str = '';
			for($c = 0; $c<strlen($n); $c++) {
				$str .= '<span class="letter">'.$n[$c].'</span>';
			}
			$h1 .= ($i < count($name)) ? $str . '<br>' : $str . '</h1>';
			$i++;
		}
		echo '<div class="page-header-top"><h1 style="display:none">jurgita jasiunaite</h1>'.$h1;
		echo '<h2 class="subtitle">' .$description[0].',<br/>'.$description[1].'<br/>&'.$description[2].'</h2></div>';
		if($about) :
			echo '<div class="page-header-bottom"><a class="btn-reverse" href="'.get_permalink($about).'">'.get_the_title( $about ).'</a><a href="#site" class="scroll-to"><i class="icon-scroll-mouse"></i><span class="scroll-circle scroll-anim"></span><span class="scroll-circle scroll-anim"></span><span class="scroll-circle scroll-anim"></span><i class="icon-arrow-down scroll-anim"></i></a></div>';
		endif;
	?>
	<?php the_post_thumbnail( 'full' ); ?>

	<?php endif; ?>
</header>
<?php echo (is_front_page()) ? '<div id="site"></div>' : ''; ?>
