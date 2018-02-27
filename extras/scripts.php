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
            lang: "it",
            banner : {
                applyStyles: false
            }
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
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1852620958285829'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1852620958285829&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script id="_agile_min_js" async type="text/javascript" src="https://d1gwclp1pmzk26.cloudfront.net/agile/agile-cloud.js"> </script>
<script type="text/javascript" >
var Agile_API = Agile_API || {}; Agile_API.on_after_load = function(){
_agile.set_account('52h2ls3vu6tlbu9r24sb4o9u0h', 'jurgita');
_agile.track_page_view();
_agile_execute_web_rules();};
</script>

    <?php
}
add_action('wp_footer', 'vars'); ?>
<?php
add_action('wp_head', 'add_googleanalytics');
function add_googleanalytics()
{ ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89597435-1', 'auto');
        ga('send', 'pageview');
        (function(a,e,c,f,g,h,b,d){var k={ak:"971975964",cl:"-f7sCMj9snMQnNq8zwM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
        var phone_callback = function(formatted_number, mobile_number) {
  // formatted_number: numero da visualizzare, con la stessa formattazione
  var numbers = document.querySelectorAll(".phone-number");
    for(var i = 0; i < numbers.length; i++){
        numbers[i].href = "tel:" + mobile_number;
        numbers[i].innerHTML = "";
        numbers[i].appendChild(document.createTextNode(formatted_number));
    }
};

    </script>
<?php } 

// function insert_jquery(){
//     wp_enqueue_script('jquery', false, array(), false, false);
// }
// add_filter('wp_head','insert_jquery',1); ?>