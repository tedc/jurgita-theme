<?php global $sitepress; ?>
<footer class="footer">
    <div class="container-footer container">
        <h2><?php bloginfo("name"); ?></h2>
        <div class="bottom-footer">
            <?php dynamic_sidebar('sidebar-footer'); ?>
            <section class="menu-footer">
                <?php if(ICL_LANGUAGE_CODE == $sitepress->get_default_language()) : wp_nav_menu( array( 'menu' => 'menu footer',
                    'menu_class' => 'menu-container') );
                wc_accepted_payment_methods(); endif; ?>

            </section>
            <section class="widget widget_img">
                <?php _e('Credits', 'jurgita'); ?><a class="icon-credits" target="_blank" rel="nofollow"
                                                     href="http://www.bspkn.it/"></a>
            </section>
        </div>
    </div>
</footer>
<div id="jurgita_5759180434571264" class="agile_crm_form_embed"><span style="display:none">Fill out my <a href="https://jurgita.agilecrm.com/forms/5759180434571264">online form</a></span></div>