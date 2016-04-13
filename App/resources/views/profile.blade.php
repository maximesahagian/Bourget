@extends('layouts.app')

@section('content')
    <div class="profilVideo">
        <video class="classProfilVideo" src="{{asset('video/patrouilleFrance.mp4')}}" autoplay></video>
    </div>
    <div class="profil">
        Profil du pilote : <span class="gras">{{Auth::user()->pseudo}}</span>
    </div>
    <div class="photo"><img src="{{asset('img/wlad.png')}}" alt=""></div>
    <section class="resultats">
        <div class="statistiques">
            <div class="titre">Statistiques</div>
            <div class="tableau">
                <ul>
                    <li>Cerceaux Franchis : 257</li>
                    <li>Cerceaux Touchés : 127</li>
                    <li>Meilleur Temps : 27''</li>
                    <li>Temps Total Passé : 2h57</li>
                </ul>
            </div>
        </div>
        <div class="points">
            <div class="total">Score : <span class="gras">159999999</span> points</div>
            <div class="rang">Vous êtes <img class="rang_image" src="{{asset('img/colonel.png')}}" alt="">Colonel</div>
        </div>
    </section>
@endsection