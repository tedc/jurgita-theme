<?php if (has_post_thumbnail()) { ?>
    <div class="header" style="background-image: url('<?php header_image(); ?>')">
        <h1 class="header-title"><?php bloginfo('name'); ?> </h1>
        <h2 class="header-subtitle"><?php bloginfo('name'); ?></h2>
    </div>
<?php } ?>