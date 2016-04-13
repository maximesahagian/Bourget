@extends('layouts.app')

@section('content')
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
                {{app('\App\Http\Controllers\ClassementController')->readScore()}}
            </table>
        </div>
        </div>
        <div class="rightClassement">
            <p><span>Lumi</span> est actuellement le meilleur pilote !
                Suivi de près par <span>Wladouche</span> et <span>Delmousse</span> !
            </p>
            <p class="place">Vous êtes <span>175eme</span>, bravo !</p>

            <p class="lots">Les lots à gagner sont:
                <br/>
                <br/>
                Pour le premier un vol parmis les meilleurs en AlphaJet.
                <br/>
                Pour les 50 premiers une place pour le Salon du Bourget 2017 qui se déroule du 19 ou 25 Juin 2017!</p>






        </div>
    </section>
@endsection

