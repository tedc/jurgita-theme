<div class="container facebook row-lg">
    <span class="pattern"></span>
    <span class="square"></span>
    <div class="gray-square"></div>
    <div class="like-content">
        <?php
        $fb_page = '1574408442879997';
        $access_token = '';
        $url = "https://graph.facebook.com/v2.2/".$fb_page.'?access_token='.$access_token;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        curl_close($curl);
        $details = json_decode($result,true);
       /* echo "Likes:".$details['likes']*/;
        ?>
        <p class="title">196847 LIKE</p>
        <span class="like">
            <img class="facebook-like" href="<?php get_stylesheet_directory_uri() . '/assets/images/like.svg' ?>">
        </span>
        <a href="<?php bloginfo('url'); ?>" class="logo">
            <span class="j">J</span>
            <span class="j">J</span>
        </a>
        <a class="btn-social" href="<?php echo get_option("wpseo_social")["facebook_site"] ?>" target="_blank"><?php _e('Diventa fan', 'jurgita') ?></a>
    </div>
    <figure>
        <img src=<?php echo get_option("wpseo_social")["og_default_image"] ?>>
    </figure>
</div>