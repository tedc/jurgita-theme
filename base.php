<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <main class="main" role="document">
      <?php include Wrapper\template_path(); ?>
      <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    </main>
  </body>
</html>
