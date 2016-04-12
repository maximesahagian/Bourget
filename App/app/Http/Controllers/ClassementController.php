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
            echo "<div style='margin-right: 20px; display: inline-block; width: 100px;'>".$i."</div>";
            echo "<div style='margin-right: 20px; display: inline-block; width: 150px;'>".$user->username."</div>";
            echo "<div style='margin-right: 20px; display: inline-block; width: 100px;'>".$user->score."</div> <br>";
            $i++;
        }
    }

    public function index()
    {
        return view('classement');
    }


}
