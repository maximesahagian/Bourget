<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Classement</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles_class.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
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
    <div class="statistiques">
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

    <div class="statistiques2">
        <div class="titre">Expérience & personnalisation</div>
        <div class="tableau">

            <div class="total">Score : {{app('\App\Http\Controllers\ProfileController')->getScore()}}</div>
            <div class="rang">Vous êtes <img class="rang_image" src="img/colonel.png" alt="">Colonel</div>
            <hr/>
            <h3>Autocollant de l'avion</h3>
            {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'files'=>true)) !!}
                    {!! Form::file('image') !!}
                    <p class="errors">{!!$errors->first('image')!!}</p>
                    @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                    @endif
            <div id="success"> </div>
            {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
            {!! Form::close() !!}
            <?php
                ?>
        </div>
    </div>


    <section class="first">
        <button class="connexion2">{{Auth::user()->pseudo}} <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
        <img src="{{asset('img/transport.png')}}" alt="">
        <button class="mid bt1">Décollage</button>
    </section>

</section>

<script>

    $( ".bt1" ).click(function() {
        window.location.href = "../jeu";
    });

</script>
</body>

</html>