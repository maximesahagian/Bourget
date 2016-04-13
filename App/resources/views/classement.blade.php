@extends('layouts.app')

@section('content')
<div class="video">
    <video src="{{asset("video/patrouilleFrance.mp4")}}" autoplay loop></video>
</div>
<a class="logo" href=""><img src="{{asset("img/logo.png")}}" alt=""></a>
<section class="classement">
    <div class="left">
        <h1>
            Classement des pilotes :
        </h1>
        <nav class="barre">
            <ul class="menu">
                <li>Position</li>
                <li>Pseudo</li>
                <li>Point</li>
                <li>Nombre de parties</li>
            </ul>
        </nav>
        <div class="tableau">
            <nav>
                <div class="top">
                    {{app('App\Http\Controllers\ClassementController')->readScore()}}
                </div>

            </nav>
        </div>
    </div>
    <div class="right">
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

