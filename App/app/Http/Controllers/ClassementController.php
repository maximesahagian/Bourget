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

    public function read(){
        $users = DB::table('classement')->orderBy('score','desc')->get();
        $i = 1;
        foreach ($users as $user) {
            echo "<span style='margin-right: 20px;'>".$i."</span>";
            echo "<span style='margin-right: 20px;'>".$user->username."</span>";
            echo $user->score."<br>";
            $i++;
        }
    }

    public function index()
    {
        return view('classement');
    }


}
