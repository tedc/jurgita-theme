<?php if (has_post_thumbnail()) { ?>
    <div class="header" style="background-image: url('<?php header_image(); ?>')">
        <span class="header-text"><?php get_bloginfo() ?></span></div>
<?php }