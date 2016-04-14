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
            $nouveauscore = $score_actuel + $score;
            DB::table('classement')
                ->where('pseudo', Auth::user()->pseudo)
                ->update(['score' => $nouveauscore]);
        } else {
            return response('Unauthorized','401');
        }
    }
    
}
