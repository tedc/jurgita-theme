<?php use Roots\Sage\Titles; ?>
<?php if (!is_home()) {?>
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
<p class="breadcrumb" id="breadcrumbs">','</p>
');
    }
    ?>
<?php } ?>

