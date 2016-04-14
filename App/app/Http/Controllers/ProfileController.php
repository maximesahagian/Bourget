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
        $path_grades = asset("img/grades/");


        if($score >= 100000){
            echo "<img class=\"rang_image\" src='".$path_grades."/colonel.png'>Colonel";
        }

        else if($score >= 90000){
            echo "<img class=\"rang_image\" src='".$path_grades."/lieutenant_colonel.png'>Lt. Colonel";
        }

        else if($score >= 80000){
            echo "<img class=\"rang_image\" src='".$path_grades."/commandant.png'>Commandant";
        }

        else if($score >= 70000){
            echo "<img class=\"rang_image\" src='".$path_grades."/capitaine.png'>Capitaine";
        }

        else if($score >= 60000){
            echo "<img class=\"rang_image\" src='".$path_grades."/lieutenant.png'>Lieutenant";
        }

        else if($score >= 50000){
            echo "<img class=\"rang_image\" src='".$path_grades."/sous_lieutenant.png'>Sous Lieutenant";
        }

        else if($score >= 40000){
            echo "<img class=\"rang_image\" src='".$path_grades."/aspirant.png'>Aspirant";
        }
        else if($score >= 30000){
            echo "<img class=\"rang_image\" src='".$path_grades."/major.png'>Major";
        }
        else if($score >= 20000){
            echo "<img class=\"rang_image\" src='".$path_grades."/adjudantc.png'>Adujdant Chef";
        }
        else if($score >= 10000){
            echo "<img class=\"rang_image\" src='".$path_grades."/adjudant.png'>Adujdant";
        }
        else if($score >= 5000){
            echo "<img class=\"rang_image\" src='".$path_grades."/sergent_chef.png'>Sergent Chef";
        }

        else if($score >= 1000){
            echo "<img class=\"rang_image\" src='".$path_grades."/sergent_carriere.png'>Sergent Major";
        }

        else if($score >= 0){
            echo "<img class=\"rang_image\" src='".$path_grades."/sergent.png'>Sergent";
        }

        else if($score < 0){
            echo "Noobie";
        }



    }

    public function getScoreManquant(){
        $user = DB::table('classement')->where('pseudo',Auth::user()->pseudo)->first();
        $score = $user->score;

        if($score >= 100000){
            echo "<div class='rang'> Rang maximal atteint </div>";
        }

        else if($score >= ($tonscore = 90000)){
            $nextgrade = 100000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Colonel dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 80000){
            $nextgrade = 90000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Lt.Colonel dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 70000){
            $nextgrade = 80000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Commandant dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 60000){
            $nextgrade = 70000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Capitaine dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 50000){
            $nextgrade = 60000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Lieutenant dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 40000){
            $nextgrade = 50000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Sous Lieutenant dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 30000){
            $nextgrade = 40000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Aspirant dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 20000){
            $nextgrade = 30000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Major dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 10000){
            $nextgrade = 20000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Adjudant Chef dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 5000){
            $nextgrade = 10000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Adjudant dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 1000){
            $nextgrade = 5000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Sergent Chef dans : ".$scoremanquant." points</div>";
        }

        else if($score >= 0){
            $nextgrade = 1000;
            $scoremanquant = ($nextgrade - $score);
            echo "<div class='rang'> Sergent Major dans : ".$scoremanquant." points</div>";
        }

        else{

        }

    }

}
