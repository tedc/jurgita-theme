<?php
/**
 * Template Name: Carrello Template
 */
?>
<?php use Roots\Sage\Titles; ?>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<h1 class="title"><?= Titles\title(); ?></h1>
<?php get_template_part('templates/content', 'page'); ?>
