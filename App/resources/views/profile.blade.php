@extends('layouts.app')

@section('content')
    <div class="profilVideo">
        <video class="classProfilVideo" src="{{asset('video/patrouilleFrance.mp4')}}" autoplay loop></video>
    </div>
    <div class="profil">
        Profil du pilote : <span class="gras">{{Auth::user()->pseudo}}</span>
    </div>
    <div class="photo"><img class="imgProfile" src="{{asset('img/'.app('\App\Http\Controllers\ProfileController')->getImgLink())}}" alt=""></div>
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
        <div class="points">
            <div class="total">Score : {{app('\App\Http\Controllers\ProfileController')->getScore()}}</div>
            <div class="rang">Vous êtes <img class="rang_image" src="{{asset('img/colonel.png')}}" alt="">Colonel</div>
        </div>
    </section>
@endsection