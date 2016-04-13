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
                <tr>

                    <th>Position</th>
                    <th>Pseudo</th>
                    <th>Points</th>
                    <th>Nombre de parties</th>

                </tr>
                {{app('\App\Http\Controllers\ClassementController')->readScore()}}
            </table>
        </div>
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
@endsection

