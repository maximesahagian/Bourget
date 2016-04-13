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
                echo "<tr><td>".$i."</td>";
                echo "<td>".$user->username."</td>";
                echo "<td>".$user->score."</td></tr> <span class=\"separate\">...</span><div class=\"classet\">";
            }

            else{
                echo "<tr><td>".$i."</td>";
                echo "<td>".$user->username."</td>";
                echo "<td>".$user->score."</td></tr>";
            }
            $i++;
        }
    }

    public function index()
    {
        return view('classement');
    }


}
