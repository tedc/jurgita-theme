<?php
function vars()
{
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        var WebFontConfig = {
            typekit: {
                id: 'qse6jbb'
            },
            google: {
                families: ['Noto Sans:400,400italic,700,700italic', 'Noto Serif:400']
            }
        };
        WebFont.load(WebFontConfig);
        // (function(d) {
        // 	var wf = d.createElement('script'), s = d.scripts[0];
        // 	wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
        // 	s.parentNode.insertBefore(wf, s);
        // })(document);
        var isMobile = <?php echo (is_handheld()) ? 'true' : 'false'; ?>;
    </script>
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            cookiePolicyId: 7991549,
            siteId: 686446,
            lang: "it"
        };
    </script>
    <script type="text/javascript" src="//cdn.iubenda.com/cookie_solution/safemode/iubenda_cs.js" charset="UTF-8"
            async></script>

    <!-- Hotjar Tracking Code for www.jurgitajasiunaite.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:385165,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>



    <?php
}
add_action('wp_footer', 'vars'); ?>
<?php
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics()
{ ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89597435-1', 'auto');
        ga('send', 'pageview');

    </script>
<?php } ?>