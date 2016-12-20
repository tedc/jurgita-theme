<?php use Roots\Sage\Titles; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<header class="page-header">
	<div class="cover"><?php the_post_thumbnail('full'); ?></div>
	<h1 class="title"><?= Titles\title(); ?></h1>
</header>