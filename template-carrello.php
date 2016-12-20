<?php
/**
 * Template Name: Carrello Template
 */
?>
<?php use Roots\Sage\Titles; ?>

<?php get_template_part('templates/breadcrumbs'); ?>
<div class="container">
<h1 class="title"><?= Titles\title(); ?></h1></div>
<?php get_template_part('templates/content', 'page'); ?>
