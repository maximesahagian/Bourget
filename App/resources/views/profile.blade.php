<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil | {{Auth::user()->pseudo}}</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles_class.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/animsition.min.css')}}">
    <script src="{{asset('animsition.min.js')}}"></script>
</head>

<body>
<div class="transparence"></div>
<div class="profilVideo">
    <video class="classProfilVideo" src="{{asset('video/patrouilleFrance.mp4')}}" autoplay></video>
</div>

<div class="photo">
    <div class="profil">
        Profil du pilote : <span class="gras">{{Auth::user()->pseudo}}</span>
    </div><img src="{{asset('img/profile_pictures/'.app('\App\Http\Controllers\ProfileController')->getImgLink())}}" alt=""></div>
<section class="resultats">
    <div class="statistiques animsition">
        <div class="titre">Statistiques</div>
        <div class="tableau">
            <ul>
                <li>Cerceaux Franchis : {{app('\App\Http\Controllers\ProfileController')->getCerceaux()}}</li>
                <li>Cerceaux Touchés : {{app('\App\Http\Controllers\ProfileController')->getCerceauxTouch()}}</li>
                <li>Meilleur Temps : {{app('\App\Http\Controllers\ProfileController')->getBestTime()}}</li>
                <li>Temps Total Passé : {{app('\App\Http\Controllers\ProfileController')->getTotalTime()}}</li>
            </ul>
        </div>
    </div>

    <div class="statistiques2 animsition">
        <div class="titre">Expérience & personnalisation</div>
        <div class="tableau">

            <div class="total">Score : {{app('\App\Http\Controllers\ProfileController')->getScore()}}</div>
            <div class="rang">Vous êtes : {{app('\App\Http\Controllers\ProfileController')->getGrade()}}</div>
            <div class="rang">{{app('\App\Http\Controllers\ProfileController')->getScoreManquant()}}</div>
            <hr/>
            <h3>Sticker de l'avion</h3>
            <div class="about-section">
                <div class="text-content">
                    <div class="span7 offset1">
                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h2 style="color: green">{!! Session::get('success') !!}</h2>
                            </div>
                        @endif
            {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
                    {!! Form::file('image') !!}
                    <p class="errors">{!!$errors->first('image')!!}</p>
                    @if(Session::has('error'))
                        <p class="errors" style="color: red;">{!! Session::get('error') !!}</p>
                    @endif
            <div id="success"> </div>
            {!! Form::submit("Modifier l'image", array('class'=>'send-btn')) !!}
            {!! Form::close() !!}
            <?php
                ?>
        </div>
    </div>

</section>
<button class="connexion2">{{Auth::user()->pseudo}} | <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
    <section class="first animsition2">
        <img src="{{asset('img/transport.png')}}" alt="">
        <button class="mid bt1">Décollage</button>
    </section>


<script>

    $( ".bt1" ).click(function() {
        window.location.href = "../jeu";
    });

    $(document).ready(function() {
        $('.connexion2').hide();
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
            $('.connexion2').fadeIn(1000);
        }, 1000);
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
</script>



</body>

</html>