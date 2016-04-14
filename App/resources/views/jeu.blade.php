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
    <script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
    <link rel="stylesheet" href="{{asset('css/animsition.min.css')}}">
    <script src="{{asset('animsition.min.js')}}"></script>
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
            width: 1200,
            height: 800,
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
            u.initPlugin(jQuery("#unityPlayer")[0], "{{asset('VoltiGO.unity3d')}}");
            function setName(name)
            {
                u.getUnity().SendMessage("Pseudo", "setName", name);
            }

            function setTexture(link) {
                u.getUnity().SendMessage("Autocollant", "SetTexture", link);
            }

            setTexture('{{asset('img/profile_pictures/'.app('\App\Http\Controllers\ProfileController')->getImgLink())}}');


            setName('{{Auth::user()->pseudo}}');
        });
        -->
    </script>
    <style type="text/css">
        <!--

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
            height: 100vh;
            width: 100vh;
        }
        -->
    </style>

</head>
<body>
<section class="first">
    <a href="{{ action("JeuController@logout") }}">
    <button class="connexion2"><span>Déconnexion</span></button>
    </a>
    <img class="" src="{{asset('img/signs.png')}}" alt="">
    <a href="{{ action("ClassementController@index") }}"><button class="mid bt1" href="#first">Classement</button></a>
</section>


<section class="third">
    <button class="connexion">{{Auth::user()->pseudo}} | <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
    <img class="" src="{{asset('img/people.png')}}" alt="">

    <a href="{{ action("ProfileController@index") }}"><button class="mid bt3" href="profile">Profil du pilote</button></a>
</section>

<section class="second" id="clear">
    <img src="{{asset('img/transport.png')}}" alt="">
    <button class="mid bt2" href="#first">Décollage</button>
</section>



<script>
    $(document).ready(function() {
        $(".animsition").animsition({
            inClass: 'fade-in-right-sm',
            outClass: 'fade-in--left-sm',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.animsition-link',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body',
            transition: function(url){ window.location.href = url; }
        });

        $(document).ready(function() {
            $(".animsition2").animsition({
                inClass: 'fade-in-left-sm',
                outClass: 'fade-in--right-sm',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [ 'animation-duration', '-webkit-animation-duration'],
                // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                overlay : false,
                overlayClass : 'animsition-overlay-slide',
                overlayParentElement : 'body',
                transition: function(url){ window.location.href = url; }
            });
        });
    });
    $( ".bt2" ).one( "click", function() {

                $( ".first").stop().animate({ "left": "-=10%"}, 800 );
        $( ".third").stop().animate({ "right": "-=10%"}, 800 );
    });


    $(document).ready(function(){
        $(".bt2").click(function(){
            $(".second").fadeOut()
        });

    });

</script>


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


<script type="text/javascript">
    function sendScore(score) {
        $.ajax({
            url: "score",
            type: "GET",
            data: {'score': score,'_token': $('#_token').val()},
            success: function (data) {
                console.log('Score modifié avec succès');
            }
        });
    }



</script>

</body>
</html>