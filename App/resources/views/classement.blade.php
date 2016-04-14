<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classement</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles_class.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/animsition.min.css')}}">
    <script src="{{asset('animsition.min.js')}}"></script>
</head>
<body>

<div class="transparence"></div>
<div class="video">
    <video class="classClassementVideo" src="{{asset('video/patrouilleFrance.mp4')}}" autoplay loop></video>
</div>
<a class="logoClassement" href=""><img src="{{asset('img/logo.png')}}" alt=""></a>
<section class="classement">
    <div class="leftClassement">
        <h1>
            Classement des pilotes :
        </h1>
        <table>
            <tr>

                <th>Position</th>
                <th>Pseudo</th>
                <th>Points</th>
                <th>Nombre de parties</th>

            </tr>
            {{app('\App\Http\Controllers\ClassementController')->readScore()}}
        </table>
    </div>

    <div class="rightClassement">
        <p><span> {{app('\App\Http\Controllers\ClassementController')->getFirsts(1)}}</span> est actuellement le meilleur pilote !
            Suivi de près par <span>{{app('\App\Http\Controllers\ClassementController')->getFirsts(2)}}</span> et
            <span>{{app('\App\Http\Controllers\ClassementController')->getFirsts(3)}}</span> !
        </p>
        <p class="place"><span>{{app('\App\Http\Controllers\ClassementController')->getRanking()}}</span></p>

        <p class="lots">Les lots à gagner sont:
            <br/>
            <br/>
            Pour le premier un vol parmis les meilleurs en AlphaJet.
            <br/>
            Pour les 50 premiers une place pour le Salon du Bourget 2017 qui se déroule du 19 ou 25 Juin 2017!</p>


    </div>
</section>
<section class="third animsition">
    <button class="connexion">{{Auth::user()->pseudo}} | <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
    <img src="{{asset('img/transport.png')}}" alt="">
    <button class="mid bt3">Décollage</button>
</section>

<script>

    $( ".bt3" ).click(function() {
        window.location.href = "../jeu";
    });

</script>

<script>
    $(document).ready(function() {
        $('.connexion').hide();
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
        setTimeout(function(){
            $('.connexion').fadeIn(2000);
        }, 1000);
    });</script>
</body>
</html>

