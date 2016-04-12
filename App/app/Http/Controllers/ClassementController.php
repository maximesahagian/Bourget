<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
                echo "<ul class='infos'><li>".$i."</li>";
                echo "<li>".$user->username."</li>";
                echo "<li>".$user->score."</li> </ul></div> <span class=\"separate\">...</span><div class=\"classet\">";
            }

            else{
                echo "<ul class='infos'><li>".$i."</li>";
                echo "<li>".$user->username."</li>";
                echo "<li>".$user->score."</li></ul>";
            }
            $i++;
        }
    }

    public function index()
    {
        return view('classement');
    }


}
