<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function readScore(){
        $users = DB::table('classement')->orderBy('score','desc')->get();
        $i = 1;
        foreach ($users as $user) {
            if($i == 3){
                echo "<tr><td>".$i."</td>";
                echo "<td>".$user->pseudo."</td>";
                echo "<td>".$user->score."</td>";
                echo "<td>".$user->nb_parties."</td></tr> <tr style='margin-bottom: 10px;'><td><span class=\"separate\">...</span><div class=\"classet\"></td><td></td><td></td></tr> ";
            }

            else{
                echo "<tr><td>".$i."</td>";
                echo "<td>".$user->pseudo."</td>";
                echo "<td>".$user->score."</td>";
                echo "<td>".$user->nb_parties."</td></tr>";
            }
            $i++;
        }
    }


    public function getFirsts($n){
        $users = DB::table('classement')->orderBy('score','desc')->take($n)->get()[$n-1];
        return($users->pseudo);
    }

    public function getRanking(){
        $users = DB::table('classement')->orderBy('score','desc')->get();
        $i = 1;
        $pseudoAuth = Auth::user()->pseudo;
        $user = DB::table('classement')->where('pseudo',$pseudoAuth)->first();

        if($user == null){
            echo "Vous n'êtes actuellement pas classé";
        }

        else{
            foreach($users as $user){
                if($user->pseudo == $pseudoAuth){
                    if($i == 1){
                        echo "Vous êtes <span>".$i."er</span>, bravo";
                    }

                    else{
                        echo "Vous êtes <span>".$i."ème</span>, bravo";
                    }
                }

                $i++;
            }
        }
    }

    public function index()
    {
        return view('classement');
    }


}
