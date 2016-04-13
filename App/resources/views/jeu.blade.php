<<<<<<< Updated upstream
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity Web Player | Simulateur_voltige</title>
    <script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
    <script type="text/javascript">
        <!--
        var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
        if (document.location.protocol == 'https:')
            unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
        document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
        -->
    </script>
    <script type="text/javascript">
        <!--
        var config = {
            width: 960,
            height: 600,
            params: { enableDebugging:"0" }

        };
        var u = new UnityObject2(config);

        jQuery(function() {

            var $missingScreen = jQuery("#unityPlayer").find(".missing");
            var $brokenScreen = jQuery("#unityPlayer").find(".broken");
            $missingScreen.hide();
            $brokenScreen.hide();

            u.observeProgress(function (progress) {
                switch(progress.pluginStatus) {
                    case "broken":
                        $brokenScreen.find("a").click(function (e) {
                            e.stopPropagation();
                            e.preventDefault();
                            u.installPlugin();
                            return false;
                        });
                        $brokenScreen.show();
                        break;
                    case "missing":
                        $missingScreen.find("a").click(function (e) {
                            e.stopPropagation();
                            e.preventDefault();
                            u.installPlugin();
                            return false;
                        });
                        $missingScreen.show();
                        break;
                    case "installed":
                        $missingScreen.remove();
                        break;
                    case "first":
                        break;
                }
            });
            u.initPlugin(jQuery("#unityPlayer")[0], "VoltiGO.unity3d");
        });
        -->
    </script>
    <style type="text/css">
        <!--
        body {
            font-family: Helvetica, Verdana, Arial, sans-serif;
            background-color: white;
            color: black;
            text-align: center;
        }
        a:link, a:visited {
            color: #000;
        }
        a:active, a:hover {
            color: #666;
        }
        p.header {
            font-size: small;
        }
        p.header span {
            font-weight: bold;
        }
        p.footer {
            font-size: x-small;
        }
        div.content {
            margin: auto;
            width: 960px;
        }
        div.broken,
        div.missing {
            margin: auto;
            position: relative;
            top: 50%;
            width: 193px;
        }
        div.broken a,
        div.missing a {
            height: 63px;
            position: relative;
            top: -31px;
        }
        div.broken img,
        div.missing img {
            border-width: 0px;
        }
        div.broken {
            display: none;
        }
        div#unityPlayer {
            cursor: default;
            height: 600px;
            width: 960px;
        }
        -->
    </style>
</head>
<body>
<p class="header"><span>Unity Web Player | </span>Simulateur_voltige</p>
<div class="content">
    <div id="unityPlayer">
        <div class="missing">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
                <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
            </a>
        </div>
        <div class="broken">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
                <img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
            </a>
        </div>
    </div>
</div>
<p class="footer">&laquo; created with <a href="http://unity3d.com/unity/" title="Go to unity3d.com">Unity</a> &raquo;</p>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bourget d'en haut | Gagnez de la hauteur pour le salon du Bourget</title>
    <meta name="description" content="A l’occasion du 52ème salon international de l’aeronautique et de l’espace participez à l’opération Bourget d’en haut en partenariat avec la Patrouille de France.
    Vivez l’expérience des meileurs pilotes de l’Armée de l’air et tentez de gagner un vol en alphajet, des places pour le 52ème Salon du Bourget ainsi que des centaines d’autres cadeaux à gagner.">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_game.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
<section class="first">
    <img src="{{asset('img/signs.png')}}" alt="">
    <button class="mid bt1" href="#first">Classement</button>
</section>


<section class="third">
    <button class="connexion">{{Auth::user()->pseudo}} <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
    <img src="{{asset('img/people.png')}}" alt="">
    <button class="mid bt3">Profil du pilote</button>
</section>

<section class="second" id="clear">
    <img src="{{asset('img/transport.png')}}" alt="">
    <button class="mid bt2" href="#first">Décollage</button>
</section>

<script>

    $( ".bt2" ).click(function() {
        $( ".first").stop().animate({ "left": "-=9%"}, 800 );
        $( ".third").stop().animate({ "right": "-=9%"}, 800 );
    });
    $(document).ready(function(){
        $(".bt2").click(function(){
            $(".second").fadeOut()
        });
    });
</script>




</body>
</html>
>>>>>>> Stashed changes
