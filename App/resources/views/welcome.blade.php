@extends('layouts.app')

@section('content')


    <section id="premierePage">
        <div class="transparence"></div>
        <div class="homeVideo">
            <video class="classHomeVideo" src="{{asset('video/patrouilleFrance.mp4')}}" autoplay loop></video>
        </div>

        <img class="fondBlanc" src="{{asset('img/fondBlanc.png')}}" alt="">
        <a class="envol" href="">Envolez-vous</a>
        <a class="logo" href=""><img src="{{asset('img/logo.png')}}" alt=""></a>
        <h1>Gagnez de la hauteur pour le salon du bourget</h1>
        <div class="texteHeader">
            A l’occasion du <span>52ème salon international de l’aeronautique et de l’espace</span> participez à l’opération Bourget d’en haut en partenariat avec la Patrouille de France.
            Vivez l’expérience des meileurs pilotes de l’Armée de l’air et tentez de gagner un vol en alphajet, des places pour le 52ème Salon du Bourget ainsi que des centaines d’autres cadeaux à gagner.
            <!--Modif-->
            <a class="jouer jouer--isi jouer__icon" href="{{ action("JeuController@index") }}">Acceder au jeu</a>
            <!--FinModif-->
        </div>
        <a href="#salon">
            <div class="scrollez">Scrollez pour en apprendre plus</div>
        </a>


        <nav>
            <ul>
                <li><a href="#salon" class="premierLi">Le salon du bourget</a></li>
                <li><a href="#patrouille" class="secondLi">La paf</a></li>
            </ul>
        </nav>
        <img class ="hoverBleu" src="{{asset('img/hoverBleu.png')}}" alt="">
        <img class ="hoverBlanc" src="{{asset('img/navSalon.png')}}" alt="">
        <img class ="fondPafBlanc" src="{{asset('img/fondPafBlanc.png')}}" alt="">
        <img class ="fondPafBleu" src="{{asset('img/fondPafBleu.png')}}" alt="">
    </section>
    <section id="salon">
        <div class="gauche">
            <h2>Le Salon du Bourget</h2>
            <div class="description">
                Le Salon International de l’Aéronautique et de l’Espace est organisé par le SIAE, filiale du Groupement des Industries Françaises Aéronautiques et
                Spatiales (GIFAS).

                La 52e  édition du salon aura lieu au Parc des Expositions du Bourget du <span>19
            au 25 juin 2017</span> et réunira de nouveau l’ensemble des acteurs de l’industrie
                mondiale autour des dernières innovations technologiques. Les 4 premiers jours du salon seront réservés aux professionnels suivis de 3 jours pour le Grand Public.
            </div>
        </div>
        <div class="droite">
            <img src="{{asset('img/jolieforme.png')}}" alt="">
        </div>
    </section>
    <section id="presentation">
        <div class="gauche">
            <img src="{{asset('img/garcon.png')}}" alt="">
        </div>
        <div class="droite">
            <h2>Les présentations aériennes</h2>
            <div class="description">
                A chaque édition du Salon, près de 150 aéronefs sont présentés aux visiteurs.
                Parmi ces aéronefs, une partie effectue des présentations en vol quotidiennes chaque après-midi.
                Toujours spectaculaires, souvent étonnantes, les présentations aériennes constituent un des moments forts du Salon et permettent aux exposants de montrer leur savoir-faire technologique et aux visiteurs de découvrir les dernières nouveautés en la matière.
            </div>
        </div>
    </section>
    <section class="video">
        <iframe src="https://player.vimeo.com/video/65643033?autoplay=1&title=0&byline=0&portrait=0" width="100%" height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </section>
    <section id="patrouille">
        <h2>La Patrouille de France - PAF</h2>
        <div class="description">
            La première boucle est réalisée par Adolphe Pégoud à bord de son Blériot XI au mois de septembre 1913. Elle préfigurait l’art de l’acrobatie aérienne.

            Mais ce sont les pilotes, initiés à l’art d’évoluer dans la troisième dimension à partir de la première guerre mondiale, qui donneront naissance au vol en patrouille !

            Nous ne pouvions pas aborder l’histoire de notre prestigieuse formation sans rendre un vibrant hommage aux pères de la Patrouille de France, nos aînés qui nous ont légué l’esprit et les traditions de la grande Dame.

            Jean Vilain, ailier du commandant Delachenal, leader de la patrouille 1953, nous confie que « Le vol en patrouille réclamait une synchronisation parfaite jusqu’à incarner l’élégance par un vol harmonieux et majestueux ».
        </div>
        <!-- Modif   -->
        <a href=""><button  class="button button--isi button__icon" style="width: 300px;">Visitez le site de la paf
                <!-- FinModif  -->
                <object class="chaine" type="image/svg+xml" data="{{asset('img/chaine.svg')}}" width="20" height="auto">
                </object>
            </button></a>
    </section>
    <footer>
        <h2>S'inscrire à la newsletter</h2>
        {!! Form::open(array('action' => 'NewsletterController@insert')) !!}
        <input type="email" style="width: 200px;margin-left: 15%;" name="email" placeholder="Saisissez votre adresse mail">
        <input type="image" style="width: 26px; vertical-align: top; position: relative; margin-top: 27px; margin-left: 10px;" name="submit" src="{{asset("img/play.png")}}" border="0" alt="Submit" />
        <span class="barre" style="display: block;"></span>
        {!! Form::close() !!}
        <nav>
            <ul>
                <li><a href="">TOUS DROITS RÉSERVÉS ©2016 BOURGET D’EN HAUT</a></li>
                <li><a href="">REGLEMENT</a></li>
                <li><a href="">MENTIONS LEGALES</a></li>
            </ul>
        </nav>
        <a class="logo" href="#premierePage"><img src="{{asset('img/logo.png')}}" alt=""></a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

    <script>
        $('.hoverBleu').mouseenter(function(){
            $('.hoverBleu').css({
                "opacity" : "1"
            });
            $('.premierLi').css({
                "color":"white"
            });
        });
        $('.hoverBleu').mouseleave(function(){
            $('.hoverBleu').css({
                "opacity" : "0"
            });
            $('.premierLi').css({
                "color":"#1b87de"
            });
        });


        $('.fondPafBleu').mouseenter(function(){
            $('.fondPafBleu').css({
                "opacity" : "1"
            });
            $('.secondLi').css({
                "color":"white"
            });
        });
        $('.fondPafBleu').mouseleave(function(){
            $('.fondPafBleu').css({
                "opacity" : "0"
            });
            $('.secondLi').css({
                "color":"#1b87de"
            });
        });
    </script>

    <script>
        $('a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");

            $('html, body').animate({
                scrollTop:$(the_id).offset().top
            }, 'slow');
            return false;
        });
    </script>
    <!--Modif-->
    <script>
        $('.premierLi').mouseenter(function(){
            $('.hoverBleu').css({
                "opacity" : "1"
            });
            $('.premierLi').css({
                "color":"white"
            });
        });
        $('.premierLi').mouseleave(function(){
            $('.hoverBleu').css({
                "opacity" : "0"
            });
            $('.premierLi').css({
                "color":"#1b87de"
            });
        });

        $('.secondLi').mouseenter(function(){
            $('.fondPafBleu').css({
                "opacity" : "1"
            });
            $('.secondLi').css({
                "color":"white"
            });
        });
        $('.secondLi').mouseleave(function(){
            $('.fondPafBleu').css({
                "opacity" : "0"
            });
            $('.secondLi').css({
                "color":"#1b87de"
            });
        });

    </script>

<script>
<?php
        use Illuminate\Support\Facades\Auth;
        if (Auth::guest()){
            ?>
$('.envol').click(function() {

});
<?php
        }
    else{
?>
        $('.envol').click(function() {
            $(".envol").attr("href", "jeu")
        });
<?php
    }?>

    $('.premierLi').mouseenter(function(){
    $('.hoverBleu').css({
        "opacity" : "1"
    });
    $('.premierLi').css({
        "color":"white"
    });
});
$('.premierLi').mouseleave(function(){
    $('.hoverBleu').css({
        "opacity" : "0"
    });
    $('.premierLi').css({
        "color":"#1b87de"
    });
});

$('.secondLi').mouseenter(function(){
    $('.fondPafBleu').css({
        "opacity" : "1"
    });
    $('.secondLi').css({
        "color":"white"
    });
});
$('.secondLi').mouseleave(function(){
    $('.fondPafBleu').css({
        "opacity" : "0"
    });
    $('.secondLi').css({
        "color":"#1b87de"
    });
});

</script>

@endsection

