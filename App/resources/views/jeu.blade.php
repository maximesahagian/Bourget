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
    <a href="{{ action("ClassementController@index") }}"><button class="mid bt1" href="#first">Classement</button></a>
</section>


<section class="third">
    <button class="connexion">{{Auth::user()->pseudo}} <span>{{app('\App\Http\Controllers\JeuController')->getScore()}} </span></button>
    <img src="{{asset('img/people.png')}}" alt="">

    <a href="{{ action("ProfileController@index") }}"><button class="mid bt3" href="profile">Profil du pilote</button></a>
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