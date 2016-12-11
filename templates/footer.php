<footer class="footer">
    <div class="container-footer">
        <h2><?php bloginfo("name"); ?></h2>
        <div class="bottom-footer">
            <?php dynamic_sidebar('sidebar-footer'); ?>
            <section class="widget">
                <?php wp_nav_menu( array( 'menu' => 'menu footer' ) );?>
            </section>
            <section class="widget widget_img">
                <?php _e('Credits', 'jurgita'); ?><a class="icon-credits" target="_blank" rel="nofollow"
                                                     href="http://www.bspkn.it/"></a>
            </section>
        </div>
    </div>
</footer>
