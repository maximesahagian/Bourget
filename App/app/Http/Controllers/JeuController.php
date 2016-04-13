<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

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
}
