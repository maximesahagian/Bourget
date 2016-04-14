<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }


    public function getCerceaux()
    {
        $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }
        else{
            echo $user->cerceauxTotal;
        }
    }

    public function getCerceauxTouch()
    {
        $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }
        else{
            echo $user->cerceauxTouch;
        }
    }


    public function getBestTime()
    {
        $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }
        else{
            echo $user->bestTime." secondes";
        }
    }


    public function getTotalTime()
    {
        $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }
        else{
            echo $user->timeTotal." secondes";
        }
    }


    public function getImgLink()
    {
        $user = DB::table('users')->where('pseudo',Auth::user()->pseudo)->first();
        return $user->imgLink;
    }

    public function getScore(){
        $user = DB::table('classement')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }
        else{
            echo "<span class=\"gras\">" .$user->score. "</span> points";
        }
    }

    public function getGrade(){
        $user = DB::table('classement')->where('pseudo',Auth::user()->pseudo)->first();
        $score = $user->score;


        if($score > 15000){
            echo "<img class=\"rang_image\" src=\"{{asset('img/colonel.png')}}\" alt=\"\">Colonel";
        }

        else if($score > 10000){
            echo "<img class=\"rang_image\" src=\"{{asset('img/colonel.png')}}\" alt=\"\">Lieutenant";
        }

        //<img class="rang_image" src="{{asset('img/colonel.png')}}" alt="">Colonel


    }

}
