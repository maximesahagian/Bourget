<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class JeuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getScore(){
        $user = DB::table('classement')->where('pseudo',Auth::user()->pseudo)->first();
        if($user == null){
            echo "<span class=\"gras\">Non classé</span>";
        }

        else{
            echo "<span class=\"gras\">" .$user->score. "</span> pts";
        }
    }

    public function index()
    {
        return view('jeu');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function simulator(){
        return view('simulator');
    }

    public function setScore()
    {
        if (Auth::check())
        {
            $score =  Input::get('score');
            $user = DB::table('classement')->where('pseudo',Auth::user()->pseudo)->first();
            $score_actuel = $user->score;
            $nb_parties = $user->nb_parties;
            $new_nb_parties = $nb_parties + 1;
            $nouveauscore = $score_actuel + $score;
            DB::table('classement')
                ->where('pseudo', Auth::user()->pseudo)
                ->update(['score' => $nouveauscore]);
            DB::table('classement')
                ->where('pseudo', Auth::user()->pseudo)
                ->update(['nb_parties' => $new_nb_parties]);
        } else {
            return response('Unauthorized','401');
        }
    }

    public function setTime()
    {
        if (Auth::check())
        {
            $time =  Input::get('time');
            $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
            $bestTime = $user->bestTime;
            $timeTotal = $user->timeTotal;
            $newTimeTotal = $timeTotal + $time;
            
            if($time < $bestTime){
                DB::table('game')
                    ->where('pseudo', Auth::user()->pseudo)
                    ->update(['bestTime' => $time]);

                DB::table('game')
                    ->where('pseudo', Auth::user()->pseudo)
                    ->update(['timeTotal' => $newTimeTotal]);
            }

            else{
                DB::table('game')
                    ->where('pseudo', Auth::user()->pseudo)
                    ->update(['timeTotal' => $newTimeTotal]);
            }

        } else {
            return response('Unauthorized','401');
        }
    }

    public function setLife()
    {
        if (Auth::check())
        {
            $life =  Input::get('life');
            $user = DB::table('game')->where('pseudo',Auth::user()->pseudo)->first();
            $cerceauxTotal = $user->cerceauxTotal;
            $newCerceauxTotal = $cerceauxTotal + 11;

            $cerceauT = 3-$life;

            $newCerceauxTouch = $user->cerceauxTouch + $cerceauT;


            DB::table('game')
                ->where('pseudo', Auth::user()->pseudo)
                ->update(['cerceauxTotal' => $newCerceauxTotal]);

            DB::table('game')
                ->where('pseudo', Auth::user()->pseudo)
                ->update(['cerceauxTouch' => $newCerceauxTouch]);

        } else {
            return response('Unauthorized','401');
        }
    }
}
