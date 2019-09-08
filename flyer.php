<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>THE BUNKER EXPERIENCE</title>
    <meta name="description" content="The Bunker Experience is a real live escape game with a maze, set in a post-apocalyptic sci-fi world. Timing and teamwork are essential in order to complete the thrills and suspense filled mission.">
    <meta name="keywords" content="THE BUNKER, EXPERIENCE, GAME, REAL TIME, ESCAPE, PUZZLE, SURVIVE, HORROR, OLD, BASEMENT, HISTORICAL, PASADENA, OLD TOWN, HAUNTED HOUSE, HAUNTED, BUILDING, DAYS OF LIGHT, B'Z SHORTS, SCARY, SCARIEST, REAL, HISTORY, BANK, FAVORITE, BIGGEST, ALTADENA, GLENDALE, ALHAMBRA, ASUZA, SAN GABRIEL, LOS ANGELES, LOS FELIZ, SILVERLAKE, EAGLE ROCK, ECHO PARK, HIGHLAND PARK, GLASSELL PARK, EL MONTE, ARCADIA, MONROVIA, DUARTE, COVINA, WEST COVINA, GLENDORA, POMONA" />
    <meta name="robots" content="follow,index" />
    <meta name="viewport" id="viewport" content="width=1024">
    <meta property="og:title" content="THE BUNKER EXPERIENCE" />
    <meta property="og:description" content="The Bunker Experience is a real live escape game with a maze, set in a post-apocalyptic sci-fi world. Timing and teamwork are essential in order to complete the thrills and suspense filled mission." />
    <meta property="og:image" content="http://thebunkerexperience.com/assets/img/share.jpg" />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/video-js.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css?<?php echo time(); ?>" />

    <!-- JS -->
    <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/video.js"></script>
    <script type="text/javascript" src="assets/js/lib/greensock/minified/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/greensock/minified/plugins/CSSPlugin.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/greensock/minified/easing/EasePack.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js?<?php echo time(); ?>"></script>

    <script>
        videojs.options.flash.swf = "assets/js/lib/video-js.swf";
    </script>

</head>
<body>
    <div class="site_container">

        <div class="content_container">
            <br><br>
            <a href="index.php"><img src="assets/img/2018_scarezone.jpg"></a>

            <!--<br><br><br>
            <h4 style="color:#999999">MAZE WALK THROUGH VIDEO</h4>
            <video id="walkthrough_video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="720" height="480" data-setup="{}">
                <source src="assets/videos/walkthrough.mp4" type='video/mp4' />
                <source src="assets/videos/walkthrough.webm" type='video/webm' />
                <source src="assets/videos/walkthrough.ogv" type='video/ogg' />
            </video>-->
        </div>
        <br><br><br>

    </div>

    <!-- GOOGLE ANALYTICS -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '<?php echo $xml->google_analytics; ?>', 'auto');
    ga('send', 'pageview');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '2127891210769701');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2127891210769701&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</body>
</html>
